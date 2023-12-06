/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        colors: {
            primary: "#008ECC",
            text: "#666666",
            heading: "#222222",
            light: "#888888",
            border: "#EDEDED",
            bg1: "#F5F5F5",
            bg2: "#F6F6FC",
            yellow1: "#E3BC01",
            yellow2: "#E3BC01",
            bg3: "#F3F9FB",
            line: "#D9D9D9",
            error: "#D25C62",
            success: "#809C13",
            popup: "#3C5077",
        },
        fontFamily: {
            hanken: ["Hanken Grotesk", "sans-serif"],
        },
        extend: {
            display: ["group-focus"],
        },
    },
    plugins: [require("tw-elements/dist/plugin.cjs")],
};
