<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>課題011</title>
</head>

<body>
  <?php
  // 連想配列を作成
  $onion_date = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

  // 値を出力
  foreach($onion_date as $key => $value){
    echo "{$key}:{$value}<br>";
  }
  ?>
</body>

</html>