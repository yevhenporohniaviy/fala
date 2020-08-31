<template>
  <portlet-modal
    :is-shown="visible"
    @closed="hideSection"
    id="info-buttons-modal">
    <span slot="title">Edit section</span>
    <div slot="content">
      <div class="row" v-show="editable === false">
        <div class="offset-8 col-4 form-group m-form__group custom-form-group">
          <select
            v-model="selectedLocale"
            class="pull-right form-control m-input"
            size="large">
            <option value="" disabled>Choose language</option>
            <option
              :value="key"
              v-for="(locale, key) in locales"
              :key="key">
              {{ locale.name }}
            </option>
          </select>
        </div>
      </div>
      <table class="table custom-table">
        <tbody>
        <template v-for="(item, key) in block.buttons">
          <field-edit
            v-if="editable === key"
            :locale="selectedLocale"
            :value="item"
            @input="value => updateItem(value, key)"
            :editable.sync="editable"/>
          <tr v-else>
            <td scope="row">
              <img v-if="localized(item, 'img')"
                   :src="localized(item, 'img')"
                   width="70"
                   height="70"
                   class="img-rounded">
            </td>
            <td scope="row">
              {{ localized(item, 'title') || '- not specified -' }}
            </td>
            <td class="text-right">
              <div>
                <a href="javascript:void(0)"
                   title="Edit"
                   @click="editable = key"
                   class="m-portlet__nav-link m-portlet__nav-link--icon">
                  <i class="la la-pencil"></i>
                </a>
                <a href="javascript:void(0)"
                   title="Edit"
                   @click="deleteButton(key)"
                   class="m-portlet__nav-link m-portlet__nav-link--icon">
                  <i class="la la-close"></i>
                </a>
              </div>
            </td>
          </tr>
        </template>
        <field-edit
          v-if="editable === true"
          :locale="selectedLocale"
          v-model="newButton"
          @input="addNew"
          :editable.sync="editable"/>
        <tr v-else>
          <td scope="row" colspan="2">
            <button class="btn btn-primary" @click="createNew">Add new feature</button>
          </td>
        </tr>
        </tbody>
      </table>
      <div class="text-right" slot="footer" v-show="editable === false">
        <button class="btn btn-primary custom-btn" @click="saveSection">Save</button>
        <button class="btn btn-secondary custom-btn" @click="hideSection">Cancel</button>
      </div>
    </div>
  </portlet-modal>
</template>

<script>
  import FieldEdit from './FieldEdit'

  export default {
    name: 'Editor',
    components: {
      FieldEdit
    },
    props: {
      widget: {
        type: Object,
        required: true
      },
      visible: {
        type: Boolean,
        required: false
      }
    },
    data () {
      return {
        newButton: {
          img: {},
          title: {},
          hash: '',
          summary: {},
          externalUrl: {},
          internalUrl: '',
          isExternal: false
        },
        editable: false,
        selectedLocale: '',
        block: {
          buttons: []
        }
      }
    },
    methods: {
      saveSection () {
        this.$validator.validateAll()
          .then((result) => {
            if (!result) {
              return
            }
            this.$emit('update:widget', this.block)
            this.$emit('saving', this.block)
            this.hideSection()
          })
      },
      addNew () {
        this.block.buttons.push(this.newButton)
        this.newButton = {
          img: {},
          title: {},
          hash: '',
          summary: {},
          externalUrl: {},
          internalUrl: '',
          isExternal: false
        }
      },
      updateItem(item, key) {
        this.block.buttons[key] = item
      },
      createNew () {
        this.editable = true
        this.newButton = {
          img: {},
          title: {},
          hash: '',
          summary: {},
          externalUrl: {},
          internalUrl: '',
          isExternal: false
        }
      },
      deleteButton (key) {
        this.$confirm('Are you sure to delete this button?', 'Warning', {
          confirmButtonText: 'Delete',
          cancelButtonText: 'Cancel',
          cancelButtonClass: 'btn kb-btn btn-default m-btn--pill',
          confirmButtonClass: 'btn kb-btn btn-brand m-btn--pill'
        }).then(() => {
          this.block.buttons.splice(key, 1)
        })
      },
      hideSection () {
        this.editable = false
        this.$emit('update:visible', false)
        this.$emit('close')
      },
      localized (item, field) {
        let trans = item[field] || {}
        if (trans[this.selectedLocale] !== undefined) {
          return trans[this.selectedLocale]
        }
        return false
      }
    },
    computed: {
      locale () {
        return this.$store.getters['settings/locale']()
      },
      locales () {
        return this.$store.getters['settings/locales']()
      }
    },
    created () {
      this.block = this.widget
      this.selectedLocale = this.locale
    }
  }
</script>

<style scoped lang="scss">

</style>
