<template>
  <portlet-modal :is-shown="visible" @closed="hideSection" :id="'simple-text-modal-' + blockId">
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
              :class="{'has-error': errors.has('title')}"
              class="form-group m-form__group input-group-lg custom-form-group my-4">
        <label>Title</label>
        <input
                class="form-control m-input"
                type="text"
                name="title"
                v-validate="'required'"
                v-model="item.title[locale]"
                placeholder="Title">
        <div class="form-control-feedback" v-if="errors.has('title')">
          This field is required.
        </div>
      </div>
      <div
              :class="{'has-error': errors.has('subtitle')}"
              class="form-group m-form__group input-group-lg custom-form-group my-4">
        <label>Description</label>
        <tinymce
                :ui_container="'#simple-text-modal-' + blockId"
                v-model="item.description[locale]"
                v-validate="'required'"
                name="description"
                :id="'description-' + blockId"/>
        <div class="form-control-feedback" v-if="errors.has('description')">
          This field is required.
        </div>
      </div>
      <div
        :class="{'has-error': errors.has('slider')}"
        class="form-group m-form__group input-group-lg custom-form-group my-4">
        <label>Slider</label>
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
    name: 'DiagnosedSliderEdit',
    mixins: [
      editMixin
    ],
    data () {
      return {
        item: {
          slider: null,
          title: {},
          hash: '',
          description: {}
        }
      }
    },
    computed: {
      sliders () {
        return this.$store.state.sliders.list
      },
      blockId () {
        return Math.floor((Math.random() * 10000) + 1)
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
