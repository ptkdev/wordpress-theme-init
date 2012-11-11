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
	<div id="footer-push"></div>
</div>

<footer id="footer">
	2012 ~ <?php echo date('Y')+1;?><br />
	</div>
</footer>
	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/it_IT/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	  }(document, 'script', 'facebook-jssdk'));
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-XXXXXXXX-1']);
	  _gaq.push(['_setDomainName', '<?php echo $_SERVER["SERVER_NAME"]; ?>']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
	<script src="<?php echo content_url(); ?>/plugins/lightbox/js/jquery-1.7.2.min.js"></script>
	<script src="<?php echo content_url(); ?>/plugins/lightbox/js/lightbox.js"></script>
	<?php 
		wp_footer(); 
		include_once("anti-msie/anti-msie.php");
	?>
</body>
</html>
