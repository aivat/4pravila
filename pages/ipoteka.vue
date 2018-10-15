<template>
  <div>
    <AppIpHeader/>
    <AppIpProblems/>
    <AppIpPlus/>
    <AppBanki/>
    <AppIpSix/>
    <!-- <AppMenuRight class="act"></AppMenuRight> -->
  </div>
</template>

<script>
import AppIpHeader from '~/components/ipoteka/AppIpHeader.vue'
import AppIpProblems from '~/components/ipoteka/AppIpProblems.vue'
import AppIpPlus from '~/components/ipoteka/AppIpPlus.vue'
import AppBanki from '~/components/AppBanki.vue'
import AppIpSix from '~/components/ipoteka/AppIpSix.vue'

export default {
  components: {
    AppIpHeader,
    AppIpProblems,
    AppIpPlus,
    AppBanki,
    AppIpSix
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
