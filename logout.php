  /* Page Created by Mean Machine
All CopyRights reserved,any attempt of editing will be breached.
By Manish and Ashwin*/
<h1><strong>Indian Election Commissson Voting Poll</strong></h1>
<?php
if(isset($_POST['submit']))
header('Location: '.'firstpage.php');
?>
<html>
<h2>You have already Registered...You Cannot Vote again...THANK YOU !! Please Log Out.<br></h2></html>
<form action="logout.php" method="POST">
<input type="submit" name="submit" value="Log Out">
</form>