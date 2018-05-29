<template>
    <div class="pravila" >
        <div class="link" id="pravila" href="#pravila"></div>
        <div class="container">
            <div class="pravila-wrap">
                <div class="pravila-h2" >
                    4 правила
                </div>
                <div class="pravila-list">
                    <div class="pravila-item">
                        <div class='nav'>
                            <div class="nav-wrap">
                                <a class='nav-wrap-item' v-on:click="tab(0)">
                                    <p class="pravilo-visible">
                                    Правило
                                    </p> № 1
                                </a>
                                <a class='nav-wrap-item' v-on:click="tab(1)">
                                    <p class="pravilo-visible">
                                        Правило
                                    </p> № 2
                                </a>
                                <a class='nav-wrap-item' v-on:click="tab(2)">
                                    <p class="pravilo-visible">
                                        Правило 
                                    </p>№ 3
                                </a>
                                <a class='nav-wrap-item' v-on:click="tab(3)">
                                    <p class="pravilo-visible">
                                        Правило 
                                    </p>№ 4
                                </a>
                            </div>
                            <svg class='under' viewBox='0 0 100 1'>
                                <line id="line" x1="0" y1="0" x2="100%"  y2="0" stroke="rgba(129,34,25,1)" stroke-width="1" stroke-dasharray="25 75" v-bind:style="{ 'stroke-dashoffset':  dashoffset }"></line>
                            </svg>
                        </div>
                    </div>
                    <div class="pravila-body" v-if="active==0">
                        <h3 class="pravila-h3">Гарантированная продажа квартиры за 25 дней!</h3>
                        <div class="pravila-content">Снимаем зал для игры в футбол в одном институте. Обычно ключ берёт, кто первый приходит из наших. Вахтёрши нас знали, давали ключ без проблем (на всякий случай есть список)
Но тут недавно захожу - сидит новая вахтёрша с видом "идите на***, я вас не знаю". Говорю, что на футбол. Нашла список в своём журнале. К этому времени подошли ещё ребята наши. 
Она сказала, что ключ от зала даст только тому-то (ну типа организатору, который заключал договор)
Спрашиваем : а каким образом Вы узнаете, что этот человек именно он?
Вахтёрша : документы проверю
Мы: а если он не сможет приехать, то что делать?
Вахтёрша: значит позвонит мне им скажет, что не приедет, тогда дам ключи.
Организатор давно уже перестал ходить на футбол. Поэтому не знали, чем он занимается в данный момент. Я отошёл, позвонил вахтёрше, представился организатором. Сказал, что не смогу приехать. Попросил ребятам дать ключ, что она и сделала.
И с видом победителя вахтёрша говорит при передаче ключей : вот видите, можно было сразу нормально всё сделать!
P.S. : иногда люди усложняют процесс, когда можно сделать всё по нормальному)</div>
                    </div>
                    <div class="pravila-body" v-if="active==1">
                        <h3 class="pravila-h3">Подбор недвижимости за 24 часа. Оформление ипотечной заявки за 2 часа. 15 банков-партнеров!</h3>
                        <div class="pravila-content">Подбор недвижимости за 24 часа. Оформление ипотечной заявки за 2 часа. 15 банков-партнеров! Подбор недвижимости за 24 часа. Оформление ипотечной заявки за 2 часа. 15 банков-партнеров! Подбор недвижимости за 24 часа. Оформление ипотечной заявки за 2 часа. 15 банков-партнеров! Подбор недвижимости за 24 часа. Оформление ипотечной заявки за 2 часа. 15 банков-партнеров!Подбор недвижимости за 24 часа. Оформление ипотечной заявки за 2 часа. 15 банков-партнеров! Подбор недвижимости за 24 часа. Оформление ипотечной заявки за 2 часа. 15 банков-партнеров!Подбор недвижимости за 24 часа. Оформление ипотечной заявки за 2 часа. 15 банков-партнеров!
                        </div>
                    </div>
                    <div class="pravila-body" v-if="active==2">
                        <h3 class="pravila-h3">Предоставление отчета о проделанной работе за 14 дней!</h3>
                        <div class="pravila-content">Подбор недвижимости за 24 часа. Оформление ипотечной заявки за 2 часа. 15 банков-партнеров! Подбор недвижимости за 24 часа. Оформление ипотечной заявки за 2 часа. 15 банков-партнеров! Подбор недвижимости за 24 часа. Оформление ипотечной заявки за 2 часа. 15 банков-партнеров! Подбор недвижимости за 24 часа. Оформление ипотечной заявки за 2 часа. 15 банков-партнеров!Подбор недвижимости за 24 часа. Оформление ипотечной заявки за 2 часа. 15 банков-партнеров! Подбор недвижимости за 24 часа. Оформление ипотечной заявки за 2 часа. 15 банков-партнеров!Подбор недвижимости за 24 часа. Оформление ипотечной заявки за 2 часа. 15 банков-партнеров!</div>
                    </div>
                    <div class="pravila-body" v-if="active==3">
                        <h3 class="pravila-h3">Продажа недвижимости в оренбургской области</h3>
                        <div class="pravila-content">Подбор недвижимости за 24 часа. Оформление ипотечной заявки за 2 часа. 15 банков-партнеров! Подбор недвижимости за 24 часа. Оформление ипотечной заявки за 2 часа. 15 банков-партнеров! Подбор недвижимости за 24 часа. Оформление ипотечной заявки за 2 часа. 15 банков-партнеров! Подбор недвижимости за 24 часа. Оформление ипотечной заявки за 2 часа. 15 банков-партнеров!Подбор недвижимости за 24 часа. Оформление ипотечной заявки за 2 часа. 15 банков-партнеров! Подбор недвижимости за 24 часа. Оформление ипотечной заявки за 2 часа. 15 банков-партнеров!Подбор недвижимости за 24 часа. Оформление ипотечной заявки за 2 часа. 15 банков-партнеров!</div>
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
          active: 0,
          dashoffset: 0
      }
    },
    methods: {
        tab: function (index) {
            this.dashoffset = -(100 / 4) * index
            this.active = index
        }
    }
  }
