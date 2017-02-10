<?php
  echo "views폴더 안에 있는 clac.blade.php 이다. <br>";
?>
  @if($num > 5)
  <p> {{$num}} 은/는 5보다 크다. </p>

  @elseif($num == 5)
  <p> {{$num}} 은/는 5와 같다. </p>

  @else
  <p> {{$num}} 은/는 5보다 작다. </p>

@endif
