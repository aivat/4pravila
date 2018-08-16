<template>
    <div class="menu-right">
        <ul class="menu-right-list" v-smoothscroll="{ duration : 500 }">
            <li v-smoothscroll="{ duration : 500 }">
                <a class="menu-right-list-link" href ="#shag" v-bind:class="{ active: isAvtive1 }" v-smoothscroll="{ duration : 500 }">
                </a>
            </li>
            <li>
                <a class="menu-right-list-link" href ="#pravila" v-bind:class="{ active: isAvtive2 }" v-smoothscroll="{ duration : 500}" >
                    
                </a>
            </li>
            <li>
                <a class="menu-right-list-link" href ="#opinions" v-bind:class="{ active: isAvtive3 }" v-smoothscroll="{ duration : 500 }">
                    
                </a>
            </li>
            <li>
                <a class="menu-right-list-link" href ="#contacts">
                    
                </a>
            </li>
        </ul>
    </div>   
</template>

<script>

export default {
    data () {
      return {
        showModal: false,
        isAvtive1: false,
        isAvtive2: false,
        isAvtive3: false
      }
    },
    methods:{
    },
    created () {
        if (process.browser) {    
			 window.addEventListener('scroll', this.handleScroll)
        }
    },
    destroyed () {
        // window.removeEventListener('scroll', this.handleScroll)
    },
    methods: {
        handleScroll (event) {
            let elem1 = document.getElementById('shag')
            let elem2 = document.getElementById('pravila')
            let elem3 = document.getElementById('opinions')
            let elem4 = document.getElementById('contacts')

            let box1 = elem1.getBoundingClientRect();
            let box2 = elem2.getBoundingClientRect();
            let box3 = elem3.getBoundingClientRect();
            // почему так высчитывается так до конца и не разобрался, но математическим путем опряделяется верно. 40 пиксей добавил, чтобы загрузка происхода еще до прокрутки до самого низа
            let scrollTop = window.pageYOffset
            console.log('box.top = '+ box1.top);
            console.log('elem1.clientHeight = '+ elem1.clientHeight);
            if ( Math.abs(box1.top) < 40 ) {
                this.isAvtive1 = true
            } 
            if ( this.isAvtive1 ) {
                if ( elem1.clientHeight - 40 < Math.abs(box1.top))  {
                     this.isAvtive1 = false
                }
            }
            if ( Math.abs(box2.top) < 40 ) {
                this.isAvtive2 = true
            } 
            if ( this.isAvtive2 ) {
                if ( elem2.clientHeight - 40 < Math.abs(box2.top))  {
                     this.isAvtive2 = false
                }
            }

            // let listOffsetHeight = document.body.offsetHeight
            let listScrollHeight = document.body.scrollHeight
            let listOffsetHeight = document.documentElement.clientHeight
            // let diffHeight = listScrollHeight - listOffsetHeight
            let scrollHeight = Math.max(
                document.body.scrollHeight, document.documentElement.scrollHeight,
                document.body.offsetHeight, document.documentElement.offsetHeight,
                document.body.clientHeight, document.documentElement.clientHeight
            );
            let diffHeight = scrollHeight - listOffsetHeight

            // if (diffHeight <= (scrollTop+200) ) {
                
            //     console.log('йцуывава = '+ this.lastSecret);
            // }
        }
    }    
}
</script>

<style scoped>
.active {
   background-color: rgba(129, 34, 25, 1) 
}
.menu-right {
    position: fixed;
    right: 40px;
    top: 80px;
    height: 100vh;
    /* margin: auto; */
    padding: 0;
    /* box-shadow: 0 -1px 8px rgba(0,0,0,.3); */
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}
.menu-right-list {
    /* z-index: 9999; */
    padding: 0;
}

.menu-right-list>li {
    list-style-type: none;
    margin-bottom: 15px;
}

.menu-right-list>ul {
    margin-left: 0;
    padding-left: 0;
}

.menu-right-list-link {
    display: block;
    border: 2px solid rgba(129, 34, 25, 1);
    border-radius: 50%;
    width: 8px;
    height: 8px;
    z-index: 9999999999;
}
.menu-right-list-link:hover {
    background-color: rgba(129, 34, 25, .2)
}

.menu-right-list-link:active {
    background-color: rgba(129, 34, 25, 1)
}
</style>