<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script type="text/javascript" src="aw.js"></script>
		<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/cupertino/jquery-ui.css" type="text/css" />
		<title>Antique Weekend</title>
		<style>
			body {
				font-size: 12px;
			}
			.dealer-form th {
				text-align: left;
			}
		</style>
	</head>
	<body>

		<div title="Add Business" style="display:none;" id="dealer-dialog">
			<form>
				<table class='dealer-form'>
					<tr><th>Business name</th><td><input name='dealer' id='dealer' value='' /></td></tr>
					<tr><th>Show site</th><td><input name='dealer1' id='dealer1' value='' /></td></tr>
					<tr><th>Show</th><td><input name='dealer2' id='dealer2' value='' /></td></tr>
					<tr><th>Start date</th><td><input name='dealer3' id='dealer3' value='' /></td></tr>
					<tr><th>End date</th><td><input name='dealer4' id='dealer4' value='' /></td></tr>
				</table>
			</form>
		</div>

	</body>
</html>