--TEST--
Connection option APP name unicode
--SKIPIF--
<?php require('skipif.inc'); ?>
--FILE--
<?php
require_once("MsCommon.inc");

$appName = "APP_PoP_银河";

// Connect
$conn = connect( "APP=$appName" );

// Query and Fetch
$query = "SELECT APP_NAME()";

$stmt = $conn->query( $query );
while ( $row = $stmt->fetch( PDO::FETCH_NUM )){
   echo $row[0]."\n";
}

$stmt = $conn->query( $query );
while ( $row = $stmt->fetch( PDO::FETCH_ASSOC )){
   echo $row['']."\n";
}

// Free the connection and statement
unset( $stmt );
unset( $conn );
echo "Done"
?>

--EXPECTREGEX--
APP_PoP_银河
APP_PoP_银河
Done