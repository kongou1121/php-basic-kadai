<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>課題005</title>
</head>

<body>
  <?php
  $scor1 = 80;
  $scor2 = 60;
  $scor3 = 55;
  $scor4 = 40;
  $scor5 = 100;
  $scor6 = 25;
  $scor7 = 80;
  $scor8 = 95;
  $scor9 = 30;
  $scor10 = 60;
  
  // 合計点を算出
  echo $scor1 + $scor2 + $scor3 + $scor4 + $scor5 + $scor6 + $scor7 + $scor8 + $scor9 + $scor10;

  echo '<br>';

  // 平均点を算出
  echo ($scor1 + $scor2 + $scor3 + $scor4 + $scor5 + $scor6 + $scor7 + $scor8 + $scor9 + $scor10) / 10;

  ?>
</body>

</html> 