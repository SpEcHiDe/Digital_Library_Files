
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
		                	<a href="index.html" title="NPTEL Logo"></a>
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
                	            <li><a href="index.html">All&nbsp;Categories</a></li>
                        	    <li><a href="index.html#AerospaceEngineering">Aerospace&nbsp;Engineering</a></li>
	                            <li><a href="index.html#Basiccourses(Sem1and2)">Basic&nbsp;courses(Sem&nbsp;1&nbsp;and&nbsp;2)</a></li>
        	                    <li><a href="index.html#Biotechnology">Biotechnology</a></li>
                	            <li><a href="index.html#ChemicalEngineering">Chemical&nbsp;Engineering</a></li>
                        	    <li><a href="index.html#ChemistryAndBiochemistry">Chemistry&nbsp;And&nbsp;Biochemistry</a></li>
	                            <li><a href="index.html#CivilEngineering">Civil&nbsp;Engineering</a></li>
        	                    <li><a href="index.html#ComputerScienceAndEngineering">Computer&nbsp;Science&nbsp;And&nbsp;Engineering</a></li>
                	            <li><a href="index.html#ElectricalEngineering">Electrical&nbsp;Engineering</a></li>
                        	    <li><a href="index.html#ElectronicsAndCommunicationEngineering">Electronics&nbsp;And&nbsp;Communication&nbsp;Engineering</a></li>
	                            <li><a href="index.html#EngineeringDesign">Engineering&nbsp;Design</a></li>
        	                    <li><a href="index.html#HumanitiesandSocialSciences">Humanities&nbsp;and&nbsp;Social&nbsp;Sciences</a></li>
	                            <li><a href="index.html#Management">Management</a></li>
        	                    <li><a href="index.html#Mathematics">Mathematics</a></li>
                	            <li><a href="index.html#MechanicalEngineering">Mechanical&nbsp;Engineering</a></li>
                        	    <li><a href="index.html#MetallurgyandMaterialScience">Metallurgy&nbsp;and&nbsp;Material&nbsp;Science</a></li>
	                            <li><a href="index.html#OceanEngineering">Ocean&nbsp;Engineering</a></li>
        	                    <li><a href="index.html#Physics">Physics</a></li>
                	            <li><a href="index.html#TextileEngineering">Textile&nbsp;Engineering</a></li>
                        	    <li><a href="index.html#Miscellanious">Miscellanious</a></li>
		                </ul>
		        </div>
		        <div class="clearFloat"></div>
	        </div>
        	<div class="content">
		        <div class="clearFloat"></div>
		        <div class="part">
		                <h1><a href="#">Video List</a></h1>

						<?php
							$dir = htmlspecialchars($_GET['vid']);

	//						$files = array_diff(scandir($directory), array('..', '.'));
							$dh  = opendir($dir);
							while (false !== ($filename = readdir($dh))) {
								echo "<a href=\"video_play.php?vid=".$dir."/".$filename."\"">".$filename."</a>";
							}

						?>


            </div>
        </div>
    </div>

</body>
</html>
