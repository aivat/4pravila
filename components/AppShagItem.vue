<template>
    <div class="card-wrap">
        <div class="card-logo">
            <div class="hexagon">
                <slot name="header">
                default header
                </slot>
            </div>
        </div>
        <div class="card-section">
            <h3 class="card-h3">
                <slot name="head">
                default head
                </slot>
            </h3>
            <div class="card-desc">
                <slot name="body">
                default body
                </slot>
            </div>
        </div>
    </div>
</template>
<script>

export default {
    data() {
      return {
          day: 24
      }
    }

  }
</script>
 
<style scoped>

.card-wrap {
    display: flex;
    flex-direction: column;
    /* justify-content: center; */
    align-items: center;
    background-color: #fff;
    padding: 35px 10px;
    /* margin-bottom: 15px; */
    border-radius: 4px;
    width: 240px;
    box-shadow: 0 1px 4px 0 rgba(0,0,0,.14);
}
.card-wrap:hover {
    box-shadow: 0 1px 4px 0 rgba(0,0,0,.14);
}
.card-h3 {
    font-size: 16px;
    font-weight: 500;
    margin: 10px 0;
}

.card-logo {
    clip-path: polygon(50% 0, 100% 25%, 100% 75%, 50% 100%, 0 75%, 0 25%);
    height: 102px;
    width: 102px;  
    background-color: rgb(217, 225, 233);

    background-color:rgba(129,34,25,1);
}
.hexagon {
    position: relative;
    left: 1px;
    top:1px;
    clip-path: polygon(50% 0, 100% 25%, 100% 75%, 50% 100%, 0 75%, 0 25%);
    height: 100px;
    width: 100px;  
    background-color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    color: rgba(129,34,25,1);
}

.hexagon>svg {
    fill:currentColor;
}
.hexagon:hover{
    background-color: rgba(129,34,25,1);
    color: #fff;
}
.card-desc {
    font-weight: 300;
    /* display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center; */
}
.card-h3>div{
    text-align: center;
    font-size: 24px;
}
ul {
    margin: 0;
    margin-left: 30px;
    padding-left: 0;

}
</style>