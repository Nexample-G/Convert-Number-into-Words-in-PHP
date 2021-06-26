// This is men Number
	$No_men = 314.119;
// remove point and after point number
	$No_all = $No_men;
	$No_poi = $No_men;
	$No_men = floor($No_men);
// this is number degits ! strlen() can give words or number in degits
	$No_DEG = strlen($No_men);
// now need number revers ! you can revers any word or number revers using strrev()
	$No_rev = strrev($No_men);
// now need select numbers in all number ! using substr()
// now same process for after point number ! but how to get after point number
// two way can remove point and before point number 
// i am using str for get after point number
	$No_poi = str_replace($No_men.'.','', $No_poi);
// now same revers this number 
	$No_poi = strrev($No_poi);
	$po_DEG = strlen($No_poi);
	$No_sub =$No_subp= '';
$VAL_N = array(
		'0'=>array('',''),
		'1'=>array('','0'),
		'2'=>array('Hundret ',''),
		'3'=>array('Thousand ',''),
		'4'=>array('','0'),
		'5'=>array('Lakh ',''),
		'6'=>array('','0'),
		'7'=>array('Crore ',''),
		'8'=>array('','0'),
		'9'=>array('Arab ',''),
		'10'=>array('','0'),
		'11'=>array('Kharab ',''),
		'12'=>array('','0')
	);
$VAL_W = array(
// this is zero ! zero is empty
		'0'=>'',
		'1'=>'One ',		'2'=>'Two ',		'3'=>'Three ',		'4'=>'Four ',		'5'=>'Five ',		'6'=>'Six ',		'7'=>'Seven ',		'8'=>'Eight ',		'9'=>'Nine ',		'10'=>'Ten ',
		'11'=>'Eleven ',	'12'=>'Twelve ',	'13'=>'Thirteen ',	'14'=>'Fourteen ',	'15'=>'Fifteen ',	'16'=>'Sixteen ',	'17'=>'Seventeen ',	'18'=>'Eighteen ',	'19'=>'Nineteen ',	'20'=>'Twenty ',
		'30'=>'Thirty ',	'40'=>'Forty ',		'50'=>'Fifty ',		'60'=>'Sixty ',		'70'=>'Seventy ',	'80'=>'Eighty ',	'90'=>'Ninety ',
);
foreach($VAL_N as $num => $VL){
if($No_DEG > $num){
	$No_sub = $VAL_W[substr($No_rev,$num,1).$VAL_N[$num][1]].$VAL_N[$num][0].$No_sub;
}}
foreach($VAL_N as $nump => $VLp){
if($po_DEG > $nump){
	$No_subp = $VAL_W[substr($No_poi,$nump,1).$VAL_N[$nump][1]].$VAL_N[$nump][0].$No_subp;
}}
for($ten = 1; $ten < 10; $ten++){
	$No_sub = str_replace($VAL_W[10].$VAL_W[$ten], $VAL_W['1'.$ten], $No_sub);
	$No_subp = str_replace($VAL_W[10].$VAL_W[$ten], $VAL_W['1'.$ten], $No_subp);
}
echo $No_all.' <p>';
echo $No_sub.' (point) '.$No_subp.' <p>';
?>

