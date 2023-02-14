<!-- 2. Cho 1 chuỗi sau "1 5-th-3-6 4-zxx vb-10 7-#$%".
 - Tìm ra các số trong chuỗi , gán vào mảng và sắp xếp theo thứ tự giảm dần (gợi ý hàm explode của php) -->
 <?php
    $arr=[];
    $str = "1 5-th-3-6 4-zxx vb-10 7-#$%";
    $str = explode(' ',$str);
    for ($x = 0; $x < count($str); $x++){
        $str[$x] = explode('-',$str[$x]);
    }
    for ($x = 0; $x < count($str); $x++){
        for ($y = 0; $y < count($str[$x]); $y++){
            if(is_numeric($str[$x][$y])){
                $arr[] = (int)($str[$x][$y]); 
            }
        }
    }
    rsort($arr);
    print_r($arr);
?>