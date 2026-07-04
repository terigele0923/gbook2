import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    resolve: {
        alias: {
            'simple-uploader': path.resolve(__dirname, 'resources/static/js/vendor/simple-uploader-stub.js'),
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/static/css/app.css',
                'resources/static/js/app.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
