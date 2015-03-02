/* Page Created by Mean Machine
All CopyRights reserved,any attempt of editing will be breached.
By Manish and Ashwin*/


<h1><strong>Indian Election Commissson Voting Poll</strong></h1>
<?php
        $fullname = $_POST['name'];
         $userName = $_POST['user'];
         $email = $_POST['email'];
        $password = $_POST['pass'];
if($fullname=='Ashwin'&&$userName=='admin'&&$email=='aik1313'&&$password=='aik1313')  //admin password will contain the md5 of the value if we want robust security.
        header('Location: '.'admin.php');
        else {
 $hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'polldatabase';
        $connect = mysql_connect($hostname, $username, $password) or die();
	mysql_select_db($dbname);

function NewUser()
{
           $hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'polldatabase';
        $connect = mysql_connect($hostname, $username, $password) or die();
	mysql_select_db($dbname);
          $fullname = $_POST['name'];
         $userName = $_POST['user'];
         $email = $_POST['email'];
        $password =  md5($_POST['pass']);
    $query = "INSERT INTO poll (id,fullname,username,email,pass) VALUES ('','$fullname','$userName','$email','$password')";
    $data = mysql_query ($query)or die(mysql_error());
    if($data)
    {
header('Location: '.'voting.php');
    }
}

function SignUp()
{
if(!empty($_POST['user']))
{
  $hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'polldatabase';
        $connect = mysql_connect($hostname, $username, $password) or die();
	mysql_select_db($dbname);
     $password=md5($_POST['pass']);
    $query = mysql_query("SELECT * FROM poll WHERE username = '$_POST[user]' AND pass = '$password' ") or die(mysql_error());

    if(!($row = mysql_fetch_array($query) ))
    {
        NewUser();
    }
    else
    {

      header('Location: '.'logout.php');
    }
}
}
if(isset($_POST['submit']))
{    if(isset( $_POST['name'],$_POST['user'],$_POST['email'], $_POST['pass'])&&!(empty($_POST['name'])||empty($_POST['user'])||empty($_POST['email'])||empty($_POST['pass']))){
SignUp();
} }           }
?>
