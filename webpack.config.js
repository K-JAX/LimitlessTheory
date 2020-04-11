const path = require('path');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')

module.exports = {
  entry: './mesmerize-child/src/index.js',
  output: {
    filename: 'main.js',
    path: path.resolve(__dirname, './mesmerize-child/dist'),
  },
  plugins: [
    new BrowserSyncPlugin({
      // browse to http://localhost:3000/ during development,
      // ./public directory is being served
      host: 'localhost',
      port: 3000,
      proxy: 'http://limitlesstheory.local/',
    //   server: { baseDir: ['mesmerize-child'] }
    })
  ]
};