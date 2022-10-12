let mix = require('laravel-mix');

mix.postCss("resources/css/ui.css", "public/css", [
        require("tailwindcss"),
    ]);
