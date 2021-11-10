const mix = require("laravel-mix");

mix.webpackConfig((webpack) => {
    return {
        plugins: [
            new webpack.ProvidePlugin(
                {
                    $: "jquery",
                    jQuery: "jquery",
                    "window.jQuery": "jquery",
                },
                {
                    AOS: "aos",
                }
            ),
        ],
    };
});
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.js("resources/js/vue.js", "public/js").vue({ version: 3 });
mix.js("resources/js/bootstrap.js", "public/js");
mix.js("resources/js/app.js", "public/js").postCss(
    "resources/css/app.css",
    "public/css",
    [
        //
    ]
);

