
<?php
$name = $_REQUEST['txtName'];
$email = $_REQUEST['txtEmail'];
$con = mysqli_connect("localhost", "root","", "mydb") or die("Error Connection Database");
$q=mysqli_query($con, "insert into
employees(name,email) values
('$name','$email')");
if($q)
{
echo "Record inserted successfully";
}
else
{
echo mysqli_error($con);
?>