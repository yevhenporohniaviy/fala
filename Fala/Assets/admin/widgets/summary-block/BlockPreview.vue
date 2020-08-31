<template>
  <div class="block">
    <component
            :title="title"
            :description="description"
            :is="view + '-view'">
      <template slot="slotButton">
        <slot name="slotButton"></slot>
      </template>
    </component>
  </div>
</template>

<script>
  import DefaultView from './views/DefaultView'
  import HalfBlockView from './views/HalfBlockView'
  import BesideBlockView from './views/BesideBlockView'
  import WhatIsFaCauseView from './views/WhatIsFaCauseView'
  import WhatIsFaDsView from './views/WhatIsFaDsView'

  export default {
    name: 'BlockPreview',
    props: {
      title: {
        type: String,
        required: true
      },
      description: {
        type: String,
        required: false
      },
      view: {
        type: String,
        required: true
      }
    },
    components: {
      DefaultView,
      HalfBlockView,
      BesideBlockView,
      WhatIsFaCauseView,
      WhatIsFaDsView
    }
  }
</script>

<style scoped lang="scss">

</style>
