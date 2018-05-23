<template>
    <div class="zachem">
        <div class="container">
            <div class="zachem-wrap">
                <div class="zachem-h2">
                    Зачем нужен риэлтор?
                </div>
                <div class="service">
                    <div class="service-item item-one">
                        <div class="service-header">
                            <h3 class="service-h3">
                                Выгода
                            </h3>
                            <p>Это очень выгодно, обязательно попробуйте, не пожалеете</p>
                        </div>
                        <a href="tel:+7 (3532) 93-50-60">Позвонить</a>
                    </div>
                    <div class="service-item item-two">
                        <div class="service-header">
                            <h3 class="service-h3">
                                Безопасность
                            </h3>
                            <p>Обеспечить безопасность и юридическую чистоту сделки, безусловно, лучше всего может солидная компания, у которой есть свои юристы, специализирующиеся на рынке недвижимости</p>
                        </div>
                        <a href="tel:+7 (3532) 93-50-60">Позвонить</a>
                    </div>
                    <div class="service-item item-three">
                        <div class="service-header">
                            <h3 class="service-h3">
                                Комфорт
                            </h3>
                            <p>Любая сделка требует весьма сложной организационной работы. Кто, кроме опытного риэлтора, может правильно выстроить цепочку из трёх-четырёх, а то и пяти-шести квартир и договориться со всеми заинтересованными сторонами так, чтобы всё прошло ровно и гладко?</p>
                        </div>
                        <a href="tel:+7 (3532) 93-50-60">Позвонить</a>
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
          day: 24
      }
    }
  }
</script>
 
<style scoped>
.zachem {
    display: flex;
    background-color: rgb(242, 245, 248);
}
.container {
    width: 100%; 
}
.zachem-wrap {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-color: rgb(242, 245, 248);
    padding: 10px;
    /* margin-bottom: 15px; */
}
.zachem-h2 {
    font-size: 30px;
    font-weight: 500;
    color: #444;
    /* border-bottom: 1px solid rgb(217, 225, 233); */
    margin: 10px auto;
    margin-bottom: 25px;
    line-height: 32px;
    text-align: center;
}
.service-item {
    display: flex;
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
    align-items: flex-start;
}
.item-two {
    /* background-color: rgba(129,34,25,1);
    background-image: none;
     background-image: radial-gradient(circle farthest-side at 95px 95px,#fbda01,#f0b801 125%);
    background-image: radial-gradient(circle farthest-side at 95px 95px,rgb(187, 48, 36),rgba(129,34,25,1) 125%); 
    color: #fff; */
}


.item-one {
    background-color: #ececec;
    background-image: radial-gradient(circle farthest-side at 95px 95px,#eaeaea,#cecccc 125%);
    background-image: radial-gradient(circle farthest-side at 95px 95px,#fff,#ececec 125%);
    background-color: #fff;
    background-image: none;
    /* box-shadow: 0 1px 4px 0 rgba(0,0,0,.14); */
}
.service-item:nth-child(2) {
    margin: 10px 0;
}
.service-h3 {
    font-size: 24px;
    margin: 15px 0;
}

.service-header>p {
    font-weight: 300;
    
}
.service-item>a {
    text-decoration: none;
    display: inline-block;
    color: #fff;
    background-color: rgba(129,34,25,1);
    padding: 12px 25px;
    border-radius: 4px;
    margin-bottom:  15px;
}
.service-item>a:hover {
    background-color: rgba(129,34,25,.8);
}
/* .item-two>a {
    background-color: #fff;
    color:rgba(129,34,25,1);
} */
@media (min-width: 1200px) {
    .zachem {
        justify-content: center;
        /* height: 100px; */
    }
    .zachem-h2 {
        font-size: 32px;
        border-bottom: 1px solid rgb(217, 225, 233);
        margin: 42px 0;
        line-height: 47px;
    }
    .container {
        width: 1200px; 
    }
    .zachem-logo {
        padding: 0;
    }
    .zachem-wrap {
        align-items: center;
        margin-bottom: 42px;
        padding: 0;
    }
    .service {
        display: flex;
    }
    .service-item:nth-child(2) {
        margin: 0 10px;
    }
    .service-item {
        width: 343px;
        /* height: 250px; */
    }
}
</style>