<?php
//XSS対応
function h($str){
  return htmlspecialchars($str, ENT_QUOTES);
}

//DB接続
function db_conn(){
  try {

    //local用DB
    $db_name = "mil-gsacademy_takeuchi";    //データベース名
    $db_id   = "root";      //アカウント名
    $db_pw   = "root";      //パスワード：XAMPPはパスワード無しに修正
    $db_host = "localhost"; //DBホスト

    // //さくらサーバー用DB (github公開時には削除！)
    // $db_name = "mil-gsacademy_takeuchi";    //データベース名
    // $db_id   = "mil-gsacademy";      //アカウント名
    // $db_pw   = "gsacademy2021";      //パスワード：XAMPPはパスワード無しに修正
    // $db_host = "mysql57.mil-gsacademy.sakura.ne.jp"; //DBホスト

    $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
    return $pdo;
  }catch(PDOException $e){
    exit('DB Connection Error:' . $e->getMessage());
  }
}

//SQLエラー
function sql_error($stmt){
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
}

//リダイレクト
function redirect($file_name){
    header("Location: ".$file_name);
    exit();
}

//ログインチェック
function loginCheck(){
  if( $_SESSION["chk_ssid"] != session_id() ){
    exit('LOGIN ERROR');
  }else{
    session_regenerate_id(true);
    $_SESSION['chk_ssid'] = session_id();
  }
}