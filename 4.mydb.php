<?php
    error_reporting(0);//把警告訊息關掉
    #php要怎麼跟mysq1資料庫連結，有三個步驟
    #1. mysqli_connect，必須要設定ip(本地端為localhost)
    #   帳號、密碼、以及連結的資料庫(mydb)
    $conn = mysqli_connect("localhost","root","", "mydb");
    if (mysqli_connect_error($conn))//判斷
        die("資料庫連線錯誤");//符合條件執行

    mysqli_set_charset($conn, "utf8");//從Mysqli 數據庫連接User
    $result=mysqli_query($conn, "select * from user");
    while ($row=mysqli_fetch_array($result))//While是迴圈 
    {
        echo $row[id];//取得ID
        echo " ";//空格
        echo $row[pwd];//取得pwd
        echo "<br>";//換行
    }
?>