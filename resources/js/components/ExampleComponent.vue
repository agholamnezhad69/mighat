<template>
    <div class="container">
        <vue-dropzone
            ref="myVueDropzone"
            id="dropzone_user"
            :options="dropzoneOptions"
            @vdropzone-removed-file="removeRezomeImg"
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

/*.dz-preview.dz-file-preview.dz-complete:nth-child(3) {
    display: none;
}*/

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


.dz-default.dz-message span {
    font-family: 'iran';
    display: inline-block;
    margin-top: 68px;
}



.vue-dropzone > .dz-preview .dz-remove {
    font-family: 'iran' !important;
}

.dropzone.dz-clickable .dz-message, .dropzone.dz-clickable .dz-message * {
    color: #18b448;
}

.dropzone.dz-clickable {

    width: 96% !important;
    margin: 0 auto !important;

}

.dz-image img {
    margin: 0 auto;
}

.form-group-container .container {
    height: 100% !important;
}
.dz-default.dz-message {
    margin: 0!important;
}

</style>


<script>

import vue2Dropzone from 'vue2-dropzone'
import 'vue2-dropzone/dist/vue2Dropzone.min.css'

export default {
    props: ['user_file_list'],
    components: {
        vueDropzone: vue2Dropzone
    },
    data: function () {
        return {
            dropzoneOptions: {
                url: '/user_Dropzone_edit',
                maxFiles: 1,
                maxFilesize: 500000,
                timeout: 180000,
                addRemoveLinks: true,
                acceptedFiles: ".png,.jpg,.jpeg,.PNG,.JPG,.JPEG",
                dictRemoveFile: 'حذف فایل',
                dictDefaultMessage: "<i  class='fa fa-cloud-upload'></i>عکس دانش آموز ",
                headers: {
                    "X-CSRF-TOKEN": document.head.querySelector("[name=csrf-token]").content
                }
            },
        }
    },

    watch: {
        user_file_list: function () {
            this.getThumnailImg1();
        },
    },
    methods: {
        success(file, response) {
            this.$emit('add_user', response, file)
        },
        removeRezomeImg(file, error, xhr) {
            if (this.$refs.myVueDropzone.dropzone.disabled !== true) {
                this.$emit('add_user', "", file)
            }
        },
        getThumnailImg() {
            this.$emit('get_user_img')
        },
        getThumnailImg1() {
            this.$nextTick(function () {
                if (this.user_file_list) {
                    var file = {
                        size: this.user_file_list.size,
                        name: this.user_file_list.name,
                        path: this.user_file_list.path,
                    };
                    var url = "";
                    this.$refs.myVueDropzone.manuallyAddFile(file, '/uploads/user/' + this.user_file_list.name);
                }
            });
        },
        removeFile() {
            this.$refs.myVueDropzone.removeAllFiles();
        }

    }
}
</script>
