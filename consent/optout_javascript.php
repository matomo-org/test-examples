<?php include '../bootstrap.php'; ?>
<html>
<head>
    <meta charset="utf-8">
    <title>Out out using regular OptOutJS</title>

    <!-- Matomo -->
    <script>

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
