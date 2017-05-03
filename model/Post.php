<?php
/**
 * The Post class is used to create a
 * new posting on the website.
 * @author Team Point.
 */
class Post {

  /** The DB instance used for the current post. */
  private $_db;

  /** The data the post has. (Title, Description, Location) */
  private $_data;

  /**
   * Constructor for the User class. Has ability to
   * get a post if passed in a valid post ID.
   * @param int $post_id - Post ID to get a specific post.
   */
  public function __construct($post_id = null) {

    // Save the current database instance.
    $this->_db = DB::getInstance();

    // Find the post if given an ID.
    if($post_id) {
      $this->find($post_id);
    }

  }

  /**
   * Finds a post based on a post ID.
   * @param  int $post_id - The user ID number.
   * @return boolean      - True if post is found, false if not.
   */
  public function find($post_id) {

    // Search for post in posts table.
    $data = $this->_db->get('posts', array('post_id', '=', $post_id));

    // If post exists, save data into current post object.
    if($data->count()) {
      $this->_data = $data->first();
      return true;
    }

    // If no post was found, return false.
    return false;
  }

  /**
   * Returns the posts data. (Title, Description, Location)
   * @return array - Containing current posts data.
   */
  public function data() {
    return $this->_data;
  }

  /**
   * Inserts a new post into the posts table,
   * and finds it to save the data.
   * @param  array  $fields - Posts information. (Title, Description, Location)
   * @throws Exception      - Throw exception if insertion failed.
   */
  public function create($fields = array(), $post_id) {
    if(!$this->_db->insert('posts', $fields) && $this->find($post_id)) {
      throw new Exception('There was a problem creating your new post.');
    }
  }

  /**
   * Inserts a new post image into post_image table.
   * @param  array  $fields - Posts Images information. (post_id, post_image_url)
   * @throws Exception      - Throw exception if insertion failed.
   */
  public function add_post_image($fields = array()) {
    if(!$this->_db->insert('post_image', $fields)) {
      throw new Exception('There was a uploading your post image.');
    }
  }

}
?>
