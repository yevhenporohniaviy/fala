<template>
  <tr>
    <td scope="row" colspan="2">
      <div class="row">
        <div class="col-12">
          <div
            :class="{'has-danger': errors.has('title')}"
            class="form-group m-form__group input-group-lg custom-form-group">
            <label>Title</label>
            <input
              class="form-control m-input"
              type="text"
              name="title"
              v-validate="'required'"
              v-model="content.title[locale]">
            <div class="form-control-feedback" v-if="errors.has('title')">
              This field is required.
            </div>
          </div>
          <div
                  class="form-group m-form__group input-group-lg custom-form-group my-4">
            <label>Hash</label>
            <input
                    class="form-control m-input"
                    type="text"
                    name="hash"
                    v-model="content.hash"
                    placeholder="Hash">
          </div>
        </div>




        <div class="col-12 tex-center">
          <button class="btn btn-primary" @click="save">Save</button>
          <button class="btn btn-default" @click="$emit('update:editable', false)">Cancel</button>
        </div>
      </div>
    </td>
  </tr>
</template>

<script>
  export default {
    name: 'FieldEdit',
    props: ['value', 'editable', 'locale'],
    data () {
      return {
        content: {
          title: {},
          hash: ''
        }
      }
    },
    methods: {
      save () {
        this.$validator.validateAll()
          .then((result) => {
            if (!result) {
              return
            }
            this.$emit('input', this.content)
            this.$emit('update:editable', false)
          })
      }
    },
    watch: {
      editable () {
        this.content = this.value
      }
    },
    mounted () {
      this.content = this.value
    }
  }
</script>

<style lang="scss">
  .button-img {
    .custom-form-group {
      margin-top: 0 !important;
    }
  }
</style>
