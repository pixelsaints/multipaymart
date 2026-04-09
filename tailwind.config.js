module.exports = {
  content: [
    "./**/*.php",
    './src/**/*.scss',
    './src/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        pri: {
          50: "#eff9ff",
          100: "#dbf1fe",
          200: "#bfe7fe",
          300: "#94d9fc",
          400: "#61c3f9",
          500: "#3ca6f5",
          600: "#268aea",
          700: "#1c6bc9",
          800: "#1f5cae",
          900: "#1f4f89",
          950: "#173154",
        },
        sec: {
          50: "#fef7ee",
          100: "#fdeed7",
          200: "#fad8ae",
          300: "#f6bc7b",
          400: "#f19646",
          500: "#ed7923",
          600: "#de5f18",
          700: "#b84816",
          800: "#933a19",
          900: "#763218",
          950: "#40170a",
        }
      },
    },

    container: {
      center: true,
      padding: '12px',
      screens: {
        sm: '640px',
        md: '768px',
        lg: '1024px',
        xl: '1320px',
        xxl: '1440px'
      }
    }
  },
  plugins: [],
};