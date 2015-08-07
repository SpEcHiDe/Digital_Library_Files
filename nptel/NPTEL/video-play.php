
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>NPTEL Video Repo</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<link href="js/video-js/video-js.css" rel="stylesheet">
	<script src="js/video-js/video.js"></script>

	<script>
		  videojs.options.flash.swf = "js/video-js/video-js.swf"
	</script>

	<div class="wrap">
        	<div class="sidebar">
		        <header>
                		<div class="logo">
		                	<a href="nptel.html" title="NPTEL Logo"></a>
		                </div>
	                	<div class="clearFloat"></div>
	           <!-- 	<div class="search-box">
        		        	 <form action="#">
	                	        	 <input type="text">
        			                 <input type="submit" value="">
			                 </form>
	                	</div>
	 	    -->
	                	<div class="clearFloat"></div>
        		</header>
		        <div class="widget">
		                <ul>
                	            <li><a href="nptel.html">All&nbsp;Categories</a></li>
                        	    <li><a href="nptel.html#AerospaceEngineering">Aerospace&nbsp;Engineering</a></li>
	                            <li><a href="nptel.html#Basiccourses(Sem1and2)">Basic&nbsp;courses(Sem&nbsp;1&nbsp;and&nbsp;2)</a></li>
        	                    <li><a href="nptel.html#Biotechnology">Biotechnology</a></li>
                	            <li><a href="nptel.html#ChemicalEngineering">Chemical&nbsp;Engineering</a></li>
                        	    <li><a href="nptel.html#ChemistryAndBiochemistry">Chemistry&nbsp;And&nbsp;Biochemistry</a></li>
	                            <li><a href="nptel.html#CivilEngineering">Civil&nbsp;Engineering</a></li>
        	                    <li><a href="nptel.html#ComputerScienceAndEngineering">Computer&nbsp;Science&nbsp;And&nbsp;Engineering</a></li>
                	            <li><a href="nptel.html#ElectricalEngineering">Electrical&nbsp;Engineering</a></li>
                        	    <li><a href="nptel.html#ElectronicsAndCommunicationEngineering">Electronics&nbsp;And&nbsp;Communication&nbsp;Engineering</a></li>
	                            <li><a href="nptel.html#EngineeringDesign">Engineering&nbsp;Design</a></li>
        	                    <li><a href="nptel.html#HumanitiesandSocialSciences">Humanities&nbsp;and&nbsp;Social&nbsp;Sciences</a></li>
	                            <li><a href="nptel.html#Management">Management</a></li>
        	                    <li><a href="nptel.html#Mathematics">Mathematics</a></li>
                	            <li><a href="nptel.html#MechanicalEngineering">Mechanical&nbsp;Engineering</a></li>
                        	    <li><a href="nptel.html#MetallurgyandMaterialScience">Metallurgy&nbsp;and&nbsp;Material&nbsp;Science</a></li>
	                            <li><a href="nptel.html#OceanEngineering">Ocean&nbsp;Engineering</a></li>
        	                    <li><a href="nptel.html#Physics">Physics</a></li>
                	            <li><a href="nptel.html#TextileEngineering">Textile&nbsp;Engineering</a></li>
                        	    <li><a href="nptel.html#Miscellanious">Miscellanious</a></li>
		                </ul>
		        </div>
		        <div class="clearFloat"></div>
	        </div>
        	<div class="content">
		        <div class="clearFloat"></div>
		        <div class="part">
		                <h1><a href="#">Video Player</a></h1>
		                <div class="player">
						<?php
							$dir = htmlspecialchars($_GET['vid']);
							if (file_exists($dir)){
								//$files = array_diff(scandir($directory), array('..', '.'));
								$dh  = opendir($dir);
								while (false !== ($filename = readdir($dh))) {
									if($filename[0] == '.' ) continue;
//									echo "<video id=\"example_video_1\" class=\"video-js vjs-default-skin\" controls preload=\"auto\" width=\"640\" height=\"264\" poster=\"".$dir."/image.jpg"."\" data-setup=\'{\"example_option\":true}\'>\n";
//									echo "<source src=\"".$dir."/".$filename."\" />\n";
/*									echo "<video controls>\n";
									echo "<source src=\"./" . $dir . "/" . $filename ."\" type=\"video/mp4\">\n";
									echo "Your browser does not support HTML5 video.\n";
									echo "</video>\n<br /><br />\n";
*///									echo "<p class=\"vjs-no-js\"> To view this video please enable JavaScript, and consider upgrading to a web browser that <a href=\"http://videojs.com/html5-video-support/\" target=\"_blank\">supports HTML5 video</a></p>\n";
//	                                                        	echo "</video><br /><br />\n";
			echo "<video id=\"example_video_1\" class=\"video-js vjs-default-skin\"\n controls preload=\"auto\" width=\"640\" height=\"264\"\n data-setup='{\"example_option\":true}'>";
                        echo "<source src=\"http://athena.nitc.ac.in/shrimadhav_b130253cs/I/NPTEL/".$dir."/".$filename."\" type='video/mp4' />\n";
                        echo "<p class=\"vjs-no-js\">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href=\"http://videojs.com/html5-video-support/\" target=\"_blank\">supports HTML5 video</a></p>\n";
                   	echo "</video>\n<br /><br /><br />\n";
								}
							}
						?>
		                </div>
               <!-- <h2>Other Videos</h2>-->
				<div class="clearFloat"></div>
            </div>
        </div>
    </div>

</body>
</html>
