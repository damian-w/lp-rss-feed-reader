WA Breaking News for Little Printer
=============
Source: [The Western Australian - Breaking News](http://au.rss.news.yahoo.com/thewest/breaking.xml)

This is a simple publication for the [Little Printer](http://bergcloud.com/littleprinter/) that pulls information from The Western Australian's Breaking News RSS feed.

This project has been cloned from [Alex Forey](https://github.com/alfo) in his [On This Day](https://github.com/alfo/onthisday) Little Printer Publication project.

Scripts
-------

These are the assets defined by the Little Printer [specification](http://remote.bergcloud.com/developers/reference/)

*	edition/
	*	index.php - does the processing for the [edition](http://remote.bergcloud.com/developers/reference/edition)
*	sample/
	*	index.php - does the processing for the [sample](http://remote.bergcloud.com/developers/reference/sample)
*	validate_config/	
	*	index.php - does the [validation](http://remote.bergcloud.com/developers/reference/validate_config) of config passed from BERG
*	meta.json - the configuration as defined in the [docs](http://remote.bergcloud.com/developers/reference/metajson)
*	icon.png - 55px by 55px icon

And these are the rest of them

*	functions.php - includes the functions for scraping data from Wikipedia or the BBC
*	header.php - contains the HTML for the header
*	footer.php - contains the HTML for the footer
*	style.css - the CSS for everything
*	reset.css - Eric Meyer's Reset CSS v2.0
*	phpQuery.php - for parsing the HTML from Wikipedia

Comments
--------

This project is a work in progress.
Feel free to fork or contribute.
Released under the GNU General Public Licence v2.