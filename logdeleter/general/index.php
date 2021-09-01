<?php include '../../bootstrap.php'; ?>

<?php
// generate matomo.js like in tests/javascript
ob_start();
include '../../../tests/javascript/index.php';
ob_end_clean();
// ../../tests/resources/matomo.test.js?rand=1b3795dc30c2998752fceb20d196f902
?>
<html lang="en">
<head>
    <title>Form Analytics</title>
    <!-- Matomo -->
    <script type="text/javascript">
        var _paq = window._paq = window._paq || [];
        _paq.push(['enableLinkTracking']);
        (function() {
            var u="<?php echo $matomoUrl ?>/";
            _paq.push(['setTrackerUrl', u+'matomo.php']);
            _paq.push(['setSiteId', '<?php echo $matomoIdSite ?>']);

            _paq.push(['trackPageView']);
        })();

    </script>
<!--    <script type='text/javascript' src="--><?php //echo $matomoUrl ?><!--/js/piwik.js"></script>-->
    <script src="../../../tests/resources/matomo.test.js?rand=<?php echo bin2hex(random_bytes(32)); ?>"></script>
    <!-- End Matomo Code -->
</head>
<body>
<h1>Log Deleter Test Generate</h1>
<form action="index.php" name="another">
    <input type="text" name="input1" value="something">
    <input type="text" name="input2" value="else">
    <input type="text" name="input3" value="here">
    <input type="submit" value="Submit">
</form>
<div>
</div>
<script>
    async function auto() {
        await fetch("/matomo.php?fa_vid=NF7NS9&fa_name=autmatically_tracked_form&fa_fv=1&ca=1&idsite=1&rec=1&r=949486&h=13&m=30&s=34&url=http%3A%2F%2Fmatomo.test%2Ftest-examples%2Flogdeleter%2Fgeneral%2Findex.php%3Finput1%3Danother%26input2%3Delse%26input3%3Dhere&urlref=http%3A%2F%2Fmatomo.test%2Ftest-examples%2Flogdeleter%2Fgeneral%2Findex.php%3Finput1%3Dhello%26input2%3Delse%26input3%3Dhere&_id=67372cc1b9f02550&_idn=0&_refts=0&send_image=0&cookie=1&res=1920x1080&pv_id=rXGVnG", {
            "credentials": "include",
            "headers": {
                "Accept": "*/*",
                "Accept-Language": "en-US,en;q=0.5",
                "Content-Type": "application/x-www-form-urlencoded; charset=utf-8"
            },
            "method": "POST",
            "mode": "cors"
        });
    }
    auto();
</script>
</body>
</html>
