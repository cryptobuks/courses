// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ["./index.php", "./app/**/*.php", "./resources/**/*.{php,vue,js}"],
  theme: {
    extend: {
      colors: {
        primary: "var(--primary)",
        secondary: "var(--secondary)",
        text: "#333333",
        13: "#131313",
        googleRatingStar: "#e08107",
      }, // Extend Tailwind's default colors
      fontSize: {
        default: ["var(--default-font-size)", "1.2"],
        h2: ["var(--default-h2-size)", "1.2"],
        h1: ["var(--default-h1-size)", "1.2"],
        //h3: ["28px", "1.2"],
      },
      maxWidth: {
        contentwidth: "850px",
        titleWidth: "850px",
        pageWidth: "1080px",
        "4/5": "80%",
      },
      boxShadow: {
        DEFAULT: "var(--box-shadow)",
      },
      borderRadius: {
        DEFAULT: "var(--border-radius)",
      },

      width: {
        checkout: "calc(50% - 16px)",
      },
      keyframes: {
        wiggle: {
          "0%, 100%": { transform: "rotate(-5deg)" },
          "50%": { transform: "rotate(5deg)" },
        },
      },
      animation: {
        //rocking: "rocking 2s infinite",
        wiggle: "wiggle 3s ease-in-out infinite",
      },
    },
  },
  plugins: [],
  corePlugins: {
    preflight: false,
  },
};
