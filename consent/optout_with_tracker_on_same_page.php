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
<h1>Opt out iframe with tracker included on the parent frame</h1>
<p>This page includes the tracker and the iframe opt out. This means when you opt out we not only expect a third party cookie to be set from the iframe, but also a matomo consent removed cookie if the browser supports `messages`.</p>
<iframe
    style="border: 0; height: 200px; width: 600px;"
    src="<?php echo $matomoUrl ?>/index.php?module=CoreAdminHome&action=optOut&language=en&backgroundColor=&fontColor=&fontSize=&fontFamily="
></iframe>

</body>
</html>