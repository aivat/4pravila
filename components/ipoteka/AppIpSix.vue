<template>
    <div class="header" id="problems">
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
                    <!-- <li class="problems-item" v-for="item in problems" :key="item.id">{{ item.text }}</li> -->
                </ul>
                <div class="call-wrap">
                    <div class="call" @click="showModal = true">
                        Хочу решить проблему
                    </div>
                </div>
            </div>
            <div class="">
                <!-- <AppModalCall v-if="showModal" v-on:close="showModal = false"></AppModalCall> -->
            </div>
        </div>
    </div>
</template>
<script>
// import AppModalCall  from '~/components/AppModalCall.vue'
export default {
    data() {
      return {
        showModal: false
      }
    },
    components: {
        // AppModalCall
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

.header {
    display: flex;
}
.container {
    width: 100%; 
}
.problems-wrap {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 10px;
    margin-bottom: 15px;
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
    text-align: center;
    margin: 7px 0;
    color: rgba(0, 0, 0, .6);
    transition: all 1s ease-out;
    cursor: default;
}


.problems-item:nth-child(3n+2) {
    font-weight: 700;
    font-size: 22px;

    color: rgba(0, 0, 0, .9);
}

.problems-item:nth-child(5n+6), .problems-item:last-child {
    font-weight: 500;
    font-size: 26px;
    color: rgba(0, 0, 0, .4);
}
.problems-item:nth-child(4) {
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
}

.call-wrap {
    display: flex;
    justify-content: center;
}
.call {
    font-weight: 500;
    margin-top: 15px;
    color: white;
    font-size: 20px;
    padding: 12px 16px;
    cursor: pointer;
    background-color:rgb(129, 34, 25);
     background-color: rgb(218, 9, 9);
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
.progress-h2 {
  font-size:20px;
  font-weight: 700;
  margin: 0;
  color: white;
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
        padding-top: 90px;
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
    .call {
        margin-top: 25px;
        color: white;
        font-size: 26px;
        padding: 12px 20px;
        cursor: pointer;
        align-self: center;
        border-radius: 4px;
    }
}
</style>