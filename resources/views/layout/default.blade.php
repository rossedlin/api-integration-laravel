<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 2020-05-13
 * Time: 13:18
 *
 * @var string $cssVersion
 * @var string $jsVersion
 */
?>

        <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Title -->
    <title>API Integration Laravel | A Portfolio Demonstration Piece by Ross Edlin</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="canonical" href="https://www.rossedlin.com/portfolio-sites/api-integration-demo/" />

    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="description" content="API Integration Laravel | A Portfolio Demonstration Piece by Ross Edlin." />

    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="API Integration Laravel | A Portfolio Demonstration Piece by Ross Edlin" />
    <meta property="og:description" content="API Integration Laravel | A Portfolio Demonstration Piece by Ross Edlin." />
    <meta property="og:url" content="https://www.rossedlin.com/portfolio-sites/api-integration-demo/" />
    <meta property="og:site_name" content="Ross Edlin" />

    <meta property="article:modified_time" content="2020-05-27T07:12:00+00:00" />
    <meta property="og:image" content="https://www.rossedlin.com/wp-content/uploads/2020/05/api-integration-450x200-1.jpg" />
    <meta property="og:image:width" content="450" />
    <meta property="og:image:height" content="200" />
    <meta name="twitter:card" content="summary_large_image" />

    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">

    <link href="/css/app.css" rel="stylesheet">
    <script src="/js/app.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .content {
            text-align: center;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row text-center">

        <div class="col-sm-12 mt-5 mb-5">
            <div class="links">
                <a href="https://www.rossedlin.com/" target="_blank">Home</a>
                <a href="https://www.rossedlin.com/portfolio/" target="_blank">Portfolio</a>
                <a href="https://www.rossedlin.com/linkedin" target="_blank">LinkedIn</a>
                <a href="https://github.com/rossedlin/api-integration-demo/blob/master/app/Http/Controllers/ApiIntegrationController.php"
                   target="_blank">GitHub (Source Code)</a>
            </div>
        </div>

        <div class="col-sm-12 mt-5 mb-5">
            <div class="row text-center">
                @yield('content')
            </div>
        </div>

    </div>
</div>
</body>
</html>
