<template>
    <div>
        <div class="my-2">
            <subscribes-preview
                    :is-active.sync="isActive">
                <div class="custom-edit-theme justify-content-end" slot="slotButton" v-if="config.editable">
                    <i
                            class="la la-pencil"
                            title="Edit"
                            @click="isActive = true"></i>
                </div>
            </subscribes-preview>
            <subscribes-edit
                    :visible.sync="isActive"
                    :widget.sync="item"
                    @saving="updateWidget"/>
        </div>
    </div>
</template>

<script>

    import mixinWidgets from '@modules/Core/Assets/mixins/page-builder-widgets'
    import SubscribesPreview from './SubscribesPreview'
    import SubscribesEdit from './SubscribesEdit'

    export default {
        name: 'SubscribesWidget',
        mixins: [
            mixinWidgets
        ],
        components: {
            SubscribesEdit,
            SubscribesPreview
        },
        props: {
            config: {
                type: [Object, Array],
                required: true
            }
        },
        data() {
            return {
                translateFields: [
                    {
                        name: 'title',
                        title: 'Title',
                        type: 'string'
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
                color: #868686;
            }
        }

        .la-translate {
            font-family: rb-bold;
        }
    }
</style>
