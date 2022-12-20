module.exports = {
    plugins: [
        require('tailwindcss/nesting'),
        require('postcss-each')({
          plugins: {
            beforeEach: [
              require('tailwindcss'),
              require('autoprefixer')
            ]
          }
        }),
    ]
};
