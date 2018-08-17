import Vue from 'vue'
import vueSmoothScroll from 'vue-smooth-scroll'

if (process.BROWSER_BUILD) {
    Vue.use(vueSmoothScroll)
  }
