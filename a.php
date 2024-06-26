#!/usr/bin/php
<?php 
  foreach(file('/usr/share/dict/words') as $line){
    // 改行文字を除去
    $line = trim($line);
    // 文字列 "abc" が含まれているかを strpos() でチェック
    if (strpos($line, 'abc') !== false) {
      // 文字列 "abc" が含まれる行を表示
      echo "$line\n";
    }
  } 
?>
