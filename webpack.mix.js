mix.browserSync({
  injectChanges: true,
  // proxy: 'example.com',
  // hostname: 'example.com',
  port: 3000,
  ignored: /node_modules/,
  files: [
    'config/shop.php',
    'public/**/*.css',
    'resources/**/*',
    'lang/*.json',
    'packages/**/*.{php,css,js}'
  ]
});
