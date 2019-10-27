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


  $sql="select *from User";
  echo"<table>";
  echo "<tr><th>Usernames: </th></tr>";
  if($result=$conn->query($sql))
  {

    while($row=$result->fetch_assoc())
    {
      echo "<tr><th>".$row["user_id"]."</th></tr>";
    }
  $result->free();

  }
  echo"</table>";


$conn->close();
?>
