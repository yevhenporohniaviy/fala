<template>
  <div>
    <div>
      <studie-slider-preview
              :title="secondaryTranslation(item.title)"
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
      </studie-slider-preview>
      <studie-slider-edit
        :visible.sync="isActive"
        :widget.sync="item"
        @saving="updateWidget"/>
      <translate-modal
              v-if="showTranslations"
              :content.sync="item"
              :translated-fields="translateFields"
              :saved="savedTranslations"
              @saving="saveTranslations"
              @closed="closeModal"/>
    </div>
  </div>
</template>

<script>
  import mixinWidgets from '@modules/Core/Assets/mixins/page-builder-widgets'
  import StudieSliderPreview from './StudieSliderPreview'
  import StudieSliderEdit from './StudieSliderEdit'

  export default {
    name: 'StudieSliderWidget',
    mixins: [
      mixinWidgets
    ],
    components: {
      StudieSliderEdit,
      StudieSliderPreview
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
          }
        ]
      }
    },
    props: {
      config: {
        type: [Object, Array],
        required: true
      }
    }
  }
</script>

<style scoped lang="scss">
  .custom-edit-theme {
    top: 25px;
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
