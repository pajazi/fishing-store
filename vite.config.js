import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    plugins: [
        vue({
            base: null,
            includeAbsolute: false,
        }),
        laravel({
            input: ["resources/js/app.js"],
            refresh: true,
        }),
    ],
});
