import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/bootstrap.min.css",
                "resources/css/font-awesome.min.css",
                "resources/css/owl.carousel.css",
                "resources/css/owl.theme.default.min.css",
                "resources/css/style.css",
                "resources/js/app.js",
                "resources/js/bootstrap.min.js",
                "resources/js/custom.js",
                "resources/js/jquery.js",
                "resources/js/owl.carousel.min.js",
            ],
            refresh: [
                ...refreshPaths,
                "app/Http/Livewire/**",
                "app/Forms/Components/**",
            ],
        }),
    ],
});
