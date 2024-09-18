import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import glob from 'glob';

// Encontre todos os arquivos PNG, MP4 e na pasta img
const imgFiles = glob.sync('resources/assets/icons/*.png');
const videoFiles = glob.sync('resources/assets/video/*.mp4');
const imgjpgFiles = glob.sync('resources/assets/img/*.jpg');
const imgsvgFiles = glob.sync('resources/assets/img/*.svg');

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/cadastro-produto.css',
                'resources/css/cardapio.css',
                'resources/css/index.css',
                'resources/css/IndexLayout.css',
                'resources/css/style.css',
                'resources/css/style-login.css',
                'resources/css/dashbord.css',
                'resources/css/settings/variables.css',
                'resources/css/generic/normalize.css',
                'resources/css/generic/reset.css',
                'resources/js/app.js',
                'resources/js/bootstrap.js',
                'resources/js/dashbord.js',
                'resources/js/login.js',
                'resources/js/script.js',
                ...imgFiles,   
                ...videoFiles,
                ...imgjpgFiles,
                ...imgsvgFiles,  
            ],
            refresh: true,
        }),
    ],
    build: {
        manifest: true,
    },
});
