<?php include '../bootstrap.php'; ?>
<html>
<head>
    <meta charset="utf-8">
    <title>Opt out using OptOutJS. The tracker is not loaded, only the opt out</title>

</head>
<body>
OptOutJS
<br><br>

<div id="matomo-opt-out" style="text-align:center;width:350px;padding:10px">...opt-out loading...</div>
<script src="<?php echo $matomoUrl ?>/index.php?module=CoreAdminHome&action=optOutJS&useCookiesTimeout=10&div=m-opt-out&language=auto&backgroundColor=BBBBFF&fontColor=444444&fontSize=16px&fontFamily=TimesNewRoman&showIntro=1&useCookiesIfNoTracker=1"></script>

</body>
</html>
