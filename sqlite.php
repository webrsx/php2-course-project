<?php
$connection = new PDO('sqlite:' . __DIR__ . '/blog.sqlite');
$connection->exec(
"INSERT INTO table_name (first_name, last_namee) VALUES ('jenya', 'koshkin')"
);