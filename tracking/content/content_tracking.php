<?php include '../../bootstrap.php'; ?>
<html>
<head>
    <!-- Matomo -->
    <script type="text/javascript">
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['trackAllContentImpressions']);
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
<div style="height:calc(100%)">
    <h1>Content Tracking</h1>

    <img src="https://matomo.org/wp-content/uploads/2018/10/matomo-logo-final-1-340x50.png" width="100" height="100" data-track-content/>

    <img src="https://matomo.org/wp-content/uploads/2020/10/836971_HomepageGraphic_Opt1_100820.png" width="100" height="100" data-track-content/>

    <img src="https://matomo.org/wp-content/uploads/2018/10/logo-classic-vs-new-updated.png" width="100" height="100"/>
</div>

<div style="height:30px"></div>

<div>
    <h1>Offscreen</h1>

    <img src="https://matomo.org/wp-content/uploads/2020/03/shutterstock_363729740-3.png" data-track-content/>

    <img src="https://matomo.org/wp-content/uploads/2018/10/0008_Matomo-Browser-Interface-Design-2.5.png"/>
</div>
</body>
</html>
