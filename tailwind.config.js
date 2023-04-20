/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
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
            backgroundImage: {
                "hero-mobile": "url('/public/images/bg-header-mobile.svg')",
                "hero-desktop": "url('/public/images/bg-header-desktop.svg')",
            },
        },
    },
    plugins: [],
};
