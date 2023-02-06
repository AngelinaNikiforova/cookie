<?php

setcookie ("test", "", time() - 60*60*24);

echo "<h1>Cookie 'test' видалена</h1>";

?>

<a href="index.php">Back</a>