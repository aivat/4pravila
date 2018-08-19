<template>
  <div class="content-wrap">
    <!-- <AppHeaderTop/> -->
    <AppHeader/>
    <AppSlider v-on:actived-tab="activedTabRule"></AppSlider>
    <AppMarat/>
    <AppProblems/>
    <AppProgress/>
    <AppSale/>
    <AppOt/>
    <AppBanki/>
    <AppWork/>
    <AppContacts/>
    <AppZachem/>
    <AppPlus/>
    <AppFiveShagov/>
    <AppPravila v-bind:initialactive="initialactive"></AppPravila>
    <AppOpinions/>
    <AppFooter/>
    <AppMenuRight class="act"></AppMenuRight>
  </div>
</template>

<script>
import AppHeaderMenuMain from '~/components/AppHeaderMenuMain.vue'
import AppHeader from '~/components/AppHeader.vue'
import AppHeaderTop from '~/components/AppHeaderTop.vue'
import AppSlider from '~/components/AppSlider.vue'
import AppZachem from '~/components/AppZachem.vue'
import AppPlus from '~/components/AppPlus.vue'
import AppFiveShagov from '~/components/AppFiveShagov.vue'
import AppOpinions from '~/components/AppOpinions.vue'
import AppContacts from '~/components/AppContacts.vue'
import AppFooter from '~/components/AppFooter.vue'
import AppPravila from '~/components/AppPravila.vue'
import AppMenuRight from '~/components/AppMenuRight.vue'
import AppMarat from '~/components/AppMarat.vue'
import AppProblems from '~/components/AppProblems.vue'
import AppProgress from '~/components/AppProgress.vue'
import AppSale from '~/components/AppSale.vue'
import AppOt from '~/components/AppOt.vue'
import AppBanki from '~/components/AppBanki.vue'
import AppWork from '~/components/AppWork.vue'

export default {
  data() {
    return {
        initialactive: 0,
        initial: 0
    }
  },
  components: {
    AppHeaderMenuMain,
    AppHeader,
    AppHeaderTop,
    AppSlider,
    AppZachem,
    AppPlus,
    AppFiveShagov,
    AppOpinions,
    AppContacts,
    AppFooter,
    AppPravila,
    AppMenuRight,
    AppMarat,
    AppProblems,
    AppProgress,
    AppSale,
    AppOt,
    AppBanki,
    AppWork
  },
  methods: {
      activedTabRule: function (index) {
        // this.initialactive = index - 1
        this.initial = index - 1
        // console.log('qwe=', this.qwe.initialactive)
    }
  }
}
</script>

<style>
/* 
@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800');
@import url('https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700');
@import url('https://fonts.googleapis.com/css?family=Arimo');
@import url('https://fonts.googleapis.com/css?family=Roboto+Condensed');
@import url('https://fonts.googleapis.com/css?family=EB+Garamond');

@import url('https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:300,400,600,700,800'); */
@font-face {
  font-family: 'Raleway-Bold';
  src: url('~/static/fonts/Raleway-Bold.ttf') format('truetype');
}
@font-face {
  font-family: 'Raleway-Light';
  src: url('~/static/fonts/Raleway-Light.ttf') format('truetype');
}
@font-face {
  font-family: 'Raleway-Medium';
  src: url('~/static/fonts/Raleway-Medium.ttf') format('truetype');
}

/* @font-face {
  font-family: 'AvantGardeGothicC';
  src: url('~/static/fonts/AVG65.pfm') format('PFM');
  src: url('~/static/fonts/AVG65.PFB') format('PFB');
} */

body {
  font-family:  'Raleway-Light','roboto', 'EB Garamond','Yanone Kaffeesatz', 'Roboto Condensed', 'Arimo', 'Open Sans', Source Sans Pro, Arial;
  font-size: 16px;
}
.test {
  height: 500px;
  background-color: rgb(180, 180, 180)
}
.act {
  display: none;
}
@media (min-width: 1024px) {
  .act {
    display: block;
  }
}
</style>
