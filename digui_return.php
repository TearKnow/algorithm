<?php
    //去除字符串左边的1
    $str = '1111abcefg';
    function sub($str){
        echo $str."\n";
        if(substr($str, 0, 1) == 1){
            return sub(substr($str, 1));//这里有return和没有return，他们在11行打印出来的1个数不同的
        }else{
            echo 'end----'.$str."\n";
        }
        echo 1;
    }
    
    sub($str);
    echo "\n";
