import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'src/index.css',
                'resources/ts/main.tsx',],
            refresh: true,
        }),{
            name:'blade',
            handleHotUpdate({file,server}){
                if (file.endsWith('blade.php')) {
                    server.ws.send({
                        type:'full-reload',
                        path:'*',
                    });
                }
            }
        },
        react(),
    ],
});