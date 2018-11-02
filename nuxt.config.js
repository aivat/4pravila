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
    }
  },
  modules: [
    // ['@nuxtjs/yandex-metrika',
    //   {
    //     id: '50159560',
    //     webvisor: true,
    //     clickmap:true,
    //   }],
    ['@nuxtjs/google-analytics', {
        id: 'UA-22130371-3'
      }],
    ['modules/module', {
        id: '50159560',
        webvisor: true,
        clickmap: true
    }]
  ],
  router: {
    scrollBehavior(to, from, savedPosition) {
      // savedPosition is only available for popstate navigations (back button)
      if (to.hash) {
        return {
          selector: to.hash
          // , offset: { x: 0, y: 10 }
        }
      }
      if (savedPosition) {
        return savedPosition
      }
      return { x: 0, y: 0 }
    }
  },
  plugins: [
    { src: '~/plugins/vue-awesome-swiper', ssr: false },
    { src: '~/plugins/vue-yandex-maps', ssr: false },
    { src: '~/plugins/vue-image-compare', ssr: false }
  ]
}
