var elixir = require('laravel-elixir');

elixir(function(mix){
    mix.sass('app.scss');

    mix.styles([
        'vendor/normalize.css',
        'app.css'
    ], null, 'public/css'); // default - it looks into the resource folder, this makes it so it looks in the public folder insteadß

    mix.version('public/css/all.css');
    // example js scripts
    // mix.scripts([
    //     'vendor/jquery.js',
    //     'main.js',
    //     'dummy.js'
    // ], 'public/output/scripts.js', 'public/js');

    // for unit testing
    // mix.phpUnit();
});
