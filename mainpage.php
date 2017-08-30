<!DOCTYPE html>
<html>
<head>
	<title>Craigslist Philippines</title>
	<link rel="stylesheet" type="text/css" href="Resources/Craigslist-Olores.css">
	<link rel="icon" type="image/png" href="Resources/Images/cl.png">
	<meta name="viewport" content="width=device-width"/>
	<script src='Resources/jquery.min.js'></script>
	<script src='Resources/textrotator.js'></script>
	<script>
		$(document).ready(function(){
			$(".slogan .rotate").textrotator({
				animation: "flipCube",
				speed: 2500
			});
		});
		function Redirect() {
               window.location="index.php";
        }
		$(function() {
			$(".buttspecial").click(function() {
				$("body,html").animate({
					scrollTop: 0
				}, 4500);
				return false
			})
		});
	</script>
	<link rel="stylesheet" type="text/css" href="Resources/textrotator.css" />
</head>
<body>
	<div id="fullwidth">
		<h1 style="display: inline;"><a href="index.php"><img id="logo" src="Resources\Images\craigslist-logo-purple.png"/></a></h1>
		<button style="display: inline-block;float: right; margin-left: -5px; margin-top: 10px;" class="userbutt" onclick="Redirect()">Log out</button>
		<form action="dashboard.php" method="get" style="display: inline;">
				<table border="0" style="display: inline; float: right;">
					<tr style="display: inline;">
					<td align="left"><input class="inputfield" type="text" readonly="yes" name="username" value="<?php
					if(!empty($_POST['username'])) {
						$username = $_POST['username'];
						if (strpos($username, '_') !== false || strpos($username, '.') !== false) {
							$username = str_replace('_', ' ', $username);
							$username = str_replace('.', ' ', $username);
							if (strpos($username, '@') !== false) {
								$username = substr($username, 0, strpos($username, "@"));
							}
						}
						echo $username;
					} else {
						echo "Demo User";
					}
					?>"
				size="20" maxlength="50" style="background-color: white; background-size: 30px; text-transform: capitalize; background-repeat: no-repeat;"></td>
					</tr>
					<tr style="display: inline;">
					<td colspan="2" align="center">
					</td>
					</tr>
				</table>
			</form>
			<nav id="headnav">
				<a href="index.php">Home</a>
				<a id="current">Classifieds</a>
				<a href="contact.php">Contact</a>
				<a href="about.php">About</a>
			</nav>
	</div>
	<header id="header1" style="height: 250px;">
		<h1 class="slogan"><span class="rotate">CRAIGSLIST PHILIPPINES, THE #1 AD-POSTING WEBSITE, NOW IN THE PHILIPPINES, REDESIGNED BY APC STUDENTS</span></h1>
	</header>
	<div class="header2" id="adsContainer" style="padding: 0 !important; padding-bottom: 40px !important; background: #6b3fa0 !important;">
		<h1>Makati Classifieds</h1>
		<div id="classiWrapper">
			<div id="adsContainer">
				<table width="95%" cellspacing="5" border="0" style="margin: 0 auto;">
				  <tbody>
				    <tr>
				      <th style="background-color: #5d378c;" scope="col">Personals</th>
				      <th style="background-color: #5d378c;" scope="col">Community</th>
				      <th style="background-color: #5d378c;" scope="col">For sale</th>
				      <th style="background-color: #5d378c;" scope="col">Jobs</th>
				      <th style="background-color: #5d378c;" scope="col">Services</th>
				    </tr>
				    <tr>
				      <td><a href="https://manila.craigslist.com.ph/i/personals?category=stp">Strictly platonic</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/act">Activities</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/aos">Automotive</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/acc">Finance</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/rid">Rideshare</a></td>
				    </tr>
				    <tr>
				      <td><a href="https://manila.craigslist.com.ph/i/personals?category=w4w">Women seeking women</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/ats">Artists</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/bts">Beauty</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/ofc">Admin</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/lgs">Legal</a></td>
				    </tr>
				    <tr>
				      <td><a href="https://manila.craigslist.com.ph/i/personals?category=w4m">Women seeking men</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/kid">Childcare</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/cms">Cell/mobile</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/eng">Engineering</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/bts">Beauty</a></td>
				    </tr>
				    <tr>
				      <td><a href="https://manila.craigslist.com.ph/i/personals?category=m4w">Men seeking women</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/cls">Classes</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/cps">Computer</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/med">Art</a></td>
				      <td><a href="https://manila.craigslist.com.ph/i/computers">Computers</a></td>
				    </tr>
				    <tr>
				      <td><a href="https://manila.craigslist.com.ph/i/personals?category=m4m">Men seeking men</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/eve">Events</a></td>
				      <td><a href=""https://manila.craigslist.com.ph/search/crs>Creative</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/sci">Biotech</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/rts">Real estate</td>
				    </tr>
				    <tr>
				      <td><a href="https://manila.craigslist.com.ph/i/personals?category=cas">Casual encounters</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/com">General</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/gra">Farm+garden</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/bus">Business</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/fns">Financial</a></td>
				    </tr>
				    <tr>
				      <td><a href="https://manila.craigslist.com.ph/i/personals?category=mis">Missed connections</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/grp">Groups</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/fns">Financial</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/csr">Customer service</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/evs">Event</a></td>
				    </tr>
				    <tr>
				      <td><a href="https://manila.craigslist.com.ph/i/personals?category=rnr">Rants and raves</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/vnn">Local news</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/hss">Household</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/sof">IT/CS</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/ths">Therapeutic</a></td>
				    </tr>
				    <tr>
				      <td><a href="https://manila.craigslist.com.ph/i/personals?category=msr">Misc. romance</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/laf">Lost+found</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/lgs">Legal</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/etc">Public services</a></td>
				      <td><a href="https://manila.craigslist.com.ph/search/lab">Labor+household</a></td>
				    </tr>
				  </tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="mainbody" style="padding-bottom: 90px;">
		<h1>Top Ads in Makati</h1>
		<div id="entrycontainer">
			<div id="entry" style="float: left">
				<h6>1</h6>
				<h5>Arca South</h5>
				<p>Quality construction materials and workers are needed to build AyalaLand's new project in Taguig. High paying a...</p>
				<img src="Resources/Images/5star.png"/>
			</div>
			<div id="entry" style="float: right">
				<h6>3</h6>
				<h5>Road Rebuilding</h5>
				<p>Makati-wide road contractors and personnel needed to rebuild roads in Makati, starting with Magallanes Village.</p>
				<img src="Resources/Images/4star.png"/>
			</div>
			<div id="entry" style="float: left">
				<h6>2</h6>
				<h5>SLEX Decongestion</h5>
				<p>Traffic enforcers and security personnel needed for patrolling SLEX at peak hours (5-7 AM, 7-8 PM).</p>
				<img src="Resources/Images/4star.png"/>
			</div>
		</div>
	</div>
	<footer>
		<a href="https://craigslist.com/" target='_blank'>
			<img src="Resources\Images\clwhite.png"/>
		</a>
		<div class="footcontain">
			<h4>About Craigslist</h4>
			<p>Learn more about the international ad-posting website, Craigslist.</p>
			<ul>
			<li><a href="https://manila.craigslist.com.ph/">Craigslist Manila</a></li>
			<li><a href="https://www.craigslist.org/about/">About Craigslist</a></li>
			<li><a href="https://www.craigslist.org/about/privacy.policy">Privacy</a></li>
			<li><a href="https://www.craigslist.org/about/scams/">Safety</a></li>
			<li><a href="https://www.craigslist.org/about/help/">Help</a></li>
			</ul>
		</div>
		<div class="footcontain">
			<h4>Main CL Services</h4>
			<ul>
			<li><a href="https://www.craigslist.org/about/terms.of.use">Terms of Use</a></li>
			<li><a href="https://www.craigslist.org/about/help/system-status">System status</a></li>
			<li><a href="https://www.craigslist.org/about/open_source">Open source</a></li>
			<li><a href="http://blog.craigslist.org/">Craigslist blog</a></li>
			<li><a href="http://craigconnects.org/">Craig connects</a></li>
			</ul>
		</div>
		<div class="footcontain">
			<h4>Other CL Links</h4>
			<ul>
			<li><a href="https://forums.craigslist.org/?forumID=8">Feedback</a></li>
			<li><a href="https://www.craigslist.org/about/craigslist_is_hiring">Jobs</a></li>
			<li><a href="https://www.craigslist.org/about/sites">CL Sites</a></li>
			</ul>
		</div>
	</footer>
	<footer id="apcfooter">
		<center>Coded with <a href="Resources\Images\APC-Hymn.jpg">&#10084;</a> by the students of <a href="https://apc.edu.ph/" target='_blank'>Asia Pacific College</a></center>
	</footer>
</body>
</html>