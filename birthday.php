<?php

if(isset($_GET["submit"])){

    setcookie("birthday", $_GET["date"], time() + 60*60*240);
    
    echo "<h1>Ваш день народження: </h1>";
    echo "<h1>".$_COOKIE["birthday"]."</h1>"; 

    echo "<h1>День народження збережено, поверніться назад</h1>";
}

?>
<a href="index.php">Back</a>