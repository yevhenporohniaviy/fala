<template>
  <div class="col-12">
    <div class="custom-content">
      <div class=" d-flex justify-content-center">
        <div class="col-lg-8 bg-light py-5">
          <slot name="slotButton"></slot>
            <div class="row">
                <div class="col-12">
                    <h4>Subscribe <br /> to our newsletter</h4>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="col-auto">
                        <input class="form-control" type="text" placeholder="Enter your name" readonly>
                        <input class="form-control" type="text" placeholder="Enter your email" readonly>
                        <button type="submit" class="btn btn-primary col-sm mt-3">Submit</button>
                    </div>
                </div>
                <div class="col-sm-2"></div>

            </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'SubscribesPreview'
  }
</script>

<style scoped lang="scss">
  .custom-content {
    text-align: center;
    color: #868686;
  }
</style>
