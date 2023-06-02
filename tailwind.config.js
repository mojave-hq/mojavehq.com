const defaults = require('tailwindcss/defaultTheme');
const plugin = require('tailwindcss/plugin');

module.exports = {
 content: require('fast-glob').sync([
    'source/**/*.{blade.php,blade.md,md,html,vue}',
    '!source/**/_tmp/*' // exclude temporary files
  ],{ dot: true }),
  theme: {
    extend: {
      fontFamily: {
        sans: ['"Inter var"', ...defaults.fontFamily.sans],
      },
      "colors": {
        "mojave": {
          50: "#F2EBF4",
          100: "#E2D4E7",
          200: "#C6AAD0",
          300: "#A97FB8",
          400: "#8B589D",
          500: "#654073",
          600: "#51335C",
          700: "#3D2645",
          800: "#281A2E",
          900: "#140D17",
          950: "#0C070D"
        },
        "stvnrlnd": {
          50: "#E0F7FF",
          100: "#C2F0FF",
          200: "#85E0FF",
          300: "#47D1FF",
          400: "#0AC2FF",
          500: "#0099CC",
          600: "#007AA3",
          700: "#005C7A",
          800: "#003D52",
          900: "#001F29",
          950: "#000F14"
        },
        "sunflower": {
          50: "#FFFCE5",
          100: "#FFF9CC",
          200: "#FFF399",
          300: "#FFED66",
          400: "#FFE733",
          500: "#FFE000",
          600: "#CCB400",
          700: "#998700",
          800: "#665A00",
          900: "#332D00",
          950: "#191700"
        },
        "huntress": {
          50: "#FAE5E5",
          100: "#F5C7C7",
          200: "#EB8E8E",
          300: "#E15656",
          400: "#D02525",
          500: "#991B1B",
          600: "#791515",
          700: "#5B1010",
          800: "#3D0B0B",
          900: "#1E0505",
          950: "#110303"
        },
        "copper": {
          50: "#E1F5F9",
          100: "#C8ECF4",
          200: "#8DD7E8",
          300: "#55C4DD",
          400: "#28A7C3",
          500: "#1C758A",
          600: "#165E6E",
          700: "#114855",
          800: "#0B2F37",
          900: "#06191E",
          950: "#030B0D"
        },
        "kelleyroland": {
          50: "#F1F6EE",
          100: "#E0ECDA",
          200: "#C3DAB9",
          300: "#A4C794",
          400: "#85B36F",
          500: "#699C52",
          600: "#547C41",
          700: "#3F5E31",
          800: "#2B4021",
          900: "#141E10",
          950: "#0B1109"
        }
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    plugin(function({ addBase }) {
      addBase({
        // Used to hide alpine elements before being rendered.
        '[x-cloak]': {
          display: 'none !important'
        },
      })
    }),
  ],
};
