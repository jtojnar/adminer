<?php
$TABLE = $_GET["download"];
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=" . friendly_url("$TABLE-" . implode("_", $_GET["where"])) . "." . friendly_url($_GET["field"]));
echo $dbh->result($dbh->query("SELECT " . idf_escape($_GET["field"]) . " FROM " . idf_escape($TABLE) . " WHERE " . where($_GET) . " LIMIT 1"));
exit; // don't output footer
