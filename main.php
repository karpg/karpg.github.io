<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Визитка</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@1,100&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="styles/style.css" rel="stylesheet" type="text/css">

</head> 
    <body>  
    <div class="header"><?php include("menu.php");?></div>
  
    <h1>Приветствую на моей странице</h1>
    <img src="images/td1.png" alt="Fight club">
    <p>Меня зовут <?php echo "$name $surname"?></p>

    <ul> <!-- changed to list in the tutorial -->
      <li><?php echo "$age"?></li>
      <li><?php echo "$city"?></li>
      <li><?php echo "$skill"?></li>
    </ul>
    <h2>Вот чему научились:</h2>
    <p><?php include("knowledge.php");?></p>

    <div class="header"><?php include("footer.php");?></div>
   <script src="scripts/main.js"></script>
  </body>
</html>
