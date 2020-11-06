<?php 
    if (($_GET[id] == "john") && ($_GET[pwd]=="john1234"))//判斷是否符合條件
        echo "Welcome";//符合條件就做這個
    else
        echo "fail login";//不符合條件就做這個
?>