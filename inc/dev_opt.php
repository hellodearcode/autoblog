<!DOCTYPE html>
<html>
<head>
	<title>Developer Option</title>
</head>
<body>
	<form method="post">
		<table>
			<tr>
				<td><label for="key-kwfinder">API-KEY KWfinder:</label></td>
				<td><input type="text" name="key-kwfinder" id="key-kwfinder" style="width:200%;"></td>
			</tr>

			<tr>
				<td><label for="key-articleforge">API-KEY Articleforge:</label></td>
				<td><input type="text" name="key-articleforge" id="key-articleforge" style="width:200%;"></td>
			</tr>

			<tr>
				<td><label for="key-languagetoolplus">API-KEY LanguageToolPlus:</label></td>
				<td><input type="text" name="key-languagetoolplus" id="key-languagetoolplus" style="width:200%;"></td>
			</tr>

			<tr>
				<td>Customer:</td>
				<td><strong>Free</strong></td>
			</tr>

			<tr><td colspan="2"><?php submit_button( "Save Settings", "primary", "dev-submit", true ); ?></td></tr>
		</table>
	</form>
</body>
</html>