<template>
  <tr>
    <td scope="row" colspan="2">
      <div class="row">
        <div class="col-12">
          <file-input
            label="Pictures Image"
            class="button-img"
            v-model="content.img[locale]"
            :fileTypes="['image']"
            :preview="{enabled: true, title: 'Selected image'}"
            :fileKey="'thumb'"
            :inputPlaceholder="'Select image'">
            <div slot="preview-block">
              <img :src="content.img[locale]" class="img-fluid"/>
            </div>
          </file-input>
        </div>
        <div class="col-12">
          <div
            :class="{'has-danger': errors.has('title')}"
            class="form-group m-form__group input-group-lg custom-form-group">
            <label>Title</label>
            <input
              class="form-control m-input"
              type="text"
              name="title"
              v-validate="'required'"
              v-model="content.title[locale]">
            <div class="form-control-feedback" v-if="errors.has('title')">
              This field is required.
            </div>
          </div>
        </div>
        <div class="col-12">
          <div
                  :class="{'has-danger': errors.has('summary')}"
                  class="form-group m-form__group input-group-lg custom-form-group">
            <label>Summary</label>
            <textarea
                    rows="3"
                    v-model="content.summary[locale]"
                    name="summary"
                    class="form-control m-input"
                    placeholder="Add summary">
              </textarea>
            <div class="form-control-feedback" v-if="errors.has('summary')">
              This field is required.
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="form-group m-form__group input-group-lg custom-form-group my-4">
            <label>Link Type</label>
            <div>
              <el-switch
                v-model="content.isExternal"
                active-text="External Link"
                inactive-text="Internal page"/>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div
            :class="{'has-error': errors.has('url')}"
            class="form-group m-form__group input-group-lg custom-form-group my-4">
            <label>Link to page</label>
            <url-selector
                    :without-type="false"
              v-model="content.internalUrl"
              :disabled="content.isExternal"
              v-validate="{required: !content.isExternal}"
              name="url"/>
            <div class="form-control-feedback" v-if="errors.has('url')">
              This field is required.
            </div>
          </div>
        </div>
        <div class="col-12">
          <div
            :class="{'has-error': errors.has('externalUrl')}"
            class="form-group m-form__group input-group-lg custom-form-group my-4">
            <label>External link</label>
            <input
              class="form-control m-input"
              type="text"
              name="externalUrl"
              :disabled="!content.isExternal"
              v-validate="{required: content.isExternal}"
              v-model="content.externalUrl[locale]">
            <div class="form-control-feedback" v-if="errors.has('externalUrl')">
              This field is required.
            </div>
          </div>
        </div>
        <div class="col-12 tex-center">
          <button class="btn btn-primary" @click="save">Save</button>
          <button class="btn btn-default" @click="$emit('update:editable', false)">Cancel</button>
        </div>
      </div>
    </td>
  </tr>
</template>

<script>
  export default {
    name: 'FieldEdit',
    props: ['value', 'editable', 'locale'],
    data () {
      return {
        content: {
          img: {},
          title: {},
          summary: {},
          externalUrl: {},
          internalUrl: '',
          isExternal: false
        }
      }
    },
    methods: {
      save () {
        this.$validator.validateAll()
          .then((result) => {
            if (!result) {
              return
            }
            this.$emit('input', this.content)
            this.$emit('update:editable', false)
          })
      }
    },
    watch: {
      editable () {
        this.content = this.value
      }
    },
    mounted () {
      this.content = this.value
    }
  }
</script>

<style lang="scss">
  .button-img {
    .custom-form-group {
      margin-top: 0 !important;
    }
  }
</style>
