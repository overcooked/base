<?php
/**
  * The DB class is used to create a connection
  * to the a database.
  * @author Justin leung
  * @version 1.0
  */
class DB {

  /** The current instance of the database object. */
  private static $_instance = null;

  /** The PDO for the current connection. */
  private $_pdo;

  /** The code from the previous query. */
  private $_query;

  /** Whether an error occured on the previous query. */
  private $_error = false;

  /** The rows returns from the previous query. */
  private $_results;

  /** Number of rows returned from the previous query. */
  private $_count = 0;

  /**
    * Creates a new connection to the database.
    * @return void
    */
  private function __construct() {
    try {
      $this->_pdo = new PDO('mysql:host=' . Config::get('mysql/host') .
                            ';dbname=' . Config::get('mysql/db'),
                            Config::get('mysql/username'),
                            Config::get('mysql/password'));
    } catch(PDOException $e) {
      die($e->getMessage());
    }
  }

  /**
    * Checks if instance of database exists, if not
    * create a new instance of the database.
    * @return the instance of the DB object.
    */
  public static function getInstance() {
    if (!isset(self::$_instance)) {
      self::$_instance = new DB();
    }

    return self::$_instance;
  }

  /**
    * Makes a query given the SQL command and arguments.
    * @param sql - SQL statements to make on database.
    * @param params - The parameters or values to include in query.
    * @return the DB object.
    */
  public function query($sql, $params = array()) {
    $this->_error = false;

    if ($this->_query = $this->_pdo->prepare($sql)) {
      $x = 1;

      // Bind the parameters.
      if (count($params)) {
        foreach($params as $param) {
          $this->_query->bindValue($x, $param);
          $x++;
        }
      }

      // Execute the query, if successfuly save into results.
      if ($this->_query->execute()) {
        $this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ); // Save data into array
        $this->_count = $this->_query->rowCount(); // Save number of results or rows returned.
      } else {
        $this->_error = true; // If query failed, set true.
      }

    }

    return $this;
  }

  /**
    * Action on the database including WHERE clause.
    * @param action - The action or SQL clause. (Ex. SELECT)
    * @param table - The table you want to make an action on.
    * @param where - The WHERE clause and its parameters.
    * @return false if action failed, else returns DB object.
    */
  public function action($action, $table, $where = array()) {
    if(count($where) === 3) {
      $operators = array('=', '>', '<', '>=', '<=');

      $field = $where[0];
      $operator = $where[1];
      $value = $where[2];

      // If operator is in the valid operators array.
      if (in_array($operator, $operators)) {
        $sql = "{$action} FROM {$table} WHERE {$field} {$operator} ?";

        // Create the SQL query and if no error return that query.
        if (!$this->query($sql, array($value))->error()) {
          return $this;
        }
      }
    }

    return false;
  }

  /**
    * Inserts a row into a database.
    * @param table - The table to be inserted into.
    * @param fields - The fields and values to be inserted.
    * @return false if failed insert, true if successful.
    */
  public function insert($table, $fields = array()) {
    $keys = array_keys($fields); // Gets just the fields to be inserted.
    $values = '';
    $x = 1;

    foreach($fields as $field) {
      $values .= "?";
      if ($x < count($fields)) {
        $values .= ', ';
      }
      $x++;
    }

    $sql = "INSERT INTO {$table} (`" . implode('`, `', $keys) . "`) VALUES ({$values})";

    if (!$this->query($sql, $fields)->error()) {
      return true;
    }

    return false;
  }

  /**
    * Update a table given a user ID.
    * @TODO fix this limitation.
    *
    * @param table - The table where the value will be updated.
    * @param id - The id of the row to be updated.
    * @param fields - The fields and values to be updated.
    * @return false if update failed, true if updated successfully.
    */
  public function update($table, $id, $fields) {
    $set = '';
    $x = 1;

    foreach($fields as $name => $value) {
      $set .= "{$name} = ?";

      if ($x < count($fields)) {
        $set .= ', ';
      }
      $x++;
    }

    $sql = "UPDATE {$table} SET {$set} WHERE id = {$id}";

    if (!$this->query($sql, $fields)->error()) {
      return true;
    }

    return false;
  }

  /**
    * Returns the result of the previous query.
    * @return the previous queries results (rows).
    */
  public function results() {
    return $this->_results;
  }

  /**
    * Gets all rows that match a where clause.
    * @return false if failed, and a DB object if successful.
    */
  public function get($table, $where) {
    return $this->action('SELECT *', $table, $where);
  }

  /**
    * Deletes all rows that match a where clause.
    * @return false if failed, and a DB object if successful.
    */
  public function delete($table, $where) {
    return $this->action('DELETE', $table, $where);
  }

  /**
    * Returns whether previous query was successful.
    * @return the DB objects error variable.
    */
  public function error() {
    return $this->_error;
  }

  /**
    * Returns the number of rows returned from previous query.
    * @return the DB objects count variable.
    */
  public function count() {
    return $this->_count;
  }

  public function first() {
    return $this->results()[0];
  }
}

?>
