<template>
    <div class="compare" id="compare">
        <div class="container">
            <div class="progress-wrap">
                <div class="progress-wrap-caption">
                    <picture>
                        <source srcset="~/assets/img/1x/back2.jpg" media="(min-width: 480px)">
                        <img src='~/assets/img/1x/back2_2.jpg'>
                    </picture>
                    <div class="progress-h2" >Мы преображаем квартиры и делаем продающие фотографии</div>
                </div>
                <div class="compare-wrap">
                    <div class='nav'>
                        <div class="nav-wrap">
                            <a class='nav-wrap-item' v-on:click="tab(0)">
                                <p class="pravilo-visible">
                                Пример
                                </p> № 1
                            </a>
                            <a class='nav-wrap-item' v-on:click="tab(1)">
                                <p class="pravilo-visible">
                                Пример
                                </p> № 2
                            </a>
                            <a class='nav-wrap-item' v-on:click="tab(2)">
                                <p class="pravilo-visible">
                                Пример 
                                </p>№ 3
                            </a>
                        </div>
                        <svg class='under' viewBox='0 0 100 1'>
                            <line id="line" x1="0" y1="0" x2="100%"  y2="0" stroke="rgba(129,34,25,1)" stroke-width="1" stroke-dasharray="33 67" v-bind:style="{ 'stroke-dashoffset':  dashoffset }"></line>
                        </svg>
                    </div>
                    <div class="compare-wrap-img">
                        <image-compare :before="path(banners[0].name)" :after="path(banners[1].name)" v-if="active==0" :padding="{ left: countPadding, right: countPadding }">
                            <div class="fa fa-angle-left" aria-hidden="true" slot="icon-left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="-5 0 24 24">
                                    <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/><path fill="none" d="M0 0h24v24H0V0z"/>
                                </svg>
                            </div>
                            <div class="fa fa-angle-right" aria-hidden="true" slot="icon-right">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="5 0 24 24">
                                    <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/><path fill="none" d="M0 0h24v24H0V0z"/>
                                </svg>
                            </div>
                        </image-compare>
                        <image-compare :before="path(banners[2].name)" :after="path(banners[3].name)" v-if="active==1" :padding="{ left: countPadding, right: countPadding }">
                            <div class="fa fa-angle-left" aria-hidden="true" slot="icon-left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="-5 0 24 24">
                                    <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/><path fill="none" d="M0 0h24v24H0V0z"/>
                                </svg>
                            </div>
                            <div class="fa fa-angle-right" aria-hidden="true" slot="icon-right">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="5 0 24 24">
                                    <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/><path fill="none" d="M0 0h24v24H0V0z"/>
                                </svg>
                            </div>
                        </image-compare>
                        <image-compare :before="path(banners[4].name)" :after="path(banners[5].name)" v-if="active==2" :padding="{ left: countPadding, right: countPadding }">
                            <div class="fa fa-angle-left" aria-hidden="true" slot="icon-left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="-5 0 24 24">
                                    <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/><path fill="none" d="M0 0h24v24H0V0z"/>
                                </svg>
                            </div>
                            <div class="fa fa-angle-right" aria-hidden="true" slot="icon-right">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="5 0 24 24">
                                    <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/><path fill="none" d="M0 0h24v24H0V0z"/>
                                </svg>
                            </div>
                        </image-compare>
                    </div>
                        <!-- <i class="fa fa-angle-left" aria-hidden="true" slot="icon-left"></i>
                        <i class="fa fa-angle-right" aria-hidden="true" slot="icon-right"></i> -->
                    <!-- </image-compare> -->
                    <!-- <div class="swiper-wrapper">

                        <div class="swiper-slide team-item" v-for="(banner, index) in banners" :key="index" >
                            <div class="team-picture">
                                <img :src="path(banner.id)" :alt="banner.ud">
                            </div>
                            <div class="team-hero">
                                <div class="team-name">{{ banner.name.toUpperCase() }}</div>
                                <div class="team-description">{{ banner.desc }}</div>
                            </div> 
                        </div> -->
                   
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import Vue from 'vue'
if (process.browser) {
    const VueImageCompare = require('vue-image-compare')
    Vue.use(VueImageCompare)
}
// import VueImageCompare from 'vue-image-compare'

export default {
    data() {
      return {
          banners: {
            0: { id: "1", name: '1_after', desc: 'Основатель и руководитель компании' }, 
            1: { id: "2", name: '1_before', desc: 'Риэлтор' },
            2: { id: "3", name: '2_after', desc: 'Риэлтор' },
            3: { id: "4", name: '2_before', desc: 'Риэлтор' },
            4: { id: "5", name: '3_after', desc: 'Риэлтор' }, 
            5: { id: "6", name: '3_before', desc: 'Риэлтор' }
          },
          active: 0
      }
    },
    computed: {
        styleObject() {
            return  {
                transform: this.trans
            }
        },
        countPadding() {
            if (process.browser) {
                if ( document.body.clientWidth >= 1200) {
                    return 10
                } else if ( document.body.clientWidth >= 768) {
                    return 60
                }  else return 60
            } else return 10
        },
        dashoffset: function () {
            return  -(100 / 3) * this.active
        },
    },
    methods: {
        path(name) {
            return require('~/assets/img/compare/' + name + '.jpg')
        },
        tab: function (index) {
            this.active = index
        }
    }
  }
</script>
 
