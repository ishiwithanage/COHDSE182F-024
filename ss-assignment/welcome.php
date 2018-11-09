<?php
session_start();
echo"<font size='4' color='purple'>";
echo "<br/>hellow,".$_SESSION["user"]."<br/><br/>";
echo"</font>";
if(isset($_SESSION["user"]) && time()-$_SESSION["accesstime"]<=10)
{             
echo"<center><h1>Welcome To The STAR INTERNATIIONAL</h1><center><br/>";
echo"                                 
 <p>
STAR INTERNATIONAL established in 2003.In the scope of
manufuturing,treding and engineering services.
Under engineering we services in the segements of electrical machanical and civil engeneering.
Under treding we do import any goods ecoding to the customer reqrement withing local legale frame.
Services and treading gods can be viwe in products.
</p>";
}
else{header("location:index.php");}
?>