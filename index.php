<?

$getstr = '?';
foreach($_GET as $key => $val) {
$getstr = $getstr.$key.'='.$val.'&';
}
$getstr = substr($getstr,0,-1);

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"   "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>The personal projects of Dr-spangle</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link rel="stylesheet" type="text/css" href="style.php<?echo($getstr);?>" />
</head>
<body>

<div id="nav">
<ul>
<li><a href="Home">Home</a></li>
<li><a href="Hallo">Hallo</a></li>
<li><a href="About me">About me</a></li>
<li><a href="Programming">Programming</a></li>
<li><a href="Sewing">Sewing</a></li>
<li><a href="Baking">Baking</a></li>
<li><a href="Notes">Notes on...</a></li>
</ul>
</div>

<div id="wrapper">

<div id="title">
<h1>Dr-spangle</h1>
<h2>Personal projects</h2>
</div>

<div id="slider">
<div id="slidertext">
<h1>Some slider</h1>
<h2>Under text thing</h2>
</div>
<img src="images/<?
$deerpics = array('red-deer-16.jpg','deer-rut.jpg','Sika_deer_japanese_deer.jpg','animals-deer-wildlife-994635-5616x3744.jpg');
$randdeer = $deerpics[mt_rand(0,count($deerpics)-1)];
echo($randdeer);
?>" alt="deerpics" /></div>

<div id="content" >
Content content<br />
<h2>Hallo</h2>
The hot water from the Martian's overthrow drifted downstream with me, so that for the best part of a mile I could see little of either bank. Once, however, I made out a string of black figures hurrying across the meadows from the direction of Weybridge. Halliford, it seemed, was deserted, and several of the houses facing the river were on fire. It was strange to see the place quite tranquil, quite desolate under the hot blue sky, with the smoke and little threads of flame going straight up into the heat of the afternoon. Never before had I seen houses burning without the accompaniment of an obstructive crowd. A little farther on the dry reeds up the bank were smoking and glowing, and a line of fire inland was marching steadily across a late field of hay.
<h2>About me</h2>
I <a href="continue">continue</a> my existance.
<h2>Programming</h2>
Then suddenly we saw a rush of smoke far away up the river, a puff of smoke that jerked up into the air and hung; and forthwith the ground heaved under foot and a heavy explosion shook the air, smashing two or three windows in the houses near, and leaving us astonished.
<h2>Sewing</h2>
<p>At this moment, also, a long black funnel, crowned with wreaths of smoke, appeared on the edge of the waters.  It was the American steamer, leaving for Yokohama at the appointed time.</p>
<p>"Confound her!" cried John Bunsby, pushing back the rudder with a desperate jerk.</p>
<p>"Signal her!" said Phileas Fogg quietly.</p>
<p>A small brass cannon stood on the forward deck of the Tankadere, for making signals in the fogs.  It was loaded to the muzzle; but just as the pilot was about to apply a red-hot coal to the touchhole, Mr. Fogg said, "Hoist your flag!"</p>
<h2>Baking</h2>
stufff sutff suhsfuhsf fga dfd fdfg  dfg dfgfd fg fg
Lorem ipsum doloar sit amet I don't remember any more lorem ipsum off by heart oh well ipsum ipsum ipsum ipsum ipsum ipsum
<h2>Notes on...</h2>
Content?
</div>

</div>

</body>
</html>
