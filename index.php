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
			.dealer-form textarea {
				width:100%;
				height:80px;
			}
		</style>
	</head>
	<body>

		<button id="add-dealer">Add Your Business</button>


		<?php
			require_once "Field.php";

			function get_shows() {
				return array("Show 1", "Show 2");
			}

			function get_sites() {
				return array("Site 1", "Site 2", "Site 3", "Site 4");
			}

			$shows = get_shows();
			$sites = get_sites(); // return array(0=>"Place", 1=>"Other place", ...)


			$fields = array(
				array("Business Name", "name"),
				array("Show", "show_id", "dropdown", $shows),
				array("Site", "site_id", "dropdown", $sites),
				array("Start Date", "start_date"),
				array("End Date", "end_date"),
				array("Contact Name", "contact_ame"),
				array("Phone #", "phone"),
				array("E-mail", "email"),
				array("Website", "website"),
				array("Business Description", "description", "textarea")
			);
			$form_content = "";
			foreach($fields as $field) {

				$form_content .= Field::getHTML($field);

			}
			// site_id         int
			// show_id         int
			// start_date      date          - datepicker, validation
			// end_date        date          - datepicker, validation
			// name            freeform text
			// contact_name    freeform text
			// phone           freeform text - validation
			// email           freeform text - validation
			// description     freeform text
			// website         freeform text - validation
			// image           upload        - initially not available

		?>



		<div title="Add Business" style="display:none;" id="dealer-dialog">
			<form>
				<table class='dealer-form'>
					<?php echo $form_content; ?>
				</table>
			</form>
		</div>

	</body>
</html>