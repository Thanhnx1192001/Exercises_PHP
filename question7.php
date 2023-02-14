<!-- 7. Cho 1 mảng [1,3,2,7,5,1,5,4,1,3], viết chương trình PHP để đếm số lần xuất 
hiện của một phần tử trong một mảng. (Bài tập này các em sẽ kiểm tra xem trong mảng có bao nhiêu phần tử không giống nhau và số lần lặp của phần tử đó là bao nhiêu. Ví dụ output sẽ là:
Có 6 phần tử độc lập 1 ,3 ,2 ,7 ,5 4
số 1 lặp 3
số 3 lặp 2 -->
<?php
$arr= array(1,3,2,7,5,1,5,4,1,3);
$arr1=[];
for ($x = 0; $x < count($arr); $x++){
    $arr1[$arr[$x]]++;
}
print_r($arr1);
?>
