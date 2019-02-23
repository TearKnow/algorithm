<?php
    
    /*方法1*/
    $string = "my name is jack";
    $new = '';
    while($string){
        $first = substr($string, 0, 1);
        $new = $first . $new;
        $string = substr($string, 1);
    }

    echo $new;
    echo "\n";
    
    /*方法2 使用递归。有点类似第一个是子，一级级往上找，找到最顶级。使用递归的原因就是，第一步第二步第三步都是类似的*/
    class A{
        public $result = '';
        
        public function rev($str){
            $this->result .= substr($str, -1, 1);
            if(strlen($str) == 1){
                return $this->result;
            }else{
                return $this->rev(substr($str, 0, -1));
            }
            
        }
    }

    $obj = new A();
    echo $obj->rev("what is your name")."\n";
    

    //网上做法,一轮轮把前面的去掉，然后再取第一位的。方法也不错。有点栈的感觉，因为递归完了要往回走。把下列结果打印出来
    function reverse_r($str){
        echo $str."\n";
        if(strlen($str)>0){
            reverse_r(substr($str,1));//这里不能return。为什么有些递归有return，有些没有
        }
        echo $str."\n";
        //echo substr($str,0,1);//这里是答案
    }
    
    reverse_r(123456789);
