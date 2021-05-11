<?php include '../bootstrap.php'; ?>
<html>
<head>
</head>
<body>
<h1>Widgetize Example</h1>
<div id="widgetIframe"><iframe width="100%" height="350" src="<?php echo $matomoUrl ?>/index.php?module=Widgetize&action=iframe&disableLink=0&widget=1&moduleToWidgetize=Actions&actionToWidgetize=getPageUrls&idSite=<?php echo $matomoIdSite ?>&period=year&date=yesterday&disableLink=1&widget=1&token_auth=<?php echo $matomoViewTokenAuth ?>" scrolling="yes" frameborder="0" marginheight="0" marginwidth="0"></iframe></div>
</body>