<template>
  <div class="container">
    <AppHeaderMenuMain/>
  </div>
</template>

<script>
import AppHeaderMenuMain from '~/components/AppHeaderMenuMain.vue'

export default {
  components: {
    AppHeaderMenuMain
  }
}
</script>

<style>
@import url('https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700');
body {
  font-family: roboto, Source Sans Pro, Arial;
  font-size: 16px;
}
</style>
