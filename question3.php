<!-- 3. Cho 1 chuỗi "Xin Chao JVB Viet Nam" 
Viết chương trình PHP để in ra chuỗi nghịch đảo của 
một chuỗi đã cho.
Ví dụ output : Nam Viet JVB Chao Xin -->
<?php
    $str ="Xin Chao JVB Viet Nam";
    $str = explode(' ',$str);
    for ($x = count($str)-1; $x >= 0; $x--){
        echo "$str[$x] ";    
    }
?>