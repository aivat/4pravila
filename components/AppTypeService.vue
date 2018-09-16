<template>
    <div class="typeService" id="typeService">
        <!-- <div class="link" id="typeService"></div> -->
        <div class="container">
            <div class="progress-wrap">
                <div class="progress-wrap-caption">
                    <picture>
                        <source srcset="~/assets/img/1x/back1.jpg" media="(min-width: 480px)">
                        <img src='~/assets/img/1x/back1_2.jpg'>
                    </picture>
                    <div class="progress-h2" >Виды наших услуг</div>
                </div>

                <!-- <div class="progress-h2" >в цифрах</div> -->
                <ul class="progress-list" >
                    <div class="progress-list-item progress-list-item-left">
                        
                        <li class="progress-item">
                            <div class="progress-item-logo">Продажа недвижимости</div>
                            <div class="call-wrap">
                                <div class="call" @click="showModal = true">
                                    <svg fill="black" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                    </svg>
                                    Хочу продать
                                </div>
                            </div>
                        </li>
                        <li class="progress-item">
                            <div class="progress-item-logo">Покупка недвижимости</div> 
                            <div class="call-wrap">
                                <div class="call" @click="showModal = true">
                                    <svg fill="black" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                    </svg>
                                    Хочу купить
                                </div>
                            </div>                         
                        </li>
                    </div>
                    <div class="progress-list-item progress-list-item-right">
                        <li class="progress-item">
                            <div class="progress-item-logo">Оформление ипотеки </div>
                            <div class="call-wrap">
                                <div class="call" @click="showModal = true">
                                    <svg fill="black" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                    </svg>
                                    Хочу оформить ипотеку
                                </div>
                            </div>
                        </li>
                        <li class="progress-item">
                            <div class="progress-item-logo">Юридическое сопровождение сделок и оформление недвижимости</div>
                            <div class="call-wrap">
                                <div class="call" @click="showModal = true">
                                    <svg fill="black" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                    </svg>
                                    Нужен юрист
                                </div>
                            </div>
                        </li>
                    </div>
                </ul>
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
            0: { id: "1", text: "Самая быстрая продажа за 16 часов" },	  	  
            1: { id: "2", text: 'Каждая 7 квартира продана с первого показа' },
            2: { id: "3", text: 'Продажа квартиры на 150 000 рублей дороже изначальной цены' },
            3: { id: "4", text: 'Средний срок продажи квартир 15 дней' }
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
.typeService {
    display: flex;
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
    padding-bottom: 0;
    /* margin-bottom: 15px; */
    /* background-image: url('~assets/img/marat2.jpg');
    background-repeat: no-repeat;
    height: 500px; */
    position: relative;
}
.progress-h2 {
    /* font-size: 24px;
    font-weight: 500;
    color: #444;
    border-bottom: 1px solid rgb(217, 225, 233);
    margin: 0 auto;
    margin-bottom: 25px;
    text-align: center; */

      font-size:20px;
      /* line-height: 15px; */
  /* font-family: 'Raleway-Bold'; */
  font-weight: 700;
  margin: 0;
  /* font-weight: 500; */
  color: white;
  /* color: #444; */
  position: absolute;
  top: 20px;
  left: 70px;
  /* background-image: url('~/assets/img/1x/1.jpg'); */
  /* height: 68px; */
  text-align: center;
  /* margin-top: 10px; */
  display: flex;
  align-items: center;
  justify-content: center;
}
.progress-list {
    display: flex;
    margin: 25px 0;
    padding: 0;
    margin-bottom: 0;
    /* width: 1100px; */
    /* flex-wrap: wrap; */
    flex-direction: column;
}
.progress-item {
    list-style-type: none;
    margin-bottom: 10px;
    font-weight: 500;
    color: rgba(0, 0, 0, .6);
    color: #58595B;
    transition: all .35s ease-out;
    cursor: default;
    display: flex;
    font-size: 18px;
    align-items: center;
    justify-content: center;
     color: white;
     /* color: rgba(118,40,27,1); */
     background-color: rgba(118,40,27,1);
     height: 100px;
     border-radius: 2px;
     /* background-color: rgba(118,40,27,1); */
     border: 1px solid rgba(118,40,27,1);
     flex-direction: column;
     padding: 15px 5px;
}

.progress-item-logo {
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
}
.progress-item-svg {
    width: 50px;
    margin-right: 10px;
}
.progress-item-svg  svg{
    fill: #76281B;
    fill: #B55031;
}
picture {
    /* align-self: center; */
    display: flex;
    justify-content: center;
}
.progress-wrap-caption {
    width:  314px;
    position: relative;
    align-self: center;
}

.call {
    display: flex;
    justify-content: center;
    align-items: center;
    /* border: 1px solid rgba(129,34,25,1); */
    padding: 12px 20px;
    color: rgba(129,34,25,1);
    color: rgb(218, 9, 9);
    /* color: white; */
    transition: all .35s ease-out;
    /* border: 1px solid rgba(255,255,255,1); */
    /* background-color: white; */
    background-color:rgba(129,34,25,1);
    background-color: rgb(218, 9, 9);
    background-color: white;
    cursor: pointer;
    text-align: center;
    -webkit-tap-highlight-color: rgba(0,0,0,0); 
    -webkit-tap-highlight-color: transparent;
    border-radius: 2px;
    font-size: 18px;
  -webkit-user-select: none;  /* Chrome all / Safari all */
  -moz-user-select: none;     /* Firefox all */
  -ms-user-select: none;      /* IE 10+ */
  user-select: none;  
}
.call>svg {
    margin-right: 5px;
    fill:currentColor;
}

.call:hover {
    background-color:rgba(129,34,25,1);
    color: #fff;
}

.call:active {
    background-color:rgba(129, 34, 25, 0.7);
    background-color: rgb(218, 9, 9);
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
    .typeService {
        justify-content: center;
        /* margin-top: 75px; */
        padding-top: 90px;
        /* height: 100px; */
    }
    .progress-h2 {
        font-size: 32px;
        margin: 42px 0;
        top: -20px;
        left: 70px;
    }
    .container {
        width: 1200px; 
    }
    .progress-wrap {
        padding: 0;
    }
    .progress-list {
        flex-direction: row;
        justify-content: center;
        padding: 50px 0;
        padding-top: 0;
        padding: 0;
        margin-top: 25px;    
    }

    .progress-list-item-left {
        margin-right: 50px;
    }
    .progress-list-item {
       margin:0;
        width: 600px;
    }
    .progress-item {
        font-size: 28px;
        align-items: flex-start;
        margin: 0;
        height: 200px;
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        /* margin-left: 10px; */
        /* padding: 10px; */
        /* background-color: white; */
        /* color:  rgba(118,40,27,1); */
        border: 1px solid rgba(118,40,27,1);
        /* flex-grow:1; */
        /* flex-shrink: 1; */
         /* margin-bottom: 45px; */
    }

    .progress-item:hover {
        background-color: rgba(118,40,27,1);
        background-color: white;
        color:  rgba(118,40,27,1);
        /* border: 4px solid rgba(118,40,27,1); */
    }
    .progress-item:hover>.call-wrap>.call {
        background-color:white;
        background-color: rgb(218, 9, 9);
        color: white;
    }
    .progress-list-item-right>.progress-item {
        margin-left: 10px;
    }
    /* .call:hover {
        background-color:white;
        color: #fff;
    } */
}
</style>