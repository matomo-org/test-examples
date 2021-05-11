<?php include '../bootstrap.php'; ?>
<html>
<head>
</head>
<body>
<h1>Widgetize Example</h1>
<div id="widgetIframe"><iframe width="100%" height="350" src="<?php echo $matomoUrl ?>/index.php?module=UsersManager&action=userSettings&idSite=<?php echo $matomoIdSite ?>&period=day&date=yesterday&token_auth=<?php echo $matomoAdminTokenAuth ?>" scrolling="yes" frameborder="0" marginheight="0" marginwidth="0"></iframe></div>
</body>