<template>
    <div>
        <ckeditor
            v-model="desc_kadamat"
            :config="editorConfig">
        </ckeditor>
    </div>
</template>

<style>

</style>

<script>

/*////////////////////check Editor//////////////////*/
import Vue from 'vue';
import CKEditor from 'ckeditor4-vue';

Vue.use(CKEditor);

export default {
    props: ['prop_desc_khadamat', 'prop_khadamat_id'],
    components: {},
    data: function () {
        return {
            desc_kadamat: '',
            khadamat_id: '',
            editorData: '<p>متن رو وارد کنید</p>',
            editorConfig: {
                filebrowserUploadUrl:'/ckeditor/ckeditor_upload_khadamat_edit/' + this.prop_khadamat_id,
                filebrowserUploadMethod: 'form',
                language: 'fa',
                uiColor: '#66ab16',
                CKBUILDER_CONFIG: {
                    skin: 'moono',
                    preset: 'basic',
                    ignore: [
                        'dev',
                        '.gitignore',
                        '.gitattributes',
                        'README.md',
                        '.mailmap'
                    ],
                    plugins: {
                        'basicstyles': 1,
                        'clipboard': 1,
                        'toolbar': 1,
                        'enterkey': 1,
                        'floatingspace': 1,
                        'indent': 1,
                        'link': 1,
                        'list': 1,
                        'pastetext': 1,
                        'undo': 1,
                        'dialog': 1,
                        'dialogui': 1,
                        'button': 1,
                        'fakeobjects': 1,
                        'blockquote': 1,
                        'panelbutton': 1,
                        'panel': 1,
                        'floatpanel': 1,
                        'colorbutton': 1,
                        'colordialog': 1,
                        'templates': 1,
                        'menu': 1,
                        'contextmenu': 1,
                        'div': 1,
                        'divarea': 1,
                        'resize': 1,
                        'find': 1,
                        'listblock': 1,
                        'richcombo': 1,
                        'format': 1,
                        'image': 1,
                        'symbol': 1,
                        'justify': 1,
                        'magicline': 1,
                        'liststyle': 1,
                        'pastefromword': 1,
                        'removeformat': 1,
                        'selectall': 1,
                        'showblocks': 1,
                        'showborders': 1,
                        'sourcearea': 1,
                        'menubutton': 1,
                        'scayt': 1,
                        'stylescombo': 1,
                        'stylesheetparser': 1,
                        'tab': 1,
                        'table': 1,
                        'tabletools': 1,
                        'tableresize': 1,
                        'wordcount': 1,
                        'horizontalrule': 1,
                        'popup': 1,
                        'elementspath': 1
                    },
                    languages: {
                        'en': 1,
                    }
                }
            },
        }
    },
    mounted() {
        this.desc_kadamat = this.prop_desc_khadamat;
        this.khadamat_id = this.prop_khadamat_id;
    },
    watch: {},
    methods: {}
}
</script>
