import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

// let host = "primepix.test";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
            publicDirectory: "public",
            buildDirectory: "build",
            // hotFile,
            // detectTls: "primepix.test",
        }),
    ],
});
