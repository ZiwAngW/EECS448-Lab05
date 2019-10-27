<?php
$server_name="mysql.eecs.ku.edu";
$username="z005w155";
$password="haCoh9ie";
$dbname="z005w155";
$conn=new mysqli($server_name,$username,$password,$dbname);
if($conn->connect_errno)
{
    echo"connect faill";
    exit();
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $username=$_POST["username"];
  /*$post=$_POST["post"];*/

}
if(!empty($username))
{
  $sql="insert into User(user_id)value('$username')";
  if($conn->query($sql)===TRUE)
  {
    echo "New record created successfully!";
  }
  else {
    echo "Error: Username already exsit!";
  }
}
else {
  echo "Error: Username cannot be empty!";
}

$conn->close();
?>
