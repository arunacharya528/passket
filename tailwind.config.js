/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [require("daisyui")],

    daisyui: {
        themes: [
            {
                light: {
                    primary: "#f89a03",
                    "primary-focus": "#cd8004",
                    "primary-content": "#ffffff",

                    secondary: "#fefefe",
                    "secondary-focus": "#cccccc",
                    "secondary-content": "#000000",

                    accent: "#b40404",
                    "accent-focus": "#980101",
                    "accent-content": "#ffffff",

                    neutral: "#3b424e",
                    "neutral-focus": "#2a2e37",
                    "neutral-content": "#ffffff",

                    "base-100": "#ffffff",
                    "base-200": "#F6F6F6",
                    "base-300": "#ECECEC",
                    "base-content": "#1e2734",

                    info: "#1c92f2",
                    success: "#009485",
                    warning: "#dbd406",
                    error: "#ff5724",

                    "--rounded-box": "1rem",
                    "--rounded-btn": "1.5rem",
                    "--rounded-badge": "1.9rem",

                    "--animation-btn": "0.25s",
                    "--animation-input": "0.2s",

                    "--btn-text-case": "uppercase",
                    "--navbar-padding": "0.5rem",
                    "--border-btn": "1px",
                },
            },
        ],
    },
};
