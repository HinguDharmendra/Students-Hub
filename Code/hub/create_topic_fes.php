<?php session_start();
	if(isset($_SESSION['id']))
	{
		$id = $_SESSION['id'];
	}	
?>
<html>
	<head>
			<title>Forums - Students' HUB</title>
			<meta name="description" content="VJTI Students' dashboard">
			<meta name="keywords" content="VJTI, hub, dashboard, forums, activites, events, notices">
			<meta name="author" content="Deep Shah, Dharmendra Hingu">
			<meta charset="UTF-8">
			<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>
	<?php include('common.php');?>
		<div id="content">
			<h1 id="page-title">Create Forums</h1>
			<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
			<tr>
				<form id="form1" name="form1" method="post" action="add_topic_fes.php">
					<td>
						<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
						<tr>
						<td colspan="3" bgcolor="#E6E6E6"><strong>Create New Topic</strong> </td>
						</tr>
						<tr>
						<td width="14%"><strong>Topic</strong></td>
						<td width="2%">:</td>
						<td width="84%"><input name="topic" type="text" id="topic" size="50" /></td>
						</tr>
						<tr>
						<td valign="top"><strong>Detail</strong></td>
						<td valign="top">:</td>
						<td><textarea name="detail" cols="50" rows="3" id="detail"></textarea></td>
						</tr>
						<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" /></td>
						</tr>
						</table>
					</td>
				</form>
			</tr>
			</table>
		</div>	
	</body>
</html>
		