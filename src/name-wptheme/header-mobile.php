<?php 
/*
 * Title Wordpress Theme
 *  Copyright (C) 2012  user
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *  
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *  
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
*/
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html>
<head>
	<title><?php wp_title(''); ?> <?php if(wp_title(' ', false)) { echo '&laquo;'; } ?> <?php bloginfo('name'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	
	<!--
	<meta name="author" content="Author Name" />
	<meta name="author-mail" content="user@mail.com" />
	<meta name="author-msn" content="user@live.com" />
	<meta name="author-skype" content="user" />
	<meta name="author-twitter" content="@user" />
	<meta name="author-irc" content="chat.freenode.net #user" />
	<meta name="author-gadu_gadu" content="user" />
	<meta name="author-phone_wind" content="+01 00000000000" />
	
	<meta name="copyright" content="GNU Affero General Public License" />
	<meta name="source-code" content="https://github.com/user/repository" />
	-->
	
	<meta name="robots" content="index,follow" />
	<meta name="revisit-after" content="3 days" />
	<meta name="rating" content="general" />
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> - Feed RSS" href="http://feeds.feedburner.com/website-id" />
	<link rel="shortcut icon" href="<?php echo site_url(); ?>/favicon.ico" />
	<link rel="icon" href="<?php echo site_url(); ?>/favicon.png" type="image/png" />
	<link rel="icon" href="<?php echo site_url(); ?>/favicon.ico" type="image/ico" />
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/mobile.css" />	
	<?php
		wp_head();
	?>
</head>

<body>
<div id="container">
	<div id="logo"></div>
