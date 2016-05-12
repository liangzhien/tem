<?php
	$cdnUrl = "";//http://cbuxm.b0.upaiyun.com/
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="full-screen" content="yes">
    <meta name="format-detection" content="telephone=no"/>  
    <meta name="viewport">
    <script>
        var phoneScale = parseInt(window.screen.width)/640;
        document.write('<meta name="viewport" content="width=640, initial-scale = '+phoneScale+', maximum-scale = '+phoneScale+', maximum-scale = '+phoneScale+', target-densitydpi=device-dpi">');
        var cdnUrl  = '<?= $cdnUrl; ?>';
    </script>
    <title>固定宽度模版</title>
    <link rel="stylesheet" href="<?=$cdnUrl?>css/style.css">
    <script src="<?=$cdnUrl?>lib/jquery.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?=$cdnUrl?>js/common.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
    <div class="loading">

    </div>