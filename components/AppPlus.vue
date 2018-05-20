<template>
    <div class="plus">
        <div class="container">
            <div class="plus-wrap">
                <div class="plus-h2">
                    Почему нас советуют друзьям?
                </div>
                <div class="plus-container">
                    <div class="plus-container-wrap">
                        <div class="plus-item-desctop" v-for="(item, index) in plus" :key="index" v-bind:style="{top:qwe2(index),left:qwe(index)}">
                            <div class="plus-item-left">
                                <div class="plus-item-left-circle" v-bind:class="classObject(index)" v-on:click="setActive(index)">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px"
                                        height="40px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                    <g id="Bounding_Boxes">
                                        <path fill="none" d="M0,0h24v24H0V0z"/>
                                    </g>
                                    <g id="Outline">
                                        <g id="ui_x5F_spec_x5F_header">
                                        </g>
                                        <g>
                                            <path d="M19,1H5C3.9,1,3.01,1.9,3.01,3L3,15.93c0,0.69,0.35,1.3,0.88,1.66L12,23l8.11-5.41c0.53-0.36,0.88-0.97,0.88-1.66L21,3
                                                C21,1.9,20.1,1,19,1z M12,20.6l-7-4.66V3h14v0l0,12.93L12,20.6z"/>
                                            <polygon points="9.99,13.18 7.41,10.59 6,12 10,16 18,8 16.58,6.58 		"/>
                                        </g>
                                    </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="plus-item-right" v-bind:style="{top:getDescTop(index),left:getDescLeft(index), 'text-align': getTextAlign(index)}">
                                <h3 class="plus-h3" v-on:click="setActive(index)" v-bind:class="classObjectH3(index)">
                                    {{ item.name }}
                                </h3>
                                <p v-show="index == ind" class="plus-p">
                                        {{ item.text}}
                                </p>
                            </div>
                        </div>
                        <div class="plus-circle"></div>
                        <div class="plus-item">
                            <div class="plus-item-left">
                                <div class="plus-item-left-circle" v-bind:class="classObject(0)" v-on:click="setActive(1)">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px"
                                        height="40px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                    <g id="Bounding_Boxes">
                                        <path fill="none" d="M0,0h24v24H0V0z"/>
                                    </g>
                                    <g id="Outline">
                                        <g id="ui_x5F_spec_x5F_header">
                                        </g>
                                        <g>
                                            <path d="M19,1H5C3.9,1,3.01,1.9,3.01,3L3,15.93c0,0.69,0.35,1.3,0.88,1.66L12,23l8.11-5.41c0.53-0.36,0.88-0.97,0.88-1.66L21,3
                                                C21,1.9,20.1,1,19,1z M12,20.6l-7-4.66V3h14v0l0,12.93L12,20.6z"/>
                                            <polygon points="9.99,13.18 7.41,10.59 6,12 10,16 18,8 16.58,6.58 		"/>
                                        </g>
                                    </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="plus-item-right">
                                <h3 class="plus-h3" v-on:click="setActive(0)" v-bind:class="classObjectH3(0)">
                                    Гарантия
                                </h3>
                                <p v-show="0 == ind">
                                        Мы заранее обсудим с вами условия гарантии и в гарантийных случаях исполним свои обязательства
                                </p>
                            </div>
                        </div>
                        <div class="plus-item">
                            <div class="plus-item-left">
                                <div class="plus-item-left-circle" v-bind:class="classObject(1)" v-on:click="setActive(1)">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px"
                                        height="40px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                    <g id="Bounding_Boxes">
                                        <g id="ui_x5F_spec_x5F_header_copy_3">
                                        </g>
                                        <path fill="none" d="M0,0h24v24H0V0z"/>
                                        <path fill="none" d="M0,0h24v24H0V0z"/>
                                    </g>
                                    <g id="Outline">
                                        <g>
                                            <path d="M9,21h9c0.83,0,1.54-0.5,1.84-1.22l3.02-7.05C22.95,12.5,23,12.26,23,12v-2c0-1.1-0.9-2-2-2h-6.31l0.95-4.57l0.03-0.32
                                                c0-0.41-0.17-0.79-0.44-1.06L14.17,1L7.58,7.59C7.22,7.95,7,8.45,7,9v10C7,20.1,7.9,21,9,21z M9,9l4.34-4.34L12,10h9l0,2l-3,7H9V9
                                                z"/>
                                            <rect x="1" y="9" width="4" height="12"/>
                                        </g>
                                        <g id="ui_x5F_spec_x5F_header">
                                        </g>
                                    </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="plus-item-right">
                                <h3 class="plus-h3" v-on:click="setActive(1)" v-bind:class="classObjectH3(1)">
                                    Качество
                                </h3>
                                <p v-show="1 == ind">
                                    Мы заранее обсудим с вами условия гарантии и в гарантийных случаях исполним свои обязательства
                                </p>
                            </div>
                        </div>
                        <div class="plus-item">
                            <div class="plus-item-left">
                                <div class="plus-item-left-circle" v-bind:class="classObject(2)" v-on:click="setActive(2)">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="44px"
                                        height="44px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                    <g id="Bounding_Boxes">
                                        <g id="ui_x5F_spec_x5F_header_copy_3">
                                        </g>
                                        <path fill="none" d="M0,0h24v24H0V0z"/>
                                    </g>
                                    <g id="Outline">
                                        <g id="ui_x5F_spec_x5F_header">
                                        </g>
                                        <g>
                                            <path d="M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10c5.52,0,10-4.48,10-10S17.52,2,12,2z M12,20c-4.41,0-8-3.59-8-8s3.59-8,8-8
                                                c4.41,0,8,3.59,8,8S16.41,20,12,20z"/>
                                            <path d="M12.31,11.14c-1.77-0.45-2.34-0.94-2.34-1.67c0-0.84,0.79-1.43,2.1-1.43c1.38,0,1.9,0.66,1.94,1.64h1.71
                                                c-0.05-1.34-0.87-2.57-2.49-2.97V5H10.9v1.69C9.39,7.01,8.18,7.99,8.18,9.5c0,1.79,1.49,2.69,3.66,3.21
                                                c1.95,0.46,2.34,1.15,2.34,1.87c0,0.53-0.39,1.39-2.1,1.39c-1.6,0-2.23-0.72-2.32-1.64H8.04c0.1,1.7,1.36,2.66,2.86,2.97V19h2.34
                                                v-1.67c1.52-0.29,2.72-1.16,2.73-2.77C15.96,12.36,14.07,11.6,12.31,11.14z"/>
                                        </g>
                                    </g>
                                    </svg>

                                </div>
                            </div>
                            <div class="plus-item-right">
                                <h3 class="plus-h3" v-on:click="setActive(2)" v-bind:class="classObjectH3(2)">
                                    Цена
                                </h3>
                                <p v-show="2 == ind">
                                    Мы заранее обсудим с вами условия гарантии и в гарантийных случаях исполним свои обязательства
                                </p>
                            </div>
                        </div>
                        <div class="plus-item">
                            <div class="plus-item-left">
                                <div class="plus-item-left-circle" v-bind:class="classObject(3)" v-on:click="setActive(3)">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px"
                                        height="40px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                    <g id="Bounding_Boxes">
                                        <g id="ui_x5F_spec_x5F_header_copy_3" display="none">
                                        </g>
                                        <path fill="none" d="M0,0h24v24H0V0z"/>
                                    </g>
                                    <g id="Rounded" display="none">
                                        <g id="ui_x5F_spec_x5F_header_copy_5">
                                        </g>
                                        <g display="inline">
                                            <path d="M11.99,2C6.47,2,2,6.48,2,12c0,5.52,4.47,10,9.99,10C17.52,22,22,17.52,22,12C22,6.48,17.52,2,11.99,2z M12,20
                                                c-4.42,0-8-3.58-8-8c0-4.42,3.58-8,8-8s8,3.58,8,8C20,16.42,16.42,20,12,20z"/>
                                            <path d="M11.78,7h-0.06C11.32,7,11,7.32,11,7.72v4.72c0,0.35,0.18,0.68,0.49,0.86l4.15,2.49c0.34,0.2,0.78,0.1,0.98-0.24v0
                                                c0.21-0.34,0.1-0.79-0.25-0.99l-3.87-2.3V7.72C12.5,7.32,12.18,7,11.78,7z"/>
                                        </g>
                                    </g>
                                    <g id="Sharp" display="none">
                                        <g id="ui_x5F_spec_x5F_header_copy_4">
                                        </g>
                                        <g display="inline">
                                            <path d="M11.99,2C6.47,2,2,6.48,2,12c0,5.52,4.47,10,9.99,10C17.52,22,22,17.52,22,12C22,6.48,17.52,2,11.99,2z M12,20
                                                c-4.42,0-8-3.58-8-8c0-4.42,3.58-8,8-8s8,3.58,8,8C20,16.42,16.42,20,12,20z"/>
                                            <polygon points="12.5,7 11,7 11,13 16.25,16.15 17,14.92 12.5,12.25 		"/>
                                        </g>
                                    </g>
                                    <g id="Outline">
                                        <g id="ui_x5F_spec_x5F_header" display="none">
                                        </g>
                                        <g>
                                            <path d="M11.99,2C6.47,2,2,6.48,2,12c0,5.52,4.47,10,9.99,10C17.52,22,22,17.52,22,12C22,6.48,17.52,2,11.99,2z M12,20
                                                c-4.42,0-8-3.58-8-8c0-4.42,3.58-8,8-8s8,3.58,8,8C20,16.42,16.42,20,12,20z"/>
                                            <polygon points="12.5,7 11,7 11,13 16.25,16.15 17,14.92 12.5,12.25 		"/>
                                        </g>
                                    </g>
                                    <g id="Duotone" display="none">
                                        <g id="ui_x5F_spec_x5F_header_copy_2">
                                        </g>
                                        <g display="inline">
                                            <path opacity="0.3" d="M12,4c-4.42,0-8,3.58-8,8c0,4.42,3.58,8,8,8s8-3.58,8-8C20,7.58,16.42,4,12,4z M16.25,16.15L11,13V7h1.5
                                                v5.25l4.5,2.67L16.25,16.15z"/>
                                            <path d="M11.99,2C6.47,2,2,6.48,2,12c0,5.52,4.47,10,9.99,10C17.52,22,22,17.52,22,12C22,6.48,17.52,2,11.99,2z M12,20
                                                c-4.42,0-8-3.58-8-8c0-4.42,3.58-8,8-8s8,3.58,8,8C20,16.42,16.42,20,12,20z"/>
                                            <polygon points="12.5,7 11,7 11,13 16.25,16.15 17,14.92 12.5,12.25 		"/>
                                        </g>
                                    </g>
                                    <g id="Material" display="none">
                                        <g id="ui_x5F_spec_x5F_header_copy">
                                        </g>
                                        <g display="inline">
                                            <path d="M11.99,2C6.47,2,2,6.48,2,12c0,5.52,4.47,10,9.99,10C17.52,22,22,17.52,22,12C22,6.48,17.52,2,11.99,2z M12,20
                                                c-4.42,0-8-3.58-8-8c0-4.42,3.58-8,8-8s8,3.58,8,8C20,16.42,16.42,20,12,20z"/>
                                            <polygon points="12.5,7 11,7 11,13 16.25,16.15 17,14.92 12.5,12.25 		"/>
                                        </g>
                                    </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="plus-item-right">
                                <h3 class="plus-h3" v-on:click="setActive(3)" v-bind:class="classObjectH3(3)">
                                    Время
                                </h3>
                                <p v-show="3 == ind">
                                    Мы заранее обсудим с вами условия гарантии и в гарантийных случаях исполним свои обязательства
                                </p>
                            </div>
                        </div> 
                        <div class="plus-item">
                            <div class="plus-item-left">
                                <div class="plus-item-left-circle" v-bind:class="classObject(4)" v-on:click="setActive(4)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                                        <path d="M2 17h2v.5H3v1h1v.5H2v1h3v-4H2v1zm1-9h1V4H2v1h1v3zm-1 3h1.8L2 13.1v.9h3v-1H3.2L5 10.9V10H2v1zm5-6v2h14V5H7zm0 14h14v-2H7v2zm0-6h14v-2H7v2z"/>
                                        <path d="M0 0h24v24H0z" fill="none"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="plus-item-right">
                                <h3 class="plus-h3" v-on:click="setActive(4)" v-bind:class="classObjectH3(4)">
                                    Широкий выбор
                                </h3>
                                <p v-show="4 == ind">
                                    Мы заранее обсудим с вами условия гарантии и в гарантийных случаях исполним свои обязательства
                                </p>
                            </div>
                        </div>                         
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
          day: 24,
          ind: 1,
        isActive: true,
        plus: [
            {
                id:'0',
                name:'Гарантия',
                text:'Мы заранее обсудим с вами условия гарантии и в гарантийных случаях исполним свои обязательства'
            },
            {
                id:'1',
                name:'Качество',
                text:'Мы заранее обсудим с вами условия гарантии и в гарантийных случаях исполним свои обязательства'
            },
            {
                id:'2',
                name:'Цена',
                text:'Мы заранее обсудим с вами условия гарантии и в гарантийных случаях исполним свои обязательства'
            },
            {
                id:'3',
                name:'Время',
                text:'Мы заранее обсудим с вами условия гарантии и в гарантийных случаях исполним свои обязательства'
            },
            {
                id:'4',
                name:'Широкий выбор',
                text:'Мы заранее обсудим с вами условия гарантии и в гарантийных случаях исполним свои обязательства. Мы заранее обсудим с вами условия гарантии и в гарантийных случаях исполним свои обязательства'
            }]
      }
    },
    methods: {
        setActive(i) {
            this.ind = i
        },
        classObject: function (i) {
            return {
                active: this.ind == i
            }
        },
        classObjectH3: function (i) {
            return {
                activeH3: this.ind == i
            }
        },
        qwe(i) {
            let num = 5 // Число картинок
            let wrap = 460 // Размер "холста" для расположения картинок
            let radius = 230 // Радиус нашего круга

                let f = 2 / num * i * Math.PI  // Рассчитываем угол каждой картинки в радианах
                let left = Math.round(wrap + radius * Math.sin(f)) - radius
                left = left + 'px'
                let top = wrap + radius * Math.cos(f) + 'px'
return left
                // $('#wrap img').eq(i).css({'top':top,'left':left}); // Устанавливаем значения каждой картинке
        },
        qwe2(i) {
            let num = 5 // Число картинок
            let wrap = 460 // Размер "холста" для расположения картинок
            let radius = 230 // Радиус нашего круга

                let f = 2 / num * i * Math.PI  // Рассчитываем угол каждой картинки в радианах
                let left = wrap + radius * Math.sin(f) + 'px'
                let top = wrap+radius-(Math.round(wrap + radius * Math.cos(f)))
                top = top + 'px'
return top
                // $('#wrap img').eq(i).css({'top':top,'left':left}); // Устанавливаем значения каждой картинке
        },
        getDescTop(i) {
            switch(i) {
                case 0:
                    return '-50px'
                    break
                case 1:
                    return '-50px'
                    break;
                case 2:
                    return '50px'
                    break;
                case 3:
                    return '50px'
                    break;
                case 4:
                    return '-50px'
                    break;
            }
        },
        getDescLeft(i) {
            switch(i) {
                case 0:
                    return '70px'
                    break
                case 1:
                    return '90px'
                    break;
                case 2:
                    return '70px'
                    break;
                case 3:
                    return '-230px'
                    break;
                case 4:
                    return '-250px'
                    break;
            }
        },
        getTextAlign(i) {
            switch(i) {
                case 3:
                    return 'right'
                    break;
                case 4:
                    return 'right'
                    break;
            }
        }
    }
  }
