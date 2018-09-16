<template>
    <div class="ot" id="ot">
        <!-- <div class="link" id="ot"></div> -->
        <div class="container">
            <div class="progress-wrap">
                <div class="progress-wrap-caption">
                    <picture>
                        <source srcset="~/assets/img/1x/1.jpg" media="(min-width: 480px)" alt="banner.name">
                        <img src='~/assets/img/1x/1_2.jpg'>
                    </picture>
                    <div class="progress-h2" >Отзывы</div>
                </div>

                <!-- <div class="progress-h2" >в цифрах</div> -->
                <div class="progress-list" >
                    <div class="progress-item" v-for="item in items" :key="item.id">
                        <div class="progress-item-top">
                            <div class="progress-item-top-task">
                                <mark>ЗАДАЧА: </mark>{{ item.text }}
                            </div>
                            <div class="solution">
                                <mark>РЕШЕНИЕ: </mark> {{ item.resh }}
                            </div>
                        </div>
                        <picture class="ot-picture">
                                  <source :srcset="path(item.id)" media="(min-width: 480px)" :alt="item.id">
                                  <img :src="path(item.id)" :alt="item.ud">
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
          }
      }
    },
    methods: {
        path(name) {
            return require('~/assets/img/ot/' + name + '.jpg')
        }
    }
  }
</script>
 
<style scoped>
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
     text-align: center; 

      font-size:20px;
      /* line-height: 15px; */
  /* font-family: 'Raleway-Bold'; */
  margin: 0;
  font-weight: 700;
  color: white;
  /* color: #444; */
  position: absolute;
  top: 15px;
  left: 120px;
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