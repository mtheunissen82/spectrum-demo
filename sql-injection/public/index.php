<?php

echo "Welkom bij Marcs funky webshop<br>";

$dsn = 'mysql:dbname=hackme;host=mysql-sql-injection-db';
$user = 'hackme';
$password = 'hackme';

try {
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$sql = 'SELECT * FROM products';

if (isset($_REQUEST['query'])) {
    $sql .= " WHERE name='" . $_REQUEST['query'] . "'";
}

echo "<pre>";
print_r($sql);
echo "</pre><br>";

foreach ($db->query($sql) as $row) {
    print $row['name'] . "\t";
    print $row['price'] . "\t";
    echo "<br>";
}

?>
<form method="GET">
 <input type="text" name="query" value="<?php echo isset($_REQUEST['query']) ? $_REQUEST['query'] : ''; ?>">
 <button>Zoek</button>
</form>
