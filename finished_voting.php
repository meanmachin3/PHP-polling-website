 /* Page Created by Mean Machine
All CopyRights reserved,any attempt of editing will be breached.
By Manish and Ashwin*/
<h1><strong>Indian Election Commissson Voting Poll</strong></h1>
<?php
session_start();
if($_SESSION['count']==1){
 $option=$_SESSION['radio_value'];
 $hostname = 'localhost';
 $username = 'root';
$password = '';
$dbname = 'adminpolldatabase';
$connect = mysql_connect($hostname, $username, $password) or die();
mysql_select_db($dbname);
if($option=='sp')
mysql_query("UPDATE vote_result SET vote_count=vote_count+1 WHERE id=1");
else if($option=='ms')
mysql_query("UPDATE vote_result SET vote_count=vote_count+1 WHERE id=2");
else if($option=='rg')
mysql_query("UPDATE vote_result SET vote_count=vote_count+1 WHERE id=3");
else if($option=='ak')
mysql_query("UPDATE vote_result SET vote_count=vote_count+1 WHERE id=4");
mysql_close();
$_SESSION['count']++;
}
else {
echo "You cannot Refresh more than once.";
$_SESSION['count']++;
}
?>
<html>
<h2>Voting Successfull...Thank You !! for casting your vote for next Prime Minister.Please Log Out.</h2></html>
<form action="finished_voting.php" method="POST">
<input type="submit" name="submit" value="Log Out">
</form>
<?php
if(isset($_POST['submit']))
header('Location: '.'firstpage.php');?>