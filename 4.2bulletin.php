<？php
    error_reporting（0）;
    $ conn = mysqli_connect（ “ localhost”， “ root”， “”， “ mydb”）;
    $ result = mysqli_query（ $ conn， “從公告中選擇*”）；
    echo  “ <表邊框= 2> <tr> <td>佈告編號</ td> <td>佈告類別</ td> <td>標題</ td> <td>佈告內容</ td> <td>發布時間</ td> </ tr>”；
    while（$ row = mysqli_fetch_array（$ result））{
        迴聲 “ <tr> <td>” ;
        echo  $ row [bid];
        迴聲 “ </ td> <td>” ;
        echo  $ row [type];
        迴聲 “ </ td> <td>” ;
        echo  $ row [title];
        迴聲 “ </ td> <td>” ;
        echo  $ row [內容];
        迴聲 “ </ td> <td>” ;
        echo  $ row [time];
        迴聲 “ </ td> </ tr>” ;
    }
    迴聲 “ </ table>”
？>
