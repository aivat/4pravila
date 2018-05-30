<template>
    <div class="slider slider-background">
        <div v-swiper:mySwiper="swiperOption">
            <div class="swiper-wrapper swiper-wrapper-grad">
            <div class="swiper-slide" v-for="banner in banners" :key="banner.id">
                <div class="banner">
                    <div class="slide-wrap">
                      <picture>
                        <source :srcset="path(banner.imgDesktop)" media="(min-width: 480px)" alt="banner.name">
                        <img :src="path(banner.imgMobile)" alt="banner.name" height="460px">
                      </picture>
                      <div class="slide-wrap-text">
                        <div class="slide-wrap-text-rule">
                          <div class="slide-wrap-text-rule-wrap">
                            <h3 class="slide-wrap-text-rule-h3">{{ banner.name }}</h3>
                            <div class="slide-wrap-text-rule-rule">{{ banner.text }}</div>
                            <a class="slide-wrap-text-rule-link" href="#pravila" v-on:click="$emit('actived-tab', banner.id)">Подробнее
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 1 20 20">
                                <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/>
                                <path d="M0 0h24v24H0z" fill="none"/>
                            </svg>
                            </a>    
                          </div>
                          <div class="slide-timer">
                            <AppTimer />
                          </div>
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
            name: "ПРАВИЛО № 1",
            info: "27 лет, Оренбург",
            // text: "ГАРАНТИРОВАННАЯ ПРОДАЖА КВАРТИРЫ ЗА 25 ДНЕЙ!",
            text: "Гарантированная продажа квартиры за 25 дней!",
            link: "https://vk.com/id72506129",
            imgMobile: "1",
            imgDesktop: "1_2"
          },	  	  
          2: {
            id: "2",
            name: "ПРАВИЛО № 2",
            info: "31 год, Оренбург",
            // text: "ПОДБОР НЕДВИЖИМОСТИ ЗА 24 ЧАСА. ОФОРМЛЕНИЕ ИПОТЕЧНОЙ ЗАЯВКИ ЗА 2 ЧАСА. 15 БАНКОВ-ПАРТНЕРОВ!",
            text: 'Подбор недвижимости за 24 часа. Оформление ипотечной заявки за 2 часа. 15 банков-партнеров!',
            link: "https://vk.com/id58497687",
            imgMobile: "2",
            imgDesktop: "2_2"
          },
          3: {
            id: "3",
            name: "ПРАВИЛО № 3",
            info: "27 лет, Оренбург",
            // text: "ПРЕДОСТАВЛЕНИЕ ОТЧЕТА О ПРОДЕЛАННОЙ РАБОТЕ ЗА 14 ДНЕЙ!",
            text: 'Предоставление отчета о проделанной работе за 14 дней!',
            link: "https://vk.com/id150409915",
            imgMobile: "3",
            imgDesktop: "3_2"
          },
          4: {
            id: "4",
            name: "ПРАВИЛО № 4",
            info: "27 лет, Оренбург",
            // text: "ПРОДАЖА НЕДВИЖИМОСТИ В ОРЕНБУРГСКОЙ ОБЛАСТИ",
            text: 'Продажа недвижимости в оренбургской области',
            link: "https://vk.com/id150409915",
            imgMobile: "4",
            imgDesktop: "4_2"
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
.slider {
  height: 460px;
}
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
   /* background: linear-gradient(to right, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0.2) 100%);
  background: linear-gradient(to right, rgba(26, 9, 9, 0.6) 0%, rgba(6, 7, 6, 0.6) 100%); */
}
.button-prev-individ, .button-next-individ {
  display: none;
}
.slide-wrap-text-rule {
  /* margin-top: 50px; */
  height: 100%;
  box-sizing: border-box;
  padding: 10px 15px 30px 15px;
  font-weight: 300;
  color: #444;
  color: #fff;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.slide-wrap-text-rule-h3 {
  font-size: 18px;
  font-weight: 400;
  color: black;
}
.slide-wrap-text-rule-rule {
  border-radius: 4px;
  font-size: 20px;
  font-weight: 700;
  padding: 10px 20px;
  /* background-color: #d32f2f;
  background-color: #812319; */
  background-color: #540F08;
  background-color:#612C26;
}
.slide-wrap-text-rule-wrap {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}
.slide-timer {
  display: flex;
  align-items: center;
  justify-content: center;
}
.slide-wrap-text-rule-link {
  margin-top: 20px;
  display: flex;
  align-items: center;
  /* align-items: center;
  align-content: flex-start;
  justify-content: flex-start; */
   /* flex-shrink: 0; */
  /* width: 110px; */
  text-decoration: none;
  color: #fff;
  background-color: rgb(129, 34, 25);
  border-radius: 4px;
  padding: 12px 25px;
}
.slide-wrap-text-rule-link>svg {
  fill: currentColor;
}

.slide-wrap-text-rule-link:hover {
  background-color: rgba(129, 34, 25, .8);
}

@media (min-width: 370px) {
  .slide-wrap-text-rule-rule {
    font-size: 24px;
    padding: 15px 20px;
  }
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
  .slide-wrap-text-rule {
     /* padding: 0 50px; */
  }

}

@media (min-width: 1200px) {
  .slide-wrap-text-rule {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    padding: 0 50px;
    padding-top: 50px;
    width: 1200px;
    /* padding: 0; */
  }
  .slide-wrap-text {
    display: flex;
    justify-content: center;
    
  }
  .slide-wrap-text-rule-link {
     margin-top: 40px;
  }
  .slide-wrap-text-rule-h3 {
    font-size: 36px;
    font-weight: 500;
    margin-top: 0;
  }
  .slide-wrap-text-rule-rule {
    font-size: 36px;
    width: 600px;
  }
  .slide-timer {
    margin-top: 79px;
  }
}

@media (min-width: 1440px) {
  .slide-wrap-text-rule {
    padding: 0;
    padding-top: 50px;
  }
}
</style>