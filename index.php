<?php
require_once("db.php");
$db = new MongoDbConnection();
$db->populate(1234);
$score = $db->getScore();
echo 'Hello world, ' . $score . '!';
?>
