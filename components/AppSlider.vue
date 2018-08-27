<template>
    <div class="slider slider-background">
        <div class="link" id="slider"></div>
        <div v-swiper:mySwiper="swiperOption">
            <div class="swiper-wrapper swiper-wrapper-grad">
            <div class="swiper-slide" v-for="banner in banners" :key="banner.id">
                <div class="banner">
                    <div class="slide-wrap">
                      <!-- <picture>
                        <source :srcset="path(banner.imgDesktop)" media="(min-width: 480px)" alt="banner.name">
                        <img :src="path(banner.imgMobile)" alt="banner.name" height="460px">
                      </picture> -->
                      <div class="slide-wrap-text">
                        <div class="slide-wrap-text-rule">
                          <div class="slide-wrap-text-rule-wrap">
                            <div class="slide-wrap-rule">
                              <div class="slide-wrap-rule-top">
                                <picture>
                                  <source srcset="~/assets/img/1x/1.jpg" media="(min-width: 480px)" alt="banner.name">
                                  <img src='~/assets/img/1x/1_2.jpg' :alt="banner.name">
                                </picture>
                                <h3 class="slide-wrap-text-rule-h3">{{ banner.name }}</h3>
                              </div>
                              <picture class="slide-picture">
                                  <source :srcset="path(banner.imgDesktop)" media="(min-width: 480px)" :alt="banner.name">
                                  <img :src="path(banner.imgMobile)" :alt="banner.name">
                              </picture>
                            </div>
                            <div class="slide-wrap-text-rule-rule">{{ banner.text }}</div>
                            <div class="slide-wrap-text-rule-rule-desc">{{ banner.desc }}</div>
                            <div class="slide-wrap-text-cont">
                              <a v-show="banner.isActiveButton" class="slide-wrap-text-rule-link" href="#pravila" @click="showModal = true">{{ banner.buttonText }}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 1 20 20">
                                  <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/>
                                  <path d="M0 0h24v24H0z" fill="none"/>
                              </svg>
                              </a>
                              <!-- <a class="slide-wrap-text-rule-link slide-button" @click="showModal = true">Заказать звонок
                              </a> -->
                            </div>
                          </div>
                          <div class="slide-timer">
                              <picture class="slide-picture-right">
                                  <source :srcset="path(banner.imgDesktop)" media="(min-width: 480px)" :alt="banner.name">
                                  <img :src="path(banner.imgMobile)" :alt="banner.name">
                              </picture>
                            <!-- <AppTimer /> -->
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
        <div class="">
          <AppModalCall v-if="showModal" v-on:close="showModal = false"></AppModalCall>
        </div>
    </div>
</template>

