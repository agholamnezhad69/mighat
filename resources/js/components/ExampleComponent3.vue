<template>
    <div class="container">
        <vue-dropzone
            ref="myVueDropzone"
            id="dropzone1"
            :options="dropzoneOptions"
            @vdropzone-removed-file="removeNewsImg"
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
    max-height: 200px;
    border-right: unset;
    border-left: unset;
}

.vue-dropzone > .dz-preview .dz-remove {
    margin-right: 42px;
    font-family: 'Shabnam', "Montserrat", sans-serif;
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
                url: '/product_Dropzone',
                maxFiles: 1,
                maxFilesize: 500000,
                timeout: 180000,
                addRemoveLinks: true,
                acceptedFiles: ".png,.jpg,.jpeg,.PNG,.JPG,.JPEG",
                dictRemoveFile: 'حذف عکس',
                dictDefaultMessage: "<i  class='fa fa-cloud-upload'></i>تصویر شاخص",
                headers: {
                    "X-CSRF-TOKEN": document.head.querySelector("[name=csrf-token]").content
                }
            },
        }
    },
    watch: {
    },
    methods: {
        success(file, response) {
            this.$emit('add_product', response, file)
        },
        removeNewsImg(file, error, xhr) {
            if (this.$refs.myVueDropzone.dropzone.disabled !== true) {
                this.$emit('add_product', "", file)
            }
        },
        removeFile() {
            this.$refs.myVueDropzone.removeAllFiles();
        }

    }
}
</script>
