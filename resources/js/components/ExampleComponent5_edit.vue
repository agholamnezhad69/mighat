<template>
    <div class="container">
        <vue-dropzone
            ref="myVueDropzone1"
            id="dropzone1"
            :options="dropzoneOptions"
            @vdropzone-removed-file="removeProductLesson"
            v-on:vdropzone-success="success"
            @vdropzone-mounted="getThumnailImg"
        ></vue-dropzone>
    </div>
</template>
<style>
.dropzone .dz-preview {
    position: relative;
    display: inline-block;
    vertical-align: top;
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
}
div#dropzone1 {
    border: unset !important;
}
</style>


<script>

    import vue2Dropzone from 'vue2-dropzone'
    import 'vue2-dropzone/dist/vue2Dropzone.min.css'

    export default {
        props: ['product_lesson_file_list', 'id_product_lesson'],
        components: {
            vueDropzone: vue2Dropzone
        },
        data: function () {
            return {
                dropzoneOptions: {
                    url: '/product_lesson_Dropzone_edit/' + this.id_product_lesson,
                    maxFiles: 1,
                    maxFilesize: 500000,
                    timeout: 180000,
                    addRemoveLinks: true,
                    acceptedFiles: ".mp4",
                    dictDefaultMessage: "<i class='fa fa-cloud-upload'></i>آپلود فیلم",
                    headers: {
                        "X-CSRF-TOKEN": document.head.querySelector("[name=csrf-token]").content
                    }
                },
            }
        },
        watch: {
            product_lesson_file_list: function () {
                this.getThumnailImg1();
            },
        },
        mounted() {
        },
        methods: {
            success(file, response) {
                this.$emit('add_l_film', response, file)
            },
            removeProductLesson(file, error, xhr) {
                if (this.$refs.myVueDropzone1.dropzone.disabled !== true) {
                    this.$emit('add_l_film', "", file)
                }
            },
            getThumnailImg() {
                this.$emit('get_product_lesson_video')
            },
            getThumnailImg1() {
                this.$nextTick(function () {

                    if (this.product_lesson_file_list) {
                        var file = {
                            size: this.product_lesson_file_list.size,
                            name: this.product_lesson_file_list.name,
                            path: this.product_lesson_file_list.path,
                        };
                        var url = "";
                        this.$refs.myVueDropzone1.manuallyAddFile(file, '/uploads/product_lesson/' + this.id_product_lesson + '/' + this.product_lesson_file_list.name);
                    }
                });
            },

        }
    }
</script>
