<template>
    <div class="banki" id="ip_banki" ref="banki">
        <!-- <div class="link" ></div> -->
        <div class="container">
            <div class="progress-wrap">
                <div class="progress-wrap-caption">
                    <picture>
                        <source srcset="~/assets/img/1x/1.jpg" media="(min-width: 480px)" alt="banner.name">
                        <img src='~/assets/img/1x/1_2.jpg'>
                    </picture>
                    <div class="progress-h2" >Наши партнеры</div>
                </div>
                <div class="progress-list" >
                        <div class="progress-item" v-for="n in 11" :key=n v-bind:class="{ 'progress-item-anim': isActive }">
                            <picture class="ot-picture">
                                <source :srcset="path(n)" media="(min-width: 480px)">
                                <img :src="path(n)">
                            </picture>
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
            0: { id: "1", text: "Артем и Настя Цеван обратились в нашу компанию для продажи однокомнатной квартиры на ул. Терешкой 83. Клиенты озвучили срок 2-3 месяца. Стартовая цена 1 750 000 рублей.", resh: 'Нашли покупателя за 24 часа за 1 750 000 рублей. Продали с первого показа.' }, 
            1: { id: "2", text: 'Александр Николаевич изначально был плохо настроен на сотрудничество с риэлторской компанией, так как имел плохой опыт сотрудничества, но изменил свое мнение, увидев наш профессиональный подход к своему дел. Он доверил нам продажу своей двухкомнатной квартиры на проезде Нижний 8/1, в результате чего был заключендоговор об оказании риэлтерских услуг сроком на 30 дней. Квартира по обоюдному соглашению сторон была оценена в  2 850 000 рублей.', resh: 'Продана за 4 дней по цене 2 850 000 рублей. Квартиры была продана за  3 просмотра.' },
            2: { id: "3", text: 'Элида Валитова обратилась в нашу компанию за помощью в продаже двухкомнатной квартиры по адресу: ул. Новая 10/5. Квартира была оценена 2 300 000 рублей. Клиент поставил срок 2 месяца.', resh: 'Было  организовано 5 показов квартиры покупателям. Квартира продалась за 21 день по цене 2 300 000 рублей.' },
            3: { id: "4", text: 'Никита обратился в нашу компанию, чтобы продать частный дом с землей в Подгородней Покровке. За дом с земельным участком он хотел получить  1 800 000 рублей. Срок мы определили в 3 месяца.', resh: 'Дом с земельным участком были проданы за 1 750 000 в течении 2-ух месяцев. ' }
          },
          isActive: false,
		  elemSex: 'div'
      }
    },
    methods: {
        path(name) {
            return require('~/assets/img/banki/' + name + '.jpg')
        },
        handleScrollElemSex (event) {
            let box = this.elemSex.getBoundingClientRect()
            if ( Math.abs(box.top) < 250 ) {
                this.isActive = true
            }
        }
    },
    mounted: function () {
        this.$nextTick(function () {
        let el_sex = this.$refs.banki
        this.elemSex = el_sex
        
        })
    },
    created () {
        if (process.browser) {  
            window.addEventListener('scroll', this.handleScrollElemSex)
        }
    },
    destroyed () {
        window.removeEventListener('scroll', this.handleScrollElemSex)
    }
  }
</script>
 
<style scoped>
.progress-item-anim:nth-child(11){    
    animation: opas .9s .1s ease forwards;
}
.progress-item-anim:nth-child(10) {    
    animation: opas .9s .2s ease forwards;
}
.progress-item-anim:nth-child(9) {    
    animation: opas .9s .3s ease forwards;
}
.progress-item-anim:nth-child(8) {    
    animation: opas .9s .4s ease forwards;
}
.progress-item-anim:nth-child(7) {    
    animation: opas .9s .5s ease forwards;
}
.progress-item-anim:nth-child(6) {    
    animation: opas .9s .6s ease forwards;
}
.progress-item-anim:nth-child(5) {    
    animation: opas .9s .3s ease forwards;
}
.progress-item-anim:nth-child(4) {    
    animation: opas .9s .4s ease forwards;
}
.progress-item-anim:nth-child(3) {    
    animation: opas .9s .5s ease forwards;
}
.progress-item-anim:nth-child(2) {    
    animation: opas .9s .6s ease forwards;
}
.progress-item-anim:nth-child(1) {    
    animation: opas .9s .6s ease forwards;
}
@keyframes opas{
  0%  { opacity: 0}
  100% { opacity: 1 }
}
.ot-picture > img {
    border-radius: 4px;
}
mark {
    background-color: transparent;
    color: #76281B;

    font-size: 700;
}
.solution {
    margin: 15px 0;
}
.banki {
    display: flex;
    padding-top: 25px;
}
.container {
    width: 100%; 
}
.progress-wrap {
    display: flex;
    flex-direction: column;
    justify-content: space-between;

    padding: 10px;
    margin-bottom: 15px;
    margin-bottom: 0;
    padding-bottom: 0;

    position: relative;
}
.progress-h2 {
  font-size: 700;
  margin: 0;
  font-weight: 500;
  color: white;
  position: absolute;
  top: 15px;
  left: 90px;

  text-align: center;
  display: flex;
  align-items: center;
  justify-content: center;
}
.progress-list {
    display: flex;
    margin: 25px 0;
    padding: 0;
    flex-direction: column;
    margin-bottom: 0;
}
.progress-item {
        opacity: 0;
    margin: 10px 0;
    font-size: 500;
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
    .banki {
        justify-content: center;
        padding-top: 90px;

    }
   .progress-wrap {
        padding: 0;
    }
    .progress-h2 {
        font-size: 32px;
        margin: 42px 0;
        top: -30px;
        left: 90px;
    }
    .container {
        width: 1200px; 
    }
    .progress-list {
        flex-direction: row;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        padding: 35px 0;
    }
    .progress-item {
        font-size: 24px;
        display: flex;
        flex-direction: row;
        /* width: 520px; */
        align-items: flex-start;
        margin-right: 15px;
    }
    .ot-picture > img {
        /* width: 250px; */
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