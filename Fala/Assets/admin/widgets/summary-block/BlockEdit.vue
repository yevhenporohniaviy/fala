<template>
  <portlet-modal :is-shown="visible" @closed="hideSection" :id="'summary-block-modal-' + blockId">
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
      <file-input
        label="Icon"
        v-model="item.icon"
        :fileTypes="['image']"
        :preview="{enabled: true, title: 'Selected icon'}"
        :fileKey="'thumb'"
        :inputPlaceholder="'Select icon'">
        <div slot="preview-block">
          <img :src="item.icon" class="img-fluid"/>
        </div>
      </file-input>
      <div
        :class="{'has-error': errors.has('title')}"
        class="form-group m-form__group input-group-lg custom-form-group my-4">
        <label>Title</label>
        <input
          class="form-control m-input"
          type="text"
          name="title"
          v-model="item.title[locale]">
        <div class="form-control-feedback" v-if="errors.has('title')">
          This field is required.
        </div>
      </div>
      <div
        :class="{'has-error': errors.has('description')}"
        class="form-group m-form__group input-group-lg custom-form-group my-4">
        <label>Description</label>
        <tinymce
          :ui_container="'#summary-block-modal-' + blockId"
          v-model="item.description[locale]"
          v-validate="'required'"
          name="description"
          :id="'summary-block-description-' + blockId"/>
        <div class="form-control-feedback" v-if="errors.has('description')">
          This field is required.
        </div>
      </div>
      <file-input
        label="Background Image"
        v-model="item.imgUrl[locale]"
        :fileTypes="['image']"
        :preview="{enabled: true, title: 'Selected background image'}"
        :fileKey="'thumb'"
        :inputPlaceholder="'Select image'">
        <div slot="preview-block">
          <img :src="item.imgUrl[locale]" class="img-fluid"/>
        </div>
      </file-input>
      <div class="form-group m-form__group input-group-lg custom-form-group my-4">
        <label>Attached link</label>
        <div>
          <el-switch
            v-model="item.useLink"
            active-text="Use"
            inactive-text="Don't use"/>
        </div>
      </div>
      <template v-if="item.useLink">
        <div
          :class="{'has-error': errors.has('btnText')}"
          class="form-group m-form__group input-group-lg custom-form-group my-4">
          <label>Button Text</label>
          <input
            class="form-control m-input"
            type="text"
            name="btnText"
            v-validate="'required'"
            v-model="item.btnText[locale]">
          <div class="form-control-feedback" v-if="errors.has('btnText')">
            This field is required.
          </div>
        </div>
        <div class="form-group m-form__group input-group-lg custom-form-group my-4">
          <label>Link Type</label>
          <div>
            <el-switch
              v-model="item.isExternal"
              active-text="External Link"
              inactive-text="Internal page"/>
          </div>
        </div>
        <div
          :class="{'has-error': errors.has('url')}"
          class="form-group m-form__group input-group-lg custom-form-group my-4">
          <label>Link to page</label>
          <url-selector
            :without-type="false"
            v-model="item.internalUrl"
            :disabled="item.isExternal"
            v-validate="{required: !item.isExternal}"
            name="url"/>
          <div class="form-control-feedback" v-if="errors.has('url')">
            This field is required.
          </div>
        </div>
        <div
          :class="{'has-error': errors.has('externalUrl')}"
          class="form-group m-form__group input-group-lg custom-form-group my-4">
          <label>External link</label>
          <input
            class="form-control m-input"
            type="text"
            name="externalUrl"
            :disabled="!item.isExternal"
            v-validate="{required: item.isExternal}"
            v-model="item.externalUrl[locale]">
          <div class="form-control-feedback" v-if="errors.has('externalUrl')">
            This field is required.
          </div>
        </div>
      </template>
      <div class="text-right" slot="footer">
        <button class="btn btn-primary custom-btn" @click="saveSection">Save</button>
        <button class="btn btn-secondary custom-btn" @click="hideSection">Cancel</button>
      </div>
    </div>
  </portlet-modal>
</template>

<script>
  import editMixin from '@modules/Core/Assets/mixins/page-builder-widgets/edit-mixin'

  export default {
    name: 'BlockEdit',
    mixins: [
      editMixin
    ],
    data () {
      return {
        item: {
          hash: '',
          title: {},
          description: {},
          icon: '',
          imgUrl: {},
          btnText: {},
          externalUrl: {},
          internalUrl: '',
          isExternal: false
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
