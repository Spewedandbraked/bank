import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({

  base: './', 
    plugins: [
        laravel([
            'resources/js/app.js',
        ]),
        
    ],
    server: { 
        hmr: {
            host: 'localhost',
        },
    }, 

});
