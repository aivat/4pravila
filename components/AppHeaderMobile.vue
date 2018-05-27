<template>
<div class="modal-mask">
    <ul class="header-icon-wrap-submenu">
        <hr>
        <li>
            <a href="#shag" class="submenu-link" v-on:click="nextLink()">Порядок работы<svg viewBox="0 0 24 24">
                    <path d="M2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2A10,10 0 0,0 2,12M4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12M10,17L15,12L10,7V17Z" />
                </svg>
            </a>
        </li>
        <li>
            <a href="#pravila" class="submenu-link" v-on:click="nextLink()">4 правила<svg viewBox="0 0 24 24">
                    <path d="M2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2A10,10 0 0,0 2,12M4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12M10,17L15,12L10,7V17Z" />
                </svg>
            </a>
        </li>
        <li>
            <a href="#opinions" class="submenu-link" v-on:click="nextLink()">Отзывы<svg viewBox="0 0 24 24">
                    <path d="M2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2A10,10 0 0,0 2,12M4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12M10,17L15,12L10,7V17Z" />
                </svg>
            </a>
        </li>
        <li>
            <a href="#contacts" class="submenu-link" v-on:click="nextLink()">Контакты<svg viewBox="0 0 24 24">
                    <path d="M2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2A10,10 0 0,0 2,12M4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12M10,17L15,12L10,7V17Z" />
                </svg>
            </a>
        </li>
        <div class="submenu-hr"></div>  
    </ul>
    <div class="header-icon-wrap-contact">
        <hr>
        <h2 class="contact-h2">КАК С НАМИ СВЯЗАТЬСЯ</h2>
        <p class="contact-p">studia_56@mail.ru</p>
        <p class="contact-p">+ 7 (3532) 93-50-60</p>
        <p class="contact-p contact-p-time">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
                <path d="M0 0h24v24H0z" fill="none"/>
                <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
            </svg>
            09:00 - 18:00
        </p>
    </div>
    <div class="header-icon-wrap-social">
        <hr>
        <h2 class="contact-h2 social-h2">МЫ В СОЦСЕТЯХ</h2>
        <ul class="social-list">
            <li>
                <a href="https://vk.com/fourrules" class="social">
                    <svg data-v-29cb7488="" xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24"><path data-v-29cb7488="" d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.581 15.997c.304 0 .429-.204.425-.458-.016-.958.356-1.474 1.03-.802.744.744.896 1.26 1.801 1.26h1.601c.403 0 .562-.13.562-.334 0-.432-.711-1.194-1.312-1.752-.844-.783-.882-.802-.156-1.744.9-1.169 2.079-2.667 1.037-2.667h-1.991c-.387 0-.414.217-.551.542-.498 1.173-1.443 2.693-1.803 2.461-.377-.243-.204-1.203-.175-2.63.008-.377.006-.636-.571-.77-.314-.073-.621-.103-.903-.103-1.137 0-1.922.477-1.477.56.785.146.711 1.846.527 2.58-.319 1.278-1.518-1.012-2.018-2.152-.12-.275-.155-.488-.586-.488h-1.627c-.247 0-.394.08-.394.258 0 .301 1.479 3.36 2.892 4.885 1.379 1.487 2.742 1.354 3.689 1.354z"></path></svg>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/dautov__marat/" class="social">
                    <svg data-v-29cb7488="" xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24"><path data-v-29cb7488="" d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm0 7.082c1.602 0 1.792.006 2.425.035 1.627.074 2.385.845 2.46 2.459.028.633.034.822.034 2.424s-.006 1.792-.034 2.424c-.075 1.613-.832 2.386-2.46 2.46-.633.028-.822.035-2.425.035-1.602 0-1.792-.006-2.424-.035-1.63-.075-2.385-.849-2.46-2.46-.028-.632-.035-.822-.035-2.424s.007-1.792.035-2.424c.074-1.615.832-2.386 2.46-2.46.632-.029.822-.034 2.424-.034zm0-1.082c-1.63 0-1.833.007-2.474.037-2.18.1-3.39 1.309-3.49 3.489-.029.641-.036.845-.036 2.474 0 1.63.007 1.834.036 2.474.1 2.179 1.31 3.39 3.49 3.49.641.029.844.036 2.474.036 1.63 0 1.834-.007 2.475-.036 2.176-.1 3.391-1.309 3.489-3.49.029-.64.036-.844.036-2.474 0-1.629-.007-1.833-.036-2.474-.098-2.177-1.309-3.39-3.489-3.489-.641-.03-.845-.037-2.475-.037zm0 2.919c-1.701 0-3.081 1.379-3.081 3.081s1.38 3.081 3.081 3.081 3.081-1.379 3.081-3.081c0-1.701-1.38-3.081-3.081-3.081zm0 5.081c-1.105 0-2-.895-2-2 0-1.104.895-2 2-2 1.104 0 2.001.895 2.001 2s-.897 2-2.001 2zm3.202-5.922c-.397 0-.72.322-.72.72 0 .397.322.72.72.72.398 0 .721-.322.721-.72 0-.398-.322-.72-.721-.72z"></path></svg>
                </a>
            </li>
        </ul>
    </div>
    <button class="header-icon-wrap-close" @click="$emit('close')">
        ЗАКРЫТЬ
    </button>
