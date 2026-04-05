module.exports = {
  content: [
    "./**/*.php",
    './src/**/*.scss',
    './src/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          '50': '#b8ffea',
          '100':' #59ffd8',
          '200':' #0be3bc',
          '300':' #08c7a5',
          '400':' #06ab8d',
          '500':' #048c73',
          '600':' #02715c',
          '700':' #015344',
          '800':' #013a2e',
          '900':' #002019',
          '950':' #00150f',
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