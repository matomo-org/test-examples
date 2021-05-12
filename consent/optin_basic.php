<?php include '../bootstrap.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Basic Opt-In</title>
    <!-- Matomo -->
    <script type="text/javascript">
        var _paq = window._paq = window._paq || [];
        _paq.push(['requireConsent']);
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
    <style>
        button {
            display: block;
        }
    </style>
    <!-- End Matomo Code -->

</head>
<body>
<h1>Basic Opt-In</h1>

Opt-In without a consent manager as shown on
<a href="https://developer.matomo.org/guides/tracking-consent">
    https://developer.matomo.org/guides/tracking-consent
</a>.

<button id="rememberConsent">rememberConsentGiven</button>
<button id="forgetConsent">forgetConsentGiven</button>
<button id="trackPageView">trackPageView</button>

<script>
    document.getElementById("rememberConsent").addEventListener("click", e => {
        _paq.push(['rememberConsentGiven']);
    })
    document.getElementById("forgetConsent").addEventListener("click", e => {
        _paq.push(['forgetConsentGiven']);
    })
    document.getElementById("trackPageView").addEventListener("click", e => {
        _paq.push(['trackPageView']);
    })
</script>
