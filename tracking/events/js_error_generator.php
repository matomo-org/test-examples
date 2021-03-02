<?php include '../../bootstrap.php'; ?>
<html>
<head>
    <!-- Matomo -->
    <script type="text/javascript">
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        _paq.push(['enableJSErrorTracking']);
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
<h1>JS error generator</h1>
<p>You can generate different JS error by clicking on the buttons.</p>
<div>
    <button onclick="jsError01()">JS error 1</button>
    <button onclick="jsError02()">JS error 2</button>
    <button onclick="jsError03()">JS error 3</button>
    <button onclick="newPage()">Simulate SPA new page</button>
</div>

<script>
    function jsError01() {
        JSON('');
    }

    function jsError02() {
        let a = b;
    }

    function newPage() {
        _paq.push(['trackPageView']);
    }
</script>
</body>
</html>
