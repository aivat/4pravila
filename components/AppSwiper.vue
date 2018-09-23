<template>
    <div class="ot" id="ot">
        <div class="container">
            <div class="progress-wrap">
                <div class="progress-wrap-caption">
                    <picture>
                        <source srcset="~/assets/img/1x/1.jpg" media="(min-width: 480px)" alt="banner.name">
                        <img src='~/assets/img/1x/1_2.jpg'>
                    </picture>
                    <div class="progress-h2" >Наша команда</div>
                </div>
                <div class="swiper-wrap">
                <div v-swiper:mySwiper="swiperOption">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" v-for="(banner, index) in banners" :key="index" >
                            <div class="slider-wrap">
                                <div class="sl">{{ index}}</div>
                                <picture class="ot-picture">
                                    <source :srcset="path(banner.id)" media="(min-width: 480px)" :alt="banner.id">
                                    <img :src="path(banner.id)" :alt="banner.ud">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="swiper-slide">
                        <div class="sl">Slide1</div>
                        <div class="sl">Slide2</div>
                        <div class="sl">Slide3</div>

                        <div class="sl">Slide4</div>
                        <div class="sl">Slide5</div>
                        <div class="sl">Slide6</div>

                        <div class="sl">Slide7</div>
                        <div class="sl">Slide8</div>
                        <div class="sl">Slide9</div>
                    </div> -->
                    <div class="swiper-pagination swiper-pagination-white" slot="pagination"></div>
                    <div class="swiper-button-prev button-prev-individ" slot="button-prev"></div>
                    <div class="swiper-button-next button-next-individ" slot="button-next"></div>
                </div>
                </div>
                <!-- <div class="swipers-container">
                    <div class="swipers-wrapper" v-bind:style="styleObject">
                        <div class="swipers-slide" v-for="(item, index) in items" :key="item.id">
                            <picture class="ot-picture">
                                <source :srcset="path(item.id)" media="(min-width: 480px)" :alt="item.id">
                                <img :src="path(item.id)" :alt="item.ud">
                            </picture>
                            <div>{{ index }}</div>
                        </div>
                    </div>
                    <div class="swipers-pagination"></div>
                    <div class="swipers-navigation">
                        <div class="swipers-button-prev">
                            <button @click="flipover(-1)">Влевл</button>
                        </div>
                        <div class="swipers-button-next" >    
                            <button @click="flipover(1)">Вправо</button>
                        </div>
                    </div>
                </div> -->
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
          banners: {
            0: { id: "11", resh: 'Нашли покупателя за 24 часа за 1 750 000 рублей. Продали с первого показа.' }, 
            1: { id: "11", resh: 'Продана за 4 дней по цене 2 850 000 рублей. Квартиры была продана за  3 просмотра.' },
            2: { id: "11", resh: 'Было  организовано 5 показов квартиры покупателям. Квартира продалась за 21 день по цене 2 300 000 рублей.' },
            3: { id: "11", resh: 'Дом с земельным участком были проданы за 1 750 000 в течении 2-ух месяцев. ' },
            4: { id: "11", resh: 'Нашли покупателя за 24 часа за 1 750 000 рублей. Продали с первого показа.' }, 
            5: { id: "11", resh: 'Продана за 4 дней по цене 2 850 000 рублей. Квартиры была продана за  3 просмотра.' },
            6: { id: "11", resh: 'Было  организовано 5 показов квартиры покупателям. Квартира продалась за 21 день по цене 2 300 000 рублей.' },
            7: { id: "11", resh: 'Дом с земельным участком были проданы за 1 750 000 в течении 2-ух месяцев. ' }
          },
          trans: '',
        swiperOption: {
          slidesPerView: 3,
        //   centeredSlides: true,
          spaceBetween: 30,
        //   slidesPerGroup: 3,
          loop: true,
          loopFillGroupWithBlank: true,
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
    computed: {
        styleObject() {
            return  {
                transform: this.trans
            }
        }
    },
    methods: {
        path(name) {
            return require('~/assets/img/slide_em/' + name + '.png')
        },
        flipover(id) {
            // console.log('id=', id)
            // this.trans = 'translate3d(-100px, 0px, 0px)'
            if ( id === 1 ) {
                this.trans = 'translate3d(-100px, 0px, 0px)'
            }            
            if ( id === -1 ) {
                this.trans = 'translate3d(0px, 0px, 0px)'
            }
            console.log('Айвати')
        }
    }
  }
