<?php

try {
    $db = new PDO("mysql:dbname=mydb;host=localhost", "root", "" );
} catch(PDOException $e) {
    echo $e->getMessage();
}


$table= "recette "; // cree la table
$columns = "ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY, recette  VARCHAR( 50 ) NOT NULL, description VARCHAR( 250 ) NOT NULL,
 ingrédients VARCHAR( 150 ) NOT NULL " ;


$createTable = $db->exec("CREATE TABLE IF NOT EXISTS mydb.$table ($columns)"); //query

if ($createTable)
{
    echo "Table $table - Created!<br /><br />";
}
else { echo "Table $table not successfully created! <br /><br />";
}
?>

