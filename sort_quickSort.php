<?php
//�������������ұߵ�Ϊ��׼������6����С��6���ŵ����ȥ���Ѵ���6���ŵ��ұ�ȥ
//********************��׼��λ������Զ������ *********************�����������л�׼��ߵģ��ٵ���һ��sortArr �����л�׼�ұߵġ�ʹ��ʱע��Ҫ��sortArr��д������λ��

$arr = [4, 2, 9, 8, 3, 6];
//$arr = [6, 1, 2, 7, 9, 3, 4, 5, 10, 8];//��������
//$arr = [4, 2, 1, 8, 3, 6];//��������
//$arr = [9, 5, 11];//�������� ��֤���ܳ��ֻ�׼��ĳһ��û��ֵ�����
//$arr = [4, 2, 1];//��������
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
			if($j > $i) {//��������
				$tmp = $arr[$j];
				$arr[$j] = $arr[$i];
				$arr[$i] = $tmp;
			} else {//�����ˣ����ֵ������׼��ֵ����
				$arr[$end] = $arr[$i];
				$arr[$i] = $base;
				$baseIndex = $i;
			}
		}
		
		//4  2  3  [6]  9  8
		$leftValue = array_slice($arr, 0, $baseIndex);
		$rightValue = array_slice($arr, count($leftValue) + 1, $end - count($leftValue));//��leftValue�Ĺ�ϵ����ʾ

		if($sortLeft) {//�����л�׼��ߵ�
			if(count($leftValue) > 1) {//ÿ�����׼��ߵĶ�������ˣ�����ÿ�����׼�ұߵĻ�û����
				return sortArr($arr, 0, $baseIndex - 1, true);
			}
		}else {//�����л�׼�ұߵ�
			if(count($rightValue) > 1) {
				return sortArr($arr, $baseIndex + 1, $end, false);
			}
		}
	}
	return $arr;
	
}

//step1. �������л�׼��ߵ�
$result = sortArr($arr, 0, 5, true);//��start end��ȡ����ĺô����ǣ������ڵݹ��ﴫ��������arr��ȥ�������Ǹо���ͬһ��arr���е�ʹ�����õĸо���ͬһ��������
//step2. �������л�׼�ұߵ�
$result = sortArr($result, 0, 5, false);
var_dump($result);

