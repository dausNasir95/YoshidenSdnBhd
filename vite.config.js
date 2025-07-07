import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/style.css','resources/css/app.css', 'resources/js/app.js','resources/js/main.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        host: '0.0.0.0',        // <- ADD THIS
        port: 5173,             // <- (optional, can change if needed)
        strictPort: true,       // <- (optional, avoid port auto-change)
        hmr: {
            // host: '192.168.1.7',  // <- your machine IP address here
        },
    },
});
