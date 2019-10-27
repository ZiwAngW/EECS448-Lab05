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
  $post=$_POST["post"];

}
if(!empty($post))
{

  $sql="select user_id from User where user_id='$username'";


  if($result=$conn->query($sql))
  {

    if($row=$result->fetch_assoc())
    {

      $sql="insert into Post(content,author_id)value('$post','$username')";
      if($result=$conn->query($sql))
      {
        echo "Post saved !";  
      }
        $result->free();
    }
    else {
      echo "Error: User ".$username." is not exist.";
    }

  }

}
else {
  echo "Error: Your Post cannot be empty!";
}

$conn->close();
?>
