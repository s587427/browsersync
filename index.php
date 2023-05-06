<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>hello</title>
    <link rel="stylesheet" href="/style.css">
    <script src="/index.js"></script>
</head>
<body>

        <h1>hot reload for php use browser-sync 2</h1>
        <script id="__bs_script__">//<![CDATA[
        (function() {
            try {
            var script = document.createElement('script');
            if ('async') {
                script.async = true;
            }
            script.src = 'http://HOST:3000/browser-sync/browser-sync-client.js?v=2.29.1'.replace("HOST", location.hostname);
            if (document.body) {
                document.body.appendChild(script);
            }
            } catch (e) {
            console.error("Browsersync: could not append script tag", e);
            }
        })()
        //]]></script>
</body>
</html>


<?php
require_once __DIR__ . "/src/a.php";