<style scoped>
.nav {
    position: relative;
}
.nav-wrap {
    display: flex;
    /* margin-bottom: 50px; */
    /* width: 320px; */
    /* justify-content: space-around; */
}
.nav-wrap-item {
    /* display: flex; */
    width: 33%;
    text-align: center;
    font-size: 16px;
    padding: 0 20px;
    cursor: pointer;
    font-weight: 500;
    color: rgba(129,34,25,1);
      -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently */
                -webkit-tap-highlight-color: rgba(0,0,0,0); 
    -webkit-tap-highlight-color: transparent;
}
.under {
            display: block;
        position: absolute;
        left: 0;
        bottom: -10px;
        width: 100%;

        /* height: .4rem;        */
}
.under>line {
    transition: stroke-dashoffset .2s ease-in-out;
}
.pravilo-visible {
    display: none;
}
.image-compare-handle {
    width: 4px !important;
}
.fa {
    fill: white;
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
.compare {
    display: flex;
    padding-top: 65px;
}
.container {
    width: 100%; 
}
.progress-wrap {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    /* background-color: rgb(242, 245, 248); */
    /* padding: 10px; */
    padding-bottom: 0;
    position: relative;
}
.progress-h2 {
  margin: 0;
  font-weight: 700;
  color: white;
  position: absolute;
  top: 12px;
  left: 0px;
  margin: 0 15px;
  text-align: center;
  /* margin-top: 10px; */
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
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
.compare-wrapper {
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
    margin-bottom: 25px;
}
.swiper-slide.swiper-slide-next>.sl  {
   color:red;
}
.team-item {
    position: relative;
    display: flex;
    flex-flow: column;
    align-items: center;
    z-index: -1;
}

.team-list .swiper-slide .team-picture {
    height: 410px;
    transform: scale(.3);
    opacity: .25;
    transition: all .25s ease-out;
}
/* .swiper-slide.swiper-slide-active.sl  {
   color:red;
} */
.team-list .swiper-slide-next .team-picture {
    transform: scale(.6);
    opacity: 1;
    
}
.team-list .swiper-slide-next {
    z-index: 10;
}
.team-picture {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-flow: column;
    flex-flow: column;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -ms-flex-align: center;
    align-items: center;
    width: 140px;
    text-align: center;
    /* margin-bottom: 140px; */
    transition: all 250ms cubic-bezier(.16,.08,.355,1);
}
.team-hero {
    display: none;
    margin-bottom: 30px;
}
.swiper-slide-next .team-hero {
     
     display: none;
     transition: all 250ms cubic-bezier(.16,.08,.355,1);
     width: 300px;
     opacity: 0;
}
.team-name {
    
}
.swiper-slide-next .team-hero {
    display: block;
    opacity: 1;
}
.team-name {
    text-align: center;
    font-size: 1.25rem;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: .05em; 
}
.team-description {
    text-align: center;
    color: rgb(15, 28, 55);
    margin-top: .625rem;
    font-size: 18px; 
    height: 45px;
}
.sw-but-prev {
    /* left: 50px; */

}
.swiper-pag-wrap {
    position: relative;
    top: -200px;
    margin: 0 0px;
}
.button-next-individ:hover, .button-prev-individ:hover {
    background-color: rgba(118, 40, 27, .15);
    transition: all 250ms cubic-bezier(.16,.08,.355,1);
}
.button-next-individ {
    display: block;
    outline: none;
    background-image: url('~/assets/svg/outline-arrow_forward_ios-24px.svg');
    background-color: transparent;
    background-position-x: 60%;
    padding: 19px 0px 19px 55px;
    border-radius: 50%;
}
.button-prev-individ {
    display: block;
    outline: none;
    background-image: url('~/assets/svg/outline-arrow_back_ios-24px.svg');
    background-color: transparent;
    background-position-x: 50%;
    padding: 19px 0px 19px 55px;
    border-radius: 50%;
}
.button-prev-individ:active {
    outline: none;
}

.compare-wrap {
    margin-top: 25px;
    margin-top: 10px;
    margin-bottom: 25px;
    width: 100%;
}
.compare-wrap-img {
    margin-top: 25px;
}
@media (min-width: 480px) {
    .progress-wrap-caption {
        width:  426px;
    }
    .progress-h2 {
        font-size: 32px;
    }
    .pravilo-visible {
        display: inline;
        margin: 0;
    }
}
@media (min-width: 1200px) {
    .compare-wrap {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .compare-wrap-img {

        width: 700px;
        /* height: 380px; */
    }
    .image-compare-wrapper img {
        width: 700px;
    }
    .team-hero {
        margin-bottom: 40px;
    }
    .swiper-pag-wrap {
        top: -180px;
        margin: 0 350px;
    }
    .swiper-slide-next .team-hero {
        display: none;
        
    }
    .swiper-slide-next+.team-item .team-hero {
        
        display: none;
        transition: all 250ms cubic-bezier(.16,.08,.355,1);
        width: 300px;
        opacity: 0;
    }
    .swiper-slide-next+.team-item .team-hero {
        display: block;
        opacity: 1;
    }
    .team-list .swiper-slide .team-picture {
        height: 510px;
        transform: scale(.45);
        opacity: .25;
        transition: all .25s ease-out;
    }
    .team-list .swiper-slide-next+.team-item .team-picture {
        transform: scale(.8);
        opacity: 1;
        
    }
    .team-list .swiper-slide-next+.team-item {
        z-index: 10;
    }
    .progress-wrap-caption {
       margin: 0;
       /* margin-bottom: 30px; */
    }
    .compare {
        justify-content: center;
        padding-top: 90px;
    }
    .progress-h2 {
        font-size: 30px;
        margin: 42px 10px;
        top: -32px;
        left: 5px;
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