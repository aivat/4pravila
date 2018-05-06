<template>
  <header class="header-top sticky header">
      <div class="container">
          <div class="header-top">
            <div class="header-item header-left">
                <a  href="/" class="href-contact">
                    <img src="~static/logo.png" alt="Логотип 4 ПРАВИЛА"  class="logo-img">
                </a>
            </div>
            <div class="header-item">
                <a  href="tel: 608-464" class="href-contact">
                    <svg class="iconic" fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                    </svg>
                    93-50-60
                </a>
            </div>
            <div class="header-item header-right">
                <span  class="href-contact menu-svg">
                    <div class="svg-wrap" @focus="showMenu" tabindex="1">
                        <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"  >
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                        </svg>
                    </div>
                    <!-- <div class="submenu-wrap" @click="showModal = false" v-bind:class="{ showmenuwrap: showModal }"> -->
                        <ul class="submenu" v-bind:class="{ showsubmenu: showModal }">
                            <li>
                                <a href="#">О нас</a>
                            </li>
                            <li>
                                <a href="#">Блог</a>
                            </li>
                            <li>
                                <a href="#">Как мы работаем</a>
                            </li>
                            <li>
                                <a href="#">Контакты</a>
                            </li>
                            <li>
                                <a href="#">Цены</a>
                            </li>    
                        </ul>
                    <!-- </div> -->
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
            if ( this.showModal ) {
                this.showModal = false
            } else  this.showModal = true
        }
    }
  }
</script>

<style scoped>

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

.href-contact {
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
    top: 0;
    left: 0;
    display: none;
    width: 100%;
    height: 100vh;
}
.submenu {
    display: block;
    position: absolute;
    padding: 0;
    border-radius: 2px;
    visibility: hidden;
    background-color: white;
    padding: 10px 0;
    max-height: 0px;
    opacity: 0;
    max-width: 0px;
    transform: translateZ(0);
    color:#676767;
    outline: none;
    overflow: hidden;
  /* transition: background-color 1s cubic-bezier(0.1, 0.8, 0.5, 2), color 0.2s linear; */
}


.submenu>li>a {
    display: block;
    padding: 5px 20px 5px 40px;
    /* color: black;
    color: #676767; */
    color: rgb(33, 56, 117);
    /* color: inherit; */
    width: 100%;
    text-decoration: none;
    font-size: 20px;
    font-weight: 700;
}

.submenu>li>a:hover {
    background-color: rgba(0, 0, 0, 0.1)
}

.menu-svg {
    cursor: pointer;
    /* display: block; */
    /* display: inline-block; */
}


.showsubmenu {
         top: 70px;
    right: 10px;
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
    /* height: 300px; */
     max-width: 400px;
     max-width: 100%;
     width: 94%;

}
.showmenuwrap {
    display: block;
}

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
