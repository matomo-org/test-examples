<?php include '../../bootstrap.php'; ?>
<html>
<head>
    <meta charset="iso-8859-1">

    <title>this title has an encoded value Ö</title>

    <!-- Matomo -->
    <script type="text/javascript">
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        (function() {
            var u="<?php echo $matomoUrl ?>/";
            _paq.push(['setTrackerUrl', u+'matomo.php']);
            _paq.push(['setSiteId', '<?php echo $matomoIdSite ?>']);
        })();
    </script>
    <script type='text/javascript' src="<?php echo $matomoUrl ?>/js/piwik.js"></script>
    <!-- End Matomo Code -->
</head>
<body>

 <h1>This page should have an iso-8859-1 encoded character in the URL and page title</h1>

</body>
</html>
