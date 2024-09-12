/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {
            screens: {
                xs: "390px",
                max: "2200px",
            },
            colors: {
                primary: {
                    400: "#ffffff",
                    500: "#f5f2ed",
                    600: "#eae7e3",
                },
                secondary: {
                    100: "#555555",
                    200: "#242424",
                    400: "#000000",
                    // 600:'#8c6842'
                },
                accent: {
                    200: "#ce9358",
                    400: "#c18b52",
                    600: "#b59a69",
                },

                bgPrimary: "#eae7e3",
                // bgSecondary: "#202e20",
                // bgThird: "#fdf0e2",
                // bgFourth:'#f1cfc3',

                fontWhite: "#ffffff",
                fontBlack: "#222",

                fontPrimary: "#bf9b30",
                // fontSecondary:"#fab6ae",
                // fontThird:"#676e5c"
            },
            fontFamily: {
                heading: ["Playfair Display", "serif"],
                text: ["Montserrat", "sans-serif"],
            },
        },
    },
    plugins: [],
};
