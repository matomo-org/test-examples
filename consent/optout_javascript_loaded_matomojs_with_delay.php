<?php include '../bootstrap.php'; ?>
<html>
<head>
    <meta charset="utf-8">
    <title>Opt out using OptOutJS. The Tracker is loaded with a delay of multiple seconds</title>

    <!-- Matomo -->
    <script>

        // Test variables
        let loadTracker = true;
        let maxRandomDelay = 10;
        let minRandomDelay = 5;
        // ---

        function loadMatomoTracker() {
            console.log('.. now loading Matomo tracker');
            var _paq = window._paq = window._paq || [];
            _paq.push(['trackPageView']);
            _paq.push(['enableLinkTracking']);
            (function() {
                var u = "<?php echo $matomoUrl ?>/";
                _paq.push(['setTrackerUrl', u+'matomo.php']);
                _paq.push(['setSiteId', '<?php echo $matomoIdSite ?>']);
                var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
                g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
            })();
        }

        if (loadTracker === true)  {
            let randomInterval = (Math.floor((Math.floor(Math.random() * ((maxRandomDelay * 1000) - (minRandomDelay * 1000)) ) + (minRandomDelay * 1000)) / 1000) * 1000);
            setTimeout(function() { loadMatomoTracker() }, randomInterval);
            console.log('delaying Matomo tracker load for '+randomInterval / 1000+' seconds...');
        } else {
            console.log('tracker loading disabled');
        }
    </script>
    <!-- End Matomo Code -->

</head>
<body>
OptOutJS
<br><br>

<div id="matomo-opt-out" style="text-align:center;width:350px;padding:10px">...opt-out loading...</div>
<script src="<?php echo $matomoUrl ?>/index.php?module=CoreAdminHome&action=optOutJS&useCookiesTimeout=10&div=m-opt-out&language=auto&backgroundColor=BBBBFF&fontColor=444444&fontSize=16px&fontFamily=TimesNewRoman&showIntro=1&useCookiesIfNoTracker=1"></script>

</body>
</html>
