<!-- 6.  Cho 1 mảng [1,3,2,7,5,10,25, 4], viết chương trình PHP để tính tổng của các phần tử trong một mảng. Và cho biết tổng đó 
có phải là số nguyên tố hay không -->
<?php
$arr= array(1,3,2,7,5,10,25,4);
$temp=0;
for ($x = 0; $x < count($arr); $x++){
        $temp += $arr[$x];
}
echo $temp;

function isPrime($n) {
    if ($n < 2) {
        return false;
    }
    for($i = 2; $i <= sqrt ($n); $i ++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
echo (isPrime($temp));
?>