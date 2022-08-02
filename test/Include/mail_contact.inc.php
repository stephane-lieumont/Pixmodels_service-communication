
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8"/>
    <title>Pixmodels.com</title>
</head>
<body style="background:#FFF; ">
<div align="center" >
    <table width="674" cellpadding="0" cellspacing="0" border="0" style="background:#000; border-bottom:3px solid #990000">
        <tr>
            <td colspan="3" height="11"></td>
        </tr>
		<tr>
            <td width="100" align="center" ><img src="<?php echo CHEMIN_RACINE; ?>pixmodels/Images/logo-pixmodels-graphiste-freelance.png"></td>
        </tr>
    </table>
    <table width="674" cellpadding="0" cellspacing="0" border="0" style="border:1px solid #DDD;">
	    <tr>
            <td colspan="3" height="30"></td>
        </tr>
        <tr>
            <td width="61"></td>
            <td width="440" valign="top"
                style="font-size:14px;color:#707070;font-family:Arial,Helvetica,sans-serif;text-align:left;">
                <span style="margin-top:20px;font-size:26px;color:#990000">Informations client</span><br/><br/>
				<span>Message de la part de <?php echo "<b>".$Nom."</b>"; ?></span><br/>
				<span>Mail: <?php echo "<b>".$Email."</b>"; ?></span><br/>
				<span>Sujet: <?php if($Sujet == ""){ echo "<b>Non renseigné</b>"; }else{ echo"<b>".$Sujet."</b>"; } ?></span><br/><br/>
				<span>Ville: <?php if($Ville == ""){ echo "<b>Non renseigné</b>"; }else{ echo"<b>".$Ville."</b>"; } ?></span><br/>
				<span>Date: <?php if($Date == ""){ echo "<b>Non renseigné</b>"; }else{ echo"<b>".$Date."</b>"; } ?></span><br/>
				<span>Budget: <?php if($Budget == ""){ echo "<b>Non renseigné</b>"; }else{ echo"<b>".$Budget."</b>"; } ?></span><br/>
            </td>
            <td valign="top" align="right">
            </td>
            <td width="35">&nbsp;</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2" align="left" style="font-size:14px;font-family:Arial,Helvetica,sans-serif;color:#707070;">
                <br/>
                <strong style="font-size:16px;">Message: </strong><br/><br/>
				<span style="font-size:14px;">
					<?php echo $Message; ?>
                </span><br/><br/>
                <span style="font-size:12px;">
                    Cordialement,<br/><br/>
                    Messagerie auto de Pixmodels.com<br/><br/>
                </span>
            </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td background="" colspan="2" align="left"
                style="font-size:12px;font-family:Arial,Helvetica,sans-serif;color:#707070; padding:10px; color:#DDD"><br/>
                Ce message vous est adressé automatiquement. Nous vous remercions de ne pas répondre, ni
                d'utiliser cette adresse email.<br/>
                ATTENTION : Ce message est strictement confidentiel. Son intégrité n'est pas assurée
                sur Internet. Si vous n'êtes pas destinataire du message, merci de le détruire.<br/>
            </td>
        </tr>
    </table>
    <br/><br/>
</div>
</body>
</html>

