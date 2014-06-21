<?php
/*----------------------------------------------------
	初始化系统:1,检测是否开启魔术函数(自动转义)
			 :2,错误级别
  ----------------------------------------------------
*/
header('Content-Type:text/html;charset=utf-8');

//取消多余\线
function checkTrip(&$data){
	if (get_magic_quotes_gpc()){
		if (is_array($data)){
			foreach ($data as $key=>$val){
				if (is_array($val)){
					foreach ($val as $key2=>$val2){
						$data[$key][$key2] = stripslashes($val2);
					}
				}else{
					$data[$key] = stripslashes($val);
				}
			}

			return $data;
		}else{
			return stripslashes($data);
		}	
	}else{
		return $data;
	}
}
