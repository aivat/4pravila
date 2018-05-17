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
                                Выгодно
                            </h3>
                            <p>Это очень выгодно, обязательно попробуйте, не пожалетеБ</p>
                        </div>
                        <a href="#">Позвонить</a>
                    </div>
                    <div class="service-item item-two">
                        <div class="service-header">
                            <h3 class="service-h3">
                                Выгодно
                            </h3>
                            <p>Это очень выгодно, обязательно попробуйте, не пожалетеБ</p>
                        </div>
                        <a href="#">Позвонить</a>
                    </div>
                    <div class="service-item item-three">
                        <div class="service-header">
                            <h3 class="service-h3">
                                Выгодно
                            </h3>
                            <p>Это очень выгодно, обязательно попробуйте, не пожалетеБ</p>
                        </div>
                        <a href="#">Позвонить</a>
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
}
.service-item {
    border-radius: 4px;
    padding: 10px 25px;
    background: linear-gradient(to right, rgba(26, 9, 9, 0.6) 0%, rgba(6, 7, 6, 0.6) 100%);
    background-color: rgba(129,34,25,1);
    background-color: #009cde;
    background-color: rgb(187, 48, 36);
    background-image: radial-gradient(circle farthest-side at 95px 95px,rgb(187, 48, 36),rgba(129,34,25,1) 125%);
}
.item-two {
background-color: #f0b801;
    background-image: radial-gradient(circle farthest-side at 95px 95px,#fbda01,#f0b801 125%);
}
.item-one {
    background-color: #cecccc;
    background-image: radial-gradient(circle farthest-side at 95px 95px,#eaeaea,#cecccc 125%);
}
.service-item:nth-child(2) {
    margin: 10px 0;
}
@media (min-width: 1200px) {
    .zachem {
        justify-content: center;
        /* height: 100px; */
    }
    .container {
        width: 1200px; 
    }
    .zachem-logo {
        padding: 0;
    }
    .zachem-wrap {
        align-items: center;
    }
    .service {
        display: flex;
    }
    .service-item:nth-child(2) {
        margin: 0 10px;
    }
    .service-item {
        height: 250px;
    }
}
</style>