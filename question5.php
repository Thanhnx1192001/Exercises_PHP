<!-- 5. Cho 1 mảng [1,3,2,7,5,10,25, 4], viết chương trình PHP để đảo ngược thứ tự của các phần tử trong một mảng.
Sau đó in thêm 1 output nữa là sắp xếp lại mảng theo thứ tự tăng hoặc giảm dần -->
<?php
$arr=array(1,3,2,7,5,10,25, 4);
$arr1=[];
for($x = count($arr)-1; $x >= 0; $x--){
    $arr1[]=$arr[$x];
} 
sort($arr);
print_r($arr);
?>