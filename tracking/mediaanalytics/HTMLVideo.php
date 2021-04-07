<?php include '../../bootstrap.php'; ?>
<html>
<head>
    <!-- Matomo -->
    <script type="text/javascript">
        var _paq = window._paq = window._paq || [];
        _paq.push(['MediaAnalytics::enableDebugMode']);
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
    <!-- End Matomo Code -->
    <style>
        video, audio,iframe {
            width: 100%;
        }
    </style>
</head>
<body>
<h1>MediaAnalytics</h1>
<h2>&lt;video&gt;</h2>
<video controls preload="none" data-matomo-title="Big Buck Bunny">
    <source type="video/webm" src="https://upload.wikimedia.org/wikipedia/commons/transcoded/c/c0/Big_Buck_Bunny_4K.webm/Big_Buck_Bunny_4K.webm.480p.webm">

</video>
<h2>&lt;audio&gt;</h2>
<audio controls preload="none" data-matomo-title="PHP -- Wikipedia Article">
    <source type="audio/ogg" src="https://upload.wikimedia.org/wikipedia/commons/f/fb/En-PHP.ogg">
</audio>

<h2>Youtube</h2>
<iframe width="560" height="315"
        src="https://www.youtube-nocookie.com/embed/Qc2kooLNDiU?enablejsapi=1"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
</body>
</html>
