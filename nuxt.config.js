module.exports = {
  /*
  ** Headers of the page
  */
  head: {
    title: '4 Правила - Риэлторская компания',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: 'риэлторская компания Оренбурга' }
    ],
    link: [
      { rel: 'icon', type: 'image/png', href: '/icon.png' },
      { rel: 'stylesheet', href: 'https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700' }
    ]
  },
  /*
  ** Customize the progress bar color
  */
  loading: { color: '#812219' },
  /*
  ** Build configuration
  */
  build: {
    /*
    ** Run ESLint on save
    */
    extend (config, { isDev, isClient }) {
      if (isDev && isClient) {
        config.module.rules.push({
          enforce: 'pre',
          test: /\.(js|vue)$/,
          loader: 'eslint-loader',
          exclude: /(node_modules)/
        })
      }
    },
    vendor: ['axios', 'vue-smooth-scroll']
  },
  modules: [
    ['@nuxtjs/yandex-metrika',
      {
        id: '50159560',
        webvisor: true,
        clickmap:true
      }]
  ]
}
