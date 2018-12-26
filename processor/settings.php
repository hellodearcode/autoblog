<?php

$vol = filter_var($_POST["volume"],FILTER_SANITIZE_STRING);
$save = (isset($_POST["save_kwrd"]) && $_POST["save_kwrd"]=="on") ? 1:0;
$seo = filter_var($_POST["seo_difficulty"],FILTER_SANITIZE_STRING);
$lim = filter_var($_POST["word_limit"],FILTER_SANITIZE_STRING);
$job = filter_var($_POST["schedule"],FILTER_SANITIZE_STRING); 
$rank = (isset($_POST["ranktraking"]) && $_POST["ranktraking"] == "on") ? 1:0;
$profiler = (isset($_POST["siteprofiler"]) && $_POST["siteprofiler"]=="on") ? 1:0;
$img = (isset($_POST["insertimage"]) && $_POST["insertimage"]=="on") ? 1:0;
$vid = (isset($_POST["insertvideo"]) && $_POST["insertvideo"]=="on") ? 1:0;
$grammer = (isset($_POST["checkgrammer"]) && $_POST["checkgrammer"]=="on") ? 1:0;


	update_option("autoblog_searchvol",$vol);
	update_option("autoblog_save",$save);
	update_option("autoblog_seo",$seo);
	update_option("autoblog_limit",$lim);
	update_option("autoblog_runjob",$job);
	update_option("autoblog_rank",$rank);
	update_option("autoblog_profiler",$profiler);
	update_option("autoblog_img",$img);
	update_option("autoblog_vid",$vid);
	update_option("autoblog_grammer",$grammer);
echo "<script>alert('settings updated');</script>";
?>