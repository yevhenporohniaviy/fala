<template>
  <div class="">
    <preview
      :is-active.sync="isActive">
      <div class="custom-edit-theme justify-content-end" slot="slotButton" v-if="config.editable">
        <i
          class="la la-pencil"
          title="Edit"
          @click="isActive = true">
        </i>
      </div>
    </preview>
    <editor
      :visible.sync="isActive"
      :widget.sync="item"
      @saving="updateWidget"/>
  </div>
</template>

<script>
  import Preview
    from './Preview'
  import Editor
    from './Editor'

  export default {
    name: 'PartnersWidget',
    components: {
      Preview,
      Editor
    },
    props: {
      config: {
        type: [Object, Array],
        required: true
      },
      widget: {
        type: Object,
        required: true
      },
    },
    data () {
      return {
        isActive: false,
        item: []
      }
    },
    methods: {
      updateWidget () {
        this.$emit('update:widget', this.item)
        this.$emit('saving', this.item)
      }
    },
    created () {
      this.item = this.widget
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
  }
</style>
