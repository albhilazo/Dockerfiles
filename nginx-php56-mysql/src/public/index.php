<?php

$db = new \PDO('mysql:dbname=mydb;host=db;port=3306', 'root', '');
$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
$db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);

$statement = $db->prepare('SELECT * FROM users');
$statement->execute();

echo "<h1>Example table contents:</h1>";
echo "<pre>"; var_dump($statement->fetchAll()); echo "</pre>";

phpinfo();
