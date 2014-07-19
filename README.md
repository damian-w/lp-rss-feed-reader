RSS Feed 'Reader' for Little Printer
=============
Currentl RSS Source: [The Western Australian - Breaking News](http://au.rss.news.yahoo.com/thewest/breaking.xml)

I bought a Little Printer, plugged it in and discovered there was no Western Australian locialise news feeds! (duh)
So, this is my answer to that dilemma.

About
-----

This is a simple publication for the [Little Printer](http://bergcloud.com/littleprinter/) that pulls information from The Western Australian's Breaking News RSS feed.
Initally, I intended to only write this for use with The Western Australian's RSS Feed in mind; but after completion I've discovered this works very well with practilly any news-based RSS feed I could through at it with minor modification.

Written in PHP using minimal functions and no external requirements or libaries.
I use DOMDocument alongside the XML Manipulation that is within PHP which simply: "getElementsByTagName" (discriptive AND helpful function!)

Obviously I could make this a whole bunch more complicated, but it serves it's purpose well... for now.

How you could use it
--------------------

If you'd like to clone this project and use it yourself, you're more than welcome!

Simply to change the RSS feed source, change the link in functions.php
`$rss->load('http://au.rss.news.yahoo.com/thewest/breaking.xml');`

If you'd like to change the number of items shown, literally just changed the number under `$limit`
`$limit = 5; // ** ITEM LIMIT`

Other than that, dependant on how your RSS feed is formatted you can change the stylising and output.
I'm using `getElementsByTagName()` to grab the infomation I want, and the code in functions.php is relatively easy to read and understand.
The design templates are located in header.php, footer.php and also in functions.php for the items design.

Don't hesitate to contact me if you'd like some help with anything.


How it Works
------------

BERG has a defined [specification](http://remote.bergcloud.com/developers/reference/) for Little Printer which is super helpful.
Explained below is the layout and file structure... the method to my (little) madness.

*	edition/
	*	index.php - processes the main publication (what the user recieves) [edition](http://remote.bergcloud.com/developers/reference/edition)
*	sample/
	*	index.php - generates a "sample" for the BERG Cloud publication viewer, currently identical to the "edition" as we don't need any authentication or data from the viewer - it's just a simple news publication [sample](http://remote.bergcloud.com/developers/reference/sample)
*	validate_config/	
	*	index.php - used in [validating](http://remote.bergcloud.com/developers/reference/validate_config) any user configuration which is then passed to/from BERG (which is none as explained above)
*	meta.json - the configuration of the publication as defined in the [reference documentation](http://remote.bergcloud.com/developers/reference/metajson)
*	icon.png - 55px by 55px icon used in the publication viewer for users to quickly identify the content
*	functions.php - includes all the custom functions and handles practically everything
*	header.php - contains the template for the header section of the publication
*	footer.php - just like the header, contains the footer section template
*	style.css - contains the styling for the publication
*	reset.css - Eric Meyer's Reset CSS v2.0 - used to reset Webkit, which aided in development

Thanks
------

This project was originally cloned from [Alex Forey](https://github.com/alfo) in his [On This Day](https://github.com/alfo/onthisday) Little Printer Publication project...
... that was until I re-wrote most of it. Credit still to Alex for giving me the inital motivation.