</script>
 
<style scoped>

.plus {
    display: flex;
    background-color: rgb(242, 245, 248);
}
.container {
    width: 100%; 
}
.plus-wrap {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-color: rgb(242, 245, 248);
    padding: 10px;
    margin-bottom: 15px;
}
.plus-h2 {
    font-size: 24px;
    font-weight: 500;
    color: #444;
    /* border-bottom: 1px solid rgb(217, 225, 233); */
    margin: 10px auto;
    margin-bottom: 25px;
    line-height: 30px;
    text-align: center;
    /* text-decoration: underline;
    text-decoration-color: rgb(217, 225, 233);
     text-decoration-skip: ink; */
}
.plus-container {
    display: flex;
    justify-content: center;
}

.plus-item {
    display: flex;
    margin-bottom: 10px;
}
.plus-h3 {
    margin: 24px 0;
    /* text-decoration-style: dashed; */
    border-bottom: 1px currentColor dashed;
    line-height: 17px;
    display: inline-block;
    cursor: pointer;
   
}
.plus-h3:active {
    color: rgba(129,34,25,1);
}
.plus-item-right {
    margin-left: 10px;
}
.plus-item-left-circle {
    width: 70px;
    height: 70px;
    border: 1px solid rgb(217, 225, 233);
    border-radius: 35px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #fff;
    cursor: pointer;
}
.plus-item-left-circle>svg {
    fill: rgba(129,34,25,1);
}
.fade-enter-active  {
  transition: all .5s;
  /* transition: height .5s; */
}
.fade-enter /* .fade-leave-active до версии 2.1.8 */ {
  opacity: 0;
  transform: translateY(30px);
  /* height: 0; */
}
.fade-leave-to, .fade-leave-active {

}
.flip-list-move {
  transition: transform .5s;
}
.flip-list-enter-active, .flip-list-leave-active {
  transition: all .5s;
  /* transition: height .5s; */
}
.flip-list-enter, .flip-list-leave-to /* .fade-leave-active до версии 2.1.8 */ {
  opacity: 0;
  transform: translateX(30px);
  /* height: 0; */
}
.flip-list-item {
  transition: all .5s;
}
.active {
    background-color: rgba(129,34,25,1);
    border: none;
}
.active>svg {
    fill: #fff;
}
.activeH3 {
    color: rgba(129,34,25,1);
}
.plus-item-desctop {
    display: none;
}
@media (min-width: 1200px) {
    .plus {
        justify-content: center;
    }
    .plus-h2 {
        font-size: 32px;
        border-bottom: 1px solid rgb(217, 225, 233);
        /* margin-top: 42px; */
        line-height: 47px;
    }
    .plus-p {
        background-color: #fff;
        padding: 10px 15px;
        box-shadow: 0 1px 4px 0 rgba(0,0,0,.14);
        margin-top: 0;
    }
    .container {
        width: 1200px; 
    }
    .plus-container-wrap {
        margin-top: 50px;
        position: relative;
        width: 580px;
        height: 500px;
        /* display: flex;
        justify-content: center; */
    } 
    .plus-item {
        display: none;
    } 
    .plus-item-desctop {
        display: block;
        position: absolute;
        z-index: 2;
    }
    .plus-item-right {
        position: absolute;
        width: 220px;
    }

    .plus-circle {
        position: relative;
        top: 35px;
        left: 35px;
        width: 460px;
        height: 460px;
        border-radius: 230px;
        border: 2px solid rgb(217, 225, 233);
        z-index: 1;
    }
}
</style>