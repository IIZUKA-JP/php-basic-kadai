<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
<p>
  <?php

  function sort_2way($order) {
    
    echo $order  . '<br>';
  
  if ($order === '昇順にソートします') {
    $nums = [15, 4, 18, 23, 10];
    sort($nums);
    foreach ($nums as $num) {
    echo $num . "\n" . '<br>';
    }
  }
  elseif ($order === "降順にソートします") {
    $nums = [15, 4, 18, 23, 10];
    rsort($nums);
    foreach ($nums as $num) {
        echo $num . "\n".'<br>';
     }
    }
  }

    echo sort_2way("昇順にソートします") . '<br>';
    echo sort_2way("降順にソートします") . '<br>';

  ?>
</P>
</body>

</html>
