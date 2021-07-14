<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">    <!-- css -->
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <title>ログイン画面</title>
</head>

<body>
<!-- Head[Start] -->
  <header>
    <p id="login" class="flex-itme"><a href="index.php">ホーム（座席表に戻る）</a></p>
    <p id="title" class="flex-itme"><a href="index.php">食糧本部 座席表</a></p>
    <p id="today" class="flex-itme"></p>
  </header>
<!-- Head[End] -->

<!-- Main[Start] -->
  <form name="form1" action="login_act.php" method="post">
    ID:<input type="text" name="lid"/><br>
    PW:<input type="password" name="lpw"/><br>
    <input type="submit" value="login"/>
  </form>
<!-- Main[End] -->

  <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="./js/jquery-2.1.3.min.js"></script>
  <!-- js -->
  <script src="./js/datetime.js"></script>
</body>
</html>