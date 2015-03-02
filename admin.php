  /* Page Created by Mean Machine
All CopyRights reserved,any attempt of editing will be breached.
By Manish and Ashwin*/
 <h1><strong>Indian Election Commissson Voting Poll</strong></h1>
<?php
 echo "Welcome Admin ,The results for the next PM of India is as Given Below: <br>";
   $hostname = 'localhost';
   $username = 'root';
   $password = '';
   $dbname = 'adminpolldatabase';
   $connect = mysql_connect($hostname, $username, $password) or die();
   mysql_select_db($dbname);
  $result = mysql_query("SELECT * FROM vote_result");
while($row = mysql_fetch_assoc($result))
  {
 $id=$row['id'];
 $cand_name=$row['candidate_name'];
 $vote=$row['vote_count'];
 echo "$id.$cand_name has got $vote votes.".'<br>';
  }
?>