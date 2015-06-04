<?php
error_reporting(0);
        require_once('includes/functions.php');
        require_once('includes/tasks.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<!-- saved from url=(0013)about:internet -->
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="generator" content="PSPad editor, www.pspad.com">
    <title>XAMPP content by hippo</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
    <script type='text/javascript' language='javascript' src='js/mootools.js'></script>
    <script type='text/javascript' language='javascript' src='js/functions.js'></script>
    <script type='text/javascript' language='javascript' src='js/draggableWindow.js'></script>
    <script type='text/javascript' language='javascript' src='msg/msg.js'></script>
    <link rel="stylesheet" href="draggableWindow.css" type="text/css" media="screen">
    <script type='text/javascript' language='javascript' src='js/x.js'></script>
	<script type='text/javascript' language='javascript'>
	//global php variables:
<?php
	echo "	var DOCUMENT_ROOT = '".$htdocsPath."';\n";
	echo "	var WORKING_DISK  = '".str_replace(realpath("/"),"\\","/")."';\n";
?>
	</script>
  </head>
  <body>
	<span class='center'>
		<table cellpadding='0' cellspacing='0' border='0' class='mainTbl'>
		<tr>
			<td><img src='images/headerL.png' border='0'></td>
			<td colspan='2' class='headerTd'><a href='.'><img src='images/logo.png' border='0'></a></td>
			<td><img src='images/headerR.png' border='0'></td>
		</tr>
		<tr>
<?php
	if($_GET['task']=='manageHosts')
	{
?>
    <td class='midL'></td>
	<td colspan='2' class='white'>
<?php
	if(isset($_GET['msg']))
	{
		echo "<div id='msg'>".$_GET['msg']."</div>";
	}
?>
	    <table cellspacing='0' border='0' id='manageHostsTable'>
	        <tbody id='manageHostsTbody'>
	            <?php createManageHostsRows(); ?>
	        </tbody>
	    </table>
	</td>
	<td class='midR'></td>
<?php
	}
	else
	{
?>
<?php
	if(isset($_GET['msg']))
	{
		echo "<td class='midL'></td>";
		echo "<td class='white' colspan='2'>";
		echo "<div id='msg'>".$_GET['msg']."</div>";
		echo "</td>";
		echo "<td class='midR'></td>";
		echo "</tr><tr>";
	}
?>
			<td class='midL'></td>
			<td class='white'>
				<div class='bigButton'>
				    <label>Allow VirtualHosts <input type='checkbox' id='allowVHosts' onchange='javascript:location="?action=VirtualHosts&value="+this.checked;'<?php if($virtualHostsOn){echo "checked";} ?>></label>
				</div>
				<div class='bigButton'>
				    <!--<input type='button' value='Manage VirtualHosts' id='ManageHosts'>-->
				    <a href='?task=manageHosts'>Manage VirtualHosts</a>
				</div>
			</td>
			<td class='white'><span class='center'><?php createLinksTable() ?></span></td>
			<td class='midR'></td>
<?php
	}
?>
		</tr>
		<tr>
			<td><img src='images/footerL.png' border='0'></td>
			<td colspan='2' class='footerTd'><a href="http://janhroch.com/hippos">hippos</a></td>
			<td><img src='images/footerR.png' border='0'></td>
		</tr>
		</table>
	</span>
  </body>
</html>
