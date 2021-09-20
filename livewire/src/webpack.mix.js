const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require("tailwindcss")
    ]);

mix.webpackConfig({
    stats: {
        hash: true,
        version: true,
        timings: true,
        children: true,
        errors: true,
        errorDetails: true,
        warnings: true,
        chunks: true,
        modules: false,
        reasons: true,
        source: true,
        publicPath: true,
    }
});

mix.browserSync({
    proxy: 'nginx',
    proxy: 'localhost:8000',
    open: false,
    port: 3000,
});
