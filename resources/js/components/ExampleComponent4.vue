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
                    url: '/kadamat_Dropzone',
                    maxFiles: 10,
                    maxFilesize: 500000,
                    timeout: 180000,
                    addRemoveLinks: true,
                    acceptedFiles: ".png,.jpg,.jpeg,.PNG,.JPG,.JPEG,PDF",
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
                this.$emit('add_kadamat', response,file)
            },
            removeNashriye(file, error, xhr) {
               this.$emit('add_kadamat',"",file)
            }
        }
    }
</script>
