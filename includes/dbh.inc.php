<?php
# move this configuration file out of the web server's range!!!
$dbconf = simplexml_load_file("/home/surja/phpproject/webtechtentamenforum/includes/verstopt/mysql_config_collegedb.xml");
if ($dbconf === FALSE) {
die("Error parsing XML file");
}
else {
    $db = mysqli_connect('localhost','joepd','BOSVJpbLRngcsJinhoZzsflhQvneHIbF','kithreads_deb');
    if (!$db) { die("Connection failed: " . mysqli_connect_error()); } echo "Connected successfully";
}
?>