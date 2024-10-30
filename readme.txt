=== iOS Alternate Theme ===
Author: Steven Vachon
URL: http://www.svachon.com/
Contact: prometh@gmail.com
Contributors: prometh
Tags: adobe, apple, flash, html, ipad, iphone, ipod, plugin, template
Requires at least: 3.2
Tested up to: 3.2
Stable tag: trunk

Automatically switch to an alternate theme for Apple iOS devices (iPod, iPhone, iPad).


== Description ==

Simply display a different theme to your **[Apple iOS](http://www.apple.com/ios/)** (iPod/iPhone/iPad) users.

Another plugin to check out is **[WPtouch](http://wordpress.org/extend/plugins/wptouch/)**; but depending on your needs, it may be overpowered.

This plugin becomes especially useful with WordPress-powered full-Flash websites. Since Apple has chosen to block Adobe Flash technology, your markets may require an HTML fallback.


== Installation ==

1. Download the plugin (zip file).
2. Upload and activate the plugin through the "Plugins" menu in the WordPress admin.


== Frequently Asked Questions ==

= Why would I want to display a different theme to Apple iOS users? =

You may not. I honestly wouldn't unless I was producing a full-Flash website with WordPress as a backend.

= Why not just use WPtouch? =

Try it! The free version does not currently support iPad, though, and I felt that it was overpowered for my needs.

= Will this change the theme for other concurrent users as well, or just specific users? =

Theme switching is done independently for each concurrent user. You need not worry about non-iOS users seeing the alternate theme.

= Will this work with any theme? =

Yes, but you may need to conform a few technical things. Continue reading for specific cases.

= My widgets and/or menus are not appearing in my alternate theme. What's wrong? =

The internal WordPress `id`'s must match in both themes for menus/widgets to work consistently.

= Can this plugin work with WP Super Cache? =

Yes. Check out this **[WPtouch article](http://www.bravenewcode.com/2009/01/wptouch-and-wp-super-cache/)**.

= Umm, how/where do I set what the alternate theme is? =

At this time, you will have to edit the plugin file itself on line 16. Put in the folder name of the theme. Eventually, I will create a proper UI.

= Will this plugin work for WordPress version x.x.x? =

This plugin has only been tested with versions of WordPress as early as 3.2. For anything older, you'll have to see for yourself.


== Changelog ==

= 0.1 =
* Initial release