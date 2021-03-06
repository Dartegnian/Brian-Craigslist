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
               window.location="done.html";
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
	<div id="fullwidth" style="height: 65px;">
		<h1 style="display: inline;"><a href="index.html"><img id="logo" src="Resources\Images\craigslist-logo-purple.png"/></a></h1>
		<button style="display: inline-block;float: right; margin-left: -5px; margin-top: 10px;" class="userbutt" onclick="Redirect()">Register</button>
		<form action="dashboard.php" method="post" style="display: inline;">
				<table border="0" style="display: inline; float: right;">
					<tr style="display: inline;">
					<td align="left"><input class="inputfield" type="text" readonly="yes" name="username" value="<?php
					if(!empty($_POST['username'])) {
						$username = $_POST['username'];
						echo $username;
					} else {
						echo "Demo User";
					}
					?>"
				size="20" maxlength="50" style="background-color: white; background-size: 30px; background-repeat: no-repeat;"></td>
					</tr>
					<tr style="display: inline;">
					<td colspan="2" align="center">
					</td>
					</tr>
				</table>
			</form>
	</div>
	<header id="header1" style="height: 250px;">
		<h1 class="slogan"><span class="rotate">THANK YOU FOR VISITING, THIS PROJECT IS FINISHED, PLEASE COME AGAIN SOON</span></h1>
	</header>
	<div class="header2" id="adsContainer" style="padding: 0 !important; padding-bottom: 40px !important; background: #6b3fa0 !important;">
		<h1>Makati Classifieds</h1>
		<div id="classiWrapper">
			<div id="adsContainer">
				<table width="95%" cellspacing="5" border="0" style="margin: 0 auto;">
				  <tbody>
				    <tr>
				      <th scope="col">Personals</th>
				      <th scope="col">Community</th>
				      <th scope="col">For sale</th>
				      <th scope="col">Jobs</th>
				      <th scope="col">Services</th>
				    </tr>
				    <tr>
				      <td>Strictly platonic</td>
				      <td>Activities</td>
				      <td>Automotive</td>
				      <td>Finance</td>
				      <td>Automotive</td>
				    </tr>
				    <tr>
				      <td>Women seeking women</td>
				      <td>Artists</td>
				      <td>Beauty</td>
				      <td>Admin</td>
				      <td>Legal</td>
				    </tr>
				    <tr>
				      <td>Women seeking men</td>
				      <td>Childcare</td>
				      <td>Cell/mobile</td>
				      <td>Engineering</td>
				      <td>Beauty</td>
				    </tr>
				    <tr>
				      <td>Men seeking women</td>
				      <td>Classes</td>
				      <td>Computer</td>
				      <td>Art</td>
				      <td>Computer</td>
				    </tr>
				    <tr>
				      <td>Men seeking men</td>
				      <td>Events</td>
				      <td>Creative</td>
				      <td>Biotech</td>
				      <td>Real estate</td>
				    </tr>
				    <tr>
				      <td>Casual encounters</td>
				      <td>General</td>
				      <td>Farm+garden</td>
				      <td>Business</td>
				      <td>Financial</td>
				    </tr>
				    <tr>
				      <td>Missed connections</td>
				      <td>Groups</td>
				      <td>Financial</td>
				      <td>Customer service</td>
				      <td>Event</td>
				    </tr>
				    <tr>
				      <td>Rants and raves</td>
				      <td>Local news</td>
				      <td>Household</td>
				      <td>IT/CS</td>
				      <td>Therapeutic</td>
				    </tr>
				    <tr>
				      <td>Misc. romance</td>
				      <td>Lost+found</td>
				      <td>Legal</td>
				      <td>Public services</td>
				      <td>Labor+household</td>
				    </tr>
				  </tbody>
				</table>
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