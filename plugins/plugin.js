import Vue from 'vue'
//import VueRouter from 'vue-router'
import VueYandexMetrika from 'vue-yandex-metrika'                               

// const router = new VueRouter({...}) // your routes

// Vue.use(VueYandexMetrika, {
//     id: XXXXXXXX,
//     router: router,
//     env: process.env.NODE_ENV
//     // other options
// })

export default async function ({ app: { router } }) {
    const moduleOptions = <%= serialize(options) %>
    // const moduleOptions = {id: '50159560'}
    Vue.use(VueYandexMetrika, {
            router,
            env: process.env.NODE_ENV,
            ...moduleOptions
        })
}