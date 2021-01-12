<？php 
 session_start（）;
 $ conn = mysqli_connect（ “ localhost”， “ root”， “”， “ mydb”）;
    如果（mysqli_connect_error（$ conn））
      die（“無法連線資料庫”）;
    $ sql = “從公告中選擇*，其中bid = {$ _GET ['bid']}”” ;
    迴聲 $ sql ;
    $ result = mysqli_query（ $ conn， $ sql）;複製代碼
    $ row = mysqli_fetch_array（ $ result）;複製代碼
   
迴聲 “
<！DOCTYPE html>
<html>
<title>添加佈告</ title>
<meta name ='viewport'content ='width = device-width，initial-scale = 1'>
<link rel ='stylesheet'href ='https：//www.w3schools.com/w3css/4/w3.css'>
  <link rel ='stylesheet'href ='// code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'>
  <script src ='https：//code.jquery.com/jquery-1.12.4.js'> </ script>
  <script src ='https：//code.jquery.com/ui/1.12.1/jquery-ui.js'> </ script>
  <腳本>
  $（function（）{
    $（'#datepicker'）.datepicker（{dateFormat：'yy-mm-dd'}）;
  }）；
  </ script>
<身體>
<div class ='w3-card-4'>
  <div class ='w3-container w3-brown'>
    <h2>添加佈告</ h2>
  </ div>
  <form class ='w3-container'action ='bulletin_edit.php'method ='post'>
    <p>      
    <輸入類型=隱藏名稱=出價值= $行[出價]>
    <label class ='w3-text-brown'> <b>標題</ b> </ label>
    <input class ='w3-input w3-border w3-sand'name ='title'type ='text'value ='$ row [title]'> </ p>
    <p>      
    <label class ='w3-text-brown'> <b>內容</ b> </ label> <br>
    <textarea rows ='8'cols = '50'name ='content'class ='w3-input w3-border w3-sand'> $ row [content] </ textarea> 
    <p>
    <label class ='w3-text-brown'> <b>佈告類型</ b> </ label>
    <p>
    <input id ='boardtype'class ='w3-radio'name ='type'value ='1'“ ;
    if（$ row [ 'type' ] == 1）回顯 “ checked”；
    迴聲 “ type ='radio'>
    <label>系上公告</ label>
    <input id ='boardtype'class ='w3-radio'name ='type'value ='2'“ ;
    if（$ row [ 'type' ] == 2）回顯 “ checked” ;
    迴聲 “ type ='radio'>
    <label>招生訊息</ label>
    <input id ='boardtype'class ='w3-radio'name ='type'value ='3'“ ;
    if（$ row [ 'type' ] == 3）回顯 “ checked” ;
    迴聲 “ type ='radio'>
    <label>企業徵才</ label>
<p>      
    <label class ='w3-text-brown'> <b>發佈時間</ b> </ label>
    <input class ='w3-input w3-border w3-sand'name ='time'type ='text'id ='datepicker'value = $ row [time]> </ p>
    <p>      
    <button class ='w3-btn w3-brown'>發布</ button> </ p>
  </ form>
</ div>
</ body>
</ html>
“ ;
？>
