<template>
  <div class="col-12">
    <div class="custom-content">
      <div class=" d-flex justify-content-center">
        <div class="col-lg-8 bg-secondary py-5">
          <slot name="slotButton"></slot>
          MAP
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'MapPreview'
  }
</script>

<style scoped lang="scss">
  .custom-content {
    text-align: center;
    color: #868686;
  }
</style>
