<template>
  <portlet-modal :is-shown="visible" @closed="hideSection" id="slider-modal">
    <span slot="title">Edit section</span>
    <div slot="content">
      <div
              class="form-group m-form__group input-group-lg custom-form-group my-4">
        <label>Hash</label>
        <input
                class="form-control m-input"
                type="text"
                name="hash"
                v-model="item.hash"
                placeholder="Hash">
      </div>
      <div
        :class="{'has-error': errors.has('slider')}"
        class="form-group m-form__group input-group-lg custom-form-group my-4">
        <label>Homepage slider</label>
        <select
          class="form-control m-input"
          v-model="item.slider"
          v-validate="'required'"
          name="slider">
          <option value="" disabled>Select slider</option>
          <option
            :value="slider.id"
            v-for="slider in sliders"
            :key="slider.id">
            {{ slider.title }}
          </option>
        </select>
        <div class="form-control-feedback" v-if="errors.has('slider')">
          This field is required.
        </div>
      </div>
      <div class="text-right">
        <button class="btn btn-primary custom-btn" @click="saveSection">Save</button>
        <button class="btn btn-secondary custom-btn" @click="hideSection">Cancel</button>
      </div>
    </div>
  </portlet-modal>
</template>

<script>
  import editMixin from '@modules/Core/Assets/mixins/page-builder-widgets/edit-mixin'

  export default {
    name: 'SliderEdit',
    mixins: [
      editMixin
    ],
    data () {
      return {
        item: {
          hash: '',
          slider: null
        }
      }
    },
    computed: {
      sliders () {
        return this.$store.state.sliders.list
      }
    },
    methods: {
      findTranslation (data, field) {
        if (data.length > 0) {
          let trans = data.find(item => item.locale === this.locale)
          if (trans === undefined) {
            trans = data[0]
          }
          return trans[field] || '- not specified -'
        }
        return '- not specified -'
      }
    },
    created () {
      this.$store.dispatch('sliders/getList')
    }
  }
</script>

<style scoped>

</style>
