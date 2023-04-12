import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    define: {
        global: "globalThis",
    },
    plugins: [
        laravel({
            input: ['resources/css/app.scss', 'resources/js/*.js'],
            refresh: true,
        }),
    ],
});
