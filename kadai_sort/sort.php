<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
<p>
  <?php
  $order = '昇順にソートします';

  echo $order . '<br>';

  if ($order === '昇順にソートします') {
    $nums = [15, 4, 18, 23, 10];
    sort($nums);
    foreach ($nums as $num) {
    echo $num . "\n" . '<br>';
    }
  }

  $order = '降順にソートします';

  echo $order . '<br>';

  if ($order === '降順にソートします') {
    $nums = [15, 4, 18, 23, 10];
    rsort($nums);
    foreach ($nums as $num) {
        echo $num . "\n".'<br>';
    }
  }
  ?>
</P>
</body>

</html>
