<!DOCTYPE html>
<html>
    <head>
        {{ Theme::partial('seostuff') }}
        {{ Theme::asset()->styles() }}
        {{ Theme::partial('defaultcss') }}
        <!-- Google Webfont -->
        <link href='//fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body class="wrapper">
        {{ Theme::partial('header') }}
        <!-- Mid Section Starts -->
        <section class="content data-content">
            {{ Theme::place('content') }}
        </section>
        {{ Theme::partial('footer') }}
        {{ Theme::partial('defaultjs') }}
        {{ Theme::partial('analytic') }}
    </body>
</html>