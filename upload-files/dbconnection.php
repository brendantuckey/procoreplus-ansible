<?php
$con=mysqli_connect("crm-db-instance.cvw4uck20ldd.us-east-1.rds.amazonaws.com", "admin", "abcd1234", "crm");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

?>
