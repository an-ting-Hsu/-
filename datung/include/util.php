<?php 
function check_exceed($type , $value){
	//echo "check_exceed: " . $type ."-" . $value;
	switch($type){
		case("ph"):
			if($value > 9 || $value < 6){
				return false;
			}
		break;
		case("tss"):
			if($value > 30){
				return false;
			}
		break;
	}
	# 檢查數值超標、警示與否然後寄信通知
	return true;
}
?>