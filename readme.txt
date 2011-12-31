=== DW ReWrite ===

Contributors: DanielWoolnough
Donate link: http://www.danielwoolnough.com/contact/coffee/
Tags: daniel, woolnough, dw, login, rewrite, htaccess, rewrite api, WordPress, admin, register, forgot, password, pretty URLs, pretty links, 
Requires at least: 3.0
Tested up to: 3.3
Stable tag: 1.4.1

DW ReWrite creates a new ReWrite rule that will allow users to login and access the WP dashboard using "pretty" URLs instead of the regular, default and ugly WP URLs. This plugin takes advantage of the WordPress Rewrite API.

== Description ==

DW ReWrite creates 3 rewrite rules that will allow users to login to WordPress and access the WP Dashboard using a simple, pretty URLs.
To login, you would give users "example.com/login" rather than "example.com/wp-login.php".
To access the Dashboard, users would use "example.com/admin" rather than "example.com/wp-admin".
To register, users would enter "example.com/register" instead of "example.com/wp-login.php?action=register".
(If registration is turned off, users will simply get a message saying "User registration is currently not allowed.").

This is what is called a Pretty URL. It takes advantage of the WordPress Rewrite API.
The WP default links will still work, but having pretty URLs is much better for you, your website users and customers.

I developed this plugin to so you don't need to edit your ".htaccess" file to add the edits into it yourself and risk breaking your website. 
 
== Installation ==

= Method 1 – WordPress Upload =

1. Go to your add new plugins page and click on the upload link.
2. Find where you have downloaded the file and upload it to your website.
3. Activate the plugin once uploaded.
4. Your Done.

= Method 2 – FTP Upload =

1. Extract the downloaded file to your desktop.
2. Upload `dw-rewite` folder to the `/wp-content/plugins/` directory using an FTP client.
3. Activate the plugin through the ‘Plugins’ menu in WordPress
4. Your Done.

= Method 3 – WordPress.org =

1. Go to Plugins > Add New
2. Search “DW ReWrite”
3. Click  “Install Now” and then click “OK”
4. Activate the Plugin and you are done.

== Frequently Asked Questions ==

= Is This Plugin Free? =
Yes, This plugin is free to use and do whatever you want with it, use it on client website or your personal blog.

= I get 404 errors when I try to use a pretty URL =
Yes, I know about this problem. I am working of fixing this. I am still trying to work out what is the source of this problem as this plugin works fine for 99% of people.

== Change Log ==

= 1.4.1 =
* Updated tested to tag to WordPress 3.3

= 1.4 =
* Corrected the function for registration to /register

= 1.3 =
* Reversed prewvious update as it does not work.

= 1.2 =
* Added the function /register
* Added the function /forgot-password

= 1.1 =
* Added Change log,
* Repeated Update Request Fix 
- There was no version number so repeated update requests were sent to users, 
* Updated Installation Methods,
* New FAQ.

= 1.0 =
* Initial Release.