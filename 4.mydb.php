<？php
    error_reporting（0）;
    
    $ conn = mysqli_connect（ “ localhost”， “ root”， “”， “ mydb”）;
    如果（mysqli_connect_error（$ conn））
        die（“資料庫連線錯誤”）;

    mysqli_set_charset（$ conn，“ utf8”）;
    $ result = mysqli_query（ $ conn， “從用戶選擇*”）;
    while（$ row = mysqli_fetch_array（$ result））{
        echo  $ row [id];
        迴聲 “ ;
        echo  $ row [pwd];
        迴聲 “ <br>”；
    }
？>
