import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/sass/admin/app.scss',
                'resources/js/app.js',
                'resources/js/cart.js',
                'resources/js/admin/app.js',
                'resources/js/admin/list.js',
                'resources/js/admin/show.js',
                'resources/js/admin/file_manager.js',
                'resources/js/trips.js',
                'resources/js/mainPage.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});
