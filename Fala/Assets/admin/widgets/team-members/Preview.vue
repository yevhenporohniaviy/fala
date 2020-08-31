<template>
  <div class="col-12">
    <div class="custom-content">
      <div class=" d-flex justify-content-center">
        <div class="col-lg-8 bg-secondary py-5">
          <slot name="slotButton"></slot>
          There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
          some form, by injected humour, or randomised words which don't look even slightly believable. If you are going
          to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of
          text.
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
  }
</style>
