var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

/**
 * Watch for less file changes
 */
elixir(function(mix) {
    mix.less('app.less');
});

/**
 * Copy jQuery from vendors to public folder
 */
elixir(function(mix) {
    mix.copy('public/vendor/jquery/dist/jquery.min.js', 'public/js/libs/jquery.js');
});

/**
 * Copy Bootstrap CSS, JS and Fonts from vendors to public folder
 */
elixir(function(mix) {
    var bootstrapDir = 'public/vendor/bootstrap/dist/';

    mix.copy(bootstrapDir + 'js/bootstrap.min.js', 'public/js/libs/bootstrap.js');
    mix.copy(bootstrapDir + 'css/bootstrap.min.css', 'public/css/bootstrap.css');
    mix.copy(bootstrapDir + 'css/bootstrap.min.css.map', 'public/css/bootstrap.css.map');
    mix.copy(bootstrapDir + 'fonts', 'public/fonts');
});

/**
 * Copy Fontawesome CSS and Fonts from vendors to public folder
 */
elixir(function(mix) {
    var fontAwesomeDir = 'public/vendor/fontawesome/';

    mix.copy(fontAwesomeDir + 'css/font-awesome.css', 'public/css/font-awesome.css');
    mix.copy(fontAwesomeDir + 'css/font-awesome.css.map', 'public/css/font-awesome.css.map');
    mix.copy(fontAwesomeDir + 'fonts', 'public/fonts');
});

/**
 * Copy AngularJS JS from vendors to public folder
 */
elixir(function(mix) {
    var angularDir = 'public/vendor/angular/';

    mix.copy(angularDir + 'angular.min.js', 'public/js/framework/angular.js');
    mix.copy(angularDir + 'angular.min.js.map', 'public/js/framework/angular.js.map');

    var angularRouteDir = 'public/vendor/angular-route/';

    mix.copy(angularRouteDir + 'angular-route.min.js', 'public/js/framework/angular-route.js');
    mix.copy(angularRouteDir + 'angular-route.min.js.map', 'public/js/framework/angular-route.js.map');

    var angularAnimateDir = 'public/vendor/angular-animate/';

    mix.copy(angularAnimateDir + 'angular-animate.min.js', 'public/js/framework/angular-animate.js');
    mix.copy(angularAnimateDir + 'angular-animate.min.js.map', 'public/js/framework/angular-animate.js.map');
});
