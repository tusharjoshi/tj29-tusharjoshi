// tailwind.config.js
import typography from '@tailwindcss/typography';
import forms from '@tailwindcss/forms';
import aspectRatio from '@tailwindcss/aspect-ratio';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Roboto", "sans-serif"],
            },

            fontSize: {
                tiny: "0.813rem",
                md: "1.063rem",
                "5xl": "2.65rem",
                "6xl": "2.75rem",
            },

            maxWidth: {
                xxs: "16rem",
            },

            height: {
                96: "24rem",
            },

            margin: {
                13: "3.25rem",
            },

            padding: {
                full: "100%",
            },

            textDecorationThickness: {
                3: "3px",
            },

            translate: {
                "4/5": "80%",
            },

            animation: {
                orbit: "orbit 2.5s linear infinite",
            },

            keyframes: {
                orbit: {
                    "0%": {
                        transform: "rotate(0deg) translate(-0.25rem) rotate(0deg)",
                    },

                    "100%": {
                        transform: "rotate(360deg) translate(-0.25rem) rotate(-360deg);",
                    },
                },
            },
        },
    },
    plugins: [
        typography,
        forms,
        aspectRatio,
    ],
}
