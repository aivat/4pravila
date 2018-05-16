<template>
    <div class="slider slider-background">
        <div v-swiper:mySwiper="swiperOption">
            <div class="swiper-wrapper">
            <div class="swiper-slide" v-for="banner in banners" :key="banner.id">
                <div class="banner">
                    <div class="slide-wrap">
                      <picture>
                        <source :srcset="path(banner.imgDesktop)" media="(min-width: 620px)" alt="banner.name">
                        <img :src="path(banner.imgMobile)" alt="banner.name" height="460px">
                      </picture>
                      <div class="slide-wrap-text">
                        <div class="slide-wrap-text-rule">
                          <h3 class="slide-wrap-text-rule-h3">{{ banner.name }}</h3>
                          <div class="slide-wrap-text-rule-rule">{{ banner.text }}</div>
                          <AppTimer/>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="swiper-pagination swiper-pagination-white" slot="pagination"></div>
            <div class="swiper-button-prev button-prev-individ" slot="button-prev"></div>
            <div class="swiper-button-next button-next-individ" slot="button-next"></div>
        </div>
    </div>
</template>

<script>
import AppTimer from '~/components/AppTimer.vue'
import Vue from 'vue'
import 'swiper/dist/css/swiper.css'
if (process.browser) {
  const VueAwesomeSwiper = require('vue-awesome-swiper/dist/ssr')
  Vue.use(VueAwesomeSwiper)
}
export default {
    components: {
      AppTimer
    },
    data() {
      return {
        banners: {
          1: {
            id: "1",
            name: "ПРАВИЛО №1",
            info: "27 лет, Оренбург",
            text: "ГАРАНТИРОВАННАЯ ПРОДАЖА КВАРТИРЫ ЗА 25 ДНЕЙ!",
            link: "https://vk.com/id72506129",
            imgMobile: "1",
            imgDesktop: "1_2"
          },	  	  
          2: {
            id: "2",
            name: "ПРАВИЛО №2",
            info: "31 год, Оренбург",
            text: "Подбор недвижимости за 24 часа. Оформление ипотечной заявки за 2 часа. 15 банков-партнеров!",
            link: "https://vk.com/id58497687",
            imgMobile: "2",
            imgDesktop: "2_2"
          },
          3: {
            id: "3",
            name: "ПРАВИЛО №3",
            info: "27 лет, Оренбург",
            text: "Предоставление отчета о проделанной работе за 14 дней!",
            link: "https://vk.com/id150409915",
            imgMobile: "3",
            imgDesktop: "3_2"
          }
        },
        swiperOption: {
          slidesPerView: 1,
          spaceBetween: 30,
          loop: true,
          pagination: {
            el: '.swiper-pagination',
            clickable: true
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
          }
        }
      }
    },
    methods: {
        path(name) {
            return require('~/assets/' + name + '.jpg')
        }
    }
  }
</script>
 
<style scoped>
.slide-wrap {
  position: relative;
  /* background: linear-gradient(to right, rgba(9, 5, 47, .85) 0%, rgba(49, 29, 94, .85) 100%); */
  /* z-index: 100; */
}

.slide-wrap-text {
  width: 100vw;
  height: 460px;
  position: absolute;
  top: 0px;
   background: linear-gradient(to right, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0.2) 100%);
  background: linear-gradient(to right, rgba(26, 9, 9, 0.5) 0%, rgba(6, 7, 6, 0.5) 100%);
}
.button-prev-individ, .button-next-individ {
  display: none;
}
.slide-wrap-text-rule {
  /* margin-top: 50px; */
  padding: 20px 15px;
  font-weight: 300;
  color: #444;
  color: #fff;
}
.slide-wrap-text-rule-h3 {
  font-size: 18px;
  font-weight: 300;
}
.slide-wrap-text-rule-rule {
  border-radius: 4px;
  font-size: 24px;
  font-weight: 500;
  padding: 10px 15px;
  background-color: #d32f2f;
  background-color: #812319;
  /* background-color: #d32f2f; */
}
@media (min-width: 800px) {
  .button-next-individ {
    display: block;
    outline: none;
    background-image: url('~/assets/svg/outline-arrow_forward_ios-24px.svg');
  }
  .button-prev-individ {
    display: block;
    outline: none;
    background-image: url('~/assets/svg/outline-arrow_back_ios-24px.svg');
  }
  .button-prev-individ:active {
    outline: none;
  }
}
</style>