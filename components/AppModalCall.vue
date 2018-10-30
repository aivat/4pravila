
<template>
    <div name="modal">
        <div class="modal-mask" @click.self="$emit('close')">
                <div class="modal-container">
            <div class="modal-wrapper">
 
                    <div v-if="!showResult" class="modal-actions">
                        <h2 class="modal-h2">Заказать звонок специалиста</h2>
                        <div class="modal-input">
                            <label>Как к вам обращаться:</label>
                            <input class="modal-input-input" type="text" size="20" v-model="client.name" placeholder="Владимир Владимирович">
                        </div>
                        <div class="modal-input">
                            <label>Номер телефона:</label>
                            <input class="modal-input-input" type="tel" v-model="client.tel" placeholder="8 (906) 888-77-66">
                        </div>
                        <div class="modal-actions-error" v-if="error">
                            <p>Заполните все поля правильно!</p>
                            <p>Формат телефона: 8 (906) 888 77 99</p>
                        </div>
                        <div class="modal-wrap-action">
                            <button @click="$emit('close')" class="modal-wrap-action-button">Закрыть</button>
                            <button v-on:click="postClient()" class="modal-wrap-action-button">Отправить</button>
                        </div>
                    </div>
                   
                    <div v-if="showResult" class="modal-result">
                        Спасибо, мы перезвоним Вам в ближайшее время!
                        <div class="modal-result-top">
                            <h2>Спасибо за вашу заявку</h2>
                            <p>Наш менеджер свяжется с вами в течение 30 минут.</p>
                            <p>Мы работаем с понедельника по пятницу с 9 до 19 часов. Если вы оставите заявку в выходные или в нерабочее время, вы будете первыми кому мы позвоним в ближайший рабочий день :)</p>
                            <p>До встречи!</p>
                        </div>
                        <div class="modal-result-bottom">
                            <img src='~/assets/img/slide_em/1.png'>
                            <div class="team-hero">
                                <div class="team-name">Марат Даутов</div>
                                <div class="team-description">Основатель и руководитель компании</div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import  axios from 'axios'

export default {
    components: {
    },
    data () {
        return {
            client: {
                name: '',
                tel: ''
            },
            error: false,
            showResult: false
        }
    },
    computed: {
        isValid: function () {
            let regex = /^[0-9]{11}?$/
            let regex2 = /\d/g
            console.log('value.match(regex2)=', this.client.tel.match(regex2))
            if ( this.client.tel.match(regex2) === null ) {
                return false
            }
            if ( this.client.name == '' || this.client.tel == '' || this.client.tel.match(regex2).length != 11) {
                return false
            } else return true
        }
    },
    methods: {  
            postClient () {
                if ( this.isValid ) {
                    // axios.post('https://4-pravila.ru/api/crm_int.php', this.client)
                    // .then(response => {
                    //     console.log('данные =', response);
                    //     window['yaCounter50159560'].reachGoal('TARGET_PHONE_NUMBER');
                    //     this.$ga.event('form','TARGET_PHONE_NUMBER');
                    //     // router.push({ path: '/' })
                    // })
                    // .catch(e => {
                    //   console.log(e.message)
                    // })  
                    this.error = false
                    this.showResult = true
                    this.setGetTimeOut()
                    // this.$emit('close')
                } else {
                    this.error = true
                }  
            },
            setGetTimeOut() {
                setTimeout(()=>{ 
                    //this.showResult = false
                    // this.$emit('close')
                }, 1900);
            },
    }
}
</script>
 
<style scoped>
.modal-mask {
    position: fixed;
    z-index: 9998;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, .7);
    display: table;
    transition: opacity .3s ease;
    display: flex;
    justify-content: center;
   align-items: center;
}
.modal-wrapper {
    display: flex;
    justify-content: center;
    /* margin-bottom: 50px; */
    /* align-items: flex-end; */
}
.modal-container {
    background-color: white;
    border-radius: 2px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, .43);
    transition: all .3s ease;
    padding: 20px 25px;
}
.modal-h2 {
    margin-top: 0;
}
.modal-input {
    margin-bottom: 15px;
    display: flex;
    flex-direction: column;
}
.modal-input>label {
    margin-bottom: 5px;
}
.modal-actions {
    display: flex;
    flex-direction: column;
}
.modal-actions-error {
    margin-bottom: 7px;
    text-align: center;
    color: rgb(247, 56, 56);
}
.modal-actions-error p {
    margin: 0;
    text-align: center;
}
.modal-input-input {
    border: 1px solid rgba(34, 36, 38, 0.25);
    border-radius: 4px;
    padding: 9px 14px;
    outline-color: rgba(4, 158, 230, 0.712);
    outline-width: 1px;
    /* outline-style: none; */
}
.modal-input>label {
    display: inline-block;
    width: 200px;
}
.modal-wrap-action {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
}
.modal-wrap-action-button {
    /* background-color: rgb(247, 56, 56); */
    background-color: #ffffff;
    border: 1px solid rgba(129,34,25,1);
    outline-color: none;
    padding: 10px;
    border-radius: 30px;
    border-radius: 2px;
    color: #ffffff;
    color: rgb(247, 56, 56);
    color: rgba(129,34,25,1);
    font-weight: 600;
    width: 120px;
    outline: 0;
    cursor: pointer;
    transition: background-color, box-shadow .1s ease-in-out;
    -webkit-tap-highlight-color: rgba(0,0,0,0); -webkit-tap-highlight-color: transparent; 
}
.modal-wrap-action-button:hover {
    background-color: rgba(247, 56, 56, 0.05);
    background-color: rgba(129,34,25, .1);
}
.modal-wrap-action-button:active {
    background-color: rgb(247, 56, 56);
    background-color: rgba(129,34,25,1);
    color: #ffffff;
    box-shadow: 0 0 0 2px #FFFFFF, 0 0 0 4px rgba(129,34,25,1);;
    outline: 0;
}
.modal-result {
    text-align: center;
}
@media (min-width: 600px) {
    .modal-mask  {
         align-items: center;
    }
    .modal-wrapper {
        margin-bottom: 0;
    }
}
</style>