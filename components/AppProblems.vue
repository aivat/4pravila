<template>
    <div class="problems" id="problems">
        <!-- <div class="link" id="problems"></div> -->
        <div class="container">
            <div class="problems-wrap">
                <div class="progress-wrap-caption">
                    <picture>
                        <source  srcset="~/assets/img/1x/back2.jpg" media="(min-width: 480px)">
                        <img src='~/assets/img/1x/back2_2.jpg'>
                    </picture>
                    <div class="progress-h2" >Помогаем  клиентам решить свои проблемы</div>
                </div>
                <ul class="problems-list" >
                    <li class="problems-item" v-for="item in problems" :key="item.id">{{ item.text }}</li>
                </ul>
                <div class="call-wrap">
                    <div class="call" @click="showModal = true">
                        Хочу решить проблему
                    </div>
                </div>
            </div>
            <div class="">
                <AppModalCall v-if="showModal" v-on:close="showModal = false"></AppModalCall>
            </div>
        </div>
    </div>
</template>
<script>
import AppModalCall  from '~/components/AppModalCall.vue'
export default {
    data() {
      return {
          problems: {
            0: { id: "1", text: "нет времени, чтобы ездить и показывать покупателям недвижимость" },	  	  
            1: { id: "2",text: 'мой риэлтор никак не может продать мою недвижимость' },
            2: {id: "3",text: 'нужно срочно продать' },
            3: { id: "4",text: 'хочу продать дороже' },
            4: {  id: "5",text: 'нет времени разбираться в тонкостях продажи недвижимости'},
            5: { id: "6",text: 'хочу безопасно провести сделку ' },
            6: {id: "7",text: 'подал объявление о продаже, а звонков и просмотров нет'},
            7: { id: "8",text: 'не знаю с чего начать' },
            8: {  id: "9",text: 'моя квартира в ипотеке'}
          },
        showModal: false
      }
    },
    components: {

        AppModalCall
    },
  }
</script>
 
<style scoped>
.progress-wrap-caption {
    width:  314px;
    position: relative;
    align-self: center;
    margin: 15px 0;
}

.problems {
    display: flex;
    /* background-color: rgb(242, 245, 248); */
}
.container {
    width: 100%; 
}
.problems-wrap {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    /* background-color: rgb(242, 245, 248); */
    padding: 10px;
    margin-bottom: 15px;
    /* background-image: url('~assets/img/marat2.jpg');
    background-repeat: no-repeat;
    height: 500px; */
}
.problems-h2 {
    font-size: 24px;
    font-weight: 500;
    color: #444;
    /* border-bottom: 1px solid rgb(217, 225, 233); */
    margin: 0 auto;
    margin-bottom: 25px;
    /* line-height: 30px; */
    text-align: center;
}
.problems-list {
    display: flex;
    margin: 0;
    padding: 0;
    /* width: 1100px; */
    /* flex-wrap: wrap; */
    flex-direction: column;
}
.problems-item {
    list-style-type: none;
    /* width: 550px; */
    text-align: center;
    margin: 7px 0;
    /* font-family: Raleway-Medium; */
    color: rgba(0, 0, 0, .6);
    transition: all 1s ease-out;
    cursor: default;
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


.problems-item:nth-child(3n+2) {
    /* font-family: Raleway-Bold; */
    font-weight: 700;
    font-size: 22px;

    color: rgba(0, 0, 0, .9);
}

.problems-item:nth-child(5n+6), .problems-item:last-child {
    /* font-family: Raleway-Medium; */
    font-weight: 500;
    font-size: 26px;
    color: rgba(0, 0, 0, .4);
}
.problems-item:nth-child(4) {
    /* font-family: Raleway-Medium; */
    font-weight: 500;
    font-size: 18px;
    color: rgba(129, 34, 25, .6);
}
.problems-item:hover {
-webkit-transform: scale(1.2);
  -ms-transform: scale(1.2);
  transform: scale(1.2);
  color: #76281B;
}
.problems-info {
    /* margin-top: 1px; */
}

/* img, source {
    margin-left: -25px;

} */
.call-wrap {
    display: flex;
    justify-content: center;
}
.call {
    /* font-family: Raleway-Medium; */
    /* color: #76281B; */
    font-weight: 500;
    margin-top: 15px;
    color: white;
    font-size: 20px;
    padding: 12px 16px;
    cursor: pointer;
    background-color:rgb(129, 34, 25);
     background-color: rgb(218, 9, 9);
    /* background-color: rgb(247, 56, 56); */
    /* background-color: #B55031; */
    align-self: center;
    border-radius: 4px;
  -webkit-user-select: none;  /* Chrome all / Safari all */
  -moz-user-select: none;     /* Firefox all */
  -ms-user-select: none;      /* IE 10+ */
  user-select: none;  
}
.call:hover {
    background-color: rgba(129, 34, 25, .9);
     background-color: rgba(218, 9, 9, .8);
}
picture {
    /* align-self: center; */
    /* display: flex;
    justify-content: center; */
}
.progress-h2 {
      font-size:20px;

  /* font-family: 'Raleway-Bold'; */
  font-weight: 700;
  margin: 0;
  /* font-weight: 500; */
  color: white;
  /* color: #444; */
  position: absolute;
  top: 25px;
  left:0px;

  text-align: center;

  display: flex;
  align-items: center;
  justify-content: center;
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
    .progress-h2 {
        font-size: 32px;
        margin: 42px 0;
        top: -15px;
        left: 0px;
    }
    .problems {
        justify-content: center;
        /* margin-top: 120px; */
        padding-top: 90px;
        /* height: 100px; */
    }
    .problems-wrap {
        padding: 0;
    }
    .problems-h2 {
        font-size: 32px;
        border-bottom: 1px solid rgb(217, 225, 233);
        margin: 42px 0;
        line-height: 47px;
        margin: 60px auto;
    }
    .container {
        width: 1200px; 
    }
    .problems-list {
        width: 1100px;
        flex-direction: row;
        flex-wrap: wrap;
        padding: 25px 0;
    }
    .problems-item {
        width: 550px;
    }
    .problems-item:first-child {
        width: 1100px;
    }
    
    .problems-item:nth-child(2) {
        width: 650px;
    }

    .problems-item:nth-child(3) {
        width: 350px;
    }
    .problems-item:nth-child(4) {
        width: 250px;
    }
    .problems-item:nth-child(5) {
        width: 750px;
    }
    .problems-item:nth-child(3n+2) {
        font-size: 22px;
        line-height: 38px;
    }

    .problems-item:nth-child(5n+6), .problems-item:last-child {
        font-size: 26px;
        line-height: 42px;
    }
    .problems-item:nth-child(4) {
        font-size: 18px;
        line-height: 36px;
    }
    .call {
        margin-top: 25px;
        color: white;
        font-size: 26px;
        padding: 12px 20px;
        cursor: pointer;
        /* background-color:rgb(129, 34, 25); */
        /* background-color: #B55031; */
        align-self: center;
        border-radius: 4px;
    }
}
</style>