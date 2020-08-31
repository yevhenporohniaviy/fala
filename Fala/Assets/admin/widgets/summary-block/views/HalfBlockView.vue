<template>
  <div class="d-flex  custom-content">
    <div class="col-6 col-xs-12">

    </div>
    <div class="col-6 col-xs-12 info-block">
      <slot name="slotButton"></slot>
      <h4>
        <i class="la la-photo"></i>
        {{ title }}
      </h4>
      <div class="block-line"></div>
      <div class=" d-flex justify-content-center">
        <div class="col-lg-8">
          {{ description }}

        </div>
      </div>
      <div class="text-center my-3 text-button px-3 py-1">
        read more
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'HalfBlockView',
    props: {
      title: {
        type: String,
        required: false
      },
      description: {
        type: String,
        required: false
      }
    }
  }
</script>

<style scoped lang="scss">
  .custom-content {
    margin-top: 5px;
    background-color: #6e6e6e;
    color: #ffffff;
    .info-block {
      text-align: center;
      padding: 50px 0;
      .text-button {
        display: inline-block;
        text-transform: uppercase;
        border: 1px solid #fff;
        border-radius: 5px;
      }

      .block-line {
        height: 3px;
        background-color: #ffffff;
        width: 50px;
        display: inline-block;
        margin: 10px auto;
      }
    }
  }
</style>
