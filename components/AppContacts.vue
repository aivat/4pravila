<template>
    <div class="contacts">
        <div class="link" id="contacts" href="#contacts" v-smoothscroll="{ duration : 500 }"></div>
        <div class="container">
            <div class="contacts-wrap">
                <div class="contacts-h2">
                    Контакты
                </div>
                <div class="contacts-body">
                    <div class="contacts-item">
                        <div class="contacts-item-p">Адрес: <b>г. Оренбург, ул. Терешковой, 263/2, офис № 209</b></div>
                        <div>Остановка: <b>Хабаровская, Бизнес-центр "Премьер"</b></div>
                        <div>Идут маршруты: <b>21, 41, 49Т, 51, 59, 61, 79, 158, 188, 4</b></div>
                    </div>
                    <div class="contacts-item">
                        <div>Время работы: <b>Пн-Пт: с 09:00 до 18:00</b></div>
                        <div>Телефон: <a class="contacts-item-link" href="tel:+7 (3532) 93-50-60">+7 (3532) 93-50-60</a></div>
                        <div>email: <b>studia_56@mail.ru</b></div>                        
                    </div>                    
                </div>
            </div>
        </div>
        <div class="map-wrapper">
            <yandex-map 
            :coords="[51.827540, 55.158256]"
            zoom="16"
            style="width: 98vw; height: 600px;"
            :cluster-options="{
                1: {clusterDisableClickZoom: true}
            }"
            :behaviors="['multiTouch']"
            :controls="['trafficControl', 'zoomControl', 'geolocationControl', 'fullscreenControl']"
            >
                <ymap-marker 
                marker-id='1'
                marker-type="placemark"
                :coords="[51.827540, 55.158256]"
                hint-content="Юридическое бюро 'Ваш Советник', ул. Салмышская, д. 34/5, офис № 207"
                :balloon="{header: 'Юридическое бюро Ваш Советник', body: 'Оренбург, ул. Салмышская, д. 34/5, офис № 207<br> Тел.: 608-464', footer: 'Пн-Пт: с 09:00 до 19:00'}"
                :icon="{color: 'blue', glyph: 'court'}"
                cluster-name="1"
                ></ymap-marker>
            </yandex-map>
        </div>
    </div>
</template>
<script>
import Vue from 'vue'

import YmapPlugin from 'vue-yandex-maps'

if (process.browser) {
  Vue.use(YmapPlugin)
}
export default {
    data() {
      return {
          day: 24
      }
    }
  }
</script>
 
<style scoped>
.link {
    position: relative;
    top: -60px;
}
.contacts {
    display: flex;
    background-color: rgb(242, 245, 248);
    /* background-color: #fff; */
    flex-direction: column;
    align-items: center;
    padding-bottom: 20px;
    
}
.container {
    width: 100%; 
}
.contacts-wrap {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-color: rgb(242, 245, 248);
    /* background-color: #fff; */
    padding: 0;
    /* margin: 0 10px; */
    margin-bottom: 15px;
}
.contacts-h2 {
    font-size: 24px;
    font-weight: 500;
    color: #444;
    border-bottom: 1px solid rgb(217, 225, 233);
    margin: 10px auto;
    margin-bottom: 25px;
    /* line-height: 30px; */
}
.contacts-item-link {
    display: inline-block;
    text-decoration: none;
    color: inherit;
    font-weight: 500;
    border-bottom: 1px dashed black;
}
.contacts-list {
    display: flex;
    flex-direction: column;
    align-items: center;
}
.contacts-body {
    font-weight: 300;
    font-size: 16px;
    padding: 0 15px;
    padding-bottom: 0;
    margin: 0 10px;
    background-color: #fff;
    border-radius: 4px;
    box-shadow: 0 1px 4px 0 rgba(0,0,0,.14);
}
b {
    font-weight: 500;
}
.contacts-item>div {
    margin: 16px 0;
}
.contacts-item-p {
    margin: 0;
}
@media (min-width: 1200px) {
    .link {
        top: -45px;
    }
    .contacts {
        justify-content: center;
        padding: 0;
        /* height: 100px; */
    }
    .contacts-wrap {
        margin-bottom: 35px;
    }
    .contacts-h2 {
        font-size: 32px;
        border-bottom: 1px solid rgb(217, 225, 233);
        margin: 42px 0;
        line-height: 47px;
        margin: 42px auto;
    }
    .container {
        width: 1200px; 
    }
    .contacts-list {
        flex-direction: row;
        align-items: flex-start;
        align-items: stretch;
        justify-content: center;
    }
    .contacts-body {
        display: flex;
        justify-content: space-between;
        background-color: rgb(242, 245, 248);
        border-radius: 0;
        box-shadow: none;
        padding: 0;
        margin: 0;
    }
    .contacts-item {
        background-color: #fff;
        border-radius: 4px;
        box-shadow: 0 1px 4px 0 rgba(0,0,0,.14);
        padding: 25px 35px;
        width: 40%;
    }
}
</style>