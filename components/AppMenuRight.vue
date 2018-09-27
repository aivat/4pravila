<template>
    <div class="menu-right">
        <ul class="menu-right-list">
            <li >
                <a class="menu-right-list-link" href ="#slider" v-bind:class="{ active: isAvtive1 }" v-smooth-scroll>
                </a>
            </li>
            <li>
                <a class="menu-right-list-link" href ="#marat" v-bind:class="{ active: isAvtive2 }" v-smooth-scroll>
                    
                </a>
            </li>
            <li>
                <a class="menu-right-list-link" href ="#problems" v-bind:class="{ active: isAvtive3 }" v-smooth-scroll>
                    
                </a>
            </li>
            <li>
                <a class="menu-right-list-link" href ="#progress" v-bind:class="{ active: isAvtive4 }" v-smooth-scroll>
                    
                </a>
            </li>
            <li>
                <a class="menu-right-list-link" href ="#swiperes" v-bind:class="{ active: isAvtive11 }" v-smooth-scroll>
                    
                </a>
            </li>
            <li>
                <a class="menu-right-list-link" href ="#compare" v-bind:class="{ active: isAvtive12 }" v-smooth-scroll>
                    
                </a>
            </li>
            <li>
                <a class="menu-right-list-link" href ="#sale" v-bind:class="{ active: isAvtive5 }" v-smooth-scroll>
                    
                </a>
            </li>
            <li>
                <a class="menu-right-list-link" href ="#typeService" v-bind:class="{ active: isAvtive10 }" v-smooth-scroll>
                    
                </a>
            </li>
            <li>
                <a class="menu-right-list-link" href ="#ot" v-bind:class="{ active: isAvtive6 }" v-smooth-scroll>
                    
                </a>
            </li>
            <li>
                <a class="menu-right-list-link" href ="#banki" v-bind:class="{ active: isAvtive7 }" v-smooth-scroll>
                    
                </a>
            </li>
            <li>
                <a class="menu-right-list-link" href ="#work" v-bind:class="{ active: isAvtive8 }" v-smooth-scroll>
                    
                </a>
            </li>
            <li>
                <a class="menu-right-list-link" href ="#contacts" v-bind:class="{ active: isAvtive9 }" v-smooth-scroll>
                    
                </a>
            </li>
            <!-- <li>
                <a class="menu-right-list-link" href ="#footer" v-bind:class="{ active: isAvtive10 }" v-smooth-scroll>
                    
                </a>
            </li> -->
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
        isAvtive5: false,
        isAvtive6: false,
        isAvtive7: false,
        isAvtive8: false,
        isAvtive9: false,
        isAvtive10: false,
        isAvtive11: false,
        isAvtive12: false,
        elem1: '',
        elemHeight1: '',
        elem2: '',
        elemHeight2: '',
        elem3: '',
        elemHeight3: '',
        elem4: '',
        elemHeight4: '',
        elem5: '',
        elemHeight5: '',
        elem6: '',
        elemHeight6: '',
        elem7: '',
        elemHeight7: '',
        elem8: '',
        elemHeight8: '',
        elem9: '',
        elemHeight9: '',
        elem10: '',
        elemHeight10: '',
        elem11: '',
        elemHeight11: '',
        elem12: '',
        elemHeight12: ''
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
        let el1 = document.getElementsByClassName('slider')
        this.elem1 = el1['0']
        // console.log('this.elem1=',this.elem1)
        this.elemHeight1 = this.elem1.clientHeight

        let el2 = document.getElementsByClassName('marat')
        this.elem2 = el2['0']
        this.elemHeight2 = this.elem2.clientHeight

        let el3 = document.getElementsByClassName('problems')
        this.elem3 = el3['0']
        this.elemHeight3 = this.elem3.clientHeight

        let el4 = document.getElementsByClassName('progress')
        this.elem4 = el4['0']
        this.elemHeight4 = this.elem4.clientHeight

        let el11 = document.getElementsByClassName('swiperes')
        this.elem11 = el11['0']
        this.elemHeight11 = this.elem11.clientHeight

        let el12 = document.getElementsByClassName('compare')
        this.elem12 = el12['0']
        this.elemHeight12 = this.elem12.clientHeight

        let el5 = document.getElementsByClassName('sale')
        this.elem5 = el5['0']
        this.elemHeight5 = this.elem5.clientHeight

        let el10 = document.getElementsByClassName('typeService')
        this.elem10 = el10['0']
        this.elemHeight10 = this.elem10.clientHeight

        let el6 = document.getElementsByClassName('ot')
        this.elem6 = el6['0']
        this.elemHeight6 = this.elem6.clientHeight

        let el7 = document.getElementsByClassName('banki')
        this.elem7 = el7['0']
        this.elemHeight7 = this.elem7.clientHeight

        let el8 = document.getElementsByClassName('work')
        this.elem8 = el8['0']
        this.elemHeight8 = this.elem8.clientHeight

        let el9 = document.getElementsByClassName('contacts')
        this.elem9 = el9['0']
        this.elemHeight9 = this.elem9.clientHeight


        // let el10 = document.getElementsByClassName('footer')
        // this.elem10 = el10['0']
        // this.elemHeight10 = this.elem10.clientHeight
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
            let box5 = this.elem5.getBoundingClientRect()
            let box6 = this.elem6.getBoundingClientRect()
            let box7 = this.elem7.getBoundingClientRect()
            let box8 = this.elem8.getBoundingClientRect()
            let box9 = this.elem9.getBoundingClientRect()
            let box10 = this.elem10.getBoundingClientRect()
            let box11 = this.elem11.getBoundingClientRect()
            let box12 = this.elem12.getBoundingClientRect()
            // let box10 = this.elem10.getBoundingClientRect()

            let scrollTop = window.pageYOffset
                        // console.log('box1.top = '+ box1.top);
            //  console.log('box2.top = '+ box2.top);
            // console.log('box3.top = '+ box3.top);
            //  console.log('box4.top = '+ box4.top);
            // console.log('elem1.clientHeight = '+ this.elem1.clientHeight);
            if ( Math.abs(box1.top) < 65 ) {
                this.isAvtive1 = true
                this.isAvtive2 = false
                this.isAvtive3 = false
                this.isAvtive4 = false
                this.isAvtive5 = false
                this.isAvtive6 = false
                this.isAvtive7 = false
                this.isAvtive8 = false
                this.isAvtive9 = false
                this.isAvtive10 = false
                this.isAvtive11 = false
                this.isAvtive12 = false
            } 

            if ( Math.abs(box2.top) < 65 ) {
                this.isAvtive1 = false
                this.isAvtive2 = true
                this.isAvtive3 = false
                this.isAvtive4 = false
                this.isAvtive5 = false
                this.isAvtive6 = false
                this.isAvtive7 = false
                this.isAvtive8 = false
                this.isAvtive9 = false
                this.isAvtive10 = false
                this.isAvtive11 = false
                this.isAvtive12 = false
            } 

            if ( Math.abs(box3.top) < 65 ) {
                this.isAvtive1 = false
                this.isAvtive2 = false
                this.isAvtive3 = true
                this.isAvtive4 = false
                this.isAvtive5 = false
                this.isAvtive6 = false
                this.isAvtive7 = false
                this.isAvtive8 = false
                this.isAvtive9 = false
                this.isAvtive10 = false
                this.isAvtive11 = false
                this.isAvtive12 = false
            } 

            if ( Math.abs(box4.top) < 65 ) {
                this.isAvtive1 = false
                this.isAvtive2 = false
                this.isAvtive3 = false
                this.isAvtive4 = true
                this.isAvtive5 = false
                this.isAvtive6 = false
                this.isAvtive7 = false
                this.isAvtive8 = false
                this.isAvtive9 = false
                this.isAvtive10 = false
                this.isAvtive11 = false
                this.isAvtive12 = false
            } 

            if ( Math.abs(box5.top) < 65 ) {
                this.isAvtive1 = false
                this.isAvtive2 = false
                this.isAvtive3 = false
                this.isAvtive4 = false
                this.isAvtive5 = true
                this.isAvtive6 = false
                this.isAvtive7 = false
                this.isAvtive8 = false
                this.isAvtive9 = false
                this.isAvtive10 = false
                this.isAvtive11 = false
                this.isAvtive12 = false
            } 

            if ( Math.abs(box6.top) < 65 ) {
                this.isAvtive1 = false
                this.isAvtive2 = false
                this.isAvtive3 = false
                this.isAvtive4 = false
                this.isAvtive5 = false
                this.isAvtive6 = true
                this.isAvtive7 = false
                this.isAvtive8 = false
                this.isAvtive9 = false
                this.isAvtive10 = false
                this.isAvtive11 = false
                this.isAvtive12 = false
            } 

            if ( Math.abs(box7.top) < 65 ) {
                this.isAvtive1 = false
                this.isAvtive2 = false
                this.isAvtive3 = false
                this.isAvtive4 = false
                this.isAvtive5 = false
                this.isAvtive6 = false
                this.isAvtive7 = true
                this.isAvtive8 = false
                this.isAvtive9 = false
                this.isAvtive10 = false
                this.isAvtive11 = false
                this.isAvtive12 = false
            } 

            if ( Math.abs(box8.top) < 65 ) {
                this.isAvtive1 = false
                this.isAvtive2 = false
                this.isAvtive3 = false
                this.isAvtive4 = false
                this.isAvtive5 = false
                this.isAvtive6 = false
                this.isAvtive7 = false
                this.isAvtive8 = true
                this.isAvtive9 = false
                this.isAvtive10 = false
                this.isAvtive11 = false
                this.isAvtive12 = false
            } 

            if ( Math.abs(box9.top) < 65 ) {
                this.isAvtive1 = false
                this.isAvtive2 = false
                this.isAvtive3 = false
                this.isAvtive4 = false
                this.isAvtive5 = false
                this.isAvtive6 = false
                this.isAvtive7 = false
                this.isAvtive8 = false
                this.isAvtive9 = true
                this.isAvtive10 = false
                this.isAvtive11 = false
                this.isAvtive12 = false
                // this.isAvtive10 = false
            } 
            if ( Math.abs(box10.top) < 65 ) {
                this.isAvtive1 = false
                this.isAvtive2 = false
                this.isAvtive3 = false
                this.isAvtive4 = false
                this.isAvtive5 = false
                this.isAvtive6 = false
                this.isAvtive7 = false
                this.isAvtive8 = false
                this.isAvtive9 = false
                this.isAvtive10 = true
                this.isAvtive11 = false
                this.isAvtive12 = false
                // this.isAvtive10 = false
            }
            if ( Math.abs(box11.top) < 65 ) {
                this.isAvtive1 = false
                this.isAvtive2 = false
                this.isAvtive3 = false
                this.isAvtive4 = false
                this.isAvtive5 = false
                this.isAvtive6 = false
                this.isAvtive7 = false
                this.isAvtive8 = false
                this.isAvtive9 = false
                this.isAvtive10 = false
                this.isAvtive11 = true
                this.isAvtive12 = false
                // this.isAvtive10 = false
            }
            if ( Math.abs(box12.top) < 65 ) {
                this.isAvtive1 = false
                this.isAvtive2 = false
                this.isAvtive3 = false
                this.isAvtive4 = false
                this.isAvtive5 = false
                this.isAvtive6 = false
                this.isAvtive7 = false
                this.isAvtive8 = false
                this.isAvtive9 = false
                this.isAvtive10 = false
                this.isAvtive11 = false
                this.isAvtive12 = true
                // this.isAvtive10 = false
            } 
        }
    }    
}
</script>

<style scoped>
.menu-right {
    display: none;
}
@media (min-width: 1024px) {
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
}
</style>