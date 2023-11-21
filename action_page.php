<?php

if (isset($_SERVER['HTTP_REFERER'])){
  $referer=$_SERVER['HTTP_REFERER'];
}else{
 $referer="https://darkpacket.ca/login.html";
}
header('Location: '.$referer);
die();