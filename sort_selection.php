<?php
//��С��������
//ѡ������ѡ����С�����һ��λ�õ���������
//Ȼ����ʣ�µ�������������С����ڶ���λ�õ������������ѭ���������ڶ����������һ�����Ƚ�Ϊֹ
$arr = array(6, 3, 8, 2, 9, 1);

for($i = 0; $i < count($arr) - 1 ; $i++) {
	$thisMin = $arr[$i];
	$needChange = $i;
	for($j = $i + 1; $j <= count($arr) - 1; $j++) {
		//echo $i. '--'.$j."<br>";//�鿴ÿһ������Щ�����бȽ�
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