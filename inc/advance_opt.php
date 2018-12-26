<!DOCTYPE html>
<html>
<head>
	<title>Advance Setup</title>
</head>
<body>
<style type="text/css">
	td{padding: 1em;}
</style>
	<form method="post">
		<table>

			<tr>
				<td><label for="volume">Keywords Search Volume:</label></td>
				<td>
					<select id="volume" name="volume">
						<option value="1000" selected="">less than 1000</option>
						<option value="10000">1000 - 10,000</option>
						<option value="100000">Greater than 10000</option>
					</select>
				</td>
			</tr>

			<tr>
				<td><label for="save_kwrd">Save keyword suggestion:</label></td>
				<td><input type="checkbox" id="save_kwrd" name="save_kwrd"></td>
			</tr>

			<tr>
				<td><label for="seo_difficulty">Seo difficult level:</label></td>
				<td><input type="number" id="seo_difficulty" name="seo_difficulty" min="0" max="50" required=""></td>
			</tr>
			
			<tr>
				<td><label for="word_limit">Words per article:</label></td>
				<td>
					<select id="word_limit" name="word_limit">
						<option value="50" selected="">50</option>
						<option value="200">200</option>
						<option value="500">500</option>
						<option value="750">750</option>
					</select>
				</td>
			</tr>

			<tr>
				<td><label for="schedule">Article release quantity:</label></td>
				<td>
					<select id="schedule" name="schedule">
						<option value="default" selected="">All Direct</option>
						<option value="daily">Daily 1</option>
						<option value="weekly">Weekly 1</option>
						<option value="monthly">Monthly 1</option>
					</select>
				</td>
			</tr>


			<tr>
				<td><label for="ranktraking">Activate ranktraking for every Keyword:</label></td>
				<td><input type="checkbox" id="ranktraking" name="ranktraking"></td>
			</tr>


			<tr>
				<td><label for="siteprofiler">Activate Site Profiler onetimes:</label></td>
				<td><input type="checkbox" id="siteprofiler" name="siteprofiler"></td>
			</tr>


			<tr>
				<td><label for="insertimage">Insert Image in Text:</label></td>
				<td><input type="checkbox" id="insertimage" name="insertimage"></td>
			</tr>

			<tr>
				<td><label for="insertvideo">Insert video in Text:</label></td>
				<td><input type="checkbox" id="insertvideo" name="insertvideo"></td>
			</tr>

			<tr>
				<td><label for="checkgrammer">Check Grammar:</label></td>
				<td><input type="checkbox" id="checkgrammer" name="checkgrammer"></td>
			</tr>

			<tr><td colspan="2"><?php submit_button( "Save Settings", "primary", "settings-submit", true ); ?></td></tr>
		</table>
	</form>

</body>
</html>