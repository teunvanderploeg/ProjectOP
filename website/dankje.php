<html>
<body>
<style>
body{
    background-color: white;
    text-align: center;
    font-size: 4em;
    padding-top: 3em;
    font-family: Arial
}
</style>

<?php 
 echo "Dankje ";
 echo $_GET["naam"];
 echo " ";
 echo "voor het invulen van dit formulier.";
 echo "<br>";
 echo "<br>";
 echo "Naam: ";
 echo $_GET["naam"];
 echo "<br>";
 echo "Email: ";
 echo $_GET["email"]; 
 echo "<br>";
 echo "Leeftijd: ";
 echo $_GET["leeftijd"];
 ?>

<br>
<br>
<br>
<a href="index.html">Back</a>

</body>
</html> 