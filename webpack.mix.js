const mix = require('laravel-mix');


mix.sass('resources/assets/sass/app.scss', 'public/assets/css')
    .disableSuccessNotifications();
