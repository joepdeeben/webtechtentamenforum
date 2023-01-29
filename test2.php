<html>
<head>
</head>
<body>
<?php

// database gegevens zijn elders opgeslagen
include("dbh.inc.php");

$stmt = $db->query('SELECT * FROM User');
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
echo $row['id'].' '.$row['username'] . "<br />";
}

?>
</body>
</html>