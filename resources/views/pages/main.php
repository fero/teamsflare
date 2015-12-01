<!doctype html>
<html lang="en" ng-app="teamsflareApp">
    <head>
        <title>Hello, Teamsflare</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/app.css">
    </head>

    <body ng-controller="mainController">
        <div id="container">
            <header id="header"></header>
            <main id="content">
                <div ng-view></div>
            </main>
            <footer id="footer"></footer>
        </div>

        <script src="js/libs/jquery.js" type="text/javascript"></script>
        <script src="js/libs/bootstrap.js" type="text/javascript"></script>
        <script src="js/framework/angular.js" type="text/javascript"></script>
        <script src="js/framework/angular-route.js" type="text/javascript"></script>
        <script src="js/framework/angular-animate.js" type="text/javascript"></script>

        <script src="js/main.js" type="text/javascript"></script>
    </body>
</html>