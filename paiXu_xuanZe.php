<?php
//从小到大排序
//选择排序，选出最小数与第一个位置的数交换。
//然后在剩下的数当中再找最小的与第二个位置的数交换，如此循环到倒数第二个数和最后一个数比较为止
$arr = array(6, 3, 8, 2, 9, 1);

for($i = 0; $i < count($arr) - 1 ; $i++) {
	$thisMin = $arr[$i];
	$needChange = $i;
	for($j = $i + 1; $j <= count($arr) - 1; $j++) {
		//echo $i. '--'.$j."<br>";//查看每一轮与哪些数进行比较
		if($arr[$j] < $thisMin) {
			$thisMin = $arr[$j];
			$needChange = $j;
		}
	}
	
	if($i != $needChange) {
		$tmp = $arr[$needChange];
		$arr[$needChange] = $arr[$i];
		$arr[$i] = $tmp;
	}
	
}

echo "<pre>";
var_dump($arr);