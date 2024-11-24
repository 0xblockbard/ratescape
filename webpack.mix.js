const mix = require('laravel-mix');
const s3Plugin = require('webpack-s3-plugin');

const tailwindcss = require('tailwindcss');
require('laravel-mix-tailwind');
require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

let webpackPlugins = [];
if (mix.inProduction() && process.env.UPLOAD_S3) {
    webpackPlugins = [
        new s3Plugin({
            include: /.*\.(css|js)$/,
            s3Options: {
                accessKeyId: process.env.AWS_ACCESS_KEY_ID,
                secretAccessKey: process.env.AWS_SECRET_ACCESS_KEY,
                region: process.env.AWS_DEFAULT_REGION,
            },
            s3UploadOptions: {
                Bucket: process.env.AWS_BUCKET,
                CacheControl: 'public, max-age=31536000'
            },
            basePath: 'assets',
            directory: 'public/assets'
        })
    ]
}

// Fonts Files
mix.copyDirectory('resources/assets/fonts', 'public/assets/fonts');

// Admin JS Files
mix.js('resources/assets/js/admin/admin.js', 'public/assets/js/admin');
mix.js('resources/assets/js/admin/content_image_upload.js', 'public/assets/js/admin');
mix.js('resources/assets/js/admin/featured_image_upload.js', 'public/assets/js/admin');
mix.js('resources/assets/js/admin/admin_toggle_pro.js', 'public/assets/js/admin');
mix.js('resources/assets/js/admin/admin_toggle_status.js', 'public/assets/js/admin');
mix.js('resources/assets/js/admin/admin_toggle_custom_slug.js', 'public/assets/js/admin');
mix.js('resources/assets/js/admin/adminDefault.js', 'public/assets/js/admin');

// Default JS Files
mix.js('resources/assets/js/default/default.js', 'public/assets/js/default');
mix.js('resources/assets/js/default/scrollToFixed.js', 'public/assets/js/default');

// Post JS Files
// mix.js('resources/assets/js/post/contentLazyLoad.js', 'public/assets/js/post');

// Delete JS Files
// mix.js('resources/assets/js/delete/delete_items.js', 'public/assets/js/delete');

// Modal JS Files
// mix.js('resources/assets/js/modal/modal.js', 'public/assets/js/modal');
// mix.js('resources/assets/js/modal/closeModal.js', 'public/assets/js/modal');


mix.sass('resources/assets/sass/app.scss', 'public/assets/css', {}, [
    tailwindcss('tailwind.config.js'),
]).options({
    processCssUrls: false,
});

mix.webpackConfig({
    plugins: webpackPlugins
});

// if (mix.inProduction()) {
    mix.version();
// }
