<template>
  <div class="custom-banner-theme">
    <div class="custom-content">
      <what-is-fa-preview
        :title="secondaryTranslation(item.title)"
        :is-active.sync="isActive"/>
      <what-is-fa-edit
        :visible.sync="isActive"
        :widget.sync="item"
        @saving="updateWidget"/>
    </div>
    <div class="custom-edit-theme justify-content-end">
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
  import mixinWidgets from '@modules/Core/Assets/mixins/page-builder-widgets'
  import WhatIsFaPreview from './WhatIsFaPreview'
  import WhatIsFaEdit from './WhatIsFaEdit'

  export default {
    name: 'WhatIsFaWidget',
    mixins: [
      mixinWidgets
    ],
    components: {
      WhatIsFaEdit,
      WhatIsFaPreview,
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
            name: 'title_first',
            title: 'First Title',
            type: 'string'
          },
          {
            name: 'subtitle_first',
            title: 'Link Title first',
            type: 'string'
          },
          {
            name: 'description_first',
            title: 'First Description',
            type: 'wysiwyg'
          },
          {
            name: 'title_second',
            title: 'Second Title',
            type: 'string'
          },
          {
            name: 'subtitle_second',
            title: 'Link Title second',
            type: 'string'
          },
          {
            name: 'description_second',
            title: 'second Description',
            type: 'wysiwyg'
          },
          {
            name: 'title_third',
            title: 'third Title',
            type: 'string'
          },
          {
            name: 'subtitle_third',
            title: 'Link Title third',
            type: 'string'
          },
          {
            name: 'description_third',
            title: 'third Description',
            type: 'wysiwyg'
          }
        ]
      }
    }
  }
</script>

<style scoped lang="scss">
  .custom-banner-theme {
    background-color: #7f7f7f;
    padding: 18px 20px;
    position: relative;
    color: #c6e4eb;

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

    .custom-content {
      text-align: center;
      padding-top: 60px;
      padding-bottom: 60px;
      background-color: #729097;
    }
  }

  .custom-edit-icon {
    top: 10px;
    right: 15px;
    position: absolute;
    .la {
      color: #333333;
    }
  }

</style>
