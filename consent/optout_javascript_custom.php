<?php include '../bootstrap.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>OptOut using Javascript</title>
    <!-- Matomo -->
    <script type="text/javascript">
        var _paq = window._paq = window._paq || [];
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

</head>
<body>
<h1>OptOut using Javascript</h1>

The default JS out-out as explained on
<a href="https://developer.matomo.org/guides/tracking-javascript-guide#optional-creating-a-custom-opt-out-form">
    https://developer.matomo.org/guides/tracking-javascript-guide#optional-creating-a-custom-opt-out-form
</a>.

<div id="optout-form">
    <p>You may choose not to have a unique web analytics cookie identification number assigned to your computer to avoid
        the aggregation and analysis of data collected on this website.</p>
    <p>To make that choice, please click below to receive an opt-out cookie.</p>

    <p>
        <input type="checkbox" id="optout"/>
        <label for="optout"><strong></strong></label>
    </p>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function (event) {
        function setOptOutText(element) {
            _paq.push([function () {
                element.checked = !this.isUserOptedOut();
                document.querySelector('label[for=optout] strong').innerText = this.isUserOptedOut()
                    ? 'You are currently opted out. Click here to opt in.'
                    : 'You are currently opted in. Click here to opt out.';
            }]);
        }

        var optOut = document.getElementById("optout");
        optOut.addEventListener("click", function () {
            if (this.checked) {
                _paq.push(['forgetUserOptOut']);
            } else {
                _paq.push(['optUserOut']);
            }
            setOptOutText(optOut);
        });
        setOptOutText(optOut);
    });
</script>
