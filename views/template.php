<!DOCTYPE html>
<html>
<head>
	<title> titulo do site</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/style.css">
</head>
<body>
	<h1>Header do site</h1>
	
	<?php $this->loadViewInTemplate($viewName, $viewData); ?>

	<h2> Footer do site</h2>
</body>
</html>