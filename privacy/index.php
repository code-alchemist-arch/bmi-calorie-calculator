<?php
	require_once("../base.php");
	
	$name = $simpleurl;

	$websitename = "Privacy Policy - ".$name;
	$description = "";
	$keywords = "";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta Tags -->
		<title><?php echo $websitename; ?></title>
		<meta name="robots" content="noindex,nofollow" />
		<meta name="description" content="<?php echo $description; ?>"/>
		<meta name="keywords" content="<?php echo $keywords; ?>"/>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<!-- Social Meta Tags -->
		<meta property="og:title" content="<?php echo $websitename; ?>"/>
		<meta property="og:description" content="<?php echo $description; ?>"/>
		<meta property="og:image" content="<?php echo $host; ?>images/social-logo.jpg"/>
		<meta property="og:url" content="<?php echo $host; ?>"/>
		<meta property="og:locale" content="en" />
		<meta property="og:type" content="website" />
		<meta property="fb:app_id" content="539741069902637" />
		<meta name="twitter:title" content="<?php echo $websitename; ?>"/>
		<meta name="twitter:description" content="<?php echo $description; ?>"/>
		<meta name="twitter:image" content="<?php echo $host; ?>images/social-logo.jpg"/>
		<meta name="twitter:card" content="summary_large_image"/>
		<!-- Picnic CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/picnic">
		<!-- Icons -->
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $host; ?>apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $host; ?>favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $host; ?>favicon-16x16.png">
		<link rel="manifest" href="<?php echo $host; ?>site.webmanifest">
		<link rel='mask-icon' href='".$host."safari-pinned-tab.svg' color='#0088ff'>
		<meta name='msapplication-TileColor' content='#0088ff'>
		<meta name='theme-color' content='#0088ff'>
		<!-- Styles -->
		<style>
			body {background:#f1efed;}
			.clear {clear:both;height:10px;}
			h1 {line-height:1.25em;}
			h2.subtitle {padding-left:3px;padding-right:3px;}
			.black {color:#111;text-decoration:none;}
			.main {max-width:960px;width:100%;margin:0;}
			.intro {background:#ffffff;padding:20px 45px;border-radius:0.2em;-webkit-border-radius:0.2em;-moz-border-radius:0.2em;margin-bottom:0.6em;}
			.credit {font-size:10px;text-align:right;padding:5px 0;}
			.settings {margin:5px 0 0 0;}
			.modal .overlay ~ *, .card {border:none;}
			.modal .overlay ~ * header, .card header {border-bottom:1px solid #f1efed;}
			.custom-button {background:#f15025;}
			.ingredients-list label {margin: 5px 0;padding:5px 0;display: block;}
			.step {margin:10px 0;}
			.footer {background:#333;color:#fff;}
			.footer .sub-inner {padding:50px 0;text-align:center;}
			.footer a {color:#fff;margin:10px 12px;display:inline-block;}
			.footer .copyright {margin-top:50px;font-size:0.8em;}
		
			.toggle-text {margin-right:10px;vertical-align:bottom;height:34px;display:inline-block;margin-bottom:3px;}
			
			.logo2 {display:none;}
			
			@media (max-width: 60em) {
				.logo2 {display:block;text-align:center;}
			}
			
			@media only screen and (max-width: 960px) {
				h2.subtitle {padding-left:10px;padding-right:10px;}
			}
			
			@media only screen and (max-width: 650px) {
				.intro {padding:10px .8em;}
				.settings {text-align:center;}
			}
		</style>
	</head>
	<body>
		<div class="main">
			<div class="intro">
				<h1>Privacy Policy</h1>
				<article class="card">
					<div id="privacy-wrapper">
						<p>At <?php echo $name; ?>, available at https://www.<?php echo $name; ?>/, one of our main priorities is the privacy of our guests. This data protection document contains the types of information that is collected and registered by <?php echo $name; ?> and an explanation of its use.</p>
						<p>If you have any questions about this privacy policy, please don't hesitate to contact us here: hilvestor [at] gmail.com</p>
						<h2>Regulation on the protection of personal data (GDPR)</h2>
						<p>We are the administrator of your personal data.</p>
						<p>The <?php echo $name; ?> legal basis for collecting and using the personal data described in this Privacy Policy depends on the personal data we collect and the specific context in which we collect information:</p>
						<ul>
						<li><?php echo $name; ?> must conclude a contract with you</li>
						<li>You have given <?php echo $name; ?> permission to use personal data</li>
						<li>The use of your personal data is the legitimate interest of <?php echo $name; ?></li>
						<li><?php echo $name; ?> must meet all legal requirements</li>
						</ul>
						<p><?php echo $name; ?> only stores your personal data for as long as is necessary for the purposes stated in this data protection document. We will only store and use your data to the extent necessary to fulfill our legal obligations, to settle disputes and to enforce our guidelines.</p>
						<p>If you are based in the European Economic Area (EEA), you have certain data protection rights. If you would like to be informed which personal data about you are stored by us and if you would like to delete them from our systems, please contact us here: hilvestor [at] gmail.com</p>
						<p>Under certain circumstances you have the following data protection rights:</p>
						<ul>
						<li>Right to access, update or delete information we have about you</li>
						<li>Right to rectification</li>
						<li>Right of objection</li>
						<li>Right to restrictions</li>
						<li>Right to data portability</li>
						<li>Right of withdrawal</li>
						</ul>
						<p>Users may opt out of personalised advertising at any time by visiting <a target="_blank" href="https://www.google.com/settings/ads">Google Ads Settings</a>.</p>
						<h2>Log files</h2>
						<p><?php echo $name; ?> follows the standard procedures for the use of log files. These files register users when they visit websites. All hosting companies do and this is part of the hosting and analytics services. The information collected in the log files includes Internet Protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamps, referring / exit pages, and possibly the number of clicks. This data is not linked to any information that could identify you personally. The purpose of the information is to analyze trends, administer the site, track user traffic on the site, and collect demographic information.</p>
						<h2>California Consumer Privacy Act ("CCPA")</h2>
						<p>Under CCPA, Californian residents have the right to declare their preferences on the sale of data for advertising and marketing purposes. If you wish to change your preferences, click the link below to launch our preference portal:</p>
						<div data-fuse-privacy-tool=""><a href="javascript:void(0)" id="fuse-privacy-tool">Privacy Settings</a></div>
						<p>We use a third-party to provide monetisation technologies for our site. You can review their privacy and cookie policy <a target="_blank" href="https://publift.com/privacy-policy/">here</a>.</p>
						<h2>Cookies and Web Beacons</h2>
						<p>Like any other website, <?php echo $name; ?> uses "cookies". These files are used to store information including visitor preferences and the location on the page that the user accessed or visited. This information is used to optimize the user experience by tailoring the content of our website based on the user's browser type and / or other information.</p>
						<h2>Google DART DoubleClick cookie</h2>
						<p>Google is an external provider on our website. Cookie files, known as DART cookies, are also used to display advertisements to users of our website based on their visits to other websites on the internet. However, visitors can deactivate the use of DART cookies by visiting the privacy policy of ads and the Google Content Network at the following URL: <a target="_blank" href="https://policies.google.com/technologies/ads">https://policies.google.com/technologies/ads</a></p>
						<h2>Affiliate Programs</h2>
						<p><?php echo $name; ?> acts as an Amazon Associate in order to earn a commission percentage from qualifying purchases of recommended and/or linked products from our website to Amazon.com or any related Amazon websites.</p>
						<h2>Third party data protection provisions</h2>
						<p>The privacy policy of <?php echo $name; ?> does not apply to other advertisers or websites. We therefore recommend that you read the relevant data protection guidelines of external ad servers for more detailed information. This may include their practices and instructions on how to disable certain options.</p>
						<p>You can deactivate cookies using individual browser options. More detailed information on cookie management in certain web browsers can be found on the corresponding website of your browser.</p>
						<p>You can also opt out of some third-party vendors' uses of cookies for personalised advertising by visiting <a target="_blank" href="http://www.aboutads.info/choices/">www.aboutads.info</a></p>
						<h2>Information about children</h2>
						<p>Our next priority is protecting children while using the Internet. We encourage parents and guardians to observe, participate and / or monitor and control their activities online.</p>
						<p><?php echo $name; ?> does not knowingly collect any personal data from children under the age of 13.</p>
						<h2>Privacy policy for online activities only</h2>
						<p>Our privacy policy applies only to our online activities and applies to visitors to our website in relation to the information they have provided and / or collected in <?php echo $name; ?>. This policy does not apply to information collected offline or through channels other than this website.</p>
						<h2>Allow</h2>
						<p>By using our website, you agree to our privacy policy and its terms.</p>
						<br>
						</div>
				</article>
			</div>
		</div>
	</body>
</html>
<?php
	ob_end_flush();
?>
