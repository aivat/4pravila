<template>
    <div class="menu-right">
        <ul class="menu-right-list">
            <li >
                <a class="menu-right-list-link" href ="#shag" v-bind:class="{ active: isAvtive1 }" v-smooth-scroll>
                </a>
            </li>
            <li>
                <a class="menu-right-list-link" href ="#pravila" v-bind:class="{ active: isAvtive2 }" v-smooth-scroll>
                    
                </a>
            </li>
            <li>
                <a class="menu-right-list-link" href ="#opinions" v-bind:class="{ active: isAvtive3 }" v-smooth-scroll>
                    
                </a>
            </li>
            <li>
                <a class="menu-right-list-link" href ="#contacts" v-bind:class="{ active: isAvtive4 }" v-smooth-scroll>
                    
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
        isAvtive3: false,
        isAvtive4: false,
        elem1: '',
        elemHeight1: '',
        elem2: '',
        elemHeight2: '',
        elem3: '',
        elemHeight3: '',
        elem4: '',
        elemHeight4: ''
      }
    },
    methods:{
    },
    created () {
        if (process.browser) {    
			 window.addEventListener('scroll', this.handleScroll)
        }

    },
    mounted() {
        let el1 = document.getElementsByClassName('shag')
        this.elem1 = el1['0']
        console.log('this.elem1=',this.elem1)
        this.elemHeight1 = this.elem1.clientHeight

        let el2 = document.getElementsByClassName('pravila')
        this.elem2 = el2['0']
        this.elemHeight2 = this.elem2.clientHeight

        let el3 = document.getElementsByClassName('opinions')
        this.elem3 = el3['0']
        this.elemHeight3 = this.elem3.clientHeight

        let el4 = document.getElementsByClassName('contacts')
        this.elem4 = el4['0']
        this.elemHeight4 = this.elem4.clientHeight
    },
    destroyed () {
        // window.removeEventListener('scroll', this.handleScroll)
    },
    methods: {
        handleScroll (event) {
            let box1 = this.elem1.getBoundingClientRect()
            let box2 = this.elem2.getBoundingClientRect()
            let box3 = this.elem3.getBoundingClientRect()
            let box4 = this.elem4.getBoundingClientRect()

            let scrollTop = window.pageYOffset
                        console.log('box1.top = '+ box1.top);
             console.log('box2.top = '+ box2.top);
            console.log('box3.top = '+ box3.top);
             console.log('box4.top = '+ box4.top);
            // console.log('elem1.clientHeight = '+ this.elem1.clientHeight);
            if ( Math.abs(box1.top) < 47 ) {
                this.isAvtive1 = true
                this.isAvtive2 = false
                this.isAvtive3 = false
                this.isAvtive4 = false
            } 
            // if ( this.isAvtive1 ) {
            //     if ( this.elemHeight1 < Math.abs(box1.top))  {
            //          this.isAvtive1 = false
            //     }
            // }

            if ( Math.abs(box2.top) < 47 ) {
                this.isAvtive1 = false
                this.isAvtive2 = true
                this.isAvtive3 = false
            } 
            // if ( this.isAvtive2 ) {
            //     if ( this.elemHeight2 < Math.abs(box2.top))  {
            //          this.isAvtive2 = false
            //     }
            // }

            if ( Math.abs(box3.top) < 47 ) {
                this.isAvtive2 = false
                this.isAvtive3 = true
                this.isAvtive4 = false
            } 
            // if ( this.isAvtive3 ) {
            //     if ( this.elemHeight3 < Math.abs(box3.top))  {
            //          this.isAvtive3 = false
            //     }
            // }

            if ( Math.abs(box4.top) < 47 ) {
                this.isAvtive2 = false
                this.isAvtive3 = false
                this.isAvtive4 = true
            } 
            // if ( this.isAvtive4 ) {
            //     if ( this.elemHeight4 < Math.abs(box4.top))  {
            //          this.isAvtive4 = false
            //     }
            // }
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