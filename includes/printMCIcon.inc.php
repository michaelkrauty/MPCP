<?php

function MCIconSmall($mcusername) {

  $image1 = "http://signaturecraft.us/avatars/30/face/" . $mcusername . ".png";
  $image2 = "http://signaturecraft.us/avatars/30/face/noskin.png";
  $md5image1 = md5(file_get_contents($image1));
  $md5image2 = md5(file_get_contents($image2));
  if($md5image1 == $md5image2){
  echo "<img src='http://signaturecraft.us/avatars/30/face/Herobrine.png' height='32' width='32'>";
  }else{
  echo "<img src='http://signaturecraft.us/avatars/30/face/" . $mcusername . ".png' height='32' width='32'>";
  }
}
function MCIconMedium($mcusername) {

  $image1 = "http://signaturecraft.us/avatars/30/face/" . $mcusername . ".png";
  $image2 = "http://signaturecraft.us/avatars/30/face/noskin.png";
  $md5image1 = md5(file_get_contents($image1));
  $md5image2 = md5(file_get_contents($image2));
  if($md5image1 == $md5image2){
  echo "<img src='http://signaturecraft.us/avatars/30/face/Herobrine.png' height='64' width='64'>";
  }else{
  echo "<img src='http://signaturecraft.us/avatars/30/face/" . $mcusername . ".png' height='64' width='64'>";
  }
}
function MCIconLarge($mcusername) {

  $image1 = "http://signaturecraft.us/avatars/30/face/" . $mcusername . ".png";
  $image2 = "http://signaturecraft.us/avatars/30/face/noskin.png";
  $md5image1 = md5(file_get_contents($image1));
  $md5image2 = md5(file_get_contents($image2));
  if($md5image1 == $md5image2){
  echo "<img src='http://signaturecraft.us/avatars/30/face/Herobrine.png' height='128' width='128'>";
  }else{
  echo "<img src='http://signaturecraft.us/avatars/30/face/" . $mcusername . ".png' height='128' width='128'>";
  }
}

?>
