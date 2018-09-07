<?php
function movie(){
  $url="https://api.themoviedb.org/3/movie/top_rated?api_key=0d2861372b5b46a514fa633fee10594f&language=en-US";
  //  Initiate curl
 $ch = curl_init();
 // Disable SSL verification
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 // Will return the response, if false it print the response
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 // Set the url
 curl_setopt($ch, CURLOPT_URL,$url);
 // Execute
 $result=curl_exec($ch);
 // Closing
 curl_close($ch);
 $data=json_decode($result, true);
  return $data;
}
function tv(){
  $url="https://api.themoviedb.org/3/tv/top_rated?api_key=0d2861372b5b46a514fa633fee10594f&language=en-US";
  //  Initiate curl
 $ch = curl_init();
 // Disable SSL verification
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 // Will return the response, if false it print the response
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 // Set the url
 curl_setopt($ch, CURLOPT_URL,$url);
 // Execute
 $result=curl_exec($ch);
 // Closing
 curl_close($ch);
 $tv=json_decode($result, true);
  return $tv;
}
function trend(){
  $url="https://api.themoviedb.org/3/trending/all/week?api_key=0d2861372b5b46a514fa633fee10594f&language=en-US";
  //  Initiate curl
 $ch = curl_init();
 // Disable SSL verification
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 // Will return the response, if false it print the response
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 // Set the url
 curl_setopt($ch, CURLOPT_URL,$url);
 // Execute
 $result=curl_exec($ch);
 // Closing
 curl_close($ch);
 $trend=json_decode($result, true);
  return $trend;
}
?>