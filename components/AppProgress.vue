<template>
    <div class="progress" id="progress">
        <!-- <div class="link" id="progress"></div> -->
        <div class="container">
            <div class="progress-wrap">
                <div class="progress-wrap-caption">
                    <picture>
                        <source srcset="~/assets/img/1x/back1.jpg" media="(min-width: 480px)">
                        <img src='~/assets/img/1x/back1_2.jpg'>
                    </picture>
                    <div class="progress-h2" >Наши достижения<br>в цифрах</div>
                </div>

                <!-- <div class="progress-h2" >в цифрах</div> -->
                <ul class="progress-list" >
                    <div class="progress-list-item progress-list-item-left">
                        
                        <li class="progress-item">
                            <div class="progress-item-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0zm0 0h24v24H0V0z"/>
                                    <path d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
                                </svg>
                            </div>
                            <div>Самая быстрая продажа за 16 часов</div>
                        </li>
                        <li class="progress-item">
                            <div class="progress-item-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0zm0 0h24v24H0V0z"/>
                                    <path d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
                                </svg>  
                            </div>
                            <div>Каждая 7 квартира продана с первого показа</div>                           
                        </li>
                    </div>
                    <div class="progress-list-item">
                        <li class="progress-item">
                            <div class="progress-item-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0zm0 0h24v24H0V0z"/>
                                    <path d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
                                </svg> 
                            </div>
                            <div>Продажа квартиры на 150 000 рублей дороже изначальной цены</div>
                        </li>
                        <li class="progress-item">
                            <div class="progress-item-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0zm0 0h24v24H0V0z"/>
                                    <path d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
                                </svg>
                            </div>
                            <div>Средний срок продажи квартир 15 дней</div>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
      return {
          problems: {
            0: { id: "1", text: "Самая быстрая продажа за 16 часов" },	  	  
            1: { id: "2", text: 'Каждая 7 квартира продана с первого показа' },
            2: { id: "3", text: 'Продажа квартиры на 150 000 рублей дороже изначальной цены' },
            3: { id: "4", text: 'Средний срок продажи квартир 15 дней' }
          }
      }
    }
  }
</script>
 
<style scoped>
.progress {
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
    margin-bottom: 15px;
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
  top: 10px;
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
    /* width: 1100px; */
    /* flex-wrap: wrap; */
    flex-direction: column;
}
.progress-item {
    list-style-type: none;
    /* width: 550px; */
    /* text-align: center; */
    margin: 7px 0;
    /* font-family: Raleway-Medium; */
    font-weight: 500;
    color: rgba(0, 0, 0, .6);
    color: #58595B;
    transition: all 1s ease-out;
    cursor: default;
    display: flex;
    font-size: 16px;
    align-items: center;
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
    .progress {
        justify-content: center;
        padding-top: 90px;
        /* margin-top: 75px; */
        /* height: 100px; */
    }
    .progress-wrap {
        padding: 0;
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
        justify-content: center;
        padding: 50px 0;
    }
    .progress-item {
        font-size: 32px;
        align-items: flex-start;
        /* flex-grow:1; */
        /* flex-shrink: 1; */
         margin-bottom: 45px;
    }
    .progress-list-item-left {
        margin-right: 50px;
    }
    .progress-list-item {
       
        /* width: 600px; */
    }
}
</style>