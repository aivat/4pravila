<template>
<div class="modal-mask">
    <ul class="header-icon-wrap-submenu">
        <hr>
        <li>
            <a href="#" class="submenu-link">О нас
                <svg viewBox="0 0 24 24">
                    <path d="M2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2A10,10 0 0,0 2,12M4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12M10,17L15,12L10,7V17Z" />
                </svg>
            </a>
        </li>
        <li>
            <a href="#" class="submenu-link">Блог
                <svg viewBox="0 0 24 24">
                    <path d="M2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2A10,10 0 0,0 2,12M4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12M10,17L15,12L10,7V17Z" />
                </svg>
            </a>
        </li>
        <li>
            <a href="#" class="submenu-link">Как мы работаем
                <svg viewBox="0 0 24 24">
                    <path d="M2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2A10,10 0 0,0 2,12M4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12M10,17L15,12L10,7V17Z" />
                </svg>
            </a>
        </li>
        <li>
            <a href="#" class="submenu-link">Контакты
                <svg viewBox="0 0 24 24">
                    <path d="M2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2A10,10 0 0,0 2,12M4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12M10,17L15,12L10,7V17Z" />
                </svg>
            </a>
        </li>
        <li>
            <a href="#" class="submenu-link">Цены
                <svg viewBox="0 0 24 24">
                    <path d="M2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2A10,10 0 0,0 2,12M4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12M10,17L15,12L10,7V17Z" />
                </svg>
            </a>
        </li>
        <div class="submenu-hr"></div>  
    </ul>
    <div class="header-icon-wrap-contact">
        <hr>
        <h2 class="contact-h2">КАК С НАМИ СВЯЗАТЬСЯ</h2>
        <p class="contact-p">qweqweqwe@mail.ru</p>
        <p class="contact-p">+ 7 (3532) 93-50-60</p>
        <p class="contact-p">09:00 - 18:00</p>
    </div>
    <div class="header-icon-wrap-social">
        <hr>
        <h2 class="social-h2">МЫ В СОЦСЕТЯХ</h2>
        <ul class="social-list">
            <li>
                <a href="#">
                    VK
                </a>
            </li>
            <li>
                <a href="#">
                    IN
                </a>
            </li>
            <li>
                <a href="#">
                    G+
                </a>
            </li>
        </ul>
    </div>
    <div class="header-icon-wrap-close" @click="$emit('close')">
        ЗАКРЫТЬ
    </div>
</div>
</template>
<script>
export default {
  
}
</script>
<style>


.modal-mask {
    position: fixed;
    display: flex;
    flex-direction: column;
    z-index: 9998;
    top: 50px;
    left: 0;
    width: 100%;
    height: 90%;
    transition: opacity .3s ease;
    padding: 0 30px;
    background-color: #fff;
    transition: all .3s ease;
    color: #213875;
    font-size: 16px;
    overflow: scroll;
}

ul {
    margin-left: 0;
    padding-left: 0;
}

li {
    list-style-type: none;
}

.submenu-link {
    position: relative;
    display: flex;
    padding-top: 7px;
    padding-bottom: 9px;
    color: #213875;
    text-decoration: none;
    font-size: 25px;
    font-weight: 800;
    justify-content: space-between;
    -webkit-tap-highlight-color: rgba(0,0,0,0); 
    -webkit-tap-highlight-color: transparent;
    background-color: transparent;
}

.submenu-link:before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}
.submenu-link:active:before {
background: #e9f6f9;
    transform: scaleX(0.1);
    transform-origin: right;
    transition: transform .8s cubic-bezier(.19,1,.22,1); 
z-index: -1;
}
.submenu-link > svg {
    fill: currentColor;
    width: 28px; 
    height: 28px;
}
hr {
    display: block;
    margin: 30px 0;
    color: rgba(33, 56, 117, 0.15);
    height: 1px;
    background-color:rgba(33, 56, 117, 0.15);
    border: none;
}
</style>

