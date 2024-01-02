// prettier.config.js
module.exports = {
    "tailwindConfig": "tailwind.config.js",
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
