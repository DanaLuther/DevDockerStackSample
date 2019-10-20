<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Converting Your DEV Environment to a Docker Stack</title>
</head>
<body>
<div class="jumbotron text-center">
    <h1>Hello, php[world]!</h1>
    <img src="/img/horizontal.png"/> <br/>
	<img src="/img/phpworld2019.png" /><br />
    PHP Version: <?= phpversion(); ?><br/>
	<?php
	if ( extension_loaded( 'mysqli' ) )
	{
		$db = new \mysqli( 'db', 'root', 'phpworld' );
		echo "MySQL Version: " . $db->server_version;
	} else
	{
		echo '<span class="text-danger">MySQL extension is not currently enabled</span>';

	}
	?>
</div>

<div class="text-center">
    <a href="phpinfo.php" class="btn btn-lg btn-primary">Click here to check the php settings</a>
</div>
</body>
</html>