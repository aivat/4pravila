//const { resolve } = require('path')
//import path from 'path'
//const { resolve } = require('path')
const path = require('path')
module.exports = function module (moduleOptions) {
  const options = this.options['yandex-analytics'] || moduleOptions

console.log('Айват=',path.resolve(__dirname))

  this.addPlugin({
    src: path.resolve(__dirname, '../plugins/plugin.js'),
    fileName: 'vue-yandex-metrika.js',
    options,
    ssr: false
  })
}