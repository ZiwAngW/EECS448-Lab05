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
$id=$_POST["delete"];
if(isset($id))
{
$sql="select *from User";
foreach($id as $deleteids)
{
    $command="delete from Post where author_id='$deleteids'";
    if($conn->query($command))
    {
        echo "Post from ".$deleteids." deleted successful !<br>";
    }
    else
    {
        echo "Error Unable to delete<br>";
    }
}
}
else
{
    echo "Error: No post to delete!<br>";
}

$conn->close();
?>