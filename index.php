<?php include 'bootstrap.php'; ?>
<html>
<head>

</head>
<body>
Configured Matomo URL:
<?php echo $matomoUrl; ?>
<br>
Configured Matomo IdSite:
<?php echo $matomoIdSite; ?>
<br>
List of test files:<br>
<ul>
<?php
$dirName = dirname(__FILE__);
$dir = new RecursiveDirectoryIterator($dirName);
$ite = new RecursiveIteratorIterator($dir);
$files = new RegexIterator($ite, '/.+\.php$/', RegexIterator::GET_MATCH);
foreach($files as $file) {
    $filename = ltrim(str_replace($dirName, '', $file[0]), '/');
    if ($filename !== 'index.php' && strpos($filename, 'config/') === false && $filename !== 'bootstrap.php') {
        echo '<li><a href="'.$filename.'">' . $filename . '</li>';
    }
}
?>
</ul>

</body>
</html>