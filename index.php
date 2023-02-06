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
    <a name="remove" href="file.php">Delete test cookie</a>
</br></br>
    <div>
        <?php
          $n = $_COOKIE["Visiting"];
          setcookie("Visiting", $n + 1, time() + 60*60*24);  
        ?>
        <h2>Ви відвідали наш сайт : </h2>
        <?php
          echo "<h2>".$_COOKIE["Visiting"]."</h2>";
        ?>
        <h2>разів</h2>
    </div>
</br></br>
    <div>
        <h3>Вкажіть вашу дату народження: </h3>
        <form method="GET" action="birthday.php">
          <input type="date" name="date">
          <input type="submit" name="submit">
        </form>

        <?php
          $temp = stristr(date("c"),'T', true);

    $arrBr = explode('-', $_COOKIE["birthday"]);
    $arrNow = explode('-', date("c"));

    $month = $arrBr[1] - $arrNow[1];
    $day = $arrBr[2] - $arrNow[2];

    if($month == 0 && $day == 0) {
        echo "З днем народжуння!";
    }
    else if($month < 0 || $day < 0){
        $tempMonth = 12 - abs($month);
        //$tempDay = 
        echo "До дня народження залишилося: ".$tempMonth." м. ".$day." д. </br></br>";
    }
    else{
        echo "До дня народження залишилося: ".$month." м. ".$day." д. </br></br>";
    }       
      ?>
    </div>
</body>
</html>