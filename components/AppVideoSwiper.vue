<template>
    <div class="swiperes" >
        <div class="container">
            <div class="progress-wrap">
                <div class="swiper-wrap">
                <div v-swiper:mySwiper="swiperOption" class="team-list">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide team-item" v-for="(video, index) in videos" :key="index" >
                            <div class="team-picture">
                               <div v-html="video.link"></div>
                            </div>
                        </div>
                    </div>     
                    <div class="swiper-pagination" slot="pagination"></div>
                    <div class="swiper-pag-wrap">
                        <div class="swiper-button-prev button-prev-individ sw-but-prev" slot="button-prev"></div>
                        <div class="swiper-button-next button-next-individ" slot="button-next"></div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['videos'],
    data() {
      return {
 
      }
    },
    computed: {
        styleObject() {
            return  {
                transform: this.trans
            }
        },
        countSlide() {
            if (process.browser) {
                if ( document.body.clientWidth >= 1200) {
                    return 5
                } else return 3
            } else return 5
        },
        swiperOption() {
            return {
                slidesPerView:3,
                // centeredSlides: true,
                spaceBetween: 50,
                //   slidesPerGroup: 1,
                initialSlide: 0 ,
                loop: true,
                loopFillGroupWithBlank: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
               
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
.swiperes {
    display: flex;
    /* padding-top: 25px; */
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
  top: 10px;
  left: 80px;
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
/* img {
    transform: scale(.5);
    opacity: .5;
} */

/* .swiper-slide.swiper-slide-next>.slider-wrap>.ot-picture>img {
  opacity: 1;
transition: all .25s ease-out;
} */

/* .swiper-slide.swiper-slide-next>.team-picture>img {
  transform: scale(.9);
  opacity: 1;
  transform: scale(.8);
transition: all .25s ease-out;
} */
.team-list .swiper-slide .team-picture {
    height: 410px;
    transform: scale(.75);
    opacity: 1;
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
    background-position-x: 75%;
    padding: 19px 0px 19px 55px;
    border-radius: 50%;
}
.button-prev-individ {
    display: block;
    outline: none;
    background-image: url('~/assets/svg/outline-arrow_back_ios-24px.svg');
    background-color: transparent;
    background-position-x: 35%;
    padding: 19px 0px 19px 55px;
    border-radius: 50%;
}
.button-prev-individ:active {
    outline: none;
}


@media (min-width: 480px) {
    .progress-wrap-caption {
        width:  426px;
    }
    .progress-h2 {
        font-size: 32px;
    }
}
@media (max-width: 1200px) {
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
        background-position-x: 40%;
        padding: 19px 0px 19px 55px;
        border-radius: 50%;
    }
}
@media (min-width: 1200px) {
    .team-hero {
        /* margin-bottom: 40px; */
        position: absolute;
        top: 385px;
        margin-bottom: 0;
    }
    .swiper-pag-wrap {
        top: -150px;
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
        height: 270px;
        transform: scale(.75);
        opacity: 1;
        transition: all .25s ease-out;
    }
    .team-list .swiper-slide-next+.team-item .team-picture {
        /* transform: scale(.8); */
        /* opacity: 1; */
        
    }
    .team-list .swiper-slide-next+.team-item {
        z-index: 10;
    }
    .progress-wrap-caption {
       margin: 0;
       /* margin-bottom: 30px; */
    }
    .swiperes {
        justify-content: center;
        /* padding-top: 10px; */
    }
    .progress-h2 {
        font-size: 32px;
        margin: 42px 0;
        top: -30px;
        left: 100px;
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