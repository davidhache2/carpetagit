<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Enviar datos por url</title>
	<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/journal/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<?php 

$id=$_GET['id'];

switch ($id) {
    case 'es':
        echo "Pablito clavó un clavito";
        break;
    case 'en':
        echo "Peter Piper picked a nail";
        break;
    case 'fr':
        echo "Peter Piper a pris un clou";
        break;
	case 'gr':
        echo "Peter Piper nahm einen Nagel";
        break;
}

?>


</div>
</body>
</html>