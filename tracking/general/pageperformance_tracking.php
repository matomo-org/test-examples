<?php include '../../bootstrap.php'; ?>
<html lang="en">
<head>
    <title>Page Performance Tracking Example</title>
    <!-- Matomo -->
    <script type="text/javascript">
        var _paq = window._paq = window._paq || [];
        _paq.push(['trackPageView']);
        _paq.push(['setPagePerformanceTiming', 345, 55]);
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u="<?php echo $matomoUrl ?>/";
            _paq.push(['setTrackerUrl', u+'matomo.php']);
            _paq.push(['setSiteId', '<?php echo $matomoIdSite ?>']);

        })();

        setTimeout(function () {

            _paq.push(['setPagePerformanceTiming', 494, 93]);
            _paq.push(['trackPageView']);
        }, 1000);
        setTimeout(function () {

            _paq.push(['trackPageView']);
        }, 2000);
        setTimeout(function () {

            _paq.push(['setPagePerformanceTiming', 1, 2, 3, 4, 5, 6, 7]); // 7 does nothing
            _paq.push(['trackPageView']);
        }, 3000);
        setTimeout(function () {

            _paq.push(['trackPageView']);
        }, 4000);
        setTimeout(function () {

            _paq.push(['setPagePerformanceTiming']); // set nothing
        }, 5000);
        setTimeout(function () {

            _paq.push(['trackPageView']);
        }, 6000);
        setTimeout(function () {

            _paq.push(['setPagePerformanceTiming', 'thisisastring']); // set nothing
            _paq.push(['trackPageView']);
        }, 7000);
    </script>
    <script type='text/javascript' src="<?php echo $matomoUrl ?>/js/piwik.js"></script>
    <!-- End Matomo Code -->
</head>
<body>
<h1>Page Performance Tracking</h1>
<p>We're sending custom page performance timings along a page view tracking request. See the browser developer tools network tab for pf* tracking parameters.</p>
<p>It will also send a second tracking page view request with different page performance values.</p>
<p>Then it will send a third page view request which should not include page performance metrics.</p>
<div>
</div>
</body>
</html>
