import { defineConfig } from 'vite';

export default defineConfig({
    root: '.', // Direktori root proyek
    server: {
        port: 3000, // Port server pengembangan
        open: true, // Secara otomatis membuka browser saat server dijalankan
    },
    build: {
        outDir: 'dist', // Direktori output untuk build produksi
    },
});