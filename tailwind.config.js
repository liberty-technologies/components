import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

/** @type {import("tailwindcss").Config} */
module.exports = {
    darkMode: "media",
    content: [
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
    plugins: [forms, typography],
};
