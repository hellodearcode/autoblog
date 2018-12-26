<!DOCTYPE html>
<html>
<head>
	<title>Create New Article</title>
</head>
<body>
	<h3>Create New Article <small>(Choose the topic of your article)</small></h3>
	<form method="post">
		<table>
			<tr>
				<td><label for="keyword">Keyword:</label></td>
				<td><input type="text" name="keyword" id="keyword"></td>
			</tr>

			<tr>
				<td><label for="add-keyword">Sub Keyword(s):</label></td>
				<td><textarea maxlength="100" cols="50" rows="3" style="resize: none;" name="add-keyword" id="add-keyword"></textarea></td>
			</tr>

			<tr><td colspan="2"><?php submit_button( "Generate Article", "primary", "home-submit", true ); ?></td></tr>
		</table>
	</form>
</body>
</html>