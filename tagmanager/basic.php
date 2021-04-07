<?php include '../bootstrap.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tag Manager Testpage</title>
    <!-- Matomo Tag Manager -->
    <script type="text/javascript">
        var _mtm = window._mtm = window._mtm || [];
        _mtm.push({'mtm.startTime': (new Date().getTime()), 'event': 'mtm.Start'});
        var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
        g.type = 'text/javascript';
        g.async = true;
        g.src = 'https://dev.matomo/js/container_<?php echo $matomoTagManagerContainer;?>.js'
        s.parentNode.insertBefore(g, s);
    </script>
    <!-- End Matomo Tag Manager -->
</head>
<body>
<h1>Tag Manager Testpage</h1>
<a href="?mtmPreviewMode=<?php echo $matomoTagManagerContainer;?>">Preview Mode</a>
</body>
</html>
