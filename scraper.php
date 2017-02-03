<?php
require 'scrapewiki.php';
require 'scrapewiki/simple_html_dom.php';
$MAX_ID = 3;

for($id = 1; $i <= $MAX_ID; $id++)
{
	$MyWebsite = scraperwiki::scrape("http://www.mciindia.org/ViewDetails.aspx?ID=".$id);
	$html  = file_get_html($MyWebsite);
	echo $html;
	
}





?>
