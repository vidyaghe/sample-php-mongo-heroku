<?php
require_once("db.php");
class MongoTest extends PHPUnit_Framework_TestCase {
  public function test() {
    $db = new MongoDbConnection();
    $db->populate(1234);
    $this->assertEquals($db->getScore(), 1234);
  }
}
?>

