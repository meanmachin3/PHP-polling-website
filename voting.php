/* Page Created by Mean Machine
All CopyRights reserved,any attempt of editing will be breached.
By Manish and Ashwin*/

<h1><strong>Indian Election Commissson Voting Poll</strong></h1>
<?php
session_start();

$_SESSION['count']=1;
echo 'Registration Successfull...';
echo ' Welcome to voting  site';
if(isset($_POST['submit'])&&($_SESSION['count']==1)){

   $_SESSION['radio_value']=$_POST['option'];
   header('Location: '.'finished_voting.php');
}
else {
echo  "You cannot Vote more than once ...Please go to Registration page ..Thank you .";
}

?>

<html>
   <link rel="stylesheet" type="text/css" href="style.css">
      <h4>According to you,Who can be the next PM of India?Please Cast your Vote </h4>
      <p>
      <form action='voting.php' method='POST'>
            <table>
                   <tr>
                       <td>
                       <input type='radio' name='option' value='sp'>
                       </td>

                       <td>
                       <h7>Sharad Pawar</h7>
                       </td>
                   </tr>
                   <tr>
                       <td>
                       <input type='radio' name='option' value='ms'>
                       </td>
                       <td>
                       <h7>Manmohan Singh</h7>
                       </td>
                   </tr><tr>
                       <td>
                       <input type='radio' name='option' value='rg'>
                       </td>
                       <td>
                       <h7>Rahul Gandhi</h7>
                       </td>
                   </tr>
                   <tr>
                       <td>
                       <input type='radio' name='option' value='ak'>
                       </td>
                       <td>
                       <h7>Arvind Kejriwal</h7>
                       </td>
                   </tr>
                   </table>
                   </p>
                   <p>
                   <input type='submit' name='submit' value='Vote'>
                   </p>
      </form>
</html>