<?php

pc_permute(array(1, 2, 3), [4]);
//pc_permute(array(1, 2, 3, 4));

function pc_permute($items, $perms = array()) {
    //var_dump($items);
	//var_dump($perms);
	//echo '######################'."\n"; 
	
    if(empty($items)) { 
        print join(' ', $perms) . "\n";//有点多层嵌套for的感觉，先弹出3 变成([1,2], [3,4]) => ([1],[2,3,4]) => ([],[1,2,3,4])  => 返回到([1,2], [3,4]) 弹出1  变成([2],[1,3,4]) => ([],[2,1,3,4])。
    }else {
        for ($i = count($items) - 1; $i >= 0; --$i) {
			$newitems = $items;
			$newperms = $perms;

			list($foo) = array_splice($newitems, $i, 1);


			array_unshift($newperms, $foo);//array_unshift($a, "blue");//blue 插入到$a最前面去
			pc_permute($newitems, $newperms);
         }
    }
}

