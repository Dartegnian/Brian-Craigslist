<!DOCTYPE html>
<html>
<head>
	<title>Craigslist Philippines</title>
	<link rel="stylesheet" type="text/css" href="Resources/Craigslist-Olores.css">
	<link rel="icon" type="image/png" href="Resources/Images/cl.png">
	<link rel="stylesheet" type="text/css" href="Resources/textrotator.css" />
	<meta name="viewport" content="width=device-width"/>
	<script src='Resources/jquery.min.js'></script>
	<script src='Resources/textrotator.js'></script>
	<meta name="google-signin-client_id" content="gsignin-600613.apps.googleusercontent.com">
	<script>
		$(document).ready(function(){
			$(".slogan .rotate").textrotator({
				animation: "flipCube",
				speed: 2500
			});
		});
		function Redirect() {
				 window.location="register.php";
		}
		function Send() {
				 alert("Contact input sent!");
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
</head>
<body>
	<div id="fullwidth">
		<h1 style="display: inline;"><a href="index.php"><img id="logo" src="Resources\Images\craigslist-logo-purple.png"/></a></h1>
		<button style="display: inline-block;float: right; margin-left: -5px; margin-top: 10px;" class="userbutt" onclick="Redirect()">Register</button>
		<form action="mainpage.php" method="post" style="display: inline;">
				<table border="0" style="display: inline; float: right;">
					<tr style="display: inline;">
					<td style="color: #777">Username</td>
					<td align="left"><input class="inputfield" type="text" name="username" size="20" maxlength="50" style="background-color: white; background-size: 30px; background-repeat: no-repeat;"></td>
					</tr>
					<tr style="display: inline;">
					<td style="color: #777">Password</td>
					<td align="left"><input class="inputfield" type="password" name="password" style="background-color: white; background-size: 30px; background-repeat: no-repeat;" size="20" maxlength="50" /></td>
					</tr>
					<tr style="display: inline;">
					<td style="border-right: 1px solid #e4e4e4; padding-right: 10px;" colspan="2" align="center"><input type="submit" value="Log In" class="button"/></td>
					</tr>
					<tr style="display: inline;">
					<td colspan="2" align="center">
					</td>
					</tr>
				</table>
		<nav id="headnav">
				<a href="index.php">Home</a>
				<a href="mainpage.php">Classifieds</a>
				<a href="contact.php">Contact</a>
				<a id="current">About</a>
			</nav>
	</div>
	<header id="header1" style="height: 250px;">
		<h1 class="slogan"><span class="rotate">CRAIGSLIST PHILIPPINES, THE #1 AD-POSTING WEBSITE, NOW IN THE PHILIPPINES, REDESIGNED BY APC STUDENTS</span></h1>
	</header>
	<div class="mainbody">
		<div id="imagecontainer">
			<div id="image1container" class="images" style="padding-bottom: 4.5%">
				<a href="https://manila.craigslist.com.ph/" target='_blank'>
					<img src="Resources\Images\CLold.png"/>
				</a>
			</div>
		</div>
		<aside id="infospace" style="padding-bottom: 105px;">
			<h2 style="padding-top: 10px;">About the redesign</h2>
			<p class="firsttwo">Craigslist, a site launched in 1995, has barely changed the website's design ever since its initial launch. Though some improvements have been made over time to be supported by more modern browsers, much of the legacy code remains, as well as the site's design. Based mostly on Web 1.0 standards and using text-heavy pages, our site loaded fast and was quite compatible with older browsers, even Netscape Navigator.</p>
			<br/>
			<h2 style="padding-top: 10px;">Project Objective</h2>
			<p class="firsttwo">Our objective for Craigslist Philippines is to make it a better site for those who are looking to post various services and local ads. We envision it to become a space for the people of the Philippines to post their ads freely and we think that this redesign can help others achieve that goal. Also, Craigslist is already offering the best service for posting ads for free and we would want to make that experience better.</p>
			<br/>
			<h2>Scope & Limitation</h2>
			<p class="firsttwo">This Craigslist revamp and redesign is only limited to the Philippines and, as such, it will only affect how Craigslist is displayed in the Philippines. This redesign and further expansion does not apply to the other Craigslist websites and is exclusive to only the Philippine version of this site.</p>
		</aside>
	</div>
	<div class="header2" id="adsContainer" style="padding: 0 !important; padding-bottom: 40px !important; background: #5d378c !important;">
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