<?php 

if(strlen(strstr($_SERVER['HTTP_USER_AGENT'],"curl")) <= 0 ){ // if not a curl request

?>

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Networking With Ice Cream</title>

<!--
	coming soon, our ice cream-based API: $ curl networkingwithicecream.com
-->

<link rel="stylesheet" href="css/icecream.css" />

</head>
<body>

    <h1>Networking <small>with ice cream</small></h1>

	<aside>
		
		<p><img class="icon" src="icons/icon_43961.svg" data-fb="icons/icon_43961.png" onerror="this.src = this.getAttribute('data-fb');"></p>

		<p class="greeting">Something might be coming...</p>
    
		<p>Follow <a href="https://twitter.com/networkingwith">@networkingwith</a> for possible updates.</p>

	</aside>
	
	<footer class="global"><small>"Happy" icon designed by <a href="http://www.thenounproject.com/Julihan">Julien Deveaux</a> from the <a href="http://www.thenounproject.com">Noun Project</a></small></footer>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-615784-34', 'auto');
	  ga('send', 'pageview');
	
	</script>

</body>
</html>

<?php } else {

set_time_limit(0);
sleep(1); ?>

Interested in networking with ice cream? Get in touch via Twitter: @networkingwith

<?php } ?>