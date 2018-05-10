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
                    <!-- <div v-if="showSubmenu" class="header-icon-wrap"> -->
                    <div class="header-icon-wrap">
                        <transition name="modal">
                            <AppHeaderMobile v-if="showSubmenu" v-on:close="showSubmenu = false"></AppHeaderMobile>
                        </transition>
                    </div>
                </div>
                <div class="header-menu-wrap">
                    <ul>
                        <li>
                            <a>Главная
                            </a>
                        </li>
                        <li>
                            <a>
                                О нас
                            </a>
                        </li>
                        <li>
                            <a>
                                Контакты
                            </a>
                        </li>
                    </ul>
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
        showSubmenu: false
      }
    },
    methods:{
    },
    components: {
        AppHeaderMobile
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
}
.header {
    display: flex;
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
}


.header-menu-wrap {
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
    }
    .container {
        width: 1200px; 
    }
    .header-icon {
        display: none;
    }
    .header-menu-wrap {
        display: flex;
    }
}
</style>