<?php
class MongoDbConnection {
  public function __construct() {
    $mongoUrl = getenv("MONGOLAB_URI");
    $dbName = substr(parse_url($mongoUrl)["path"], 1);
    $this->mongo = new Mongo($mongoUrl);
    $this->scores = $this->mongo->{$dbName}->scores;
  }

  public function populate($score) {
    $this->scores->insert(array("score" => $score));
  }

  public function getScore() {
    return $this->scores->findOne()["score"];
  }
}
?>

