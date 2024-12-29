mix.browserSync({
  injectChanges: true,
  proxy: 'http://127.0.0.1:8000',
  hostname: 'http://127.0.0.1:8000',
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
