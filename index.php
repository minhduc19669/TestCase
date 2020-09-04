<?php

  <?php
     function theArray($n,$a){
		$b=[];
		for($i=0;$i < ( $n - 1);$i++){
		if($i==0){
			$b[0]= 0 + $a[0] + $a[1];
		}else{
			$b[$i]=$a[$i - 1] + $a[$i] + $a[$i + 1];
		}
	}
		return $b;
}
var_dump(theArray(5,[4,0,1,-2,3]));