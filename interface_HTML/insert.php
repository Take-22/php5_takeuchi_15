<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
  <!-- css -->
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <!-- chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <title>SQL register</title>
</head>
<body>
<!-- Head[Start] -->
  <header>
    <p id="login" class="flex-itme"><a href="login.php">ログイン（個人勤務実績を見る）</a></p>
    <p id="title" class="flex-itme"><a href="index.php">食糧本部 座席表</a></p>
    <p id="today" class="flex-itme"></p>
  </header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="insert_act.php">
  <select name="dept" id="dept" required>
    <option disabled selected value></option>
    <option value="穀物飼料部">穀物飼料部</option>
    <option value="製粉製糖部">製粉製糖部</option>
    <option value="戦略企画室">戦略企画室</option>
  </select>
  <select name="team" id="team">
    <option disabled selected value></option>
    <option value="飼料チーム">飼料チーム</option>
    <option value="コーンマイロチーム">コーンマイロチーム</option>
    <option value="麦チーム">麦チーム</option>
    <option value="オイルシードチーム">オイルシードチーム</option>
    <option value="営業チーム">営業チーム</option>
    <option value="事業戦略チーム">事業戦略チーム</option>
    <option value=""></option>
  </select>
  <label>名前：<input type="text" name="name" required></label>
  <select name="status" required>
    <option disabled selected value></option>
    <option value="オフィス出勤">オフィス出勤</option>
    <option value="テレワーク">テレワーク</option>
    <option value="退勤">退勤</option>
  </select>
  <input type="submit" value="送信">
</form>
<!-- Main[End] -->

  <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="./js/jquery-2.1.3.min.js"></script>
  <!-- js -->
  <script src="./js/datetime.js"></script>
  
</body>
</html>
