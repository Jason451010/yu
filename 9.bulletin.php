<？php
session_start（）;

if（！isset（$ _SESSION [ 'id' ]））{    
   迴聲 “請登錄系統”；
   echo  “ <元http-equiv ='refresh'content ='3; url = login.html''>” ;
}其他{
      迴聲 “歡迎{$ _SESSION ['ID']}登入<a href=logout.php> [登出] </A>，點擊” ;
      $ conn = mysqli_connect（ “ localhost”， “ root”， “”， “ mydb”）;
      如果（mysqli_connect_error（$ conn））
         die（“連線資料庫錯誤”）;
      mysqli_set_charset（$ conn，“ utf8”）;  
      $ result = mysqli_query（ $ conn， “從公告中選擇*”）；
      迴聲 “ <表邊框= 1> <tr> <td>出價</ td> <td>佈告類型態</ td> <td>佈告標題</ td> <td>佈告內容</ td> <td>發布日期</ td> </ tr>”；
      while（$ row = mysqli_fetch_array（$ result））{
           迴聲 “ <tr> <td> $ row [bid] </ td> <td> $ row [type] </ td> <td> $ row [title] </ td> <td> $ row [content] < / td> <td> $ row [time] </ td> </ tr>“；
      }
      迴聲 “ </ table>” ;    
      






}

？>
