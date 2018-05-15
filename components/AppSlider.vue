<template>
    <div class="slider slider-background">
        <div v-swiper:mySwiper="swiperOption">
            <div class="swiper-wrapper">
            <div class="swiper-slide" v-for="banner in banners" :key="banner.id">
                <div class="banner">
                    <div class="slide-wrap">
                    <img src="~assets/vesna_big_2018.jpg">
                    <div class="slide-wrap-text">
                        {{ banner.text }}
                    </div>
                    <div class="slide-wrap-bottom">
                        <div class="slide-wrap-bottom-wrap">
                        <div class="slide-wrap-bottom-wrap-name">
                            <a :href="banner.link">{{ banner.name }}</a>
                        </div>
                        <div class="slide-wrap-bottom-wrap-info">
                            {{ banner.info }}
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="swiper-pagination" slot="pagination"></div>
            <div class="swiper-button-prev" slot="button-prev"></div>
            <div class="swiper-button-next" slot="button-next"></div>
        </div>
    </div>
</template>

<script>
import Vue from 'vue'
import 'swiper/dist/css/swiper.css'
if (process.browser) {
  const VueAwesomeSwiper = require('vue-awesome-swiper/dist/ssr')
  Vue.use(VueAwesomeSwiper)
}
export default {
    data() {
      return {
        banners: {
          2: {
            id: "1",
            name: "Мадина",
            info: "27 лет, Оренбург",
            text: "Хочу поблагодарить юристов компании за успешное взыскание денежных средств по полученному решению суда! Неустойку получили в полном обьеме! Тот самый случай когда результат превысил ожидания. Спасибо за грамотную работу на каждом этапе, начиная от подготовки и составления документов для суда, заканчивая итоговым решением и получением денег на руки.",
            link: "https://vk.com/id72506129"
          },	  	  
          1: {
            id: "2",
            name: "Альбина",
            info: "31 год, Оренбург",
            text: "Я была дольщиком в строящемся доме. Стройка то замораживалась, то возобновлялась. Я ждала не один год, когда застройщик подберется к строительству моего этажа. Решила вернуть свои деньги, но застройщик отказывался это делать. Тогда я обратилась к специалистам юридической компании «ОренСовет» за помощью в решении моего вопроса. Деньги вернули, из доли я вышла и купила вторичку! Также хочу сказать спасибо за грамотно составленный договор купли-продажи квартиры.",
            link: "https://vk.com/id58497687"
          },
          3: {
            id: "3",
            name: "Николай",
            info: "27 лет, Оренбург",
            text: "Хотелось бы оставить положительный отзыв о работе юриста юридической компании «ОренСовет» Рачилина Сергея Юрьевича в качестве представителя - в общении он всегда убедителен, что является очень ценным качеством, так как связано с умением отстоять интересы клиента. Также понравился его ответственный подход к делу, профессионализм и надежность. Большое спасибо за проделанную работу! В целом также понравилась организованность и стиль работы компании.",
            link: "https://vk.com/id150409915"
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
    }
  }
</script>
 
<style scoped>
</style>