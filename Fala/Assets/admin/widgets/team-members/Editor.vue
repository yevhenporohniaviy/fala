<template>
  <portlet-modal :is-shown="visible" @closed="hideSection" :id="'members-modal-' + blockId">
    <span slot="title">Edit section</span>
    <div slot="content">
      <div
              class="form-group m-form__group input-group-lg custom-form-group my-4">
        <label>Hash</label>
        <input
                class="form-control m-input"
                type="text"
                name="hash"
                v-model="item.hash"
                placeholder="Hash">
      </div>
      <div
        :class="{'has-danger': errors.has('title')}"
        class="form-group m-form__group input-group-lg custom-form-group my-4">
        <label>Title</label>
        <input
          class="form-control m-input"
          type="text"
          name="title"
          v-validate="'required'"
          v-model="item.title[locale]">
        <div class="form-control-feedback" v-if="errors.has('title')">
          This field is required.
        </div>
      </div>
      <div
        :class="{'has-danger': errors.has('btnText')}"
        class="form-group m-form__group input-group-lg custom-form-group my-4">
        <label>Button Text</label>
        <input
          class="form-control m-input"
          type="text"
          name="btnText"
          v-validate="'required'"
          v-model="item.btnText[locale]">
        <div class="form-control-feedback" v-if="errors.has('btnText')">
          This field is required.
        </div>
      </div>
      <div
        class="form-group m-form__group input-group-lg custom-form-group my-4">
        <file-input
          label="Background Image"
          v-model="item.bgImg[locale]"
          :fileTypes="['image']"
          :preview="{enabled: true, title: 'Selected image'}"
          :fileKey="'thumb'"
          :inputPlaceholder="'Select image'">
          <div slot="preview-block">
            <img :src="item.bgImg[locale]" class="img-fluid"/>
          </div>
        </file-input>
      </div>
      <div
        :class="{'has-danger': errors.has('team_page')}"
        class="form-group m-form__group input-group-lg custom-form-group">
        <label>Team</label>
        <el-select
          v-model="item.team"
          :popper-append-to-body="false"
          name="team_page"
          v-validate="'required'"
          placeholder="Select team"
          default-first-option>
          <el-option
            v-for="option in pages"
            :value="option.id"
            :label="option.title || '- not specified -'"
            :key="option.id"/>
        </el-select>
        <div class="form-control-feedback" v-if="errors.has('team_page')">
          This field is required.
        </div>
      </div>
      <div class="text-right">
        <button class="btn btn-primary custom-btn" @click="saveSection">Save</button>
        <button class="btn btn-secondary custom-btn" @click="hideSection">Cancel</button>
      </div>
    </div>
  </portlet-modal>
</template>

<script>
  import editMixin from '@modules/Core/Assets/mixins/page-builder-widgets/edit-mixin'

  export default {
    name: 'Editor',
    mixins: [
      editMixin
    ],
    data () {
      return {
        item: {
          hash: '',
          team: null,
          title: {},
          btnText: {},
          bgImg: {}
        }
      }
    },
    computed: {
      blockId () {
        return Math.floor((Math.random() * 10000) + 1)
      },
      pages () {
        return this.$store.state.dynamicPagesPage.pages
      }
    },
    created () {
      this.$store.dispatch('dynamicPagesPage/getPages', 'team')
    }
  }
</script>

<style scoped lang="scss">

</style>
