// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ["./index.php", "./app/**/*.php", "./resources/**/*.{php,vue,js}"],
  theme: {
    fontFamily: {
      sans: ["News Cycle", "sans-serif"],
    },
    extend: {
      colors: {
        primary: {
          0: "#DEE500",
          50: "#DEE600",
          100: "#ADCC00",
        },
        secondary: {
          0: "#181816",
          50: "#B7B7AE",
        },
        aesyc: {
          background: "linear-gradient(180deg, #DEE600 0%, #ADCC00 100%)",
        },
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
