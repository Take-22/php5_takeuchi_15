<?php
//SESSIONスタート
session_start();

//関数を呼び出す
require_once('funcs.php');

//ログインチェック
loginCheck();
$user_name = $_SESSION["name"];

//以下ログインユーザーのみ

$pdo = db_conn();
//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM users_status_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false) {
  sql_error($stmt);
}else{
  while( $r = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view .= '<p>';
    $view .= $r["id"]."|".$r["dept"]."|".$r["team"]."|".$r["status"]."|".$r["indate"];
    $view .= '</p>';
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
  <!-- css -->
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <title>個人勤務実績</title>
</head>
<body>
<!-- Head[Start] -->
  <header>
    <p id="login" class="flex-itme"><a href="logout.php">ログアウト（座席表に戻る）</a></p>
    <p id="title" class="flex-itme"><a href="index.php">食糧本部 座席表</a></p>
    <p id="today" class="flex-itme"></p>
  </header>
<!-- Head[End] -->

<!-- Main[Start] -->
  <div>
    <?= $view ?>
  </div=>
<!-- Main[End] -->

  <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="./js/jquery-2.1.3.min.js"></script>
  <!-- js -->
  <script src="./js/datetime.js"></script>
</body>
</html>