</script>
 
<style scoped>
.swiper-wrap {
    height: 50px;
}
.ot-picture > img {
    width: 80vw;
    border-radius: 4px;
}
mark {
    background-color: transparent;
    color: #76281B;
    font-weight: 700;
    /* font-family: Raleway-Bold; */
}
.solution {
    margin: 15px 0;
}
.ot {
    display: flex;
    padding-top: 65px;
    height: 650px;
}
.container {
    width: 100%; 
}
.progress-wrap {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    /* background-color: rgb(242, 245, 248); */
    padding: 10px;
    padding-bottom: 0;
    position: relative;
}
.progress-h2 {
  margin: 0;
  font-weight: 700;
  color: white;
  position: absolute;
  top: 15px;
  left: 120px;
  text-align: center;
  /* margin-top: 10px; */
  display: flex;
  align-items: center;
  justify-content: center;
}
.progress-list {
    display: flex;
    margin: 25px 0;
    margin-bottom: 0;
    padding: 0;
    /* width: 1100px; */
    /* flex-wrap: wrap; */
    flex-direction: column;
}
.progress-item {
    /* list-style-type: none; */
    /* width: 550px; */
    /* text-align: center; */
    margin: 10px 0;
    /* font-family: Raleway-Medium; */
    font-weight: 300;
    color: rgba(0, 0, 0, .6);
    color: #58595B;
    transition: all .35s ease-out;
    cursor: default;
    display: flex;
    font-size: 16px;
    align-items: center;
    flex-direction: column;
    padding: 10px 15px;
    border-radius: 4px;
    margin-bottom: 0;
}
.progress-item:hover {
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, .14);
}
.progress-item-top {
    font-size: 16px;
}
.progress-item-svg {
    width: 40px;
    margin-right: 10px;
}
.progress-item-svg  img{
    width: 40px;
}

.progress-wrap-caption {
    width:  314px;
    position: relative;
    align-self: center;
}
.swipers-container {
    overflow: hidden;
    
}
.swipers-wrapper {
    display: flex;
    transition: all .25s ease-out;
}
/* .swiper-wrapper {
    display: flex;
} */
.slider-wrap {
    height: 550px;
}
.sl {
    width: 200px;
    /* height: 350px; */
    margin-bottom: 25px;
}
.swiper-slide.swiper-slide-next>.sl  {
   color:red;
}
.swiper-slide.swiper-slide-next>.slider-wrap>.ot-picture>img {
  transform: scale(1.2);
   transition: all .25s ease-out;
}
@media (min-width: 480px) {
    .progress-wrap-caption {
        width:  426px;
    }
    .progress-h2 {
        font-size: 32px;
    }
}
@media (min-width: 1200px) {
    .progress-wrap-caption {
       margin: 0;
       margin-bottom: 30px;
    }
    .ot {
        justify-content: center;
        padding-top: 90px;
        /* height: 100px; */
    }
    .progress-h2 {
        font-size: 32px;
        margin: 42px 0;
        top: -30px;
        left: 140px;
    }
    .progress-wrap {
        padding: 0;
    }
    .container {
        width: 1200px; 
    }
    .progress-list {
        flex-direction: row;
        flex-wrap: wrap;
        margin-bottom: 0;
    }
    .progress-item {
        font-size: 24px;
        display: flex;
        flex-direction: row;
        width: 520px;
        align-items: flex-start;
        margin-right: 15px;
    }
    .ot-picture > img {
        width: 250px;;
    }
    .progress-item-top {
        margin-right: 10px;
    }
    .progress-item-bottom {
        align-self: center;
    }
    .progress-list-item:first-child {
        margin-right: 100px;
    }

}
</style>