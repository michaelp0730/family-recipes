<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pellegrini Page | Family Recipes</title>
    <link rel="stylesheet" href="./app.css" />
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif] -->
</head>

<body>
    <?php
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        echo $actual_link;
        echo $_SERVER[REQUEST_URI];
    ?>
    <div class="wrapper recipe-details">
        <h1>Recipe <span>Details</span></h1>

    </div>
</body>
</html>