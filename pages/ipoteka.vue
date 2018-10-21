<template>
  <div>
    <AppIpHeader/>
    <AppIpProblems/>
    <AppIpPlus/>
    <AppIpBanki/>
    <AppIpSix/>
    <AppCallActions/>
    <!-- <AppMenuRight class="act"></AppMenuRight> -->
  </div>
</template>

<script>
import AppIpHeader from '~/components/ipoteka/AppIpHeader.vue'
import AppIpProblems from '~/components/ipoteka/AppIpProblems.vue'
import AppIpPlus from '~/components/ipoteka/AppIpPlus.vue'
import AppIpBanki from '~/components/ipoteka/AppIpBanki.vue'
import AppIpSix from '~/components/ipoteka/AppIpSix.vue'
import AppCallActions from '~/components/AppCallActions.vue'

export default {
  components: {
    AppIpHeader,
    AppIpProblems,
    AppIpPlus,
    AppIpBanki,
    AppIpSix,
    AppCallActions
  },
      mounted: function () {
        console.log('efefefefef12122=')
    }
}
</script>

<style>
.link {
    position: relative;
    top: -60px;
}
body {
  font-family:  'roboto', 'EB Garamond','Yanone Kaffeesatz', 'Roboto Condensed', 'Arimo', 'Open Sans', Source Sans Pro, Arial;
  font-size: 16px;
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
