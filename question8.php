<!-- 1. Cho 1 chuỗi sau "1-th-3-4-zxxcvb-7-#$%".
 - Tìm ra các số trong chuỗi và tính tổng của 
 chúng (gợi ý hàm explode của php) -->
<?php
    $str = "1-th-3-4-zxxcvb-7-#$%";
    $str = explode('-',$str);
    $temp=0;
    for ($x = 0; $x < count($str); $x++){
        if(is_numeric($str[$x])){
            $temp += (int)($str[$x]); 
        }
    }
    echo $temp;
    echo "Hello"
?>