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
      }, // Extend Tailwind's default colors
    },
    fontSize: {
      default: ["var(--default-font-size)", "1.2"],
      h2: ["40px", "1.2"],
      h1: ["48px", "1.2"],
      h3: ["32px", "1.2"],
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
  },
  plugins: [],
  corePlugins: {
    preflight: false,
  },
};
