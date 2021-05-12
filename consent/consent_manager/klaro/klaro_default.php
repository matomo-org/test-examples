<?php include '../bootstrap.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Consent using Klaro</title>
    <!-- Matomo -->
    <script type="text/plain"
            data-type="application/javascript"
            data-name="matomo">
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        _paq.push(['enableJSErrorTracking']);
        (function () {
            var u = "<?php echo $matomoUrl ?>/";
            _paq.push(['setTrackerUrl', u + 'matomo.php']);
            _paq.push(['setSiteId', '<?php echo $matomoIdSite ?>']);
            var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
            g.type = 'text/javascript';
            g.async = true;
            g.src = u + 'matomo.js';
            s.parentNode.insertBefore(g, s);
        })();




    </script>
    <!-- As the tracking code is not loaded by default, this might be necessary to not break things -->
    <script>var _paq = window._paq = window._paq || [];</script>
    <!-- End Matomo Code -->
    <script defer type="application/javascript"
            src="config.js"></script>
    <script
            defer
            data-config="klaroConfig"
            type="application/javascript"
            src="https://cdn.kiprotect.com/klaro/v0.7/klaro.js">
    </script>

</head>
<body>
<h1>Consent using Klaro</h1>

<button onclick="klaro.show()">Show Klaro again</button>
<button onclick="klaro.getManager().resetConsents()">Reset</button>
</body>
</html>

