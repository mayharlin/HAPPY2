<?php 

$conn_string = "host=ec2-54-204-25-54.compute-1.amazonaws.com ";
$conn_string .= "port=5432 dbname=d3j0nm9qghk5i6 user=etbyqbciasiion password= 2VoBZqhhBM1drFQtYCfltP434T";
$dbconn = pg_connect($conn_string);

print_r($dbconn);





?>