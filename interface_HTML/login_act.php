<?php
//SESSION開始
session_start();

//POST値
$lid = $_POST["lid"]; //ID
$lpw = $_POST["lpw"]; //パスワード

//1. DB接続
require_once('funcs.php');
$pdo = db_conn();

//2. データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM users_id_table WHERE lid = :lid AND lpw = :lpw");
$stmt->bindValue(':lid',$lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw',$lpw, PDO::PARAM_STR); //* Hash化する場合はコメントする
$status = $stmt->execute();

//3. SQL実行時にエラーがある場合STOP
if($status==false){
  sql_error($stmt);
}

//4. 抽出データ数を取得
$val = $stmt->fetch();         //1レコードだけ取得する方法
//$count = $stmt->fetchColumn(); //SELECT COUNT(*)で使用可能()

//5. 該当レコードがあればSESSIONに値を代入
//* if(password_verify($lpw, $val["lpw"])){
if( $val['id'] != "" ){ // !=で「~で無ければ」という意味。対義は == 。
  //Login成功時
  $_SESSION['chk_ssid']  = session_id(); //SESSION変数にidを保存
  $_SESSION['kanri_flg'] = $val['kanri_flg']; //SESSION変数に管理者権限のflagを保存
  $_SESSION['name']      = $val['name']; //SESSION変数にnameを保存
  redirect('login_success.php'); //ここは後で修正！！！！！！！！！！！！！
}else{
  //Login失敗時(Logout経由)
  redirect('login_fail.php');
}

exit();


