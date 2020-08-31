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
                        name="description"
                        :id="'simple-text-' + blockId"/>
                <div class="form-control-feedback" v-if="errors.has('description')">
                    This field is required.
                </div>
            </div>






            <div
                    :class="{'has-error': errors.has('title_first')}"
                    class="form-group m-form__group input-group-lg custom-form-group my-4">
                <label>Title First</label>
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
            <div
                    :class="{'has-error': errors.has('subtitle_first')}"
                    class="form-group m-form__group input-group-lg custom-form-group my-4">
                <label>Title link First</label>
                <input
                        class="form-control m-input"
                        type="text"
                        name="subtitle_first"
                        v-model="item.subtitle_first[locale]"
                        placeholder="Title"/>
                <div class="form-control-feedback" v-if="errors.has('subtitle_first')">
                    This field is required.
                </div>
            </div>
            <div
                    :class="{'has-error': errors.has('link_first')}"
                    class="form-group m-form__group input-group-lg custom-form-group my-4">
                <label>Url link first</label>
                <input
                        class="form-control m-input"
                        type="text"
                        name="link_first"
                        v-model="item.link_first"
                        placeholder="Link first "/>
                <div class="form-control-feedback" v-if="errors.has('link_first')">
                    This field is required.
                </div>

            </div>
            <div
                    :class="{'has-error': errors.has('description_first')}"
                    class="form-group m-form__group input-group-lg custom-form-group my-4">
                <label>Description first</label>
                <tinymce
                        :ui_container="'#simple-text-modal-' + blockId"
                        v-model="item.description_first[locale]"
                        v-validate="'required'"
                        name="description_first"
                        :id="'description_first-' + blockId"/>
                <div class="form-control-feedback" v-if="errors.has('description_first')">
                    This field is required.
                </div>
            </div>


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
            <div
                    :class="{'has-error': errors.has('subtitle_second')}"
                    class="form-group m-form__group input-group-lg custom-form-group my-4">
                <label>Title link Second</label>
                <input
                        class="form-control m-input"
                        type="text"
                        name="subtitle_second"
                        v-model="item.subtitle_second[locale]"
                        placeholder="Title">
                <div class="form-control-feedback" v-if="errors.has('subtitle_second')">
                    This field is required.
                </div>
            </div>
            <div
                    :class="{'has-error': errors.has('link_second')}"
                    class="form-group m-form__group input-group-lg custom-form-group my-4">
                <label>Url link second</label>
                <input
                        class="form-control m-input"
                        type="text"
                        name="link_second"
                        v-model="item.link_second"
                        placeholder="Link "/>

                <div class="form-control-feedback" v-if="errors.has('link_second')">
                    This field is required.
                </div>
            </div>
            <div
                    :class="{'has-error': errors.has('description_second')}"
                    class="form-group m-form__group input-group-lg custom-form-group my-4">
                <label>Description second</label>
                <tinymce
                        :ui_container="'#simple-text-modal-' + blockId"
                        v-model="item.description_second[locale]"
                        v-validate="'required'"
                        name="description_second"
                        :id="'description_second-' + blockId"/>
                <div class="form-control-feedback" v-if="errors.has('description_second')">
                    This field is required.
                </div>
            </div>


            <div
                    :class="{'has-error': errors.has('title_third')}"
                    class="form-group m-form__group input-group-lg custom-form-group my-4">
                <label>Title third</label>
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
            <div
                    :class="{'has-error': errors.has('subtitle_third')}"
                    class="form-group m-form__group input-group-lg custom-form-group my-4">
                <label>Title link third</label>
                <input
                        class="form-control m-input"
                        type="text"
                        name="subtitle_third"
                        v-model="item.subtitle_third[locale]"
                        placeholder="Title">
                <div class="form-control-feedback" v-if="errors.has('subtitle_third')">
                    This field is required.
                </div>
            </div>
            <div
                    :class="{'has-error': errors.has('link_third')}"
                    class="form-group m-form__group input-group-lg custom-form-group my-4">
                <label>Url link Third</label>
                <input
                        class="form-control m-input"
                        type="text"
                        name="link_third"
                        v-model="item.link_third"
                        placeholder="Link "/>
                <div class="form-control-feedback" v-if="errors.has('link_third')">
                    This field is required.
                </div>
            </div>
            <div
                    :class="{'has-error': errors.has('description_third')}"
                    class="form-group m-form__group input-group-lg custom-form-group my-4">
                <label>Description second</label>
                <tinymce
                        :ui_container="'#simple-text-modal-' + blockId"
                        v-model="item.description_third[locale]"
                        v-validate="'required'"
                        name="description_third"
                        :id="'description_third-' + blockId"/>
                <div class="form-control-feedback" v-if="errors.has('description_third')">
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
    name: 'WhatIsFaEdit',
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
          subtitle_first: {},
          description_first: {},
          link_first: '',
          isExternal_first: false,
          title_second: {},
          subtitle_second: {},
          description_second: {},
          link_second: '',
          isExternal_second: false,
          title_third: {},
          subtitle_third: {},
          description_third: {},
          link_third: '',
          isExternal_third: false
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
