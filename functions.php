<?php

	/*----------------------------------------------------------*\
	| **** RSS News Feed Reader  for Little Printer by BERG **** |
	+------------------------------------------------------------+
	|      Released under the GNU General Public Licence v2      |
	+------------------------------------------------------------+
	|   Created by Damian Worsdell           http://djw.net.au/  |
	\*----------------------------------------------------------*/
	
	// Set the timezone to the same as the RSS Feed source
	date_default_timezone_set('Australia/Perth');
	
	// Remove the empty lines from the content recieved by the RSS feed
	function removeEmptyLines($string) {
		return preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $string);
	}
	
	// Remove any source / ad tag (in brackets) from the content recieved by the RSS feed
	function removeTag($string) {
		return preg_replace("@\(.*?\)@", "", $string);
	}
	
	// Generate the header section of the publication
	function generateHeader() {
		include '../header.php';
	 // relative URL from /edition and /sample
	}
	
	// Read, format and generate the news stories... (main function)
	function generateContent() {
		$rss = new DOMDocument();
		$rss->load('http://au.rss.news.yahoo.com/thewest/breaking.xml'); // ** RSS FEED
		$feed = array();
		foreach($rss->getElementsByTagName('item') as $node) {
			$item = array(
				'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
				'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
				'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
				'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
			);
			array_push($feed, $item);
		}
		
		$limit = 5; // ** ITEM LIMIT
		
		for ($x = 0; $x < $limit; $x++) {
			$title = removeTag(str_replace(' & ', ' &amp; ', $feed[$x]['title']));
			$link = $feed[$x]['link'];
			$description = $feed[$x]['desc'];
			$date = date('l F d, Y', strtotime($feed[$x]['date']));
			echo '<div class="item">';
			echo '	<span class="title">' . $title . '</span>';
			echo '	<span class="text">' . $description . '</span>';
			echo '</div>';
		}
	}
	
	// Generate the footer section of the publication...
	function generateFooter() {
		include '../footer.php';
	
	}
	
	// Generate an ETag for the BERG Cloud, ensuring BERG doesn't recieve our content more than once
	function littleprinterETag() {
		// Get today's date
		$date = date('d-m-Y');
		// md5 it
		header("ETag: " . md5($date));
	}
	
	// Set the correct character set
	function charset() {
		header("Content-Type: text/html; charset=utf-8");
	}
?>