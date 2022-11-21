// https://tailwindcss.com/docs/configuration
module.exports = {
  content: [
    "./index.php",
    "./app/**/*.php",
    "./resources/**/*.{php,vue,js, tsx}",
  ],
  theme: {
    extend: {
      colors: {
        primary: "var(--primary)",
        secondary: "var(--secondary)",
        third: "var(--third)",
        hover: "var(--hover)",
        text: "#333333",
        13: "#131313",
        googleRatingStar: "#e08107",
      }, // Extend Tailwind's default colors
      fontSize: {
        default: ["var(--default-font-size)", "1.5"],
        h2: ["var(--default-h2-size)", "1.2"],
        h1: ["var(--default-h1-size)", "1.2"],
        "4.5xl": "2.5rem",

        //h3: ["28px", "1.2"],
      },
      fontFamily: {
        default: "var(--default-font-family)",
      },
      maxWidth: {
        contentwidth: "750px",
        titleWidth: "850px",
        pageWidth: "1120px",
        "4/5": "80%",
      },
      boxShadow: {
        DEFAULT: "var(--box-shadow)",
      },
      borderRadius: {
        DEFAULT: "var(--border-radius)",
      },
      container: {
        padding: "20px",
        center: true,
      },

      width: {
        checkout: "calc(50% - 16px)",
      },
      keyframes: {
        wiggle: {
          "0%, 100%": { transform: "rotate(-2deg)" },
          "50%": { transform: "rotate(2deg)" },
        },
        rocking: {
          "0%, 100%": { transform: "rotate(0deg)" },
          "25%": { transform: "rotate(0deg)" },
          "50%": { transform: "rotate(2deg)" },
          "75%": { transform: "rotate(-2deg)" },
        },
      },
      animation: {
        rocking: "rocking 2s infinite",
        wiggle: "wiggle 2s ease-in-out infinite",
      },
    },
  },
  plugins: [],
  corePlugins: {
    preflight: false,
  },
};
