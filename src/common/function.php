<?php
//ルートを取得する
function getRoot(){
  return $_SERVER['DOCUMENT_ROOT'];
}

// URLのドメイン以降を取得する
function getRequestURL(){
  return $_SERVER["REQUEST_URI"];
}
?>
