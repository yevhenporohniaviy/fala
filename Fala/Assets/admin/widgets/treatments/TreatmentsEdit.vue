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
                    :class="{'has-error': errors.has('description')}"
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
                    :class="{'has-error': errors.has('title_first')}"
                    class="form-group m-form__group input-group-lg custom-form-group my-4">
                <label>Title first</label>
                <input
                        class="form-control m-input"
                        type="text"
                        name="title_first"
                        v-validate="'required'"
                        v-model="item.title_first[locale]"
                        placeholder="Title">
                <div class="form-control-feedback" v-if="errors.has('title_first')">
                    This field is required.
                </div>
            </div>

            <file-input
                    label="Image First"
                    v-model="item.img_first[locale]"
                    :preview="{enabled: true, title: 'Selected background image'}"
                    :fileKey="'thumb'"
                    :inputPlaceholder="'Select image'">
                <div slot="preview-block">
                    <img :src="item.img_first[locale]" class="img-fluid"/>
                </div>
            </file-input>

            <div
                    :class="{'has-error': errors.has('title_second')}"
                    class="form-group m-form__group input-group-lg custom-form-group my-4">
                <label>Title second</label>
                <input
                        class="form-control m-input"
                        type="text"
                        name="title_second"
                        v-validate="'required'"
                        v-model="item.title_second[locale]"
                        placeholder="Title">
                <div class="form-control-feedback" v-if="errors.has('title_second')">
                    This field is required.
                </div>
            </div>

            <file-input
                    label="Image second"
                    v-model="item.img_second[locale]"
                    :preview="{enabled: true, title: 'Selected background image'}"
                    :fileKey="'thumb'"
                    :inputPlaceholder="'Select image'">
                <div slot="preview-block">
                    <img :src="item.img_second[locale]" class="img-fluid"/>
                </div>
            </file-input>


            <div
                    :class="{'has-error': errors.has('title_third')}"
                    class="form-group m-form__group input-group-lg custom-form-group my-4">
                <label>Title Third</label>
                <input
                        class="form-control m-input"
                        type="text"
                        name="title_third"
                        v-validate="'required'"
                        v-model="item.title_third[locale]"
                        placeholder="Title">
                <div class="form-control-feedback" v-if="errors.has('title_third')">
                    This field is required.
                </div>
            </div>

            <file-input
                    label="Image third"
                    v-model="item.img_third[locale]"
                    :preview="{enabled: true, title: 'Selected background image'}"
                    :fileKey="'thumb'"
                    :inputPlaceholder="'Select image'">
                <div slot="preview-block">
                    <img :src="item.img_third[locale]" class="img-fluid"/>
                </div>
            </file-input>



            <div
                    :class="{'has-error': errors.has('title_fourth')}"
                    class="form-group m-form__group input-group-lg custom-form-group my-4">
                <label>Title fourth</label>
                <input
                        class="form-control m-input"
                        type="text"
                        name="title_fourth"
                        v-validate="'required'"
                        v-model="item.title_fourth[locale]"
                        placeholder="Title">
                <div class="form-control-feedback" v-if="errors.has('title_fourth')">
                    This field is required.
                </div>
            </div>

            <file-input
                    label="Image fourth"
                    v-model="item.img_fourth[locale]"
                    :preview="{enabled: true, title: 'Selected background image'}"
                    :fileKey="'thumb'"
                    :inputPlaceholder="'Select image'">
                <div slot="preview-block">
                    <img :src="item.img_fourth[locale]" class="img-fluid"/>
                </div>
            </file-input>


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
    name: 'TreatmentsEdit',
    mixins: [
      editMixin
    ],
    data () {
      return {
        item: {
            hash: '',
            title: {},
            description: {},
            title_first: {},
            img_first: {},
            title_second: {},
            img_second: {},
            title_third: {},
            img_third: {},
            title_fourth: {},
            img_fourth: {}
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
