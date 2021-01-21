const mix = require('laravel-mix');
const local = require('./assets/js/utils/local-config');
require('laravel-mix-versionhash');
require('laravel-mix-tailwind');

mix.setPublicPath('./build');

mix.webpackConfig({
    externals: {
        "jquery": "jQuery",
    }
});

if (local.proxy) {
    mix.browserSync({
        proxy: local.proxy,
        injectChanges: true,
        open: false,
        files: [
            'build/**/*.{css,js}',
            'templates/**/*.php'
        ]
    });
}

mix.tailwind();
mix.js('assets/js/app.js', 'js');
// mix.js('assets/js/page-home.js', 'js'); // use this format to break down js files per page/template

mix.sass('assets/scss/app.scss', 'css');
// mix.sass('assets/scss/page-home.scss', 'css'); // use this format to break down css files per page/template

if (mix.inProduction()) {
    mix.versionHash();
    mix.sourceMaps();
}
