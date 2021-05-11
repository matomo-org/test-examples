<?php include '../../bootstrap.php'; ?>
<html lang="en">
<head>
    <title>Outlink Tracking Example</title>
    <!-- Matomo -->
    <script type="text/javascript">
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['setIgnoreClasses', 'ignore-outlink-track'])
        _paq.push(['enableLinkTracking']);
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
<h1>Outlink Tracking</h1>
<p>Click the links to generate link tracking events.</p>

<ul>
    <li><a href="/link/to/nowhere" target="_blank">Link to nowhere on this site</a></li>
    <li><a href="https://matomo.org" target="_blank">External link</a></li>
    <li><a href="https://ieee.org" target="_blank" class="ignore-outlink-track">Ignored External Link</a></li>
    <li>
        <div id="stop-bubbling">
            <a href="https://plugins.matomo.org" target="_blank">External link in element that stops bubbling</a>
        </div>
    </li>
    <li>
        <button id="add-dynamic-link">Create Link via JS</button>
        <div id="dynamic-link-target">

        </div>
    </li>
</ul>

<script>
    (function () {
        var element = document.getElementById('stop-bubbling');
        element.addEventListener('click', function (event) {
            event.stopPropagation();
        });
        element.addEventListener('mouseup', function (event) {
            event.stopPropagation();
        });
        element.addEventListener('mousedown', function (event) {
            event.stopPropagation();
        });
        element.addEventListener('contextmenu', function (event) {
            event.stopPropagation();
        });

        document.getElementById('add-dynamic-link').addEventListener('click', function () {
            document.getElementById('dynamic-link-target').innerHTML = '<a href="https://developer.matomo.org/" target="_blank">Dynamically Generated Link</a>';
        });
    })();
</script>

<div>
</div>
</body>
</html>