</div>
</template>
<script>
export default {
    methods: {
        nextLink:function (event) {
            setTimeout(() => {
                this.$emit('close');
            }, 180);
        }
    }
}
</script>
<style scoped>


.modal-mask {
    position: fixed;
    /* display: flex;
    flex-direction: column; */
    z-index: 9998;
    top: 50px;
    /* bottom: 0; */
    
    left: 0;
    width: 100%;
    height: 100%;
    height: 90%;
    padding-bottom: 60px;
    /* height: 90%;
    height: 100vh; */
    transition: opacity .3s ease;
    /* padding: 0 30px; */
    background-color: #fff;
    transition: all .3s ease;
    color: #213875;
    color: #444;
    color: rgba(129,34,25,1);
    /* color: #612C26; */
    /* color: #540F08; */
    /* color: #C0736B; */
    font-size: 16px;
    /* overflow: scroll; */
    overflow: auto;
    box-shadow: 0 10px 10px rgba(0,0,0,.1);
}

ul {
    margin-left: 0;
    padding-left: 0;
}

li {
    list-style-type: none;
    
}

.submenu-link {
    padding: 0 30px;
    position: relative;
    display: flex;
    padding-top: 7px;
    padding-bottom: 9px;
    /* color: #213875; */
     color: inherit;
    text-decoration: none;
    font-size: 24px;
    font-weight: 700;
    justify-content: space-between;
    -webkit-tap-highlight-color: rgba(0,0,0,0); 
    -webkit-tap-highlight-color: transparent;
    background-color: transparent;
}

.submenu-link:before {
    /* content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1; */
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #e9f6f9;
    transform: scaleX(0);
    transform-origin: right;
    -webkit-transition: -webkit-transform .8s cubic-bezier(.19,1,.22,1);
    transition: transform .8s cubic-bezier(.19,1,.22,1);
    
    z-index: -1;

}
.submenu-link:active:before {
/* background: #e9f6f9;
    transform: scaleX(0);
    transform-origin: right;
    transition: transform .8s cubic-bezier(.19,1,.22,1); 
z-index: -1; */

    transform: scaleX(1);
    transform-origin: left;
}
.submenu-link > svg {
    fill: currentColor;
    width: 28px; 
    height: 28px;
}
hr {
    display: block;
    margin: 30px 30px;
    color: rgba(33, 56, 117, 0.15);
    height: 1px;
    background-color:rgba(33, 56, 117, 0.15);
    border: none;
    /* padding: 0 30px; */
}

.contact-h2 {
    font-size: 12px;
    font-weight: 600;
    margin: 25px 0 10px 0;
    padding: 0 30px;
}
.contact-p {
    font-size: 18px;
    font-weight: 400;
    line-height: 35px;
    padding: 0 30px;  
    vertical-align: center;
}
.contact-p-time {
    display: flex;
    align-items: center;
}
.contact-p-time>svg {
    fill: #213875;
    fill: #612C26;
    margin-right: 5px;
}
.social-list {
    display: flex;
    padding: 0 30px;  
}
.social {
    display: inline-block;
    width: 48px;
    height: 48px;
    -webkit-tap-highlight-color: rgba(0,0,0,0); 
    -webkit-tap-highlight-color: transparent;
    color: #213875;
    color: #612C26;
}
.social:active {
    color: #213775b6;
    color: rgba(97, 44, 38, 0.8);
}
.social>svg {
    fill: currentColor;
}
button:active, button:focus {
  outline: none;
}
button::-moz-focus-inner {
  border: 0;
}
.header-icon-wrap-close {
    display: flex;
    font-weight: 600;
    width: 100%;
    height: 68px;
    align-items: center;
    justify-content: center;
    background-color: rgba(230, 230, 230, 0.3);
    color: rgba(168, 168, 168, 0.7);
    cursor: pointer;
    outline: none;
    border: 0;
    /* font-family: inherit; */
    font-size: 14px;
    -webkit-tap-highlight-color: rgba(0,0,0,0); -webkit-tap-highlight-color: transparent;
}

.header-icon-wrap-close:active {
    background-color: rgba(230, 230, 230, 0.4);
}
</style>

