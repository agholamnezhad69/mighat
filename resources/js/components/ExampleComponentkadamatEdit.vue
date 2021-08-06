<template>
    <div class="container">
        <vue-dropzone
            ref="myVueDropzone"
            id="dropzone1"
            :options="dropzoneOptions"
            @vdropzone-removed-file="removeNewsImg"
            v-on:vdropzone-success="success"
            @vdropzone-mounted="getThumnailImg"
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
    props: ['kadamat_file_list', 'id_kadamat'],
    components: {
        vueDropzone: vue2Dropzone
    },
    data: function () {
        return {
            dropzoneOptions: {
                url: '/khadamat_Dropzone_edit/' + this.id_kadamat,
                maxFiles: 10,
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
    /*    mounted() {
             this.getThumnailImg();
         },*/
    watch: {
        kadamat_file_list: function () {
            this.getThumnailImg1();
        },
    },
    methods: {
        success(file, response) {
            this.$emit('add_kadamat', response, file)
        },
        removeNewsImg(file, error, xhr) {
            if (this.$refs.myVueDropzone.dropzone.disabled !== true) {
                this.$emit('add_kadamat', "", file)
            }
        },
        getThumnailImg() {
            this.$emit('get_kadamat_shakes_img')
        },
        getThumnailImg1() {
            this.$nextTick(function () {

                if (this.kadamat_file_list) {
                    var file = {
                        size: this.kadamat_file_list.size,
                        name: this.kadamat_file_list.name,
                        path: this.kadamat_file_list.path,
                    };
                    var url = "";
                    this.$refs.myVueDropzone.manuallyAddFile(file, '/uploads/khadamat/' + this.id_kadamat + '/' + this.kadamat_file_list.name);

                }
            });
        },
        removeFile() {
            this.$refs.myVueDropzone.removeAllFiles();
        }

    }
}
</script>
