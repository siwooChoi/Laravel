<?php
  echo "alert.blade.php 이다.<br>";

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
      <p>할일 기한 {{ $task['due_date'] }}</p>

            <!--  alert창이 나온다   -->
      <p>코 멘 트  <?=$task['comment'] ?> </p>

      
            <!--  코드가 화면에 출력된다  -->
      <!-- <p>코 멘 트 {{ $task['comment'] }}</p> -->



    </body>
  </html>
