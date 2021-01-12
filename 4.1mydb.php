<？php
    $ conn = mysqli_connect（ “ localhost”， “ root”， “”， “ mydb”）;
    
    $ result = mysqli_query（ $ conn， “從用戶選擇*”）;

    $ row = mysqli_fetch_array（ $ result）;複製代碼

    echo  $ row [id] + “” + $ row [pwd];
？>
