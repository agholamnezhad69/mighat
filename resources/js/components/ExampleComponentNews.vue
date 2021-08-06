<template>
    <div class="container">
        <!--       ref="myVueDropzone" : this point to current dropzone in component   -->
        <!--        id="dropzone1" : we use for style that is unic and when you use this for style unic       -->
        <!--     :options="dropzoneOptions"    we must use this defaultly       -->
        <!--      @vdropzone-removed-file="removeNewsImg"    when you remove file this method run       -->
        <!--       v-on:vdropzone-success="success"    when you upload file successfully this method run      -->
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
                url: '/news_Dropzone',
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

    watch: {},
    methods: {
        /*when you upload successfully this method run*/
        success(file, response) {
            this.$emit('add_news', response, file)
        },
        /*when you remove from dropzone box*/
        removeNewsImg(file, error, xhr) {
            if (this.$refs.myVueDropzone.dropzone.disabled !== true) {
                this.$emit('add_news', "", file)
            }
        },
        /*when you add news to data base your remove manually all file in dropzone*/

        removeFile() {
            this.$refs.myVueDropzone.removeAllFiles();
        }

    }
}
</script>
