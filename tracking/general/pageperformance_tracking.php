<?php include '../../bootstrap.php'; ?>
<html lang="en">
<head>
    <title>Page Performance Tracking Example</title>
    <!-- Matomo -->
    <script type="text/javascript">
        var _paq = window._paq = window._paq || [];
        _paq.push(['trackPageView']);
        _paq.push(['setPagePerformanceTiming', 345, 55]);
        _paq.push(['enableLinkTracking']);
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
<h1>Page Performance Tracking</h1>
<p>We're sending custom page performance timings along a page view tracking request. See the browser developer tools network tab for pf* tracking parameters.</p>

<div>
</div>
</body>
</html>
