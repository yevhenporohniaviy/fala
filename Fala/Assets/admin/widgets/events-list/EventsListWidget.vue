<template>
  <div class="col-12">
    <div class="custom-content">
      <div class="row justify-content-center my-3">
        <div class="col-sm-12 col-lg-8">
          <div class="row mb-4" v-for="item in 2" :key="item">
            <div class="col-xl-4 col-md-6 col-sm-12 mt-4" v-for="key in 3" :key="key">
              <div class="service w-100">
                <div>
                  <i class="fa fa-calendar"></i>
                </div>
                <h6 class="text-uppercase">10 SEP - 15 MAR</h6>
                <div>
                  <i class="fa fa-flag fa-fw"></i>
                  Location
                </div>
                <h5 class="text-uppercase">Event title</h5>

                <div class="text-center my-3 text-button px-3 py-1">
                  read more
                </div>
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
    name: 'EventsListWidget'
  }
</script>

<style scoped lang="scss">
  .custom-content {
    padding: 0 50px;
    color: #868686;
    background-color: #ffffff;

    .service {
      text-align: center;
      background-color: #6e6e6e;
      padding: 30px 20px 10px 20px;
      color: #ffffff;

      .text-button {
        display: inline-block;
        text-transform: uppercase;
        border: 1px solid #fff;
        border-radius: 5px;
        font-size: 0.8rem;
      }
      .fa {
        font-size: 2rem;
        padding-bottom: 1rem;
      }
    }
  }
</style>
