<template>
    <header class="header sticky">
        <div class="container">
            <header class="header-wrap">
                <div class="header-item">
                    <a href="#" class="header-item-link">
                        <svg class="iconic iconic-adress" fill="#000000" height="16" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            <path d="M0 0h24v24H0z" fill="none"/>
                        </svg>
                        <div>г. Оренбург, ул. Салмышская, д. 34/5, офис 207</div>
                    </a>
                </div>
                <div class="header-item">
                    <a href="tel: +7 (3532) 93-50-60" class="header-item-link">
                        <svg class="iconic" fill="#000000" height="16" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                        <div>+7 (3532) 93-50-60</div>
                    </a>
                </div>
            </header>
        </div>
    </header>
</template>

<script>
</script>

<style scoped>
.header {
    display: none;
}

@media (min-width: 1200px) {
    .header {
        display: flex;
        background-color: #383838;
    }
    .container {
        width: 100%; 
    }

    .header-wrap {
        display: flex;
        justify-content: space-between;
        height: 42px;
        background-color: #383838;
        color: #fff;
        font-size: 14px;
    }
    .header {
        justify-content: center;
    }
    .container {
        width: 1200px; 
    }
    .header-item {
        display: flex;
    }
    .header-item-link {
        display: flex;
        align-items: center;
        color: #fff;
        text-decoration: none;
        font-weight: 300;
        transition: color .5 ease;
    }
    .header-item-link:hover {
        color: rgb(129, 34, 25);
        color: #C0574C;
        transition: color .5 ease;
    }
    .iconic {
        fill: currentColor;
    }

}
</style>