import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': path.resolve('resources/app.js'),
        },
    },
    build: {
        outDir: path.resolve(__dirname, 'dist'), // Output to 'dist' directory at project root
    },
});
