<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>

	<?php
		echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

		echo "<br>";
		$navegador = get_browser(null, true);


		echo "<pre>";
		print_r($navegador);
		echo "</pre>";
	?>
	
	<p id="browser"></p>
	
	<script type="text/javascript">
		navigator.sayswho= (function(){
		    var ua= navigator.userAgent, tem, 
		    M= ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
		    if(/trident/i.test(M[1])){
		        tem=  /\brv[ :]+(\d+)/g.exec(ua) || [];
		        return 'IE '+(tem[1] || '');
		    }
		    if(M[1]=== 'Chrome'){
		        tem= ua.match(/\b(OPR|Edge)\/(\d+)/);
		        if(tem!= null) return tem.slice(1).join(' ').replace('OPR', 'Opera');
		    }
		    M= M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
		    if((tem= ua.match(/version\/(\d+)/i))!= null) M.splice(1, 1, tem[1]);
		    return M.join(' ');
		})();

		$("#browser").text(navigator.sayswho);

		console.log(navigator.sayswho); // outputs: `<browser> <version>`		
	</script>
</body>
</html>