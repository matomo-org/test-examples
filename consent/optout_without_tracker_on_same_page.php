<?php include '../bootstrap.php'; ?>
<html>
<head>
</head>
<body>
<h1>Opt out iframe without tracker included on the parent frame</h1>
<p>When you opt out, we expect a third party cookie called "ignore_cookie" to be set by the iframe (on the Matomo domain).</p>
<iframe
    style="border: 0; height: 200px; width: 600px;"
    src="<?php echo $matomoUrl ?>/index.php?module=CoreAdminHome&action=optOut&language=en&backgroundColor=&fontColor=&fontSize=&fontFamily="
></iframe>

</body>
</html>