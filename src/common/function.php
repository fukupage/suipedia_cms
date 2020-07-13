<?php
//ルートを取得する
function getRoot(){
  return $_SERVER['DOCUMENT_ROOT'];
}

// URLのドメイン以降を取得する
function getRequestURL(){
  return $_SERVER["REQUEST_URI"];
}

function getDbh(){
  $dsn = 'mysql:dbname = suipedia_cms;host=http://localhost:8888/';
  $user = 'root';
  $pass = '';
  try{
    $dbh = new PDO($dsn, $user, $pass);
    if($dbh == null){
      p('接続失敗');
    } else {
      p('接続成功');
    }
    $dbh -> query('SET NAMES utf8mb4');
  } catch(PDOException $e){
    p('Error：'.$e->getMessage());
    p('データベースへの接続に失敗しました。');
    die();
  }
  return $dbh;
}
function p($str){
  print $str;
}
?>
