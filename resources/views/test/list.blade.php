<?php
  echo "list.blade.php 이다.<br><br>";
?>

  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>



      @foreach($tasks as $t)
        <div>
          할일: {{$t['name']}},  기한: {{$t['due_date']}}
        </div>
      @endforeach

      <hr>



      @for($i=0; $i < count($tasks); $i++)
      <div>
        으아아아 {{$t['name']}},  흐아아아: {{$t['due_date']}}
      </div>

      @endfor
    </body>
  </html>
