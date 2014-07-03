

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>JMU Fencing &middot; Home</title>
		<meta name="description" content="JMU Fencing Club." />
		
		<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
		<script type="text/javascript" src="http://info.jmu.edu/fencingclub/js/jquery.js"></script>
		<script type="text/javascript" src="http://info.jmu.edu/fencingclub/js/fencing.js"></script>



	<script type="text/javascript" src="http://info.jmu.edu/fencingclub/js/jquery.cycle.js"></script>
	<script type="text/javascript">
	$(function() {
		$("#slideshow").cycle({ fx: "fade" });
		$("#news_items").cycle({
			fx: "scrollVert",
			delay: 2000,
			timeout: 6000,
			pause: 1,
			pager: "#pagination"
		});
	});
	</script>

	</head>

	<body>
		<div id="container">
		<div id="header">
			
		<ul id="nav">
			<li>
				<a href="index.php" class="active">Home</a>
			</li>
			<li>
				<a href="faq.php">About</a>
			</li>
		</ul>
			<a id="logo" href="index.php">James Madison University Fencing Club</a>
		</div>
		
		

	<div id="slideshow" class="grid_8">
		
		<img src="http://info.jmu.edu/fencingclub/photos/slideshow/DuncStance.png" alt="Slideshow Image" />
		<img src="http://info.jmu.edu/fencingclub/photos/slideshow/SarahvsKyle.png" alt="Slideshow Image" />
		<img src="http://info.jmu.edu/fencingclub/photos/slideshow/beginnerfencing.png" alt="Slideshow Image" />
		<img src="http://info.jmu.edu/fencingclub/photos/slideshow/brycemadness.png" alt="Slideshow Image" />
		<img src="http://info.jmu.edu/fencingclub/photos/slideshow/fencingdinner.png" alt="Slideshow Image" />
		<img src="http://info.jmu.edu/fencingclub/photos/slideshow/fencingpractice.png" alt="Slideshow Image" />
		<img src="http://info.jmu.edu/fencingclub/photos/slideshow/fencingteam.png" alt="Slideshow Image" />
		<img src="http://info.jmu.edu/fencingclub/photos/slideshow/girls.png" alt="Slideshow Image" />
		<img src="http://info.jmu.edu/fencingclub/photos/slideshow/hunchbackvsleprechaun.png" alt="Slideshow Image" />
		<img src="http://info.jmu.edu/fencingclub/photos/slideshow/nikkisabre.png" alt="Slideshow Image" />
		<img src="http://info.jmu.edu/fencingclub/photos/slideshow/oldschool.png" alt="Slideshow Image" />
		<img src="http://info.jmu.edu/fencingclub/photos/slideshow/womensvictory.png" alt="Slideshow Image" />	</div>

	<div id="news" class="grid_4">
		<div class="section_title">Upcoming Events</div>

		<div id="news_items">
		</div>

		<div id="pagination"></div>
	</div>
	
	<div id="upcoming" class="grid_12">
		<div class="section_title">Our Mission</div>

		<div id="news_items">
			<p>
			Our mission is to bring the sport of fencing to any student who is interested in learning in a fun, exciting, and coed athletic atmosphere. Although fencing tournaments are generally individual events, JMU Fencing participates in numerous collegiate, team competitions. The activities of the club are not restricted to the gym. As a non-profit organization, we conduct fundraisers, participate in community service events, and host frequent social events.
			</p>
		</div>

		<div id="pagination"></div>
	</div>

</div>
<div id="footer">
	All content &copy; 2014 JMU Fencing Club.</a>
	</div>
</body>
</html>