<script>
import AppModalCall  from '~/components/AppModalCall.vue'
import AppTimer from '~/components/AppTimer.vue'
import Vue from 'vue'
import 'swiper/dist/css/swiper.css'
if (process.browser) {
  const VueAwesomeSwiper = require('vue-awesome-swiper/dist/ssr')
  Vue.use(VueAwesomeSwiper)
}
export default {
    components: {
      AppTimer,
      AppModalCall
    },
    data() {
      return {
        showModal: false,
        banners: {
          0: {
            id: "1",
            name: "ПРАВИЛО № 1",
            isActiveButton: true,
            text: "Мы продадим Вашу недвижимость в Оренбурге за 25 дней или стоимость наших услуг уменьшится до 50%",
            desc: "",
            buttonText: "Продать недвижимость за 25 дней",
            imgMobile: "slide1_2",
            imgDesktop: "slide1"
          },	  	  
          1: {
            id: "2",
            name: "ПРАВИЛО № 2",
            isActiveButton: true,
            text: 'Бесплатный подбор недвижимости в Оренбурге и сопровождение сделки юристом',
            desc: "",
            buttonText: "Купить квартиру БЕСПЛАТНО и безопасно",
            imgMobile: "slide2_2",
            imgDesktop: "slide2"
          },
          2: {
            id: "3",
            name: "ПРАВИЛО № 3",
            isActiveButton: false,
            text: 'Профессиональная фото и видео съемка недвижимости. Увеличение количество просмотров покупателей в 2 раза* AVITO',
            desc: "Фотосъемка недвижимости на на зеркальный фотооаппрат Сanon 100D c широкоформатным объективом. Видиосъемка квартиры в формате FULL HD и профессиональный монтаж.",
            buttonText: "",
            imgMobile: "slide3_2",
            imgDesktop: "slide3"
          },
          3: {
            id: "4",
            name: "ПРАВИЛО № 4",
            isActiveButton: false,
            text: 'Предоставление отчета о проделанной работе каждые 10 дней',
            desc: "",
            buttonText: "",
            imgMobile: "slide4_2",
            imgDesktop: "slide4"
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
            return require('~/assets/img/1x/' + name + '.jpg')
        }
    }
  }
</script>
 
<style scoped>
.slider, .banner {
  height: 575px;
}
.slide-wrap {
  position: relative;
  /* background: linear-gradient(to right, rgba(9, 5, 47, .85) 0%, rgba(49, 29, 94, .85) 100%); */
  /* z-index: 100; */
}

.slide-wrap-text {
  width: 100vw;
  /* height: 460px; */
  position: absolute;
  top: 0px;
   /* background: linear-gradient(to right, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0.2) 100%);
  background: linear-gradient(to right, rgba(26, 9, 9, 0.6) 0%, rgba(6, 7, 6, 0.6) 100%); */
}
.button-prev-individ, .button-next-individ {
  display: none;
}
.slide-picture {
  margin-top: 20px;
  margin-bottom: 10px;
}
.slide-picture-right {
  display: none;
}
.slide-wrap-text-rule {
  /* margin-top: 50px; */
  height: 100%;
  box-sizing: border-box;
  padding: 20px 5px 30px 5px;
  font-weight: 300;
  color: #444;
  color: #fff;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  
}
.slide-wrap-rule {
  
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 100%;
}
.slide-wrap-rule-top {
  position: relative;
    display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 100%;
}
.slide-wrap-text-rule-h3 {
  font-size:20px;
  /* font-family: 'Raleway-Bold'; */
  margin: 0;
  font-weight: 500;
  color: white;
  /* color: #444; */
  position: absolute;
  top: 10px;
  /* background-image: url('~/assets/img/1x/1.jpg'); */
  /* height: 68px; */
  text-align: center;
  /* margin-top: 10px; */
  display: flex;
  align-items: center;
  justify-content: center;
}
.slide-wrap-text-rule-rule {
  text-align: center;
  border-radius: 4px;
  font-size: 20px;
  /* font-family: 'Raleway-Bold'; */
  font-weight: 500;
  padding: 10px 20px;
  align-self: center;
  /* background-color: #d32f2f;
  background-color: #812319; */
  /* background-color: #540F08;
  background-color:#612C26; */
  color: #6D6E71;
}
.slide-wrap-text-rule-rule-desc {
  padding: 10px 20px;
  font-size: 18px;
  color: #6D6E71;
  text-align: center;
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
  align-self: center;
}
.slide-wrap-text-rule-link {
  margin-top: 20px;
  display: flex;
  align-items: center;
  text-align: center;
  /* align-items: center;
  align-content: flex-start;
  justify-content: flex-start; */
   /* flex-shrink: 0; */
  /* width: 110px; */
  text-decoration: none;
  color: #fff;
  background-color: rgb(129, 34, 25);
  border-radius: 4px;
  padding: 12px 12px;
  -webkit-user-select: none;  /* Chrome all / Safari all */
  -moz-user-select: none;     /* Firefox all */
  -ms-user-select: none;      /* IE 10+ */
  user-select: none;  
}
.slide-wrap-text-rule-link>svg {
  fill: currentColor;
}

.slide-wrap-text-rule-link:hover {
  background-color: rgba(129, 34, 25, .9);
}
.slide-wrap-text-cont {
  display: flex;
  align-self: center;
}
.slide-button {
  margin-left: 5px;
  background-color: none;
  background: rgba(129, 34, 25, .6);
  background-image: linear-gradient(to right, rgba(3, 3, 3, 0.6) 0%, rgba(0, 0, 0, 0.5) 100%);
  -webkit-tap-highlight-color: rgba(0,0,0,0); 
  -webkit-tap-highlight-color: transparent;
        -webkit-touch-callout: none; 
  -webkit-user-select: none;
    -khtml-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
/* @media (min-width: 1030px) {

} */

@media (min-width: 420px) {
  /* .slider, .banner {
    height: 540px;
  } */
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
  /* .slide-wrap-text-rule {
     padding: 0 50px;
  }  */

}

@media (min-width: 1200px) {
  .slide-wrap-text-rule-rule {
    font-size: 24px;
    padding: 15px 20px;
  }
  .slider, .banner {
    /* height: 570px;
    height: 700px; */
  }
  .slide-wrap-text-rule-link {
    padding: 12px 25px;
    font-size: 18px;
    font-weight: 400;
  }
  .slide-wrap-text-rule {
    padding: 20px 15px 30px 15px; 
  }
  .slide-wrap-text-cont {
    align-self: auto;
  }
  .slider, .banner {
    height: 640px;
  }
    .slide-button {
    display: none;
  }
  .slide-wrap-rule {
    width: auto;
   
  }
  .slide-picture {
    display: none;
  }
  .slide-picture-right {
    display: block;
  }
  .slide-wrap-text-rule {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    padding: 0 50px;
    /* padding-top: 50px; */
    width: 1200px;
    align-items: center;
    /* padding: 0; */
  }
  .slide-wrap-text-rule-rule {
    text-align: start;
  }
  .slide-wrap-text-rule-rule-desc {
    text-align: start;
  }
  .slide-wrap-text {
    display: flex;
    justify-content: center;
    height: 640px;
    align-items: center;
  }
  .slide-wrap-text-rule-link {
     margin-top: 40px;
  }
  .slide-wrap-text-rule-h3 {
    font-size: 36px;
    /* font-size: 44px; */
    font-weight: 500;
    margin-top: 0;
  }
  .slide-wrap-text-rule-rule {
    font-size: 36px;
    font-size: 32px;
    width: 600px;
    padding: 50px 20px;
  }
  .slide-timer {
    margin-right: 130px;
    /* margin-top: 79px; */
  }
}

@media (min-width: 1440px) {
  .slide-wrap-text-rule {
    padding: 0;
    /* padding-top: 50px; */
  }
}
</style>