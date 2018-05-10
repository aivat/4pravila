<template>
  <header class="header-top sticky header">
      <div class="container">
          <div class="header-top">
            <div class="header-item header-left">
                <a  href="/" class="header-item-href">
                    <img src="~static/logo.png" alt="Логотип 4 ПРАВИЛА"  class="logo-img">
                </a>
            </div>
            <div class="header-item">
                <a  href="tel: 608-464" class="header-item-href">
                    <svg class="iconic" fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                    </svg>
                    93-50-60
                </a>
            </div>
            <div class="header-item header-right">
                <span  class="header-item-href menu-svg">
                    <div class="svg-wrap" @click="showModal = !showModal">
                        <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"  >
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                        </svg>
                    </div>

                    <transition name="fade">
                     <div v-if="showModal" class="submenu-wrap" @click="showModal = false" v-bind:class="{ showmenuwrap: showModal }">
                    
                        <ul class="submenu">
                            <li>
                                <a href="#" class="submenu-href">
                                    О нас
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="#000000" d="M2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2A10,10 0 0,0 2,12M4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12M10,17L15,12L10,7V17Z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="submenu-href">Блог
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="#000000" d="M2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2A10,10 0 0,0 2,12M4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12M10,17L15,12L10,7V17Z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="submenu-href">Как мы работаем
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="#000000" d="M2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2A10,10 0 0,0 2,12M4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12M10,17L15,12L10,7V17Z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="submenu-href">Контакты
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="#000000" d="M2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2A10,10 0 0,0 2,12M4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12M10,17L15,12L10,7V17Z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="submenu-href">Цены
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="#000000" d="M2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2A10,10 0 0,0 2,12M4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12M10,17L15,12L10,7V17Z" />
                                    </svg>
                                </a>
                            </li>
                            <div class="submenu-hr"></div>  
                        </ul>
                        
                        <hr>
                   </div> 
                    </transition>
                </span>
            </div>
        </div>
    </div>
  </header>
</template>

<script>

export default {
    data () {
      return {
        online: true,
        showModal: false
      }
    },
    methods:{
        showMenu: function() {
            // console.log('qwe')
            if ( this.showModal ) {
                this.showModal = false
            } else  this.showModal = true
        }
    },
  }
</script>

<style scoped>
/* .modal-enter {
  opacity: 0;
}

.modal-leave-active {
  opacity: 0;
}

.modal-enter .modal-container,
.modal-leave-active .modal-container {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}


.fade-enter-active, .fade-leave-active {
  transition: 
       right .2s cubic-bezier(0.0,0.0,0.2,1),
     max-width .2s cubic-bezier(0.0,0.0,0.2,1),
     max-height .2s cubic-bezier(0.0,0.0,0.2,1),
     opacity .05s linear,
     top .2s cubic-bezier(0.0,0.0,0.2,1);
} */

.fade-enter-active {
  transition: all 0.3s cubic-bezier(0.0,0.0,0.2,1);
}
.fade-enter {
  opacity: 0;
  max-width: 0;
  max-height: 0;
  top: 0;
  right: 0;
}
.header {
    box-shadow: 0 -1px 8px rgba(0,0,0,.3);
    padding: 5px 0;
}
.container {
    width: 100%; 
}
.header-top {
    display: flex;
    justify-content: space-between;
    background-color: white;
    z-index: 9999;
    font-size: 16px;
    font-weight: 600;
}


.header-item {
    display: flex;
    padding: 10px 10px;  
}
.header-left {
    padding-right: 0;
}
.header-right {
    padding-left: 0;
    padding-right: 0;
}
.sticky {
    position: -webkit-sticky;
    position: -moz-sticky;
    position: -ms-sticky;
    position: -o-sticky;
    position: sticky;
    top: 0;
    padding: 0;
}

.header-item-href {
	text-decoration: none;
	/* border-bottom: 2px dashed #000000; */
    color: black;
    color: #676767;
    font-weight: 700;
    display: flex;
    align-items: center;
    font-size: 14px;
}

.href-contact:hover {
    color: #f00000;
 }

