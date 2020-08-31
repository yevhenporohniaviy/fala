<template>
  <div class="custom-banner-theme">
    <div class="custom-content">
      <header-preview
        :title="secondaryTranslation(item.title)"
        :is-active.sync="isActive"/>
      <header-edit
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
  import HeaderPreview
    from './HeaderPreview'
  import HeaderEdit
    from './HeaderEdit'
  import mixinWidgets from '@modules/Core/Assets/mixins/page-builder-widgets'

  export default {
    name: 'PageHeaderWidget',
    mixins: [
      mixinWidgets
    ],
    components: {
      HeaderPreview,
      HeaderEdit
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
            name: 'subtitle',
            title: 'Sub-title',
            type: 'string'
          },
          {
            name: 'imgUrl',
            title: 'Background Image',
            type: 'image'
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
