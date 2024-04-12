import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/views/components/layout.blade.php', 'resources/js/app.js'],
            refresh: true,
            /* detectTls: 'starter.test',  */
        }),
    ],
});
