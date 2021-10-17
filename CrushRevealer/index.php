<?php
	$step = isset($_REQUEST['step'])?$_REQUEST['step']:1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CrushRevealer</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #000000;
}
body {
	background-color: #FF99CC;
}
.style1 {font-size: 36px; font-weight: bold;}
.style2 {font-size: small}
a:link {
	color: #FFFFFF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFFFFF;
}
a:hover {
	text-decoration: underline;
	color: #FF0099;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}
.style3 {color: #FF0000}
.style11 {
	font-size: 14px;
	color: #006633;
}
.style13 {color: #FF0099}
.style15 {font-size: small; color: #DB0099; }
.style16 {font-size: small; color: #FF0099; }
-->
</style>
<script type="text/javascript">
	function checkForm(form) {
		if (isNaN(form.txtNUMCHAR.value)) {
			alert("Letters, spaces, symbols are not allowed.");
			form.txtNUMCHAR.value = "5";
		} else {
			var conf = confirm("Continue?");
			if (conf == true) {
				form.submit();
			}
		}
	}
	function checkForm1(form) {
		var found = false;
		for (var i = 0; i < form.length-1; i++) {
			if (isNaN(form.elements[i].value)) {
				alert(form.elements[i].value);
				found = true;
				break;
			}
		}
		if (found == true) {
			alert("Letters, spaces, symbols are not allowed.");
		} else {
			var conf = confirm("Continue?");
			if (conf == true) {
				form.submit();
			}
		}
	}
	function checkForm2(form) {
		var found = false;
		for (var i = 0; i < form.length-1; i++) {
			if (isNaN(form.elements[i].value)) {
				alert(form.elements[i].value);
				found = true;
				break;
			}
		}
		if (found == true) {
			alert("Letters, spaces, symbols are not allowed.");
		} else {
			var conf = confirm("Continue?");
			if (conf == true) {
				form.submit();
			}
		}
	}
</script>
</head>

<body>
<p>&nbsp;</p>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <!--DWLayoutTable-->
  <tr>
    <td width="600" height="54" align="center" valign="middle" bgcolor="#00FF66"><span class="style1"><a href="index.php?step=1">{ CrushREVEALER }</a></span></td>
  </tr>
  <tr>
    <td height="10"></td>
  </tr>
  <tr>
    <td height="34" align="center" valign="middle" bgcolor="#FF99CC"><span class="style11">Just follow the steps carefully and let<br />
    CrushREVEALER reveal your crush in mind!!!</span></td>
  </tr>
	<?php if ($step == 1) { ?>
  <tr>
    <td height="163" valign="top">
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="10" height="9"></td>
        <td width="62"></td>
        <td width="10"></td>
        <td width="508"></td>
        <td width="10"></td>
      </tr>
      <tr>
        <td height="70"></td>
        <td rowspan="2" align="center" valign="middle" bgcolor="#00FF66"><span class="style3">S<br />
      T<br />
      E<br />
      P<br />
      <br />
    1</span></td>
    <td>&nbsp;</td>
      <td align="center" valign="bottom" bgcolor="#00FF66"><span class="style13">How many letters does the<br />
    name/nickname of your crush have?<span class="style2"><br />
    (one word only)</span></span></td>
    <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="73"></td>
        <td>&nbsp;</td>
        <td align="center" valign="top" bgcolor="#00FF66">
          <form id="frmNUMCHAR" name="frmNUMCHAR" method="post" action="index.php?step=2">
            <input type="txtNUMCHAR" name="txtNUMCHAR" style="text-align:center; font-weight:bolder; font-size:28px; color: #FF99CC" value="5" size="5" />
              <br /><input type="button" name="btnGO" value="GO" style="text-align:center; font-weight:bolder; font-size:18px; color: #FF99CC; background-color: #FFFFFF; border: 1px, solid, thin, #000000;" onclick="checkForm(document.frmNUMCHAR);" />
          </form></td>
    <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="11"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>
    </td>
  </tr>
	<?php
		} else if ($step == 2) {
			$letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
			$len = strlen($letters);
			$numchar = $_REQUEST['txtNUMCHAR'];
			if ($len % $numchar != 0) {
				for ($i = 0; $i < ($numchar-($len % $numchar)); $i++) {
					$letters .= "-";
				}
			}
			$len = strlen($letters);
			$lg = $len/$numchar;
			$lettergroup = array();
			$first = 0;
			for ($j = 0; $j < $lg; $j++) {
				$lettergroup[$j] = substr($letters, $first, $numchar);
				$first += $numchar;
			}
	?>
  <tr>
    <td height="163" valign="top">
	<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	  <!--DWLayoutTable-->
      <tr>
        <td width="10" height="10"></td>
        <td width="580"></td>
        <td width="10"></td>
      </tr>
      <tr>
        <td height="28"></td>
        <td valign="middle" bgcolor="#00FF66">&nbsp;<span class="style3">STEP 1</span>: <span class="style16">CrushREVEALER now know your crush's name/nickname has <u class="style1"><?php echo $numchar; ?></u> characters.</span></td>
        <td></td>
      </tr>
      <tr>
        <td height="10"></td>
        <td></td>
        <td></td>
      </tr>
	</table><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF99CC">
      <!--DWLayoutTable-->
      <tr>
        <td width="10" height="10"></td>
        <td width="62"></td>
        <td width="10"></td>
        <td width="31"></td>
        <td width="119"></td>
        <td width="10"></td>
        <td width="348"></td>
        <td width="10"></td>
      </tr>
	</table>
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="10" height="9"></td>
        <td width="62"></td>
        <td width="10"></td>
        <td width="31"></td>
        <td width="119"></td>
        <td width="10"></td>
        <td width="31"></td>
        <td width="317"></td>
        <td width="10"></td>
      </tr>
      <tr>
        <td height="18"></td>
        <td rowspan="5" align="center" valign="middle" bgcolor="#00FF66"><span class="style3">S<br />
      T<br />
      E<br />
      P<br />
      <br />
      2</span></td>
        <td></td>
        <td colspan="2" align="center" valign="bottom" bgcolor="#00FF66"><span class="style14 style13">LETTER GROUPS</span> </td>
    <td></td>
      <td colspan="2" rowspan="3" align="center" valign="middle" bgcolor="#00FF66" class="style15">Now choose where each letter of the name being guessed belong from the groups on the left. </td>
      <td></td>
      </tr>
      <tr>
        <td height="5"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td height="17"></td>
        <td></td>
        <td rowspan="3" valign="top" bgcolor="#00FF66"><!--DWLayoutEmptyCell-->&nbsp;</td>
        <td rowspan="3" valign="middle" bgcolor="#00FF66">
		  <?php echo '<span style="color:#FF0099">';
			for ($k = 0; $k < $lg; $k++) {
				echo ($k+1)." - ".$lettergroup[$k]."<br>";
			} echo '</span>';
		  ?></td>
        <td></td>
        <td></td>
      </tr>
      
      <tr>
        <td height="10"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td height="93"></td>
        <td></td>
        <td></td>
        <td valign="top" bgcolor="#00FF66"><!--DWLayoutEmptyCell-->&nbsp;</td>
        <td valign="middle" bgcolor="#00FF66">
		  <form id="frmLG1" name="frmLG1" method="post" action="index.php?step=3&val=<?php echo $numchar; ?>">
		    <?php echo '<span style="color: #FFFFFF">';
				for ($l = 1; $l <= $numchar; $l++) {
					echo $l.'-'.'<input type="txtLG1[]" name="txtLG1[]" style="text-align:center; font-weight:bolder; color: #FF99CC" value="1" size="5" />&nbsp;&nbsp;';
					if ($l % 3 == 0) {
						echo "<br><br>";
					}
				} echo '</span>';
			?>&nbsp;&nbsp;<input type="button" name="btnGO" value="CONTINUE" style="color: #FF99CC; background-color: #FFFFFF; border: 1px, solid, thin, #000000;" onclick="checkForm1(document.frmLG1)" />
	        </form></td>
      <td></td>
      </tr>
      
      <tr>
        <td height="11"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>
	</td>
  </tr>
	<?php
		} else if ($step == 3) {
			$letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
			$len = strlen($letters);
			$numchar = $_REQUEST['val'];
			if ($len % $numchar != 0) {
				for ($i = 0; $i < ($numchar-($len % $numchar)); $i++) {
					$letters .= "-";
				}
			}
			$len = strlen($letters);
			$lg = $len/$numchar;
			$lettergroup = array();
			$first = 0;
			for ($j = 0; $j < $lg; $j++) {
				$lettergroup[$j] = substr($letters, $first, $numchar);
				$first += $numchar;
			}
			$lettergroup2 = array();
			$arr = "";
			foreach ($_REQUEST['txtLG1'] as $lg1) {
				$lettergroup2[] = $lettergroup[$lg1-1];
				$arr = $arr.$lg1."-";
			}
			$lettergroup3 = array();
			for ($k = 0; $k < $numchar; $k++) {
				$str = "";
				for ($l = 0; $l < $numchar; $l++) {
					$str .= substr($lettergroup2[$l], $k, 1);
				}
				$lettergroup3[] = $str;
			}
	?>
  <tr>
    <td height="163" valign="top">
	<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	  <!--DWLayoutTable-->
      <tr>
        <td width="10" height="10"></td>
        <td width="580"></td>
        <td width="10"></td>
      </tr>
      <tr>
        <td height="28"></td>
        <td valign="middle" bgcolor="#00FF66">&nbsp;<span class="style3">STEP 1</span>: <span class="style16">CrushREVEALER now know your crush's name/nickname has <u class="style1"><?php echo $numchar; ?></u> characters.</span></td>
        <td></td>
      </tr>
      <tr>
        <td height="10"></td>
        <td></td>
        <td></td>
      </tr>
	</table><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF99CC">
      <!--DWLayoutTable-->
      <tr>
        <td width="10" height="10"></td>
        <td width="62"></td>
        <td width="10"></td>
        <td width="31"></td>
        <td width="119"></td>
        <td width="10"></td>
        <td width="348"></td>
        <td width="10"></td>
      </tr>
	</table><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	  <!--DWLayoutTable-->
      <tr>
        <td width="10" height="10"></td>
        <td width="580"></td>
        <td width="10"></td>
      </tr>
      <tr>
        <td height="28"></td>
        <td valign="middle" bgcolor="#00FF66">&nbsp;<span class="style3">STEP 2</span>: <span class="style16">CrushREVEALER is investigating letters from the alphabet.</span></td>
        <td></td>
      </tr>
      <tr>
        <td height="10"></td>
        <td></td>
        <td></td>
      </tr>
	</table><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF99CC">
      <!--DWLayoutTable-->
      <tr>
        <td width="10" height="10"></td>
        <td width="62"></td>
        <td width="10"></td>
        <td width="31"></td>
        <td width="119"></td>
        <td width="10"></td>
        <td width="348"></td>
        <td width="10"></td>
      </tr>
	</table>
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="10" height="9"></td>
        <td width="62"></td>
        <td width="10"></td>
        <td width="31"></td>
        <td width="119"></td>
        <td width="10"></td>
        <td width="348"></td>
        <td width="10"></td>
      </tr>
      <tr>
        <td height="18"></td>
        <td rowspan="5" align="center" valign="middle" bgcolor="#00FF66" class="style3">S<br />
      T<br />
      E<br />
      P<br />
      <br />
      3</td>
        <td></td>
        <td colspan="2" align="center" valign="bottom" bgcolor="#00FF66"><span class="style13">LETTER GROUPS </span></td>
    <td></td>
      <td rowspan="3" align="center" valign="middle" bgcolor="#00FF66" class="style16">Now choose where each letter of the name being guessed belong from the groups on the left. </td>
      <td></td>
      </tr>
      <tr>
        <td height="5"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td height="17"></td>
        <td></td>
        <td rowspan="3" valign="top" bgcolor="#00FF66"><!--DWLayoutEmptyCell-->&nbsp;</td>
        <td rowspan="3" valign="middle" bgcolor="#00FF66">
		  <?php echo '<span style="color:#FF0099">';
			for ($m = 0; $m < $numchar; $m++) {
				echo ($m+1)." - ".$lettergroup3[$m]."<br>";
			} echo '</span>';
		  ?></td>
        <td></td>
        <td></td>
      </tr>
      
      <tr>
        <td height="10"></td>
        <td></td>
        <td></td>
        <td></td>
      <td></td>
      </tr>
      <tr>
        <td height="93"></td>
        <td></td>
        <td></td>
        <td valign="middle" bgcolor="#00FF66">
		<form id="frmLG1" name="frmLG2" method="post" action="index.php?step=4&val=<?php echo $numchar; ?>&arr=<?php echo $arr; ?>">
			<?php echo '<span style="color:#FFFFFF">';
				for ($l = 1; $l <= $numchar; $l++) {
					echo $l.'-'.'<input type="txtLG2[]" name="txtLG2[]" style="text-align:center; font-weight:bolder; color: #FF99CC" value="1" size="5" />&nbsp;&nbsp;';
					if ($l % 3 == 0) {
						echo "<br><br>";
					}
				} echo '</span>';
			?>&nbsp;&nbsp;<input type="button" name="btnGO" value="CONTINUE" style="color: #FF99CC; background-color: #FFFFFF; border: 1px, solid, thin, #000000;" onclick="checkForm2(document.frmLG2)" />
		</form>
		</td>
      <td></td>
      </tr>
      <tr>
        <td height="11"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>
	</td>
  </tr>
	<?php
		} else if ($step == 4) {
			$letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
			$len = strlen($letters);
			$numchar = $_REQUEST['val'];
			if ($len % $numchar != 0) {
				for ($i = 0; $i < ($numchar-($len % $numchar)); $i++) {
					$letters .= "-";
				}
			}
			$len = strlen($letters);
			$lg = $len/$numchar;
			$lettergroup = array();
			$first = 0;
			for ($j = 0; $j < $lg; $j++) {
				$lettergroup[$j] = substr($letters, $first, $numchar);
				$first += $numchar;
			}
			$lettergroup2 = array();
			$arr = explode("-",$_REQUEST['arr']);
			foreach ($arr as $lg2) {
				if ($lg2 != "") {
					$lettergroup2[] = $lettergroup[$lg2-1];
				}
			}
			$lettergroup3 = array();
			for ($k = 0; $k < $numchar; $k++) {
				$str = "";
				for ($l = 0; $l < $numchar; $l++) {
					$str .= substr($lettergroup2[$l], $k, 1);
				}
				$lettergroup3[] = $str;
			}
			$lettergroup4 = array();
			foreach ($_REQUEST['txtLG2'] as $lg3) {
				$lettergroup4[] = $lettergroup3[$lg3-1];
			}
			$crush = "";
			for ($m = 0; $m < $numchar; $m++) {
				$crush .= substr($lettergroup4[$m], $m, 1);
			}
	?>
  <tr>
    <td height="163" valign="top">
	<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	  <!--DWLayoutTable-->
      <tr>
        <td width="10" height="10"></td>
        <td width="580"></td>
        <td width="10"></td>
      </tr>
      <tr>
        <td height="28"></td>
        <td valign="middle" bgcolor="#00FF66">&nbsp;<span class="style3">STEP 1</span>: <span class="style16">CrushREVEALER now know your crush's name/nickname has <u class="style1"><?php echo $numchar; ?></u> characters.</span></td>
        <td></td>
      </tr>
      <tr>
        <td height="10"></td>
        <td></td>
        <td></td>
      </tr>
	</table><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF99CC">
      <!--DWLayoutTable-->
      <tr>
        <td width="10" height="10"></td>
        <td width="62"></td>
        <td width="10"></td>
        <td width="31"></td>
        <td width="119"></td>
        <td width="10"></td>
        <td width="348"></td>
        <td width="10"></td>
      </tr>
	</table><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	  <!--DWLayoutTable-->
      <tr>
        <td width="10" height="10"></td>
        <td width="580"></td>
        <td width="10"></td>
      </tr>
      <tr>
        <td height="28"></td>
        <td valign="middle" bgcolor="#00FF66">&nbsp;<span class="style3">STEP 2</span>: <span class="style16">CrushREVEALER is investigating letters from the alphabet.</span></td>
        <td></td>
      </tr>
      <tr>
        <td height="10"></td>
        <td></td>
        <td></td>
      </tr>
	</table><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF99CC">
      <!--DWLayoutTable-->
      <tr>
        <td width="10" height="10"></td>
        <td width="62"></td>
        <td width="10"></td>
        <td width="31"></td>
        <td width="119"></td>
        <td width="10"></td>
        <td width="348"></td>
        <td width="10"></td>
      </tr>
	</table>
	<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	  <!--DWLayoutTable-->
      <tr>
        <td width="10" height="10"></td>
        <td width="580"></td>
        <td width="10"></td>
      </tr>
      <tr>
        <td height="28"></td>
        <td valign="middle" bgcolor="#00FF66">&nbsp;<span class="style3">STEP 3</span>: <span class="style16">CrushREVEALER is processing the result.</span></td>
        <td></td>
      </tr>
      <tr>
        <td height="10"></td>
        <td></td>
        <td></td>
      </tr>
	</table><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF99CC">
      <!--DWLayoutTable-->
      <tr>
        <td width="10" height="10"></td>
        <td width="62"></td>
        <td width="10"></td>
        <td width="31"></td>
        <td width="119"></td>
        <td width="10"></td>
        <td width="348"></td>
        <td width="10"></td>
      </tr>
	</table><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	  <!--DWLayoutTable-->
      <tr>
        <td width="10" height="10"></td>
        <td width="580"></td>
        <td width="10"></td>
      </tr>
      <tr>
        <td height="28"></td>
        <td valign="middle" bgcolor="#00FF66">&nbsp;<span class="style3">CRUSH</span>: <span class="style16">CrushREVEALER says your crush is <u class="style1"><?php echo $crush; ?></u>!!!</span></td>
        <td></td>
      </tr>
      <tr>
        <td height="10"></td>
        <td></td>
        <td></td>
      </tr>
	</table>
	</td>
  </tr>
	<?php } ?>
</table>
</body>
</html>
