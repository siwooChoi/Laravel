<?php
  echo "view.blade.php 이다.<br>";

  echo "할일 상세보기 이다<br>";
?>

  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
      <h1> 할 일 </h1>
      <p>해야할 일 {{ $task['name'] }}</p>
      <p>할일 기한 <?php print $task['due_date'] ?></p>
    </body>
  </html>
