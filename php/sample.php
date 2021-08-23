<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <title>PHPテスト</title>
</head>

<body>

  <p>PHPのテストです。</p>

  <p>
    <!-- 変数の章までやったから、条件分岐からやれ -->
    <?php
    $num1 = 1;
    $num2 = &$num1;
    print "$num1";
    print "$num2";
    $num1 = 2;

    print "$num1";
    print "$num2";
    ?>
  </p>

</body>

</html>
100 == '100'