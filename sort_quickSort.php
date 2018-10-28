<?php
//快速排序，以最右边的为基准这里是6，把小于6的排到左边去，把大于6的排到右边去
//********************基准的位置是永远不会变的 *********************所以先排所有基准左边的，再调用一次sortArr 排所有基准右边的。使用时注意要在sortArr里写上索引位置

$arr = [4, 2, 9, 8, 3, 6];
//$arr = [6, 1, 2, 7, 9, 3, 4, 5, 10, 8];//测试数据
//$arr = [4, 2, 1, 8, 3, 6];//测试数据
//$arr = [9, 5, 11];//测试数据 保证可能出现基准的某一边没有值得情况
//$arr = [4, 2, 1];//测试数据
/*
4  2  9  8    3  6
4  2  3  8    9  6
4  2  3  [6]  9  8
*/

function sortArr($arr, $start, $end, $sortLeft = true) {
	if(($end - $start) > 0) {
		$base = $arr[$end];
		$i = 0; $j = $end - 1;
		
		$baseIndex = 0;
		while($j > $i) {
			while($arr[$i] < $base) {
				$i++;
			}
			while($arr[$j] > $base) {
				$j--;
			}
			if($j > $i) {//正常交换
				$tmp = $arr[$j];
				$arr[$j] = $arr[$i];
				$arr[$i] = $tmp;
			} else {//交叉了，左手的数与基准的值交换
				$arr[$end] = $arr[$i];
				$arr[$i] = $base;
				$baseIndex = $i;
			}
		}
		
		//4  2  3  [6]  9  8
		$leftValue = array_slice($arr, 0, $baseIndex);
		$rightValue = array_slice($arr, count($leftValue) + 1, $end - count($leftValue));//用leftValue的关系来表示

		if($sortLeft) {//排所有基准左边的
			if(count($leftValue) > 1) {//每轮里基准左边的都排序好了，但是每轮里基准右边的还没有排
				return sortArr($arr, 0, $baseIndex - 1, true);
			}
		}else {//排所有基准右边的
			if(count($rightValue) > 1) {
				return sortArr($arr, $baseIndex + 1, $end, false);
			}
		}
	}
	return $arr;
	
}

//step1. 先排所有基准左边的
$result = sortArr($arr, 0, 5, true);//用start end来取数组的好处就是，类似在递归里传了整个的arr过去，让他们感觉是同一个arr，有点使用引用的感觉（同一个变量）
//step2. 再排所有基准右边的
$result = sortArr($result, 0, 5, false);
var_dump($result);

