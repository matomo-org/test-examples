<?php include '../bootstrap.php'; ?>
<html>
<head>
    <!-- Matomo -->
    <script type="text/javascript">
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u="<?php echo $matomoUrl ?>/";
            _paq.push(['setTrackerUrl', u+'matomo.php']);
            _paq.push(['setSiteId', '<?php echo $matomoIdSite ?>']);

        })();
    </script>
    <script type='text/javascript' src="<?php echo $matomoUrl ?>/matomo.js"></script>
    <!-- End Matomo Code -->
</head>
<body>
<h1>Opt in and out with AjaxOptOut Plugin.</h1>
<p>This page includes the tracker and with the buttons we can optout using the AjaxOptOut plugin. You can see the responses on network tab and check the cookies.</p>
<p>The ignore and track (set cookies) only works properly between secure sites</p>
<div>
    <button onclick="tracked()">Tracked?</button>
    <button onclick="ignore()">Ignore</button>
    <button onclick="track()">Track</button>
</div>

<script>
    function tracked() {
        fetchJsonp('<?php echo $matomoUrl ?>/index.php?module=API&method=AjaxOptOut.isTracked')
            .then(function(response) {
                return response.json()
            }).then(function(json) {
                console.log('parsed json', json)
            }).catch(function(ex) {
                console.log('parsing failed', ex)
            })
    }

    function ignore() {
        fetchJsonp('<?php echo $matomoUrl ?>/index.php?module=API&method=AjaxOptOut.doIgnore');
    }

    function track() {
        fetchJsonp('<?php echo $matomoUrl ?>/index.php?module=API&method=AjaxOptOut.doTrack');
    }
</script>
<script src="https://unpkg.com/fetch-jsonp"></script>
</body>
</html>
