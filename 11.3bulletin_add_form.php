<！DOCTYPE html>
< html >
< title >添加佈告</ title >
< meta  name = “ viewport ”  content = “ width = device-width，initial-scale = 1 ” >
<鏈接 rel = “樣式表”  href = “ https://www.w3schools.com/w3css/4/w3.css ” >
  < link  rel = “ stylesheet ”  href = “ //code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css ” >
  <腳本 src = “ https://code.jquery.com/jquery-1.12.4.js ” > </腳本>
  <腳本 src = “ https://code.jquery.com/ui/1.12.1/jquery-ui.js ” > </腳本>
  <腳本>
  $（function（）{
    $（“ #datepicker ”）。datepicker（{ dateFormat：' yy-mm-dd ' }）;
  }）；
  </腳本>
<身體>
< div  class = “ w3-card-4 ” >
  < div  class = “ w3-容器w3-棕色” >
    < h2 >新增佈告</ h2 >
  </ div >
  < form  class = “ w3-container ”  action = “ bulletin_add.php ”  method = “ post ” >
    < p >      
    < label  class = “ w3-text-brown ” > < b >標題</ b > </ label >
    < input  class = “ w3-input w3-border w3-sand ”  name = “ title ”  type = “ text ” > </ p >
    < p >      
    <標籤 類= “ W3-文本褐色” > < b >內容</ b > </標籤> < BR >
    < textarea  rows = “ 4 ”  cols = “ 50 ”  name = “ content ” 類= “ w3-input w3-border w3-sand ” > </ textarea >
    < p >
    < label  class = “ w3-text-brown ” > < b >佈告類型</ b > </ label >
    < p >
    <輸入 id = “ boardtype ”  class = “ w3-radio ”  name = “類型”  value = “ 1 ”已 選中= “ ”  type = “ radio ” >
    < label >系上公告</ label >
        <輸入 id = “ boardtype ”  class = “ w3-radio ”  name = “類型”  value = “ 2 ”  type = “ radio ” >
    <標籤>招生訊息</標籤>
        <輸入 id = “ boardtype ”  class = “ w3-radio ”  name = “類型”  value = “ 3 ”  type = “ radio ” >
    < label >企業徵才</ label >
< p >      
    < label  class = “ w3-text-brown ” > < b >發佈時間</ b > </ label >
    < input  class = “ w3-input w3-border w3-sand ”  name = “ time ”  type = “ text ”   id = “ datepicker ” > </ p >
    < p >      
    < button  class = “ w3-btn w3-brown ” >發布</ button > </ p >
  </表單>
</ div >
</ body >
</ html >
