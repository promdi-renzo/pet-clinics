<?php
require_once('./includes/db-config.php');
$filename = 'backup.sql';
$handle = fopen($filename, "r+");
$contents = fread($handle, filesize($filename));
$sql = explode(';', $contents);
foreach ($sql as $query) {
    $result = mysqli_query($mysqli, $query);
    if ($result) {
        echo '<tr><td><br></td></tr>';
        echo '<tr><td>' . $query . ' <b>SUCCESS</b></td></tr>';
        echo '<tr><td><br></td></tr>';
    }
}
fclose($handle);
echo nl2br("\n");
header("Location:home.php");
