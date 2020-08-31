<template>
    <portlet-modal :is-shown="visible" @closed="hideSection" id="header-modal" class="custom-theme-modal">
        <span slot="title">Edit section</span>
        <div slot="content">
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
            <div class="form-group m-form__group input-group-lg custom-form-group my-4">
                <label>Subtitle</label>
                <input
                  class="form-control m-input"
                  type="text"
                  name="subtitle"
                  v-validate="'required'"
                  v-model="item.subtitle[locale]"
                  placeholder="Title">
            </div>
            <file-input
              label="Background Image"
              v-model="item.imgUrl[locale]"
              :preview="{enabled: true, title: 'Selected background image'}"
              :fileKey="'thumb'"
              :inputPlaceholder="'Select image'">
                <div slot="preview-block">
                    <img :src="item.imgUrl[locale]" class="img-fluid"/>
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
    name: 'HeaderEdit',
    mixins: [
      editMixin
    ],
    data () {
      return {
        item: {
          title: {},
          subtitle: {},
          imgUrl: {}
        }
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
