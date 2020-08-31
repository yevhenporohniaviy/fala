<template>
  <div class="">
    <h3>
      {{ title }}
    </h3>
  </div>
</template>

<script>
  export default {
    name: 'GetInvolvedPreview',
    props: {
      title: {
        type: String,
        required: true
      },
      isActive: {
        type: Boolean,
        required: true
      }
    }
  }
</script>

<style scoped lang="scss">
  .custom-content {
    text-align: center;
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #729097;
  }
</style>
