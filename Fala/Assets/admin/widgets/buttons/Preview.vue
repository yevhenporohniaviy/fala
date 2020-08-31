<template>
  <div class="custom-content d-flex justify-content-center">
    <div class="col-lg-8 bg-secondary py-5">
      <slot name="slotButton"></slot>
      <div class="row">
        <div class="item col-xs-12 col-sm-4">
          <div class="fa fa-image"></div>
          <div class="bordered">
            Title
          </div>
        </div>
        <div class="item col-xs-12 col-sm-4">
          <div class="fa fa-image"></div>
          <div class="bordered">
            Title
          </div>
        </div>
        <div class="item col-xs-12 col-sm-4">
          <div class="fa fa-image"></div>
          <div class="bordered">
            Title
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'Preview'
  }
</script>

<style scoped lang="scss">
  .custom-content {
    text-align: center;
    color: #868686;

    .fa {
      font-size: 5rem;
    }

    .bordered {
      border: 1px solid #0c5460;
      border-radius: 5px;
    }
  }
</style>
