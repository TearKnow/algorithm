<?php
//插入排序：像打扑克一样，每次把拿到的牌，依次按照顺序排好
$arr = [4, 1, 2, 9, 3, 6];

//数组中一开始只有一个元素4，然后4与1比较，组成一个有序的数组，每次都是有序的数组
for($i = 1; $i < count($arr); $i++) {
	$j = $i - 1;
	while($j >= 0 && $arr[$j] > $arr[$i]) {
		//举例 1  2  4  9  (3)怎么插入3
		//              $j  $i
		//     1  2  4  3   9
		//           $j $i
		//     1  2  3  4    9
		//因为9大于3，那么把9移动到原来3的位置，移动好后 12439，$i, $j各减一个，类似于3再与前面的4比较一次
		$insertValue = $arr[$i];
		$arr[$i] = $arr[$j];
		$arr[$j] = $insertValue;
		$j--;
		$i--;
	}
}

echo "<pre>";
var_dump($arr);

//可以参考 "在线算法动画" //http://tools.jb51.net/aideddesign/paixu_ys