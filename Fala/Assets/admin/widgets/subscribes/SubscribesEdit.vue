<template>
  <portlet-modal :is-shown="visible" @closed="hideSection" id="our-numbers-modal">
    <select
            slot="header-tools"
            v-show="editable === false"
            name="lang"
            v-model="selectedLocale"
            class="pull-right form-control m-input mt-2"
            size="large">
      <option value="" disabled>Choose language</option>
      <option
              :value="key"
              v-for="(locale, key) in locales"
              :key="key">
        {{ locale.name }}
      </option>
    </select>
    <span slot="title">Edit section
    </span>
    <div slot="content">
      <div
              :class="{'has-error': errors.has('title')}"
              class="form-group m-form__group input-group-lg custom-form-group my-4">
        <label for="title">Widget Title</label>
        <input
                class="form-control m-input"
                type="text"
                name="title"
                id = 'title'
                v-validate="'required'"
                v-model="item.title[locale]"
                placeholder="Title">
        <div class="form-control-feedback" v-if="errors.has('title')">
          This field is required.
        </div>
      </div>
      <div
              :class="{'has-error': errors.has('placeholder_name')}"
              class="form-group m-form__group input-group-lg custom-form-group my-4">
        <label>Placeholder for Name</label>
        <input
                class="form-control m-input"
                type="text"
                name="plc_name"
                id = 'plc_name'
                v-validate="'required'"
                v-model="item.placeholder_name[locale]"
                placeholder="Placeholder Name">
        <div class="form-control-feedback" v-if="errors.has('placeholder_name')">
          This field is required.
        </div>
      </div>
      <div
              :class="{'has-error': errors.has('placeholder_email')}"
              class="form-group m-form__group input-group-lg custom-form-group my-4">
        <label>Placeholder for Email</label>
        <input
                class="form-control m-input"
                type="text"
                name="plc_email"
                id = 'plc_email'
                v-validate="'required'"
                v-model="item.placeholder_email[locale]"
                placeholder="Placeholder Email">
        <div class="form-control-feedback" v-if="errors.has('placeholder_email')">
          This field is required.
        </div>
      </div>
      <div
              :class="{'has-error': errors.has('button_text')}"
              class="form-group m-form__group input-group-lg custom-form-group my-4">
        <label>Button text</label>
        <input
                class="form-control m-input"
                type="text"
                name="btn_text"
                id = 'btn_text'
                v-validate="'required'"
                v-model="item.button_text[locale]"
                placeholder="Placeholder Email">
        <div class="form-control-feedback" v-if="errors.has('button_text')">
          This field is required.
        </div>
      </div>
      <div
              :class="{'has-error': errors.has('button_url')}"
              class="form-group m-form__group input-group-lg custom-form-group my-4">
        <label>Form action URL</label>
        <input
                class="form-control m-input"
                type="text"
                name="button_url"
                id = 'button_url'
                v-validate="'required'"
                v-model="item.button_url"
                placeholder="Action URL">
        <div class="form-control-feedback" v-if="errors.has('button_url')">
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
    name: 'SubscribesEdit',
    props: {
      widget: {
        type: Object,
        required: true
      },
      visible: {
        type: Boolean,
        required: false
      }
    },
    mixins: [
      editMixin
    ],
    data () {
      return {
        item: {
          title: {},
          placeholder_name: {},
          placeholder_email: {},
          button_text: {},
          button_url: {}
        },
        editable: false,
        selectedLocale: ''
      }
    },
    computed: {
      locale () {
        return this.$store.getters['settings/locale']()
      },
      locales () {
        return this.$store.getters['settings/locales']()
      }
    },
    created () {
      this.item = this.widget
      this.selectedLocale = this.locale
    }

  }
</script>

<style scoped lang="scss">

</style>
