<template>
  <div>
    <div class="my-2">
      <preview>
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
      </preview>
      <editor
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
  import Preview
    from './Preview'
  import Editor
    from './Editor'
  import mixinWidgets from '@modules/Core/Assets/mixins/page-builder-widgets'

  export default {
    name: 'TeamMembersWidget',
    mixins: [
      mixinWidgets
    ],
    components: {
      Preview,
      Editor
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
            name: 'btnText',
            title: 'Button Text',
            type: 'string'
          },
          {
            name: 'bgImg',
            title: 'Background Image',
            type: 'image'
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
