<?php
//二分法，需要数据先排好顺序，在一组数据中找某个数存在吗
//复杂度为O(log2n)

$arr = [4, 7, 9,   10,   11, 18, 20];
$target = 12;

function findElement($arr, $target) {
	$low = 0;
	$high = count($arr) - 1;

	while($low <= $high) {
		$mid = intval(($low + $high) / 2);//偶数个时，mid在中间靠右那个。如果奇数个，在中间那个，就是下面!那个数
		/*
		|||  !||        6个数
		||  !|			4个数
		|||  !  |||		7个数
		||  !  ||		5个数
		*/
		
		if($arr[$mid] == $target) {
			return true;
		}
		
		// 程序的出口在这里，尽量把high的变小，把low的变大，所以有下面的加1和减1
		if($arr[$mid] > $target) {//既然不等于找的那个值，而且大于找的那个值，说明肯定不是了，可以排除他
			$high = $mid - 1;
		}else {
			$low = $mid + 1;
		}
	}
	return false;
}

$result = findElement($arr, $target);
var_dump($result);
