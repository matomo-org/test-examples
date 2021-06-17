<?php include '../../bootstrap.php'; ?>
<html>
<head>
    <!-- Matomo -->
    <script type="text/javascript">
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['setVisitorId', makeVisitorId(16)]); // new visitor every time so we can track a new referrer
        _paq.push(['appendToTrackingUrl', 'new_visit=1']);
        _paq.push(['trackPageView']);
        (function() {
            var u="<?php echo $matomoUrl ?>/";
            _paq.push(['setTrackerUrl', u+'matomo.php']);
            _paq.push(['setSiteId', '<?php echo $matomoIdSite ?>']);
        })();

        function makeVisitorId(length) {
            var result           = [];
            var characters       = 'ABCDEFabcdef0123456789';
            var charactersLength = characters.length;
            for (var i = 0; i < length; i++ ) {
                result.push(characters.charAt(Math.floor(Math.random() * charactersLength)));
            }
            return result.join('');
        }
    </script>
    <script type='text/javascript' src="<?php echo $matomoUrl ?>/js/piwik.js"></script>
    <!-- End Matomo Code -->

    <title>page title with an encoded char Ö /^</title>
</head>
<body>
    <h1>URL encoding tracking test</h1>
    <p>Click the links below to track different referrer URLs:</p>
    <div>
        <p>
            <a href="?param1=%C3%96%25%5E%26()%2F">Link 1</a>
        </p>
        <p>
            <a href="?par%26am2=%C3%96%25%5E%26()%2F&p%96aram3=%26">Link 2</a>
        </p>
        <p>
            <a href="?param1=abc&par%26am2=%C3%96%25%5E%26()%2F&p%96aram3=def">Link 3</a>
        </p>
    </div>
</body>
</html>
