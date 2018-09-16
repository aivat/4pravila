<template>
    <div class="work"  id="work">
        <!-- <div class="link"></div> -->
        <div class="container">
            <div class="progress-wrap">
                <div class="progress-wrap-caption">
                    <picture>
                        <source srcset="~/assets/img/1x/1.jpg" media="(min-width: 480px)" alt="banner.name">
                        <img src='~/assets/img/1x/1_2.jpg'>
                    </picture>
                    <div class="progress-h2" >Как мы работаем?</div>
                    
                </div>
                <div class="progress-h2-desc" >9 шагов от первой встречи до сделки</div>
                <div class="progress-list" >
                    <div class="progress-item" v-for="item in items" :key=item.id>
                        <div class="progress-left">
                            <picture class="ot-picture">
                                <source :srcset="path(item.id)" media="(min-width: 480px)">
                                <img :src="path(item.id)">
                            </picture>
                            <div class="progress-left-desc">
                                {{ item.text }}
                            </div>
                        </div>
                        <div class="strelka">
                            <svg fill="#76281B" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="48px"
                                height="48px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                            <g id="Bounding_Boxes" display="none">
                                <g id="ui_x5F_spec_x5F_header_copy_3" display="inline">
                                </g>
                                <path display="inline" fill="none" d="M0,0h24v24H0V0z"/>
                            </g>
                            <g id="Rounded">
                                <g id="ui_x5F_spec_x5F_header_copy_6">
                                </g>
                                <path d="M8.12,9.29L12,13.17l3.88-3.88c0.39-0.39,1.02-0.39,1.41,0l0,0c0.39,0.39,0.39,1.02,0,1.41l-4.59,4.59
                                    c-0.39,0.39-1.02,0.39-1.41,0l-4.59-4.59c-0.39-0.39-0.39-1.02,0-1.41l0,0C7.09,8.91,7.73,8.9,8.12,9.29z"/>
                            </g>
                            </svg>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
      return {
          items: {
            0: { id: "1", text: "Оформление заявки на встречу" }, 
            1: { id: "2", text: "Встреча с риэлтором и осмотр объекта недвижимости" },
            2: { id: "3", text: "Обсуждение условий сделки Оценка недвижимости" },
            3: { id: "4", text: "Заключение соглашения о сотрудничестве" },
            4: { id: "5", text: "Профессиональная видео и фотосъемка объекта недвижимости" }, 
            5: { id: "6", text: "Реклама объекта недвижимостии поиск покупателя" },
            6: { id: "7", text: "Ведение переговоров с покупателями" },
            7: { id: "8", text: "Подписание договора купли-продажи" },
            8: { id: "9", text: "Проведение расчетов" }
          }
      }
    },
    methods: {
        path(name) {
            return require('~/assets/img/work/' + name + '.jpg')
        }
    }
  }
</script>
 
<style scoped>
.ot-picture > img {
    /* width: 80vw; */
    border-radius: 4px;
}
mark {
    background-color: transparent;
    color: #76281B;
    /* font-family: Raleway-Bold; */
    font-weight: 700;
}
.progress-h2-desc {
    margin-top: 10px;
    color: #76281B;
    /* font-family: 'Raleway-Bold'; */
    font-weight: 700;
    font-size: 18px;
    text-align: center;
}
.solution {
    margin: 15px 0;
}
.work {
    display: flex;
    padding-top: 65px;
    /* background-color: rgb(242, 245, 248); */
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
    margin-bottom: 15px;
    margin-bottom: 0;
    padding-bottom: 0;
    /* background-image: url('~assets/img/marat2.jpg');
    background-repeat: no-repeat;
    height: 500px; */
    position: relative;
}
.progress-left {
    display: flex;
    flex-direction: column;
    align-items: center;
}
.progress-left-desc{
    text-align: center;
    margin: 15px 0;
}
.progress-h2 {
    /* font-size: 24px;
    font-weight: 500;
    color: #444;
    border-bottom: 1px solid rgb(217, 225, 233);
    margin: 0 auto;
    margin-bottom: 25px;
     text-align: center; 

      font-size:20px;
      /* line-height: 15px; */
      font-size:22px;
  /* font-family: 'Raleway-Bold'; */
  margin: 0;
  font-weight: 700;
  color: white;
  /* color: #444; */
  position: absolute;
  top: 10px;
  left: 55px;
  /* background-image: url('~/assets/img/1x/1.jpg'); */
  /* height: 68px; */
  text-align: center;
  /* margin-top: 10px; */
  display: flex;
  align-items: center;
  justify-content: center;
  /* align-self: center; */
}
.progress-list {
    display: flex;
    margin: 25px 0;
    padding: 0;
    /* width: 1100px; */
    /* flex-wrap: wrap; */
    flex-direction: column;
    margin-bottom: 0;
}
.progress-item {
    /* list-style-type: none; */
    /* width: 550px; */
    /* text-align: center; */
    margin: 10px 0;
    /* font-family: Raleway-Medium; */
    color: rgba(0, 0, 0, .6);
    color: #58595B;
    transition: all 1s ease-out;
    cursor: default;
    display: flex;
    font-size: 16px;
    align-items: center;
    flex-direction: column;
    padding: 10px 15px;
    border-radius: 4px;
    margin-bottom: 0;
    /* display: flex;
    flex-direction: column;
    justify-content: space-between;
    border-radius: 4px;
    padding: 10px 25px;
    background: linear-gradient(to right, rgba(26, 9, 9, 0.6) 0%, rgba(6, 7, 6, 0.6) 100%);
    background-color: rgba(129,34,25,1);
    background-color: #009cde;
    background-color: rgb(187, 48, 36);
    background-image: radial-gradient(circle farthest-side at 95px 95px,rgb(187, 48, 36),rgba(129,34,25,1) 125%);
    background-image: radial-gradient(circle farthest-side at 95px 95px,#fff,#ececec 125%);
    box-shadow: 0 1px 4px 0 rgba(0,0,0,.14);
    background-color: #fff;
    background-image: none;
    align-items: flex-start; */
}
/* .progress-item:hover {
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, .14);
} */
.progress-item:last-child .strelka {
    display: none;
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
picture {
    /* align-self: center; */
    /* display: flex; */
    /* justify-content: center; */
}
.progress-wrap-caption {
    width:  314px;
    position: relative;
    align-self: center;
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
    .progress-h2-desc {
        font-size: 24px;
    }
    .progress-wrap {
        padding: 0;
        margin-bottom: 0;
    }
    .strelka > svg {
        transform: rotate(-90deg);
    }
    .work {
        justify-content: center;
       padding-top: 90px;
        /* height: 100px; */
    }
    .progress-h2 {
        font-size: 32px;
        margin: 42px 0;
        top: -30px;
        left: 70px;
    }
    .container {
        width: 1200px; 
    }
    .progress-list {
        flex-direction: row;
        flex-wrap: wrap;
        /* align-items: center; */
        justify-content: center;
        margin-bottom: 0;
    }
    .progress-item {
        font-size: 18px;
        display: flex;
        flex-direction: row;
        /* width: 520px; */
        align-items: center;
        /* justify-content: center; */
        /* margin-right: 15px; */
    }
    .progress-left {
        justify-content: flex-start;
        height: 220px;
    }
    .progress-left-desc {
        width: 160px;
    }
    .ot-picture > img {
        /* height: 80px; */
        /* width: 250px; */
    }
    .progress-item-top {
        margin-right: 10px;
    }
    .progress-item-bottom {
        align-self: center;
    }
    .progress-list-item:first-child {
        /* margin-right: 100px; */
    }

}
</style>