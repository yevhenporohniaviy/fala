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
        :class="{'has-error': errors.has('description')}"
        class="form-group m-form__group input-group-lg custom-form-group my-4">
        <label>Description</label>
        <tinymce
                :ui_container="'#simple-text-modal-' + blockId"
          v-model="item.description[locale]"
          v-validate="'required'"
          name="description"
                :id="'simple-text-description' + blockId"/>
        <div class="form-control-feedback" v-if="errors.has('btn')">
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
    name: 'MapEdit',
    mixins: [
      editMixin
    ],
    data () {
      return {
        item: {
          description: {},
          hash: '',
        }
      }
    },
    computed: {
      blockId () {
        return Math.floor((Math.random() * 10000) + 1)
      }
    }
  }
</script>

<style scoped lang="scss">

</style>
