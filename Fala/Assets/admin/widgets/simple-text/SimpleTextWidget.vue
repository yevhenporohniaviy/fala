<template>
  <div>
    <div class="my-2">
      <simple-text-preview
        :is-active.sync="isActive">
        <div class="custom-edit-theme justify-content-end" slot="slotButton" v-if="config.editable">
          <i
            class="la mx-2 la-translate"
            title="Translate"
            v-if="hasSecondary()"
            @click="openModal">T</i>
          <i
            class="la la-pencil"
            title="Edit"
            @click="isActive = true"></i>
        </div>
      </simple-text-preview>
      <simple-text-edit
        :visible.sync="isActive"
        :widget.sync="item"
        @saving="updateWidget"/>
    </div>
    <translate-modal
      v-if="showTranslations"
      :content.sync="item"
      :translated-fields="translateFields"
      :saved="savedTranslations"
      @saving="saveTranslations"
      @closed="closeModal"/>
  </div>
</template>

<script>
  import SimpleTextPreview
    from './SimpleTextPreview'
  import SimpleTextEdit
    from './SimpleTextEdit'
  import mixinWidgets from '@modules/Core/Assets/mixins/page-builder-widgets'

  export default {
    name: 'SimpleTextWidget',
    mixins: [
      mixinWidgets
    ],
    components: {
      SimpleTextEdit,
      SimpleTextPreview
    },
    props: {
      config: {
        type: [Object, Array],
        required: true
      }
    },
    data () {
      return {
        translateFields: [
          {
            name: 'description',
            title: 'Description',
            type: 'wysiwyg'
          }
        ]
      }
    }
  }
</script>

<style scoped lang="scss">
  .custom-edit-theme {
    top: 15px;
    right: 25px;
    color: #868686;
    position: absolute;
    display: flex;
    .la {
      cursor: pointer;
      font-size: 20px;
      &:hover {
        color: #c6e4eb;
      }
    }
    .la-translate {
      font-family: rb-bold;
    }
  }
</style>
