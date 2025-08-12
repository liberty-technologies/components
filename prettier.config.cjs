// prettier.config.js
module.exports = {
    "tailwindStylesheet": "./resources/css/app.css",
    "sortHtmlAttributes": "code-guide",
    "sortTailwindcssClasses": true,
    "plugins": [
        "@shufo/prettier-plugin-blade",
        "prettier-plugin-tailwindcss"
    ],
    "overrides": [
        {
            "files": ["*.blade.php"],
            "options": {
                "parser": "blade"
            }
        }
    ]
};
