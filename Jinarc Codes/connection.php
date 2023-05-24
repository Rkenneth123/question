<?php
$con=mysqli_connect("localhost", "root", "", "question");
if(mysqli_connect_errno())
{
echo "Connection Fail".mysqli_connect_error();
}
?>