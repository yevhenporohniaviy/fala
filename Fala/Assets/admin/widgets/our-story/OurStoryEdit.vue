<template>
    <portlet-modal :is-shown="visible" @closed="hideSection" :id="'simple-text-modal-' + blockId" class="custom-theme-modal">
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
                <label>Link button subtitle</label>
                <input
                  class="form-control m-input"
                  type="text"
                  name="subtitle"
                  v-validate="'required'"
                  v-model="item.subtitle[locale]"
                  placeholder="Title">
                <div class="form-control-feedback" v-if="errors.has('subtitle')">
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
                        id="simple-text-message"/>
                <div class="form-control-feedback" v-if="errors.has('description')">
                    This field is required.
                </div>
            </div>
            <file-input
              label="Image"
              v-model="item.imgUrl[locale]"
              :preview="{enabled: true, title: 'Selected background image'}"
              :fileKey="'thumb'"
              :inputPlaceholder="'Select image'">
                <div slot="preview-block">
                    <img :src="item.imgUrl[locale]" class="img-fluid"/>
                </div>
            </file-input>
            <div
                    :class="{'has-error': errors.has('link')}"
                    class="form-group m-form__group input-group-lg custom-form-group my-4">
                <label>Url link</label>
                <input
                        class="form-control m-input"
                        type="text"
                        name="link"
                        v-model="item.link"
                        placeholder="Link "/>

                <div class="form-control-feedback" v-if="errors.has('link')">
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
    name: 'OurStoryEdit',
    mixins: [
      editMixin
    ],
    data () {
      return {
        item: {
          hash: '',
          title: {},
          subtitle: {},
          description: {},
          imgUrl: {},
          link: '',
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
    .custom-theme-modal {
        text-align: left;
        color: #333333;

        .custom-btn {
            border-radius: 15px;
            width: 195px;
        }
    }
</style>