</script>
 
<style scoped>
.nav {
    position: relative;
}
.nav-wrap {
    display: flex;
    /* width: 320px; */
    /* justify-content: space-around; */
}
.nav-wrap-item {
    /* display: flex; */
    width: 25%;
    text-align: center;
    font-size: 16px;
    padding: 0 20px;
    cursor: pointer;
    font-weight: 500;
    color: rgba(129,34,25,1);
}
.under {
            display: block;
        position: absolute;
        left: 0;
        bottom: -10px;
        width: 100%;

        /* height: .4rem;        */
}
.under>line {
    transition: stroke-dashoffset .2s ease-in-out;
}
.pravilo-visible {
    display: none;
}
.link {
    position: relative;
    top: -50px;
}
.pravila {
    display: flex;
    background-color: rgb(242, 245, 248);
}
.container {
    width: 100%; 
}
.pravila-wrap {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-color: rgb(242, 245, 248);
    padding: 10px;
    margin-bottom: 15px;
}
.pravila-h2 {
    font-size: 24px;
    font-weight: 500;
    color: #444;
    border-bottom: 1px solid rgb(217, 225, 233);
    margin: 0 auto;
    margin-bottom: 25px;
    /* line-height: 30px; */
    text-align: center;
}

.pravila-item {
    /* width: 90%; */
    max-width: 800px;
    /* margin: 3rem auto; */
    /* box-shadow: 0 0 1rem rgba(0, 0, 0, .5); */
}

.main-navigation {
    display: table;
    position: relative;
    width: 100%;
    font-family: 'Acme', sans-serif;
    background: #361F36;
    box-sizing: border-box;
}
    .main-navigation > .item {
        display: table-cell;
        text-align: center;
        line-height: 3rem;
        cursor: pointer;
        text-decoration: none;
        color: #fff;
        opacity: .6;
        box-sizing: border-box;
    }      
        .main-navigation > .item:focus {
            outline: none;
        }
        
        .main-navigation > .item:hover,
        .main-navigation > .item:focus {
            opacity: 1;
        }

    
    .main-navigation > .underline {
        display: block;
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: .4rem;
    }
  .pravila-list {

        display: flex;
        flex-direction: column;
        align-items: center;
  }
 .pravila-body {
     margin-top: 20px;
    box-shadow: 0 1px 4px 0 rgba(0,0,0,.14);
    background-color: #fff;
    border-radius: 4px;
    padding: 10px 25px;
 }
 .pravila-h3 {
    font-size: 20px;
    font-weight: 500;
    margin: 15px 0;
    text-align: center;
 }
 .pravila-content {
     font-weight: 300;
 }
@media (min-width: 425px) {
    .pravilo-visible {
        display: inline;
        margin: 0;
    }
    .nav-wrap-item {
        padding: 0 5px;
        /* font-size: 14px; */
    }
}

@media (min-width: 600px) {
    .nav-wrap-item {
        padding: 0 20px;
        /* font-size: 14px; */
    }
}

@media (min-width: 1200px) {
    .pravila {
        justify-content: center;
        /* height: 100px; */
    }
    .pravila-h2 {
        font-size: 32px;
        border-bottom: 1px solid rgb(217, 225, 233);
        margin: 42px 0;
        line-height: 47px;
        margin: 42px auto;
    }
    .container {
        width: 1200px; 
    }
    .pravila-list {

    }
}
</style>