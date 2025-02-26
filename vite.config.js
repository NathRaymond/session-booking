import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            buildDirectory: 'build', // Ensure this matches your deployment folder
        }),
    ],
    build: {
        manifest: true,       // Ensure the manifest is generated
        outDir: 'public/build', // Output directory for your assets
        rollupOptions: {
            input: {
                app: 'resources/js/app.js',
            },
        },
    },
});

