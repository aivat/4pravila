<template>
    <header class="header sticky">
        <div class="container">
            <header class="header-wrap">
                <div class="header-logo">
                    <a  href="/" class="header-logo-link">
                        <img src="~static/logo.png" alt="Логотип 4 ПРАВИЛА"  class="header-logo-img">
                    </a>
                </div>
                <div class="header-icon">
                    <button id="show-submenu" @click="showSubmenu = !showSubmenu">
                        <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"  >
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                        </svg>
                        <div class="box"></div>
                    </button>
                    <div class="header-icon-wrap">
                        <transition name="modal">
                            <AppHeaderMobile v-if="showSubmenu" v-on:close="showSubmenu = false"></AppHeaderMobile>
                        </transition>
                    </div>
                </div>
                <div class="header-menu-wrap">
                    <ul class="menu-list">
                        <li>
                            <a href ="#test">О нас
                            </a>
                        </li>
                        <li>
                            <a href ="#">
                                Блог
                            </a>
                        </li>
                        <li>
                            <a href ="#">
                                Как мы работаем
                            </a>
                        </li>
                        <li>
                            <a href ="#">
                                Контакты
                            </a>
                        </li>
                        <li>
                            <a href ="#">
                                Цены
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="header-call-wrap">
                    <div class="call-wrap">
                        <div class="call" @click="showModal = true">
                            <svg fill="black" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0h24v24H0z" fill="none"/>
                                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                            </svg>
                            Заказать звонок
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </header>
</template>

<script>
import AppHeaderMobile  from '~/components/AppHeaderMobile.vue'

export default {
    data () {
      return {
        showModal: false,
        showSubmenu: false,
        onScrollMenu: false
      }
    },
    methods:{
    },
    components: {
        AppHeaderMobile
    },
    created () {
    }
  }
</script>

<style scoped>
.sticky {
    position: -webkit-sticky;
    position: -moz-sticky;
    position: -ms-sticky;
    position: -o-sticky;
    position: sticky;
    top: 0;
    padding: 0;
    box-shadow: 0 -1px 8px rgba(0,0,0,.3);
}
.header {
    display: flex;
    background-color: #fff;
    z-index: 9999;
}
.container {
    width: 100%; 
}
.header-wrap {
    display: flex;
    justify-content: space-between;
    height: 50px;
    background-color: #fff;
}
.header-logo {
    padding: 0 5px;
    padding-left: 15px;
    padding-top: 5px;
}


.header-menu-wrap, .header-call-wrap {
    display: none;
}
.header-logo-img {
    height: 40px;
}

.header-icon>button {
    outline: none;
    background-color: #fff;
    border: 1px solid white;
    border-radius: 50%;
    width: 48px;
    height: 48px;
    position: relative;
    color: #213875;
    cursor: pointer;
    -webkit-tap-highlight-color: rgba(0,0,0,0); 
    -webkit-tap-highlight-color: transparent;
}
/* .header-icon>button:active {
    background-color: rgba(216, 216, 216, 0.2);
    transition: all 0.3s ease;

} */

.box {
    width: 1px;
    height: 1px;
    position: absolute;
    top: 24px;
    left: 22px;
    border-radius: 50%;
    
}

.header-icon>button:active .box {
    background-color: rgba(216, 216, 216, 0.2);
    transform: scale(48);
    transition: all 0.1s ease-out	;
}
.header-icon>button>svg {
    fill: currentColor;
}
.modal-enter {
  opacity: 0;
  transition: all .15s ease-out;
  transform: translateY(-50px);
}

.modal-leave-active {
  opacity: 0;
  transition: all .15s ease;
  transform: translateY(-50px);
}

.modal-enter .modal-container,
.modal-leave-active .modal-container {
  transition: all .15s ease;
}


@media (min-width: 1200px) {
    .header {
        justify-content: center;
        /* height: 100px; */
    }
    .container {
        width: 1200px; 
    }
    .header-logo {
        padding: 0;
    }
    .header-wrap {
        padding: 15px 0;
        height: auto;
        align-items: center;
    }
    .header-icon {
        display: none;
    }
    .header-menu-wrap, .header-call-wrap {
        display: flex;
    }
    .header-call-wrap {
        flex-direction: column;
        font-size: 22px;
        /* width: 190px; */
    }
    .call-wrap {
        display: flex;

    }
    .call {
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid rgba(129,34,25,1);
        padding: 12px 20px;
        color: rgba(129,34,25,1);
        cursor: pointer;
        text-align: center;
        -webkit-tap-highlight-color: rgba(0,0,0,0); 
        -webkit-tap-highlight-color: transparent;
        border-radius: 2px;
        font-size: 18px;
    }
    .call>svg {
        margin-right: 5px;
        fill:currentColor;
    }

    .call:hover {
        background-color:rgba(129,34,25,1);
        color: #fff;
    }

    .call:active {
        background-color:rgba(129, 34, 25, 0.7);
    }
    .call-numder {
        text-decoration: none;
        margin-bottom: 8px;
        color: inherit;
        display: inline-block;
        /* border-bottom: 2px dotted black; */
    }
    .call-numder:hover {
        /* border-bottom: 2px dotted rgba(129,34,25,1); */
        color: rgba(129,34,25,1);
    }
    .menu-list {
        margin-left: 0;
        padding-left: 0;
        display: flex;
        font-size: 18px;
        font-weight: 300;
        margin: 0;
    }

    .menu-list>li {
        list-style-type: none;
    }
    .menu-list>li>a {
        display: inline-block;
        padding: 5px 30px;
        text-decoration: none;
        color: inherit;
        border-bottom: 2px solid transparent;
        transition: all 0.1s ease-in;
    }
    .menu-list>li>a:hover{
         border-bottom: 2px solid rgba(129,34,25,1);
         color: rgba(129,34,25,1);
    }
}
</style>