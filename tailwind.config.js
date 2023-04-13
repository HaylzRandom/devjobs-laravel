/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "hsl(180, 29%, 50%)",
                background: "hsl(180, 28%, 35%)",
                hover: "hsl(180, 14%, 20%)",
            },
            fontFamily: {
                sans: ["League Spartan", "sans-serif"],
            },
        },
    },
    plugins: [],
};
