<template>
  <div>
    <div>
      <homepage-slider-preview
        :is-active.sync="isActive">
        <div class="custom-edit-theme justify-content-end" slot="slotButton" v-if="config.editable">
          <i
            class="la la-pencil"
            title="Edit"
            @click="isActive = true"></i>
        </div>
      </homepage-slider-preview>
      <homepage-slider-edit
        :visible.sync="isActive"
        :widget.sync="item"
        @saving="updateWidget"/>
    </div>
  </div>
</template>

<script>
  import HomepageSliderPreview
    from './HomepageSliderPreview'
  import HomepageSliderEdit
    from './HomepageSliderEdit'
  import mixinWidgets from '@modules/Core/Assets/mixins/page-builder-widgets'

  export default {
    name: 'HomepageSliderWidget',
    mixins: [
      mixinWidgets
    ],
    components: {
      HomepageSliderEdit,
      HomepageSliderPreview
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
