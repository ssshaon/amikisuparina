<?php
include_once 'Src/main.php';
$obj=new main();
$obj->setData($_POST);
$obj->store();
?>
<html>
 <header>
     <title>Ami Kisu Pari na</title>
 </header>
 <body>
 <form method="post">
     <table>
         <tr>
             <td>Your name:</td>
             <td><input type="text" name="name"> </td>

         </tr>
         <tr>
             <td>My Name:</td>
             <td><input type="text" name="name2"></td>
         </tr>
         <tr>
             <td>Email:</td>
             <td><input type="email" name="our_email"></td>
         </tr>
         <tr>
             <td><input type="submit" value="OK"></td>
         </tr>
     </table>
 </form>
 </body>
 </html>