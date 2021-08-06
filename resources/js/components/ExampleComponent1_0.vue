<template>
    <div class="container">
        <vue-dropzone
            ref="myVueDropzone1"
            id="dropzone1"
            :options="dropzoneOptions"
            @vdropzone-removed-file="removeNashriye"
            v-on:vdropzone-success="success"
        ></vue-dropzone>
    </div>
</template>

<style>
    .dropzone .dz-preview.dz-image-preview {
        background: white;
        padding: 0;
        margin: 0;
        border: 0;
        width: 100%;
        height: 100%;
        text-align: center;
    }
    .dropzone.dz-clickable {
        cursor: pointer;
        width: 100%;
        height: 100%;
        padding: 0;
        margin: 0;
        text-align: center;
    }
</style>

<script>

    import vue2Dropzone from 'vue2-dropzone'
    import 'vue2-dropzone/dist/vue2Dropzone.min.css'

    export default {
        components: {
            vueDropzone: vue2Dropzone
        },
        data: function () {
            return {
                dropzoneOptions: {
                    url: '/nashriye_Dropzone',
                    maxFiles: 1,
                    maxFilesize: 500000,
                    timeout: 180000,
                    addRemoveLinks: true,
                    acceptedFiles: ".png,.jpg,.jpeg,.PNG,.JPG,.JPEG",
                    dictDefaultMessage: "<i class='fa fa-cloud-upload'></i>آپلود فایل",
                    headers: {
                        "X-CSRF-TOKEN": document.head.querySelector("[name=csrf-token]").content
                    }
                },
            }
        },
        mounted() {
            console.log('Component mounhhhhhhhhhhhted.')
        },
        methods: {
            success(file, response) {
                this.$emit('addrfilm', response,file)
            },
            removeNashriye(file, error, xhr) {
                this.$emit('addrfilm',"",file)
            }
        }
    }
</script>
