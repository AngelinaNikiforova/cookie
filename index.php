<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      setcookie("test", 123, time() + 60*60*24);  
      echo "<h2 name=\"test\">".$_COOKIE["test"]."</h2>";
    ?>
    <a name="remove" href="">Delete text
        <?php 
          setcookie ("test", "", time() - 60*60*24);
        ?>
    </a>
</br>
    <div>
        <?php
          setcookie("Visiting", 123, time() + 60*60*24);  
        ?>
        <h2>Ви відвідали наш сайт : </h2>
        <h2 name="n"></h2>
        <h2>разів</h2>
    </div>
    <div>
        <h3>Вкажіть вашу дату народження: </h3>
        <input type="date" name="date">
        <h2 name="message"></h2>
    </div>
</body>
</html>