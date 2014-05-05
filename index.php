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
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="jquery.anyslider.min.js"></script>
</head>
<body>

<div id="nav">
<ul>
<li><a href="Home">Home</a></li>
<li><a href="Hallo">Hallo</a></li>
<li><a href="About_me">About me</a></li>
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

<div id="slide1">
<div id="slide1text">
<h1>Programming projects</h1>
<h2>Misc projects and notes</h2>
</div>
<img src="images/red-deer-16.jpg" alt="deerpics" /></div>

<div id="slide2">
<div id="slide2text">
<h1>Hallo docs</h1>
<h2>Docs and notes for my IRC bot</h2>
</div>
<img src="images/deer-rut.jpg" alt="deerpics" /></div>

<div id="slide3">
<div id="slide3text">
<h1>Sewing</h1>
<h2>Notes and photos of needlework projects</h2>
</div>
<img src="images/Sika_deer_japanese_deer.jpg" alt="deepics" /></div>

<div id="slide4">
<div id="slide4text">
<h1>Baking</h1>
<h2>Stories from my efforts to bake</h2>
</div>
<img src="images/animals-deer-wildlife-994635-5616x3744.jpg" alt="deerpics" /></div>

</div>

<div id="content" >
This website is simply about myself and the projects I embark upon. Most don’t go as planned, but hopefully I learn from them all, no matter the results. Here shall hopefully be posts and notes on how that learning goes.<br />

<h2><a href="Hallo">Hallo</a></h2>
Hallo is my main project at the moment. He’s an IRC bot with far too many features and more bugs than I would like. Eventually I’ll get it all ironed out, but I’m still working towards that goal.<br />
Currently hallo has some features to manage channels (including kick, voice, op, etc) along with many features useful to users (choosing options from given lists, calculating and converting values, and reading the titles from posted URLs).<br />
He also has many functions which are apparently useful to someone, somewhere, such as choosing a random <a href=“http://bulbapedia.bulbagarden.net”>Pokemon</a> or a random <a href=“http://equestriadaily.com”>pony</a>.<br />
I seem to have a constantly long list of improvements and additions to apply to hallo, so there should be some quantity of posts in that category.<br />

<h2><a href="About_me">About me</a></h2>
Some overview of myself, my life, and the things around me. Along with occasional posts on updates to those things and perhaps some insights into how I think and work. Some posts about other things I’m interested in or involved in will most probably appear here.<br />
As a rather brief intro to this section, I’m a guy living in Swansea, Wales. I originally grew up in a small town in Northamptonshire and I work as a programmer for a local company operating nation-wide. I originally came down to Swansea for university to study mathematics, but that didn’t turn out as it was originally planned to. But thanks to some programming experience I picked up over the years, I managed to get a job in the area.<br />

<h2><a href="Programming">Programming</a></h2>
The first programming I did was a strange attempt to make tools and applications in some software called <a href=“http://en.wikipedia.org/wiki/GameMaker:_Studio”>GameMaker</a> I started with their drag and drop interface, but rapidly moved to using their custom GameMaker Language (GML), which is apparently syntactically close to C++, although I’ve forgotten anything about GML by now.<br />
I quickly moved on to PHP. At first just using it to include headers and footers in multiple pages, but quickly trying to build resource trading and economics simulators for a hobby I was involved in at the time. I later moved to building some pretty powerful systems for measuring forum activity in the community I was involved in, which developed my knowledge of SQL, largely using MySQL.<br />
My knowledge of programming mostly stagnated on PHP for a few years after this, using the language to do tasks much better suited to other languages. It wasn’t until some years later I started developing Hallo and therefore learning Python. I expanded my knowledge pretty rapidly as I worked through <a href=“https://projecteuler.net/“>Project Euler</a> problems and adding miscellaneous functions to Hallo. My knowledge expanded more rapidly since getting employed as a Software Engineer, accelerating my knowledge of Python and starting my path to learning more languages, with sights set on Java, C# and C++.<br />

<h2><a href="Sewing">Sewing</a></h2>
<p>At this moment, also, a long black funnel, crowned with wreaths of smoke, appeared on the edge of the waters.  It was the American steamer, leaving for Yokohama at the appointed time.</p>
<p>"Confound her!" cried John Bunsby, pushing back the rudder with a desperate jerk.</p>
<p>"Signal her!" said Phileas Fogg quietly.</p>
<p>A small brass cannon stood on the forward deck of the Tankadere, for making signals in the fogs.  It was loaded to the muzzle; but just as the pilot was about to apply a red-hot coal to the touchhole, Mr. Fogg said, "Hoist your flag!"</p>
<h2><a href="Baking">Baking</a></h2>
stufff sutff suhsfuhsf fga dfd fdfg  dfg dfgfd fg fg
Lorem ipsum doloar sit amet I don't remember any more lorem ipsum off by heart oh well ipsum ipsum ipsum ipsum ipsum ipsum
<h2><a href="Notes">Notes on...</a></h2>
Content?
</div>

</div>
<div id="footer">
&copy; the respective people.

</div>

<script>
$("#slider").AnySlider({
	bullets: false,
	showControls: false
});
</script>

</body>
</html>
