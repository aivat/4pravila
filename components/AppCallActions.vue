<template>
    <div class="call-actions" >
        <div class="link" id="problems"></div>
        <div class="container">
            <div class="problems-wrap">
                <div class="progress-wrap-caption">
                    <picture>
                        <source srcset="~/assets/img/1x/back2.jpg" media="(min-width: 480px)">
                        <img src='~/assets/img/1x/back2_2.jpg'>
                    </picture>
                    <div class="progress-h2"> Закажите обратный звонок</div>
                </div>
                <div class="progress-h2-desc" v-if="isWorkingDay">
                    Если мы не перезвоним вам в течении 30 минут, то вы получите скидку 20% на услуги нашей компании.
                </div>
                <div class="progress-h2-desc" v-if="!isWorkingDay">
                   В настоящее время наш рабочий день закончен. Оставьте свой телефон и мы Вам перезвоним в ближайшее время! 
                </div>
                <div class="call-wrap">
                    <div class="call" @click="showModal = true">
                        <svg fill="black" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                        Заказать звонок
                    </div>
                </div>
                <div class="tel">
                    8 (3532) 93-50-60
                </div>
                <!-- <div @click="showModalVacancy = true" class="vacancy">
                    Стать частью команды
                </div> -->
            </div>
            <div class="">
                <AppModalCall v-if="showModal" v-on:close="showModal = false"></AppModalCall>
            </div>
            <!-- <div class="">
                <AppVacancy v-if="showModalVacancy" v-on:close="showModalVacancy = false"></AppVacancy>
            </div> -->
        </div>
    </div>
</template>
<script>
import AppModalCall  from '~/components/AppModalCall.vue'
// import AppVacancy  from '~/components/AppVacancy.vue'
export default {
    data() {
      return {
        showModal: false,
        isWorkingDay: true
        // showModalVacancy: false        
      }
    },
    components: {
        // AppVacancy,
        AppModalCall
    },
    methods: {
        getWorkingDay() {
            let date = new Date()
            let dayWeek = date.getDay()
            let time = date.getHours()
            if ( (dayWeek ==  0) || (dayWeek ==  6) ) {
                this.isWorkingDay = false
            }
            if ( (time >  18) || (time <  8) ) {
                this.isWorkingDay = false
            }
        }
    },
    created() {
        this.getWorkingDay()
    }
  }
</script>
 
<style scoped>
.progress-wrap-caption {
    width:  314px;
    position: relative;
    align-self: center;
}
.progress-h2-desc {
    margin-top: 10px;
    color: #76281B;
    /* font-family: 'Raleway-Bold'; */
    font-weight: 700;
    font-size: 18px;
    text-align: center;
    margin: 25px 0;
}
.call-actions {
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
    font-weight: 500;
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
    font-family: Raleway-Medium;
    font-size: 26px;
    color: rgba(0, 0, 0, .4);
}
.problems-item:nth-child(4) {
    font-family: Raleway-Medium;
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
picture {
    /* margin-left: -25px; */
}
.call-wrap {
    display: flex;
    justify-content: center;
}

.call {
    display: flex;
    justify-content: center;
    align-items: center;
    border: 1px solid rgba(129,34,25,1);
    padding: 12px 20px;
    color: rgba(129,34,25,1);
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
}
picture {
    /* align-self: center; */
    /* display: flex;
    justify-content: center; */
}
.progress-h2 {
      font-size:20px;

  /* font-family: 'Raleway-Bold'; */
  margin: 0;
  font-weight: 700;
  color: white;
  /* color: #444; */
  position: absolute;
  top: 35px;
  left:20px;

  text-align: center;

  display: flex;
  align-items: center;
  justify-content: center;
}

.tel {
    text-align: center;
    margin-top: 20px;
    font-size: 24px;
    color: rgba(129,34,25,1);
    font-weight: 700;
}
.vacancy {
    background-color: rgba(129,34,25,1);
    padding: 12px 25px;
    color: white;
    font-weight: 500;
    font-size: 30px;
    border-radius: 4px;
    text-align: center;
    margin-top: 120px;
    cursor: pointer;
    background-color: rgb(247, 56, 56);
     background-color: rgb(218, 9, 9);
  -webkit-user-select: none;  /* Chrome all / Safari all */
  -moz-user-select: none;     /* Firefox all */
  -ms-user-select: none;      /* IE 10+ */
  user-select: none;  
}
.vacancy:hover{
    background-color: rgba(129,34,25,.9);
    background-color: rgba(247, 56, 56, .9);
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
       margin: 30px 0;
    }
    .progress-h2 {
        font-size: 32px;
        margin: 42px 0;
        top: -15px;
        left: 20px;
    }
            .progress-h2-desc {
        font-size: 24px;
    }
    .call-actions {
        justify-content: center;
        /* height: 100px; */
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
    .tel {
        margin-top: 30px;
        font-size: 32px;
    }
}
</style>