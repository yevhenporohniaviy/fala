<template>
  <div class="d-flex pt-2">
    <div class="col-6 col-xs-12 info-block">
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
    <div class="col-6 col-xs-12 custom-content">
      <slot name="slotButton"></slot>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'BesideBlockView',
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
    background-color: #6e6e6e;
  }

  .info-block {
    padding: 50px 0;
    text-align: center;
    background-color: #ffffff;
    color: #6e6e6e;

    .text-button {
      display: inline-block;
      text-transform: uppercase;
      border: 1px solid #6e6e6e;
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
</style>
