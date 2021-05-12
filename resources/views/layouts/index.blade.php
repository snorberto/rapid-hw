

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="/pictures/favico.png">
        <title>American Heart Association</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
        <style>
        <?php include '../resources/css/site_template.css' ?>
        </style>

    </head>
    <body id="mainframe">
       
        <header role="banner" class="mainHeader">
            @include("layouts.header")
        </header>
        <div id="content">
            @yield("content")
        </div>
        <footer class="mainFooter">
            @include("layouts.footer")
        </footer>
    </body>
</html>
