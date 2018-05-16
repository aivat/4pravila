<template>
    <div class="timer">
        <div class="timer-h3">До продажи квартиры осталось:</div>
        <div class="timer-wrap">
            <div class="timer-item">
                <div class="timer-item-time">{{ day }}
                </div>
                <div class="timer-item-desription">дня
                </div>
            </div>
            <div class="dv">:</div>
            <div class="timer-item">
                <div class="timer-item-time">{{ h }}
                </div>
                <div class="timer-item-desription">часа
                </div>
            </div>
            <div class="dv">:</div>
            <div class="timer-item">
                <div class="timer-item-time">{{ m }}
                </div>
                <div class="timer-item-desription">минут
                </div>
            </div>
            <div class="dv">:</div>
            <div class="timer-item">
                <div class="timer-item-time">{{ s }}
                </div>
                <div class="timer-item-desription">секунд
                </div>
            </div> 
        </div>
    </div>
</template>

<script>

export default {
    data() {
      return {
          day: 24,
          h: 23,
          m: 59,
          s: 59
      }
    },
    methods: {
        todo() {
            var self = this;
            setInterval(function() {
                self.s = self.s -1
                if ( self.s == 0 ) {
                    self.m = self.m - 1
                    self.s = 59
                }
                if ( self.m == 0 ) {
                    self.h = self.h - 1
                    self.m = 59
                }
                if ( self.h == 0 ) {
                    self.day = self.day - 1
                    self.h = 23
                }
                if ( self.day == 0 ) {         
                    self.day = 24,
                    self.h = 23,
                    self.m = 59,
                    self.s = 59
                }
            },1000)
        }        
    },
    created: function(){
        this.todo()
        // setInterval(this.startTimer(),1000)
    },
  }
</script>
 
<style scoped>
.timer {
    border-radius: 4px;
    padding: 20px 25px;
    background: linear-gradient(to right, rgba(26, 9, 9, 0.5) 0%, rgba(6, 7, 6, 0.5) 100%);
}
.timer-wrap {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}
.timer-item {
    display: flex;
    flex-direction: column;
    align-items: center;
}
.timer-item-time {
    font-weight: 500;
    font-size: 28px;
}
.dv {
    margin-top: 5px;
}
@media (min-width: 800px) {

}
</style>