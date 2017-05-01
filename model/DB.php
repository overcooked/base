<?php
/**
 * The DB class is used to create a connection
 * to the a database and perform queries on it.
 * @author Team Point.
 * @version 2.0
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
   * Checks if instance of database exists, if
   * not create a new instance of the database.
   * @return DB - Instance of the DB object.
   */
  public static function getInstance() {
    if (!isset(self::$_instance)) {
      self::$_instance = new DB();
    }

    return self::$_instance;
  }

  /**
   * Makes a query given the SQL command and arguments.
   * @param  String $sql    - SQL statements to make on database.
   * @param  array  $params - The parameters or values to include in query.
   * @return DB             - Returns the DB object itself.
   */
  public function query($sql, $params = array()) {

    // Escape the SQL query to ensure its secure.
    $sql = escape($sql);

    // Prepare the SQL query and check if it was valid.
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
        // Save all of the returned rows into the results array.
        $this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);

        // Save the number of rows returned.
        $this->_count = $this->_query->rowCount();
      } else {
        // If query failed, set true.
        $this->_error = true;
      }

    }

    // Return the DB object itself.
    return $this;
  }

  /**
   * Action on the database including WHERE clause.
   * @param  String $action - The action or SQL clause. (Ex. SELECT)
   * @param  String $table  - The table you want to make an action on.
   * @param  array  $where  - The WHERE clause and its parameters.
   * @return boolean/DB     - False failed action, DB object if successful action.
   */
  public function action($action, $table, $where = array()) {

    // Check if the action has the right amount of values.
    if(count($where) === 3) {
      $operators = array('=', '>', '<', '>=', '<=');

      // Get the field, operator, and value of the query action. (email = 'hello@test.ca')
      $field = $where[0];
      $operator = $where[1];
      $value = $where[2];

      // If operator is in the valid operators array.
      if (in_array($operator, $operators)) {

        // Build the SQL query to be executed.
        $sql = "{$action} FROM {$table} WHERE {$field} {$operator} ?";

        // If the query was successful, return true.
        if (!$this->query($sql, array($value))->error()) {
          return $this;
        }
      }
    }

    // The action failed so return false.
    return false;
  }

  /**
   * Inserts a row into a database.
   * @param  String $table  - The table name to be inserted into.
   * @param  array  $fields - The fields and values to be inserted.
   * @return boolean        - True if successful insert, false if not.
   */
  public function insert($table, $fields = array()) {

    // Gets just the fields to be inserted.
    $keys = array_keys($fields);

    // Local variables used in the building of the value clause.
    $values = '';
    $x = 1;

    // Build the value clause.
    foreach($fields as $field) {
      $values .= "?";
      if ($x < count($fields)) {
        $values .= ', ';
      }
      $x++;
    }

    // Build the SQL query to be executed.
    $sql = "INSERT INTO {$table} (`" . implode('`, `', $keys) . "`) VALUES ({$values})";

    // If the query was successful, return true.
    if (!$this->query($sql, $fields)->error()) {
      return true;
    }

    // The insert failed so return false.
    return false;
  }

  /**
   * Update a table given a user ID.
   * TODO: Change to update given some other value.
   * @param  String $table   - The table where the value will be updated.
   * @param  int    $user_id - The id of the row to be updated.
   * @param  array  $fields  - The fields and values to be updated.
   * @return boolean         - True if update was successful, false if not.
   */
  public function update($table, $user_id, $fields) {
    $set = '';
    $x = 1;

    // Loop through and count/add the amount of fields to be updated.
    foreach($fields as $name => $value) {
      $set .= "{$name} = ?";

      // Add a comma to the end of the string.
      if ($x < count($fields)) {
        $set .= ', ';
      }
      $x++;
    }

    // Build the SQL query to be executed.
    $sql = "UPDATE {$table} SET {$set} WHERE user_id = {$user_id}";

    // If the query was successful, return true.
    if (!$this->query($sql, $fields)->error()) {
      return true;
    }

    // The update failed so return false.
    return false;
  }

  /**
   * Returns the result of the previous query.
   * @return array - The previous queries results.
   */
  public function results() {
    return $this->_results;
  }

  /**
   * Gets all rows that match a where given clause.
   * @param  String $table - The table name.
   * @param  array  $where - The where containing its fields and values.
   * @return boolean       - True if get was successful, false if not.
   */
  public function get($table, $where) {
    return $this->action('SELECT *', $table, $where);
  }

  /**
   * Deletes all rows that match a where clause.
   * @param  String $table - The table name.
   * @param  array  $where - The where containing its fields and values.
   * @return boolean       - True if get was successful, false if not.
   */
  public function delete($table, $where) {
    return $this->action('DELETE', $table, $where);
  }

  /**
   * Returns whether previous query was successful.
   * @return boolean - True if a query failed, false if not.
   */
  public function error() {
    return $this->_error;
  }

  /**
   * Returns the number of rows returned from previous query.
   * @return int - The number of rows returned from the query.
   */
  public function count() {
    return $this->_count;
  }

  /**
   * Returns the first row returned from a query.
   * @return array - The first row returned from a query.
   */
  public function first() {
    return $this->results()[0];
  }
}

?>
