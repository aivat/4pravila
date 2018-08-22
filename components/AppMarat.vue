<template>
    <div class="marat" >
        <div class="link" id="marat"></div>
        <div class="container">
            <div class="marat-wrap">
                <!-- <div class="marat-h2" >
                    От звонка до сделки 4 шага
                </div> -->
                <div class="marat-info">
                    <div class="marat-slogan">«Мы не являемся риэлторской компанией №1, поэтому мы работаем больше...» </div>
                    <div class="marat-name">Марат Даутов</div>
                    <div class="marat-desc">основатель компании«4 правила»</div>
                </div>
                <picture>
                    <source srcset="~assets/img/mr333.png" media="(min-width: 480px)" alt="Марат Даутов">
                    <img src='~assets/img/mr3.png' alt="Марат Даутов">
                </picture>
                
            </div>
        </div>
    </div>
</template>
<script>

export default {
    data() {
      return {
      }
    }
  }
</script>
 
<style scoped>
.marat {
    display: flex;
    background-color: rgb(242, 245, 248);
}
.container {
    width: 100%; 
}
.marat-wrap {
    display: flex;
    /* flex-direction: column; */
    justify-content: space-between;
    background-color: rgb(242, 245, 248);
    padding: 10px;
    padding-bottom: 0;
    margin-bottom: 0;
    /* background-image: url('~assets/img/marat2.jpg');
    background-repeat: no-repeat;
    height: 500px; */
}
.marat-h2 {
    font-size: 24px;
    font-weight: 500;
    color: #444;
    border-bottom: 1px solid rgb(217, 225, 233);
    margin: 0 auto;
    margin-bottom: 25px;
    /* line-height: 30px; */
    text-align: center;
}
.marat-item {
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

.marat-info {
    /* margin-top: 1px; */
}
picture {
    margin-left: -25px;
}
img, source {
    display: block;
}
.marat-slogan {
    /* font-family: Raleway-Medium; */
    font-weight: 500;
    color: #76281B;
    font-size: 18px;
    margin: 20px 0;
}
.marat-name {
    /* font-family: Raleway-Bold; */
    font-weight: 700;
    font-size: 14px;
}
.marat-desc {
    font-size: 14px;
}
@media (min-width: 768px) {
    .marat-info {
        margin-top: 150px;
        /* padding-left:5px; */
    }
    .marat-slogan {
        font-size: 36px;
        margin: 30px 0;
    }
    .marat-name {
        font-size: 24px;
    }
    .marat-desc {
        font-size: 24px;
    }
}
@media (min-width: 1200px) {

    .marat {
        justify-content: center;
        margin-top: 30px;
        /* height: 100px; */
    }
    .marat-h2 {
        font-size: 32px;
        border-bottom: 1px solid rgb(217, 225, 233);
        margin: 42px 0;
        line-height: 47px;
        margin: 60px auto;
    }
    .container {
        width: 1200px; 
    }

    .marat-wrap {
        height: 660px;;
    }
    picture {
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
    }
}
</style>