<template>
    <div class="opinions">
        <div class="container">
            <div class="opinions-wrap">
                <div class="opinions-h2">
                    Отзывы
                </div>
                <div class="opinions-list">
                    <div class="opinions-item" v-for="opinion in opinions" :key="opinion.id">
                        <header class="opinions-header">
                            <div class="opinions-header-name">
                                {{ opinion.name }}
                            </div>
                            <div class="opinions-header-wrap">
                                <div class="opinions-header-wrap-star" v-for="item in 5" :key="item">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px"
                                        height="20px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                    <g id="Bounding_Boxes">
                                        <path fill="none" d="M0,0h24v24H0V0z"/>
                                        <path fill="none" d="M0,0h24v24H0V0z"/>
                                    </g>
                                    <g id="Outline_1_">
                                        <path d="M12,17.27L18.18,21l-1.64-7.03L22,9.24l-7.19-0.61L12,2L9.19,8.63L2,9.24l5.46,4.73L5.82,21L12,17.27z"/>
                                    </g>
                                    </svg>
                                </div>
                                <div class="opinions-header-wrap-date">
                                    {{ opinion.date }}
                                </div>
                            </div>
                        </header>
                        <section class="opinions-body">
                             {{ opinion.text }} 
                        </section>
                    </div>
                </div>
                <div class="opinions-item-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/40mw5azs-Og?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
                <div class="slider-wrap">
                    <div v-swiper:mySwiper="swiperOption">
                        <div class="swiper-wrapper swiper-wrapper-grad">
                            <div class="swiper-slide" v-for="banner in opinions" :key="banner.id">
                                <div class="banner">
                                    <div class="opinions-item">
                                        <header class="opinions-header">
                                            <div class="opinions-header-name">
                                                {{ banner.name }}
                                            </div>
                                            <div class="opinions-header-wrap">
                                                <div class="opinions-header-wrap-star" v-for="item in 5" :key="item">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px"
                                                        height="20px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                                    <g id="Bounding_Boxes">
                                                        <path fill="none" d="M0,0h24v24H0V0z"/>
                                                        <path fill="none" d="M0,0h24v24H0V0z"/>
                                                    </g>
                                                    <g id="Outline_1_">
                                                        <path d="M12,17.27L18.18,21l-1.64-7.03L22,9.24l-7.19-0.61L12,2L9.19,8.63L2,9.24l5.46,4.73L5.82,21L12,17.27z"/>
                                                    </g>
                                                    </svg>
                                                </div>
                                                <div class="opinions-header-wrap-date">
                                                     {{ banner.date}}
                                                </div>
                                            </div>
                                        </header>
                                        <section class="opinions-body">
                                            {{ banner.text }} 
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination-white" slot="pagination"></div>
                        <!-- <div class="swiper-button-prev button-prev-individ" slot="button-prev"></div>
                        <div class="swiper-button-next button-next-individ" slot="button-next"></div> -->
                    </div>
                </div>
            </div>
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
          opinions: {
              1: {
                  id: 1,
                  name: 'Петров Сергей Борисович',
                  date: '09 мая 2018',
                  text: 'Xочу выразить огромную благодарность за отличную работу  преподавателя Кузнецовой Марии Александровне,  но дочка теперь по этому предмету стала лучшая в классе, очень бы хотелось, чтобы работа данного педагога была отмечена Центром. Вы лучшие  мы еще только готовимся к ЕГЭ'
              },
              2: {
                  id: 2,
                  name: 'Иванов Иван Борисович',
                  date: '11 августа 2017',
                  text: 'Xочу выразить огромную благодарность за отличную работу  преподавателя Кузнецовой Марии Александровне, мы еще только готовимся к ЕГЭ, но уверена, что результат будет неплохой, нам не только подняли обществознание с нуля, но дочка теперь по этому предмету стала лучшая в классе, очень бы хотелось, чтобы работа данного педагога была отмечена Центром.'
              },
              3: {
                  id: 3,
                  name: 'Баранов Сергей Борисович',
                  date: '25 января 2018',
                  text: 'Xочу выразить огромную благодарность за отличную работу  преподавателя Кузнецовой Марии Александровне, мы еще только готовимся к ЕГЭ, но уверена, что результат будет неплохой, нам не только подняли обществознание с нуля, но дочка теперь по этому предмету стала лучшая в классе, очень бы хотелось, чтобы работа данного педагога была отмечена Центром.'
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
.opinions {
    display: flex;
    background-color: rgb(242, 245, 248);
}
.container {
    width: 100%; 
}
.opinions-wrap {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-color: rgb(242, 245, 248);
    padding: 0 10px;
    margin-bottom: 15px;
}
.opinions-h2 {
    font-size: 24px;
    font-weight: 500;
    color: #444;
    border-bottom: 1px solid rgb(217, 225, 233);
    margin: 10px auto;
    margin-bottom: 15px;
    line-height: 30px;
}

.opinions-item-video {
    display: none;
}
.opinions-list {
    display: none;
}
.slide-wrap {
    display: flex;
}
    .opinions-item {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        border-radius: 4px;
        padding: 25px 15px;
        background: linear-gradient(to right, rgba(26, 9, 9, 0.6) 0%, rgba(6, 7, 6, 0.6) 100%);
        background-color: rgba(129,34,25,1);
        background-color: #009cde;
        background-color: rgb(187, 48, 36);
        background-image: radial-gradient(circle farthest-side at 95px 95px,rgb(187, 48, 36),rgba(129,34,25,1) 125%);
        background-image: radial-gradient(circle farthest-side at 95px 95px,#fff,#ececec 125%);
        box-shadow: 0 1px 4px 0 rgba(0,0,0,.14);
        background-color: #fff;
        background-image: none;
        align-items: flex-start;
    }
    .opinions-header-wrap {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .opinions-header-wrap-date {
        display: flex;
        align-items: center;
        color: rgb(153, 153, 153);
        font-weight: 300;
        margin-left: 10px;
    }
    .opinions-body {
        font-weight: 300;
    }
    .opinions-header {
        margin-bottom: 10px;
    }
    .opinions-header-wrap-star {
        display: flex;
        align-items: center;
        color: rgba(252, 164, 1, 0.938);
    }
    .opinions-header-wrap-star>svg {
        fill: currentColor;
    }
@media (min-width: 1200px) {
    .slider-wrap {
        display: none;
    }
    .opinions {
        justify-content: center;
        /* height: 100px; */
    }
    .opinions-h2 {
        font-size: 32px;
        border-bottom: 1px solid rgb(217, 225, 233);
        margin: 42px 0;
        line-height: 47px;
        margin: 40px auto;
    }
    .container {
        width: 1200px; 
    }
    .opinions-list {
        flex-direction: row;
        align-items: flex-start;
        align-items: stretch;
        justify-content: center;
        display: flex;
        /* flex-direction: column;
        align-items: center; */
    }
    .opinions-item {
        padding: 25px 35px;
    }
    .opinions-wrap {
        padding: 0;
    }
    .opinions-item-video {
        display: flex;
        justify-content: center;
        margin: 25px 0;
    }
    .opinions-item {
        width: 30%;
    }
    .opinions-item:nth-child(2) {
        margin: 0 10px;
    }

}
</style>