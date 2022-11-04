// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ["./index.php", "./app/**/*.php", "./resources/**/*.{php,vue,js}"],
  theme: {
    fontFamily: {
      sans: ["News Cycle", "sans-serif"],
    },
    extend: {
      colors: {
        aesyc: {
          background: "linear-gradient(180deg, #DEE600 0%, #ADCC00 100%)",
        },
        primary: {
          0: "#DEE600",
          50: "#DEE500",
          100: "#ADCC00",
        },
        bg1: "#181816",
        bg2: "#262622",
        bg3: "#0D0D0C",

        txPri: "#DBDBD7",

        txSec: "#B7B7AE",
      },
      spacing: {
        "8xl": "96rem",
        "9xl": "128rem",
      },
      borderRadius: {
        "4xl": "2rem",
      },
    },
  },
};