.href-contact-adress {
    width: 215px;
}

.iconic {
    margin-right: 5px;
    fill: currentColor;
}
.logo-img {
    height: 40px;
}
li {
    list-style-type: none; /* Убираем маркеры */
}
ul {
    margin-left: 0; /* Отступ слева в браузере IE и Opera */
    padding-left: 0; /* Отступ слева в браузере Firefox, Safari, Chrome */
}
.submenu-wrap {
    position: absolute;
    top: 70px;
    left: 0;
    display: flex;
    justify-content: space-between;
    width: 100%;
    height: 100vh;
    align-items: center;
 flex-direction: column;
}
.submenu {
    display: block;
    /* position: absolute;
    position: relative; */
    padding: 0;
    border-radius: 2px;
    background-color: white;
    padding: 10px 0;
    
    opacity: 0;
    
    transform: translateZ(0);
    color:#676767;
    outline: none;
    overflow: hidden;
             top: 70px;
             right:-10px;
    /* right: 10px; */
     opacity:1;
     /* transition: 
     right .2s cubic-bezier(0.0,0.0,0.2,1),
     max-width .2s cubic-bezier(0.0,0.0,0.2,1),
     max-height .2s cubic-bezier(0.0,0.0,0.2,1),
     opacity .05s linear,
     top .2s cubic-bezier(0.0,0.0,0.2,1);  */
    box-shadow: 0 8px 10px 1px rgba(0,0,0,0.14), 
    0 3px 14px 2px rgba(0,0,0,0.12), 
    0 5px 5px -3px rgba(0,0,0,0.2);
    display: block;
    /* max-height: 300px; */

     max-width: 400px;
     max-width: 100%;
     width: 94%;
  /* transition: background-color 1s cubic-bezier(0.1, 0.8, 0.5, 2), color 0.2s linear; */
}


.submenu-href {
    display: block;
    padding: 7px 20px 7px 40px;
    /* color: black;
    color: #676767; */
    color: rgb(33, 56, 117);
    /* color: inherit; */
    width: 100%;
    text-decoration: none;
    font-size: 20px;
    font-weight: 700;
}

.submenu-href:hover {
    background-color: rgba(0, 0, 0, 0.1)
}

.submenu-href {
    display: flex;
  justify-content: space-between;
    align-items: center;

}
.submenu-href>svg>path {
    fill: rgb(33, 56, 117);
}
hr {
    size:10px;
    z-index: 99999999;

}
.submenu-hr {
    display: flex;
    border-top: 1px solid rgb(33, 56, 117);
    width: 96%;

}
.menu-svg {
    cursor: pointer;
    /* display: block; */
    /* display: inline-block; */
}


/* .showsubmenu {
         top: 70px;
     opacity:1;
    visibility: visible;
      transition: 
     right .2s cubic-bezier(0.0,0.0,0.2,1),
     max-width .2s cubic-bezier(0.0,0.0,0.2,1),
     max-height .2s cubic-bezier(0.0,0.0,0.2,1),
     opacity .05s linear,
     top .2s cubic-bezier(0.0,0.0,0.2,1);  
    box-shadow: 0 8px 10px 1px rgba(0,0,0,0.14), 
    0 3px 14px 2px rgba(0,0,0,0.12), 
    0 5px 5px -3px rgba(0,0,0,0.2);
    display: block;
    max-height: 300px;

     max-width: 400px;
     max-width: 100%;
     width: 94%;

} */

.svg-wrap {
    width: 48px;
    text-align: center;
    z-index: 9999;
    outline:none;
}
.svg-wrap:active, :hover, :focus {
    outline: 0;
    outline-offset: 0;
}
@media (min-width: 360px) {
    .href-contact-adress {
        width: 235px;
    }

    .href-contact {
        font-size: 14px;
    }
}

@media (min-width: 500px) {
    .href-contact-adress {
        width: auto;
    }
}

@media (min-width: 1200px) {
    .header {
        justify-content: center;
    }
    .container {
        width: 1200px; 
    }
    .href-contact {
        font-size: 16px;
    }
}
</style>
