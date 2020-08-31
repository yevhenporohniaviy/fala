<template>
  <div class="custom-content">
    <slot name="slotButton"></slot>
    <div class="col-xs-12">
      <div class="row justify-content-center my-3">
        <div class="col-8">
          <div class="row">
            <div class="col-12 col-lg-6">
              <div class="demo-slider">
                <h5 class="text-uppercase">
                  {{ title }}
                </h5>
                <div class="slider-body">
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration in some form, by injected humour, or randomised words which don't look even slightly
                  believable.
                </div>
                <div class="slide-btn text-uppercase">
                  Read more
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 d-flex d-lg-block mt-4 mt-lg-0 text-right">
              <div class="slider-arrow">
                <i class="la la-arrow-left"></i>
              </div>
              <div class="slider-arrow mt-0 mt-lg-1 ml-1 ml-lg-0">
                <i class="la la-arrow-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'StudieSliderPreview',
    props: {
      title: {
        type: String,
        required: false
      }
    }
  }
</script>

<style scoped lang="scss">
  .custom-content {
    padding: 20px;
    color: #868686;
    background-color: #fff;

    .demo-slider {
      background-color: #e0e0e0;
      min-height: 240px;
      color: #333333;
      padding: 40px;

      .slider-body {
        font-size: 0.8rem;
      }
      .slide-btn {
        margin-top: 20px;
        padding: 10px;
        font-weight: 500;
        display: inline-block;
        font-size: 0.8rem;
        border: 1px solid #333333;
      }
    }

    .slider-arrow {
      .la {
        padding: 5px;
        border: 1px solid #868686;
      }
      @media (max-width: 991.98px) {

      }
    }
  }
</style>
