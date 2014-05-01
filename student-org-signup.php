<html>
	<head>
		<style>
			.form_input, #signup_submit {
				float: left;
			}
			.form_label {
				display: inline-block;
				width: 80px;
				text-align: right;
				margin-bottom: 10px;
			}
			#signup_reset {
				margin-left: 85px;
			}
			.form_label, #signup_reset {
				clear:both;
				float: left;
				margin-right: 5px;
			}
		</style>
	</head>
	<body>
		<p id="response"></p>
		<form action="POST">
			<label class="form_label" for="first">First Name:</label><input class="form_input">
			<label class="form_label" for="last">Last Name:</label><input class="form_input">
			<label class="form_label" for="year">Year:</label>
			<select class="form_input id="year" name="year">
				<option value="3" selected>Freshman</option>
				<option value="2">Sophomore</option>
				<option value="1">Junior</option>
				<option value="0">Senior</option>
				<option value="1">Graduate Student</option>
				<option value="-1">Faculty/Staff</option>
			</select>
			<label class="form_label" for="email">JMU Email:</label><input type="text" class="form_input id="email">
			<select class="form_input name="email_host">
				<option value="@dukes.jmu.edu" selected>@dukes.jmu.edu</option>
				<option value="@jmu.edu">@jmu.edu</option>
			</select>
			<input id="signup_reset" type="reset" value="Reset Form">
			<input id="signup_submit" type="submit" value="Submit Form">
		</form>
	<body>
</html>
