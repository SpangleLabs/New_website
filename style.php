<?
header('Content-Type: text/css');

$arr_deerpics = array('Big-Deer-Wallpaper-for-iPhone.jpg','Female_Blacktail_Deer.jpg','Sika_deer_japanese_deer.jpg','deer-fawn.jpg','white-tail-deer.jpg');
$num_deerpics = count($arr_deerpics);

if(isset($_GET['Colour'])) {
$style = file_get_contents('style-'.$_GET['Colour'].'.css');
} else {
$style = file_get_contents('style.css');
}

if(isset($_GET['Zephyr'])) {
$style = str_replace('white-tail-deer.jpg','1382250867.rajii_tabra_commission_2_fa.jpg',$style);
} else {
$rand_deer = $arr_deerpics[mt_rand(0,$num_deerpics-1)];
$style = str_replace('white-tail-deer.jpg',$rand_deer,$style);
}
echo($style);

?>
