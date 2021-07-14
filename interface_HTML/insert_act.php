<?php
//1. POSTデータ取得
$dept = $_POST["dept"];
$team = $_POST["team"];
$name = $_POST["name"];
$status = $_POST["status"];

//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO users_status_table(dept,team,name,status,indate)VALUES(:dept,:team,:name,:status,sysdate())");
$stmt->bindValue(':dept', $dept, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':team', $team, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':status', $status, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  sql_error($stmt);
}else{
  redirect("insert.php");
}
?>
