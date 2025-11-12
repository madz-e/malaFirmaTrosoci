<?php
$db = connectDatabase();

$createTableQuery = <<<SQL
CREATE TABLE IF NOT EXISTS expenses (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    amount INTEGER NOT NULL,
    type VARCHAR(255) NOT NULL
);
SQL;

if ($db->exec($createTableQuery)) {
    echo "Table created";
} else {
    echo "Error creating table: " . $db->lastErrorMsg();
}

$db->close();