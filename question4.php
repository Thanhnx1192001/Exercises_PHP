<!-- 4.  Cho 1 mảng [1,3,2,7,5,10,25, 4,6], 
viết chương trình PHP để tìm và in ra phần tử lớn nhất trong một mảng. -->
<?php
$arr= array(1,3,2,7,5,10,25,4,6);
$temp=$arr[0];
for ($x = 1; $x < count($arr); $x++){
    if($arr[$x] > $temp){
        $temp = $arr[$x];
    }
}
echo $temp;
?>