<?php
//���ַ�����Ҫ�������ź�˳����һ����������ĳ����������
//���Ӷ�ΪO(log2n)

$arr = [4, 7, 9,   10,   11, 18, 20];
$target = 12;

function findElement($arr, $target) {
	$low = 0;
	$high = count($arr) - 1;

	while($low <= $high) {
		$mid = intval(($low + $high) / 2);//ż����ʱ��mid���м俿���Ǹ�����������������м��Ǹ�����������!�Ǹ���
		/*
		|||  !||        6����
		||  !|			4����
		|||  !  |||		7����
		||  !  ||		5����
		*/
		
		if($arr[$mid] == $target) {
			return true;
		}
		
		// ����ĳ��������������high�ı�С����low�ı������������ļ�1�ͼ�1
		if($arr[$mid] > $target) {//��Ȼ�������ҵ��Ǹ�ֵ�����Ҵ����ҵ��Ǹ�ֵ��˵���϶������ˣ������ų���
			$high = $mid - 1;
		}else {
			$low = $mid + 1;
		}
	}
	return false;
}

$result = findElement($arr, $target);
var_dump($result);
