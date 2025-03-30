/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './header.php',
    './footer.php',
    './front-page.php',
    './page-menu.php',
    './page-about.php',
    './page.php',
    './template-parts/**/*.php',
    './partials/**/*.php',
    './js/script.js',
  ],
  theme: {
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1300px',
    },
    fontFamily: {
      'sans': ['Poppins', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      'serif': ['Literata', 'ui-serif', 'serif']
    },
    extend: {
      colors: {
        primary: '#D3B17C',
        secondary: '#FFD13C',
        tertiary: '#FFE9A2',
      },
      fontSize: {
        xs: ['13px', '22px'],
      }
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '1.5rem',
        sm: '2rem',
        lg: '2.5rem',
        xl: '5rem',
        '2xl': '6rem',
      },
    },
  },
  plugins: [],
}

