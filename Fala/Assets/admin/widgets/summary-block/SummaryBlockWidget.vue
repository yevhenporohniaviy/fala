<template>
  <div>
    <div>
      <block-preview
              :title="secondaryTranslation(item.title)"
              :description="secondaryTranslation(item.description)"
        :view="active">
        <div class="custom-edit-theme justify-content-end" slot="slotButton" v-if="config.editable">
          <slot name="viewSelector"></slot>
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
      </block-preview>
      <block-edit
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
  import BlockPreview
    from './BlockPreview'
  import BlockEdit
    from './BlockEdit'
  import mixinWidgets from '@modules/Core/Assets/mixins/page-builder-widgets'

  export default {
    name: 'SummaryBlockWidget',
    mixins: [
      mixinWidgets
    ],
    components: {
      BlockEdit,
      BlockPreview
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
            name: 'title',
            title: 'Title',
            type: 'string'
          },
          {
            name: 'description',
            title: 'Description',
            type: 'wysiwyg'
          },
          {
            name: 'imgUrl',
            title: 'Background image',
            type: 'image'
          },
          {
            name: 'externalUrl',
            title: 'External Link',
            type: 'string'
          },
          {
            name: 'btnText',
            title: 'Button Text',
            type: 'string'
          }
        ]
      }
    }
  }
</script>

<style scoped lang="scss">
  .custom-edit-theme {
    top: 25px;
    right: 25px;
    color: #ffffff;
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
