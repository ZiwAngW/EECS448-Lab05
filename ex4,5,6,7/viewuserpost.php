<?php

$user=$_POST['user2'];

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
$conmand1="select content from Post where author_id='$user'";
if($result=$conn->query($conmand1))
{

  echo "posts that ".$user." has are:";
  echo"<table>";
  while($row=$result->fetch_assoc())
  {

    echo "<tr><th>".$row["content"]."</th></tr>";

  }
    $result->free();
  echo"</table>";
}
?>
