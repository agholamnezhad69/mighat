require("./bootstrap");


window.Vue = require("vue");
/******************checkeditor*/


// dropzone component
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('example-component1', require('./components/ExampleComponent1.vue').default);
Vue.component('example-component1_0', require('./components/ExampleComponent1_0.vue').default);
Vue.component('example-component1_1', require('./components/ExampleComponent1_1').default);
Vue.component('example-component1_2', require('./components/ExampleComponent1_2.vue').default);
Vue.component('example-component1_3', require('./components/ExampleComponent1_3.vue').default);
Vue.component('example-component2', require('./components/ExampleComponent2.vue').default);
Vue.component('example-component3', require('./components/ExampleComponent3.vue').default);
Vue.component('example-component3-edit', require('./components/ExampleComponent3_edit.vue').default);
Vue.component('example-component4', require('./components/ExampleComponent4.vue').default);
Vue.component('example-component5', require('./components/ExampleComponent5.vue').default);
Vue.component('example-component5-edit', require('./components/ExampleComponent5_edit.vue').default);
Vue.component('example-component6', require('./components/ExampleComponent6.vue').default);
Vue.component('example-component6-edit', require('./components/ExampleComponent6_edit.vue').default);
Vue.component('example-news', require('./components/ExampleComponentNews.vue').default);
Vue.component('example-news-edit', require('./components/ExampleComponentNews_edit.vue').default);
Vue.component('example-kadamt', require('./components/ExampleComponentkadamat.vue').default);
Vue.component('example-kadamt-edit', require('./components/ExampleComponentkadamatEdit.vue').default);
Vue.component('pagination', require('laravel-vue-pagination'));
Vue.component('chart-component', require('./components/ChartComponent.vue').default);
Vue.component('chart-component_v_tahol', require('./components/ChartComponent_v_tahol.vue').default);
Vue.component('chart-component_ostan_tahsil', require('./components/ChartComponent_ostan_tahsil.vue').default);
Vue.component('chart-component_v_ertebat_ba_etehadiye', require('./components/ChartComponent_v_ertebat_ba_etehadiye.vue').default);
Vue.component('chart-component_noe_daneshkah', require('./components/ChartComponent_noe_daneshkah.vue').default);
Vue.component('chart-component_v_tahsili', require('./components/ChartComponent_v_tahsili.vue').default);
Vue.component('chart-component_dar_hale_tahsil', require('./components/ChartComponent_dar_hale_tahsil.vue').default);
Vue.component('chart-component_tahsilat_daneshkah', require('./components/ChartComponent_tahsilat_daneshkah.vue').default);
Vue.component('chart-component_tahsilat_hoze', require('./components/ChartComponent_tahsilat_hoze.vue').default);
Vue.component('chart-component_dore_tahsili', require('./components/ChartComponent_dore_tahsili.vue').default);
Vue.component('editor-news-add', require('./components/editor_news_add.vue').default);
Vue.component('editor-employment-add', require('./components/editor_employment_add.vue').default);
Vue.component('editor-employment-edit', require('./components/editor_employment_edit.vue').default);
Vue.component('editor-product-add', require('./components/editor_product_add.vue').default);
Vue.component('editor-product-edit', require('./components/editor_product_edit.vue').default);
Vue.component('editor-news-edit', require('./components/editor_news_edit.vue').default);
Vue.component('editor-khadamat-add', require('./components/editor_khadamat_add.vue').default);
Vue.component('editor-khadamat-edit', require('./components/editor_khadamat_edit.vue').default);


//////////////////sweetAlert
import Swal from "sweetalert2";

// Loading component
import Loading from "vue-loading-overlay";
import "vue-loading-overlay/dist/vue-loading.css";

/*/////////////loading component 2*/
import {AtomSpinner} from 'epic-spinners'


//select option with serarch
import VSelect from "@alfsnd/vue-bootstrap-select";

/////////////////data-picker
import VuePersianDatetimePicker from "vue-persian-datetime-picker";

/*////////////////////check Editor//////////////////*/
/*import CKEditor from 'ckeditor4-vue';

Vue.use(CKEditor);*/

/*////////////////////// jspdf ////////////////*/
import {jsPDF} from "jspdf";
/////////////////////////////////////////
import html2pdf from 'html2pdf.js'

/************start Vue-infinite-loading**********/
import InfiniteLoading from 'vue-infinite-loading';

Vue.use(InfiniteLoading, { /* options */});
/************end Vue-infinite-loading**********/


Vue.component("date-picker", VuePersianDatetimePicker);
Vue.use(VuePersianDatetimePicker, {
    name: "custom-date-picker",
    props: {
        /*       inputFormat: 'YYYY-MM-DD HH:mm',
               format: 'jYYYY-jMM-jDD HH:mm',
               editable: false,
               inputClass: 'form-control my-custom-class-name',*/
        placeholder: ""
        /*   altFormat: 'YYYY-MM-DD HH:mm',
                       color: '#00acc1',
                       autoSubmit: false,
                       //...
                       //... And whatever you want to set as default
                       //...*/
    }
});

///////////////////////////pagination///////////////////////
import SmartTable from 'vuejs-smart-table'

Vue.use(SmartTable)

// excel
import excel from 'vue-excel-export'

Vue.use(excel)
/////////////////////////////////////////////////


const app = new Vue({
    el: "#app",
    data: {
        heading: "Sample PDF Generator",
        moreText: [
            "This is another few sentences of text to look at it.",
            "Just testing the paragraphs to see how they format.",
            "jsPDF likes arrays for sentences.",
            "Do paragraphs wrap properly?",
            "Yes, they do!",
            "What does it look like?",
            "Not bad at all."
        ],
        items: [
            {title: "Item 1", body: "I am item 1 body text"},
            {title: "Item 2", body: "I am item 2 body text"},
            {title: "Item 3", body: "I am item 3 body text"},
            {title: "Item 4", body: "I am item 4 body text"}
        ],
        name: "",
        name_search: '',
        family: "",
        fatherName: "",
        nCod: "",
        birthday: "",
        socialmobile: "",
        mobile: "",
        telhome: "",
        address: "",
        user_id: '',
        user_name: "",
        user_pass: "",
        user_pass_current: "",
        user_pass_new: "",
        user_pass_confirm: "",
        usersNumber: 0,
        t_s_s_o_t: "",
        o_a_e: "",
        o_h_m_m: "",
        m_a_e_m: "",
        o_gh_sh: "",
        m_gh_o: "",
        o_gh_m: "",
        m_m_o: "",
        m_o: "",
        m_sh: "",
        k_o: "",
        mo: "",
        sar: "",
        article: '',
        article_arr: [],
        talif: '',
        talif_arr: [],
        karafrin: '',
        karafrin_arr: [],
        sayer_tashkol_ostan: [],
        sayer_tashkol: [],
        savabegh_taskilati: [],
        k_se_da_m: "",
        t_s_s_o_t_id: "",
        v_nv_id: "",
        v_t_id: "",
        ostan_id: {value: "", text: ""},
        ostan_id_for_persons: {value: "", text: ""},
        dore_id: "",
        v_er_ba_et_id: '',
        dar_h_t_id: "",
        attr_value: [],
        v_nv: [],
        v_t: [],
        ostan: [],
        dore: [],
        form1_singleAttr: [],
        form1_singleAttr_selected: [],
        user_attr: [],
        v_er_ba_et: [],
        dar_h_t: [],
        attrIds: "",
        all_attr_parent: [],
        attr_parent_childs: [],
        c_user_attr: [],
        /*/////////////////////////start form2*/
        ostan_h_id: {value: "", text: ""},
        r_id: {value: "", text: ""},
        r_t_id: "",
        d_id: {value: "", text: ""},
        t_d_id: "",
        t_d_id_type_d: "",
        k_d: "",
        k_m_kh: "",
        k_m_m: "",
        n_h: "",
        v_tt_id: "",
        t_h_id: "",
        v_tt: [],
        d: [],
        r: [],
        r_t: [],
        t_h: [],
        t_d: [],
        v_tt_selected: [],
        t_d_selected: [],
        t_h_selected: [],
        stat_show_academy: 1,
        /*/////////////////////////end form2*/
        /*////////////////////////////start form 3*/
        o_d_sh: "",
        h_kh: [],
        noe_daneshgah: [],
        h_kh_id: "",
        h_kh_sub: [],
        h_kh_sub_id: "",
        /*////////////////////////////start news */
        id_news: "",
        title_news: "",
        desc_news: "",
        img_news: '',
        all_news: {},
        all_news_for_home: [],

        news_ids_delete: [],
        news_file_list: {},
        news_for_print: [],
        news_for_print_ids: [],
        /*////////////////////////////end news */

        k_se_da_m_is: 0,
        isLoading: false,
        isFormEdit: 1,
        formChange: "1",
        form_type: 1,
        attr_value_select_help_model: [],
        selectedValue: null,
        optionSelectOstan: [],
        optionSelectdaneshgah: [],
        optionSelectReshte: [],
        /*////////////////////////////start admin sudents */
        all_users: [],
        all_users1: [],
        page: 1,
        all_users_always: [],
        user_file: '',
        user_file_object: {size: 0, name: '', path: ''},
        film_addr1: [],
        nashriye_title: '',
        student_edit_form: 0,
        student_edit_id: '',
        /*////////////////////////////start admin employ */
        ediFormRezome: 0,
        employment_user_rezome: [],
        employment_user_rezome_always: [],
        currentTimee: '',
        employId: '',
        employTitle: '',
        employDesc: '',
        employDate: '',
        employStatus: '0',
        employState: {value: "", text: ""},
        employCategory: {value: "", text: ""},
        isEditEmploy: '0',
        ediFormEmployment: 0,
        is_special: false,
        optionSelectCatEmploy: [],
        is_send_rezome: false,
        is_send_rezome_success: false,
        send_rezome_befor: false,

        /********************************start category*/
        all_cat: [],
        all_cat_for_selector: [],
        all_parent: [],
        categoryInfo: {},
        cat_ids_delete: [],
        cat_ids_add: [],
        cat_ids_edit: [],
        cat_select_id: 0,
        cat_title_add: '',
        cat_id_edit: '',
        ediFormCat: 0,
        isEditCat: 0,
        /********************************start product*********************************************/
        all_products: [],
        all_products_always: [],
        type_course: '0',
        title_course: '',
        price_course: '',
        desc_course: '',
        img_course: '',
        skyromm_course: '',
        tedad_afrad_course: '',
        edit_product_id: '',
        product_ids_edit: [],
        ediFormProduct: 0,
        product_length: 0,
        product_file_list: {},
        product_refahi_search: '',
        product_refahi_search_majale: '',
        all_product_refahi_search_result: [],
        is_searched_product: false,
        isActive_product: 0,
        /***************************product lesson*/
        ediFormProductLesson: 0,
        all_product_lessons: [],
        editProductLesson: 0,
        film_course: '',
        film_title: '',
        lesson_id: '',
        ProductLesson_file_list: {},

        /****************************************khadamat*/
        id_kadamat: '',
        kadamatImg: [],
        kadamat_shakhes_Img: '',
        title_kadamat: '',
        price_kadamat: '',
        info_kadamat: '',
        desc_kadamat: '',
        kdadmat_from_date: '',
        kdadmat_to_date: '',
        all_kadamat_refahi: {},
        editkadamt: 0,
        kadamat_file_list: {},
        kadamat_refahi_search: '',
        isActive_kadamat: 0,
        all_kadamat_refahi_search_result: [],
        is_searched_Kadamat: false,
        /**********end editor*/
        /*********employment home*/
        all_employment: {},
        special_employment: [],
        rezome_file: '',
        rezome_file_object: {size: 0, name: '', path: ''},
        product_file: '',
        employments_select: [],
        employment_edit: [],
        /*////////////////////////////end admin sudents */
        /*////////////////////////////start home views */
        all_nashriye: [],
        all_nashriye_always: [],
        selected_nashriye: [],
        nashriyeChange: 0,
        lastNashriye: '',
        groupNashriye: 0,
        nashriye_ids_delete: [],
        ediFormNashriye: 0,
        nashriyeEditId: '',
        json_fields: {
            'نام': 'name',
            'نام خانوادگی': 'family',
            'نام پدر': 'fatherName',
            'کد ملی': 'nCod',
            'تاریخ تولد': 'birthday',
            'موبایل': 'mobile',
            'شبکه اجتماعی': 'socialmobile',
            'تلفن منزل': 'telhome',
            'وضعیت نظام وظیفه': 'v_n_v',
            'وضعیت تاهل': 'v_t',
            'استان محل تحصیل': 'o_m_t',
            'دوره قرارگاه ملی': 'dore',
            'وضعیت ارتباط با اتحادیه': 'v_er_b_et',
            'در حال تحصیل': 'dar_h_ta',
            'وضعیت تحصیلی': 'v_tahsil',
            'تحصیلات دانشگاه': 'tahsilate_daneshkah',
            'نام دانشگاه': 'n_daneshkah',
            'نوع دانشگاه': 'noe_daneshkah',
            'رشته': 'major',
            'تحصیلات حوزه': 'tah_hoze',
            'نام حوزه': 'o_m_t',
            'رشته تخصصی': 'major_tahsil_hoze',
            'حوزه خدمت': 'hoze_khedmat',


        },
        /************************************chart*/
        optionschart: [],
        optionschart_v_tahol: [],
        optionschart_ostan_tahsil: [],
        optionschart_v_ertebat_ba_etehadiye: [],
        optionschart_noe_daneshkah: [],
        optionschart_v_tahsili: [],
        optionschart_dar_hale_tahsil: [],
        optionschart_tahsilat_daneshkah: [],
        optionschart_tahsilat_hoze: [],
        optionschart_dore_tahsili: [],

        /****************************contact to leader*/

        leaderIdMess: '',
        leaderTitle: '',
        leaderDesc: '',
        leaderDesc_answer: '',
        leaderTel: '',
        leaderEmail: '',
        is_leaderEmail_valid: true,
        leader_cats: [],
        repeated_mess: [],
        leader_cat_id: '',
        is_repeated: false,
        leaderSend: false,
        leaderSuccessMess: false,
        leaderSuccessMessFail: false,
        leaderIsEmpty: {'name': false, "tel": false, "email": false, 'desc': false, 'cat': false},
        loginSuccess: true,
        loginMistake: false,
        all_leader_message: {},
        ediFormLeader: 0,
        leader_mess_ids_delete: [],


    },
    mounted() {
        $(window).bind("load", function (l) {
            $('.mask').remove();
        });
        console.log('sssssssssssssssssss')
        this.currentTime();
        if (window.location.pathname == "/user/index") {
            this.get_register_attr();
        }
        else if (window.location.pathname == "/admin/login") {
            this.generateCaptcha();
        }
        else if (window.location.pathname == "/user/login") {
            this.generateCaptcha();
        }
        else if (window.location.pathname == "/user/account") {
            this.get_register_attr();
        }
        else if (window.location.pathname == "/user/kadamat_refahi") {
            this.get_kadamat_refahi();
        }
        else if (window.location.pathname == "/admin/index") {

            /* this.get_charts();*/
        }
        else if (window.location.pathname == "/admin/getStudents") {
            this.get_all_users();
        }
        else if (window.location.pathname == "/home/persons") {

            this.get_users_scroll();
            this.get_all_users_state_dore();

        } else if (window.location.pathname == "/home/news") {

            /* this.get_news_scroll();*/

        } else if (window.location.pathname == "/home/nashriye") {

            this.getNashriye();

        } else if (window.location.pathname == "/admin/nashriye") {

            this.getLastGroupNashriye();

        } else if (window.location.pathname == "/admin/nashriye_add") {

            this.getNashriye();

        }/* else if (window.location.pathname == "/home/employment") {

            this.get_all_employment();

        }*/ else if (window.location.pathname == "/admin/employ_rezome") {

            this.employ_rezome_sent();

        } else if (window.location.pathname == "/home/employment") {

            this.employ_rezome_sent();

        } else if (window.location.pathname == "/admin/employment") {
            this.employ_rezome_sent();
        } else if (window.location.pathname == "/admin/employment_add") {


            this.employ_rezome_sent();
        } else if (window.location.pathname == "/admin/category_product") {
            this.get_cat_childerns(0)
        } else if (window.location.pathname == "/admin/product") {
            this.get_products()
        } else if (window.location.pathname == "/home/shop_product") {
            this.get_products_home()
        } else if (window.location.pathname == "/home/shop_product_majale") {
            this.get_products_majale()
        } else if (window.location.pathname == "/admin/product_add") {
            this.get_products()
        } else if (window.location.pathname == "/admin/kadamat_refahi") {
            this.get_kadamat()
        } else if (window.location.pathname == "/admin/news") {
            /* this.getNews();*/
            this.getResults();
        } else if (window.location.pathname == "/admin/contactToLeader") {
            /* this.getNews();*/
            this.getLeader();
        } else if (window.location.pathname == "/home/contactToLeader") {
            this.get_leader_cat();
        } else if (window.location.pathname == "/home/shop") {
            this.get_kadamat()
        }

    },
    watch: {
        ostan_id: function () {
            this.filter_all_user();
        },
        ostan_id_for_persons: function () {
            this.filter_all_user_for_persons();
        },
        d_id: function () {
            this.filter_all_user();
        },
        r_id: function () {
            this.filter_all_user();
        },
        ostan_h_id: function () {
            this.filter_all_user();
        },
        cat_select_id: function () {
            if (this.cat_select_id == 0) {
                for (var i = 0; i < this.cat_ids_add.length; i++) {
                    this.cat_ids_add[i] = false;
                }
            }
        },
        kadamat_refahi_search: function () {
            this.kadamat_refahi_search_func();
        },
        product_refahi_search: function () {
            this.product_refahi_search_func();
        },
        product_refahi_search_majale: function () {

            this.product_refahi_search_func_majale();
        },
        name_search: function () {

            this.name_search_func();
        },

        leaderEmail: function () {
            this.emailValid();
        }

    },
    components: {
        Loading,
        VSelect,
        AtomSpinner
    },
    methods: {
        /**************start login captcha*/
        generateCaptcha() {

            var alpha = new Array(
                'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
                'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
            var i;
            for (i = 0; i < 5; i++) {
                var a = alpha[Math.floor(Math.random() * alpha.length)];
                var b = alpha[Math.floor(Math.random() * alpha.length)];
                var c = alpha[Math.floor(Math.random() * alpha.length)];
                var d = alpha[Math.floor(Math.random() * alpha.length)];
                var e = alpha[Math.floor(Math.random() * alpha.length)];
            }
            var code = a + '' + b + '' + '' + c + '' + d + '' + e;
            document.getElementById("Captcha").value = code;


        },
        CheckValidCaptcha() {

        },
        removeSpaces(string) {
            return string.split(' ').join('');
        },
        /**************end login captcha*/

        /****************************start attr article for user register*/
        add_article_row(index) {

            if (
                this.article_arr[index].article_title == ""
                || this.article_arr[index].article_type == ""
                || this.article_arr[index].article_customer == ""
                || this.article_arr[index].article_date == ""
                || this.article_arr[index].article_desc == ""

            ) {
                Swal.fire("", "همه موارد را پر کنید", "warning");
                return;

            }

            this.isLoading = true
            axios
                .post("/user/add_article_row", {
                    article_id: this.article_arr[index].article_id,
                    article_title: this.article_arr[index].article_title,
                    article_type: this.article_arr[index].article_type,
                    article_customer: this.article_arr[index].article_customer,
                    article_date: this.article_arr[index].article_date,
                    article_desc: this.article_arr[index].article_desc,

                })
                .then(response => {

                    if (response.data.alert == "yes") {

                        Swal.fire("", response.data.mess, "success");

                        if (this.article_arr[index].article_id == '') {
                            var obj = {
                                article_id: "",
                                article_title: '',
                                article_type: '',
                                article_customer: '',
                                article_date: '',
                                article_desc: '',
                                user_id: '',
                            }
                            this.article_arr.push(obj);
                        }
                        this.article_arr[index].article_id = response.data.lastRecord_article_id
                        this.isLoading = false;


                    }
                });


        },
        remove_article_row(index) {

            this.isLoading = true
            axios
                .post("/user/remove_article_row", {
                    article_id: this.article_arr[index].article_id,
                })
                .then(response => {
                    this.isLoading = false;
                    if (response.data == "yes") {

                        Swal.fire("", "حذف با موفقیت انجام گرفت", "success");

                        this.article_arr.splice(index, 1);


                    }
                });


            if (index != 0)
                this.article_arr.splice(index, 1);
        },
        /****************************end attr article for user register*/

        /****************************start attr talif for user register*/
        add_talif_row(index) {


            if (
                this.talif_arr[index].talif_title == ""
                || this.talif_arr[index].talif_subject == ""
                || this.talif_arr[index].talif_nasher == ""
                || this.talif_arr[index].talif_date == ""
                || this.talif_arr[index].talif_desc == ""

            ) {
                Swal.fire("", "همه موارد را پر کنید", "warning");
                return;

            }

            this.isLoading = true
            axios
                .post("/user/add_talif_row", {
                    talif_id: this.talif_arr[index].talif_id,
                    talif_title: this.talif_arr[index].talif_title,
                    talif_subject: this.talif_arr[index].talif_subject,
                    talif_nasher: this.talif_arr[index].talif_nasher,
                    talif_date: this.talif_arr[index].talif_date,
                    talif_desc: this.talif_arr[index].talif_desc,

                })
                .then(response => {

                    if (response.data.alert == "yes") {

                        Swal.fire("", response.data.mess, "success");

                        if (this.talif_arr[index].talif_id == '') {
                            var obj = {
                                talif_id: "",
                                talif_title: '',
                                talif_subject: '',
                                talif_nasher: '',
                                talif_date: '',
                                talif_desc: '',
                                user_id: '',
                            }
                            this.talif_arr.push(obj);
                        }
                        this.talif_arr[index].talif_id = response.data.lastRecord_talif_id
                        this.isLoading = false;


                    }
                });


        },
        remove_talif_row(index) {

            this.isLoading = true
            axios
                .post("/user/remove_talif_row", {
                    talif_id: this.talif_arr[index].talif_id,
                })
                .then(response => {
                    this.isLoading = false;
                    if (response.data == "yes") {

                        Swal.fire("", "حذف با موفقیت انجام گرفت", "success");

                        this.talif_arr.splice(index, 1);

                    }
                });

        },
        /****************************end attr talif for user register*/


        /****************************start attr karafarin for user register*/
        add_karafarin_row(index) {

            if (
                this.karafrin_arr[index].karafrin_title == ""
                || this.karafrin_arr[index].karafrin_subject == ""
                || this.karafrin_arr[index].karafrin_sabeghe == ""
                || this.karafrin_arr[index].karafrin_mizan_eshteghazayi == ""
                || this.karafrin_arr[index].karafrin_desc == ""

            ) {
                Swal.fire("", "همه موارد را پر کنید", "warning");
                return;

            }

            this.isLoading = true
            axios
                .post("/user/add_karafrin_row", {
                    karafrin_id: this.karafrin_arr[index].karafrin_id,
                    karafrin_title: this.karafrin_arr[index].karafrin_title,
                    karafrin_subject: this.karafrin_arr[index].karafrin_subject,
                    karafrin_sabeghe: this.karafrin_arr[index].karafrin_sabeghe,
                    karafrin_mizan_eshteghazayi: this.karafrin_arr[index].karafrin_mizan_eshteghazayi,
                    karafrin_desc: this.karafrin_arr[index].karafrin_desc,

                })
                .then(response => {

                    if (response.data.alert == "yes") {

                        Swal.fire("", response.data.mess, "success");

                        if (this.karafrin_arr[index].karafrin_id == '') {
                            var obj = {
                                karafrin_id: "",
                                karafrin_title: '',
                                karafrin_subject: '',
                                karafrin_sabeghe: '',
                                karafrin_mizan_eshteghazayi: '',
                                karafrin_desc: '',
                                user_id: '',
                            }
                            this.karafrin_arr.push(obj);
                        }
                        this.karafrin_arr[index].karafrin_id = response.data.lastRecord_karafrin_id
                        this.isLoading = false;


                    }
                });


        },
        remove_karafrin_row(index) {

            this.isLoading = true
            axios
                .post("/user/remove_karafrin_row", {
                    karafrin_id: this.karafrin_arr[index].karafrin_id,
                })
                .then(response => {
                    this.isLoading = false;
                    if (response.data == "yes") {

                        Swal.fire("", "حذف با موفقیت انجام گرفت", "success");

                        this.karafrin_arr.splice(index, 1);


                    }
                });

        },
        /****************************end attr karafarin for user register*/


        /****************************start attr article for user register*/
        add_savabegh_row(index) {

            if (
                this.savabegh_taskilati[index].savabegh_semat == ""
                || this.savabegh_taskilati[index].sayer_tashakol.value == ""
                || this.savabegh_taskilati[index].sayer_tashakol_ostan.value == ""
                || this.savabegh_taskilati[index].sabegh_desc == ""
                || this.savabegh_taskilati[index].sabeghe_number == ""

            ) {
                Swal.fire("", "همه موارد را پر کنید", "warning");
                return;

            }

            this.isLoading = true
            axios
                .post("/user/add_savabegh_row", {
                    savabegh_id: this.savabegh_taskilati[index].savabegh_id,
                    savabegh_semat: this.savabegh_taskilati[index].savabegh_semat,
                    s_o_dar_s_t: this.savabegh_taskilati[index].sayer_tashakol.value,
                    ostan_id: this.savabegh_taskilati[index].sayer_tashakol_ostan.value,
                    sabegh_desc: this.savabegh_taskilati[index].sabegh_desc,
                    sabeghe_number: this.savabegh_taskilati[index].sabeghe_number,

                })
                .then(response => {

                    if (response.data.alert == "yes") {

                        Swal.fire("", response.data.mess, "success");

                        if (this.savabegh_taskilati[index].savabegh_id == '') {
                            var obj4 = {
                                savabegh_id: "",
                                sayer_tashakol: {text: "", value: ""},
                                sayer_tashakol_ostan: {text: "", value: ""},
                                savabegh_semat: '',
                                sabeghe_number: '',
                                ostan_id: '',
                                sabegh_desc: '',
                                user_id: '',
                            }
                            this.savabegh_taskilati.push(obj4);
                        }
                        this.savabegh_taskilati[index].savabegh_id = response.data.lastRecord_savabegh_id
                        this.isLoading = false;


                    }
                });


        },
        remove_savabegh_row(index) {


            this.isLoading = true
            axios
                .post("/user/remove_savabegh_row", {
                    savabegh_id: this.savabegh_taskilati[index].savabegh_id,
                })
                .then(response => {
                    this.isLoading = false;
                    if (response.data == "yes") {

                        Swal.fire("", "حذف با موفقیت انجام گرفت", "success");

                        this.savabegh_taskilati.splice(index, 1);


                    }
                });


        },
        /****************************end attr article for user register*/


        /*********************************pdf for user attr*/
        exportToPDF() {
            html2pdf(this.$refs.document, {
                /*    margin: 1,
                    filename: 'document.pdf',
                    image: {type: 'jpeg', quality: 0.98},
                    html2canvas: {dpi: 192, letterRendering: true},
                    jsPDF: {unit: 'in', format: 'letter', orientation: 'landscape'}*/
                margin: 0.5,

                filename: `hehehe.pdf`,

                image: {
                    type: 'jpeg',
                    quality: 0.98
                },

                enableLinks: false,

                html2canvas: {
                    scale: 1,
                    useCORS: true
                },

                jsPDF: {
                    unit: 'in',
                    format: 'a4',
                    orientation: 'portrait'
                }
            })
        },
        /*pdf for dashboard and chart*/
        exportToPDFDashboard() {
            html2pdf(this.$refs.document, {
                /*    margin: 1,
                    filename: 'document.pdf',
                    image: {type: 'jpeg', quality: 0.98},
                    html2canvas: {dpi: 192, letterRendering: true},
                    jsPDF: {unit: 'in', format: 'letter', orientation: 'landscape'}*/
                margin: 0,

                filename: `hehehe.pdf`,

                image: {
                    type: 'jpeg',
                    quality: 0.98
                },

                enableLinks: false,

                html2canvas: {
                    scale: 1,
                    useCORS: true
                },

                jsPDF: {
                    unit: 'in',
                    format: 'a4',
                    orientation: 'landscape'
                }
            })
        },
        /*pdf for dashboard and chart*/
        exportToPDFnews() {
            html2pdf(this.$refs.document, {
                /*    margin: 1,
                    filename: 'document.pdf',
                    image: {type: 'jpeg', quality: 0.98},
                    html2canvas: {dpi: 192, letterRendering: true},
                    jsPDF: {unit: 'in', format: 'letter', orientation: 'landscape'}*/
                margin: 1,

                filename: `hehehe.pdf`,

                image: {
                    type: 'jpeg',
                    quality: 0.98
                },

                enableLinks: false,

                html2canvas: {
                    scale: 1,
                    useCORS: true
                },

                jsPDF: {
                    unit: 'in',
                    format: 'a4',
                    orientation: 'landscape'
                }
            })
        },

        ////////////////////////////////////////

        currentTime() {
            var today = new Date();
            var date = new Date().toLocaleDateString('fa-IR').replace(/([۰-۹])/g, function (token) {
                return String.fromCharCode(token.charCodeAt(0) - 1728);
            });
            this.currenttimee = date;
        },
        //////////////////////////////////////////////////////////user panel
        test() {
            this.h_kh_sub = [];

            for (var i = 0; i < this.h_kh.length; i++) {
                if (this.h_kh_id == this.h_kh[i].id) {
                    for (var j = 0; j < this.h_kh[i].sub.length; j++) {
                        this.h_kh_sub.push(this.h_kh[i].sub[j]);
                    }
                    break;
                }
            }
            // /////////////////////////////////////////////filter for admin panel
            this.filter_all_user();
        },
        attr_value_select(index) {
            if (index == 15) {
                this.attr_value[index] = this.t_s_s_o_t;
            } else if (index == 78) {
                this.attr_value[index] = this.k_d;
            } else if (index == 79) {
                this.attr_value[index] = this.k_m_kh;
            } else if (index == 80) {
                this.attr_value[index] = this.k_m_m;
            } else if (index == 81) {
                this.attr_value[index] = this.n_h;
            } else if (index == 130) {
                this.attr_value[130] = this.o_d_sh;
            }
        },
        change_selected() {


            this.t_h_id = "";
            this.thisostan_h_id = "";
            this.r_t_id = "";
            this.k_m_kh = "";
            this.k_m_m = "";
            this.n_h = "";

            this.ostan_h_id.value = 0;
            this.ostan_h_id.text = "انتخاب کنید";

            this.d_id.value = 0;
            this.d_id.text = "انتخاب کنید"

            this.r_id.value = 0;
            this.r_id.text = "انتخاب کنید"

            this.t_d_id = "";
            this.t_d_id_type_d = "";

            this.k_d = "";


            this.attr_value[78] = "";
            this.attr_value[79] = "";
            this.attr_value[80] = "";
            this.attr_value[81] = "";


            //////////////////////////////////////
            if (this.v_tt_id == 45) {
                this.stat_show_academy = 1;
            } else if (this.v_tt_id == 46) {
                this.stat_show_academy = 2;
            } else if (this.v_tt_id == 47) {
                this.stat_show_academy = 3;
            } else if (this.v_tt_id == 48) {
                this.stat_show_academy = 4;
            }

        },
        get_register_attr() {
            this.isLoading = true;
            axios.get("/user/get_register_attr").then(response => {

                this.name = response.data.userInfo.name;
                this.family = response.data.userInfo.family;
                this.fatherName = response.data.userInfo.fatherName;
                this.nCod = response.data.userInfo.nCod;
                this.birthday = response.data.userInfo.birthday;
                this.mobile = response.data.userInfo.mobile;
                this.socialmobile = response.data.userInfo.socialmobile;
                this.telhome = response.data.userInfo.telhome;
                this.film_addr = response.data.userInfo.img;
                this.address = response.data.userInfo.address;
                //////////////////////////////////////////!*!/
                this.v_nv = response.data.v_nv.sub;
                this.all_attr_parent.push(response.data.v_nv);
                this.v_t = response.data.v_t.sub;
                this.all_attr_parent.push(response.data.v_t);
                this.ostan = response.data.ostan.sub;
                this.all_attr_parent.push(response.data.ostan);
                this.dore = response.data.dore.sub;
                this.v_er_ba_et = response.data.v_er_ba_et.sub;
                this.all_attr_parent.push(response.data.v_er_ba_et);
                this.dar_h_t = response.data.dar_h_t.sub;
                this.all_attr_parent.push(response.data.dar_h_t);

                for (let i = 0; i < this.ostan.length; i++) {
                    this.optionSelectOstan.push({
                        value: this.ostan[i].id,
                        text: this.ostan[i].attr
                    });
                }


                for (var i = 0; i < response.data.user_attr2.length; i++) {
                    if (response.data.user_attr2[i].ids_attr == 15) {
                        this.attr_value[15] = response.data.user_attr2[i].value;
                        this.t_s_s_o_t = response.data.user_attr2[i].value;
                    } else if (response.data.user_attr2[i].ids_attr == 78) {
                        this.attr_value[78] = response.data.user_attr2[i].value;
                        this.k_d = response.data.user_attr2[i].value;
                    } else if
                    (response.data.user_attr2[i].ids_attr == 79) {
                        this.attr_value[79] = response.data.user_attr2[i].value;
                        this.k_m_kh = response.data.user_attr2[i].value;
                    } else if (response.data.user_attr2[i].ids_attr == 80) {
                        this.attr_value[80] = response.data.user_attr2[i].value;
                        this.k_m_m = response.data.user_attr2[i].value;
                    } else if (response.data.user_attr2[i].ids_attr == 81) {
                        this.attr_value[81] = response.data.user_attr2[i].value;
                        this.n_h = response.data.user_attr2[i].value;
                    } else if (response.data.user_attr2[i].ids_attr == 130) {
                        this.attr_value[130] =
                            response.data.user_attr2[i].value;
                        this.o_d_sh = response.data.user_attr2[i].value;
                    }
                }

                if (response.data.user_attr1.length != 0) {
                    this.user_attr = response.data.user_attr1;

                    if (this.user_attr[0] != undefined)
                        this.v_nv_id = this.user_attr[0];

                    if (this.user_attr[1] != undefined)
                        this.v_t_id = this.user_attr[1];

                    if (this.user_attr[2] != undefined && this.user_attr[2] != "") {
                        this.ostan_id.value = this.user_attr[2];

                    } else {

                        this.ostan_id.value = 0;
                        this.ostan_id.text = "انتخاب کنید"

                    }


                    for (var index = 0; index < this.ostan.length; index++) {
                        if (this.ostan[index].id == this.ostan_id.value) {
                            this.ostan_id.text = this.ostan[index].attr;
                        }
                    }


                    if (this.user_attr[3] != undefined)
                        this.dore_id = this.user_attr[3];

                    if (this.user_attr[4] != undefined)
                        this.v_er_ba_et_id = this.user_attr[4];

                    if (this.user_attr[5] != undefined)
                        this.dar_h_t_id = this.user_attr[5];

                    if (this.user_attr[6] != undefined)
                        this.v_tt_id = this.user_attr[6];


                    if (this.user_attr[7] != undefined) {

                        this.t_d_id = parseInt(this.user_attr[7]);

                    }


                    if (this.user_attr[8] != undefined && this.user_attr[8] != "") {
                        this.d_id.value = this.user_attr[8];

                    } else {
                        this.d_id.value = 0;
                        this.d_id.text = "انتخاب کنید"
                    }


                    if (this.user_attr[9] != undefined && this.user_attr[9] != "") {
                        this.r_id.value = this.user_attr[9];

                    } else {
                        this.r_id.value = 0;
                        this.r_id.text = "انتخاب کنید"
                    }


                    if (this.user_attr[10] != undefined)
                        this.t_h_id = this.user_attr[10];

                    if (this.user_attr[11] != undefined && this.user_attr[11] != "") {
                        this.ostan_h_id.value = this.user_attr[11];
                    } else {
                        this.ostan_h_id.value = 0;
                        this.ostan_h_id.text = "انتخاب کنید"
                    }

                    for (var index = 0; index < this.ostan.length; index++) {
                        if (this.ostan[index].id == this.ostan_h_id.value) {
                            this.ostan_h_id.text = this.ostan[index].attr;
                        }
                    }

                    if (this.user_attr[12] != undefined)
                        this.r_t_id = this.user_attr[12];

                    if (this.user_attr[13] != undefined)
                        this.h_kh_id = this.user_attr[13];

                    if (this.user_attr[14] != undefined)
                        this.h_kh_sub_id = this.user_attr[14];

                    if (this.user_attr[15] != undefined)
                        this.t_d_id_type_d = this.user_attr[15];


                    for (var i = 0; i < this.user_attr.length; i++) {
                        if (i > 15) {
                            this.form1_singleAttr_selected[this.user_attr[i]] = true;


                        }
                    }
                }


                //////////////////////////////////////////////////
                this.form1_singleAttr = response.data.form1_singleAttr;
                /****************************************************************/
                ////////////////////start form2/
                this.v_tt = response.data.v_tt.sub;
                this.all_attr_parent.push(response.data.v_tt);

                this.t_d = response.data.t_d.sub;
                this.all_attr_parent.push(response.data.v_nv);
                this.r = response.data.r.sub;
                this.all_attr_parent.push(response.data.r);
                this.t_h = response.data.t_h.sub;
                this.all_attr_parent.push(response.data.t_h);
                this.d = response.data.d.sub;
                this.all_attr_parent.push(response.data.d);


                // //////////////////////////////////daneshkah selectoption with search
                for (let i = 0; i < this.d.length; i++) {
                    this.optionSelectdaneshgah.push({
                        value: this.d[i].id,
                        text: this.d[i].attr
                    });
                }

                for (var index = 0; index < this.d.length; index++) {
                    if (this.d[index].id == this.d_id.value) {
                        this.d_id.text = this.d[index].attr;
                    }
                }
                //////////////////////////////////////////reshte selectoption with search

                for (let i = 0; i < this.r.length; i++) {
                    this.optionSelectReshte.push({
                        value: this.r[i].id,
                        text: this.r[i].attr
                    });
                }

                for (var index = 0; index < this.r.length; index++) {
                    if (this.r[index].id == this.r_id.value) {
                        this.r_id.text = this.r[index].attr;
                    }
                }


                /////////////////////////////////////////
                this.r = response.data.r.sub;
                this.all_attr_parent.push(response.data.r);
                this.r_t = response.data.r_t.sub;
                this.all_attr_parent.push(response.data.r_t);
                ///////////////////start form3/


                this.noe_daneshgah = response.data.noe_daneshkgah.sub;
                this.all_attr_parent.push(response.data.noe_daneshkgah);


                //////////////////end form2/
                this.h_kh = response.data.h_kh.sub;


                ///////////////////start form3/
                this.isLoading = false;
                ///////////////////////////////////////select only show hoze or danshgah or hoze and daneshkah*!/


                if (this.v_tt_id == 45) {
                    this.stat_show_academy = 1;
                } else if (this.v_tt_id == 46) {
                    this.stat_show_academy = 2;
                } else if (this.v_tt_id == 47) {
                    this.stat_show_academy = 3;
                } else if (this.v_tt_id == 48) {
                    this.stat_show_academy = 4;
                }
                /*       this.change_selected();*/
                this.test();


                ///////////////////////////////////////////////////start attr with article

                this.article_arr = response.data.articles;

                /*if not empty radio button seleted*/
                if (this.article_arr.length > 0) {
                    this.article = 1;
                }

                /**************************************add empty article*/
                var obj = {
                    article_id: "",
                    article_title: '',
                    article_type: '',
                    article_customer: '',
                    article_date: '',
                    article_desc: '',
                    user_id: '',
                }

                this.article_arr.push(obj);


                ///////////////////////////////////////////////////end attr with article
                ///////////////////////////////////////////////////start attr with talif
                this.talif_arr = response.data.talifs;

                /*if not empty radio button seleted*/
                if (this.talif_arr.length > 0) {
                    this.talif = 1;
                }

                /**************************************add empty talif*/
                var obj1 = {
                    talif_id: "",
                    talif_title: '',
                    talif_subject: '',
                    talif_nasher: '',
                    talif_date: '',
                    talif_desc: '',
                    user_id: '',
                }
                this.talif_arr.push(obj1);


                ///////////////////////////////////////////////////end attr with talif
                /**************************************add empty karafarin*/
                this.karafrin_arr = response.data.karafrins;

                /*if not empty radio button seleted*/
                if (this.karafrin_arr.length > 0) {
                    this.karafrin = 1;
                }
                /**************************************add empty karafarin*/
                var obj2 = {
                    karafrin_id: "",
                    karafrin_title: '',
                    karafrin_subject: '',
                    karafrin_sabeghe: '',
                    karafrin_mizan_eshteghazayi: '',
                    karafrin_desc: '',
                    user_id: '',
                }
                this.karafrin_arr.push(obj2);


                ///////////////////////////////////////////////////end attr with karafarin


                ///////////////////////////////////////////////////// start sayer tashkol

                this.savabegh_taskilati = response.data.savabegh_taskilati;

                /**************************************add empty tashkol*/
                var obj4 = {
                    savabegh_id: "",
                    sayer_tashakol: {text: "", value: ""},
                    sayer_tashakol_ostan: {text: "", value: ""},
                    savabegh_semat: '',
                    sabeghe_number: '',
                    ostan_id: '',
                    sabegh_desc: '',
                    user_id: '',
                }
                this.savabegh_taskilati.push(obj4);


                for (let i = 0; i < response.data.sayer_tashakol_ostan.length; i++) {
                    this.sayer_tashkol_ostan.push({
                        value: response.data.sayer_tashakol_ostan[i].id_ostan,
                        text: response.data.sayer_tashakol_ostan[i].title_ostan
                    });
                }

                for (let i = 0; i < response.data.sayer_tashakol.length; i++) {
                    this.sayer_tashkol.push({
                        value: response.data.sayer_tashakol[i].id,
                        text: response.data.sayer_tashakol[i].attr
                    });
                }

                this.isLoading = false;


                ///////////////////////////////////////////////////// end sayer tashkol

            })


        },
        get_kadamat_refahi(page = 1) {
            this.isLoading = true;
            axios.get("/user/kadamat_refahi_detail?page=" + page).then(response => {
                this.isLoading = false;
                this.all_kadamat_refahi = response.data
                console.log("yyyyyy", this.all_kadamat_refahi)

            })


        },
        save_register_attr() {

            if (this.user_file == "") {
                this.user_file = this.user_file_object.name;
            }


            axios
                .post("/user/save_register_attr", {
                    attr_value_select_help: this.attr_value_select_help_model,
                    id_user: 1,
                    form_type: this.form_type,
                    id: 1,
                    name: this.name,
                    family: this.family,
                    fatherName: this.fatherName,
                    nCod: this.nCod,
                    birthday: this.birthday,
                    socialmobile: this.socialmobile,
                    mobile: this.mobile,
                    telhome: this.telhome,
                    address: this.address,
                    img_user: this.user_file,
                    ids_attr: this.attrIds,
                    article_arr: this.article_arr,


                    /* t_s_s_o_t: this.t_s_s_o_t,*/
                    /////////////////////////////////////////*start form 2*/
                    k_d: this.k_d

                    /////////////////////////////////////////*end form 2*/
                })
                .then(response => {
                    /*   console.log(response.data);*/
                    this.isLoading = false;
                    if (response.data == "yes") {
                        Swal.fire("", "ویرایش موفقیت آمیز بود", "success");
                        this.formChange = step;
                    }
                });
        },
        editForm() {
            this.isFormEdit = 0;
        },
        changeForm(step) {

            if (step == 1) {
                if (
                    this.v_nv_id == "" ||
                    this.v_t_id == "" ||
                    this.ostan_id.value == 0
                    || (this.user_file == "" && this.user_file_object == "")) {
                    Swal.fire("", "موارد الزامی را پر کنید", "warning");
                    return;
                } else {
                    this.formChange = 2;
                    $(".box-parent .box-account")
                        .eq(step - 1)
                        .find(".box-account-sub i")
                        .addClass("my-check-step");
                }
            } else if (step == 2) {


                if (this.dar_h_t_id == "" || this.v_tt_id == "") {
                    Swal.fire("", "موارد الزامی را پر کنید", "warning");
                    return;
                } else {
                    this.formChange = 3;
                    $(".box-parent .box-account")
                        .eq(step - 1)
                        .find(".box-account-sub i")
                        .addClass("my-check-step");


                }
            } else if (step == 3) {
                this.formChange = 4;
                $(".box-parent .box-account")
                    .eq(step - 1)
                    .find(".box-account-sub i")
                    .addClass("my-check-step");
            } else if (step == 4) {


                /* if (this.dore_id == "" || this.v_er_ba_et_id == "") {
                     Swal.fire("", "موارد الزامی را پر کنید", "warning");
                     return;
                 }*/

                if (this.v_nv_id == undefined) {
                    this.v_nv_id = "";
                }
                if (this.v_t_id == undefined) {
                    this.v_t_id = "";
                }

                if (this.dore_id == undefined) {
                    this.dore_id = "";
                }
                if (this.v_er_ba_et_id == undefined) {
                    this.v_er_ba_et_id = "";
                }
                if (this.dar_h_t_id == undefined) {
                    this.dar_h_t_id = "";
                }
                if (this.v_tt_id == undefined) {
                    this.v_tt_id = "";
                }
                if (this.d_id.value == undefined) {
                    this.d_id.value = "";
                }
                if (this.t_h_id == undefined) {
                    this.t_h_id = "";
                }

                if (this.r_t_id == undefined) {
                    this.r_t_id = "";
                }
                if (this.h_kh_id == undefined) {
                    this.h_kh_id = "";
                }
                if (this.h_kh_sub_id == undefined) {
                    this.h_kh_sub_id = "";
                }
                if (this.t_d_id_type_d == undefined) {
                    this.t_d_id_type_d = "";
                }
                if (this.v_tt_id == "") {
                    Swal.fire("", "همه موارد را پر کنید", "warning");
                } else {
                    var attrIds = "";
                    attrIds +=
                        this.v_nv_id +
                        "/" +
                        this.v_t_id +
                        "/" +
                        this.ostan_id.value;
                    attrIds +=
                        "/" +
                        this.dore_id +
                        "/" +
                        this.v_er_ba_et_id +
                        "/" +
                        this.dar_h_t_id;
                    /*//////////////////////////////start form 2*/
                    attrIds +=
                        "/" +
                        this.v_tt_id +
                        "/" +
                        this.t_d_id +
                        "/" +
                        this.d_id.value +
                        "/" +
                        this.r_id.value +
                        "/" +
                        this.t_h_id +
                        "/" +
                        this.ostan_h_id.value +
                        "/" +
                        this.r_t_id;

                    /*//////////////////////////////end form 2*/

                    /*//////////////////////////////start form 3*/
                    attrIds += "/" + this.h_kh_id + "/" + this.h_kh_sub_id + "/" + this.t_d_id_type_d + "/";

                    /*//////////////////////////////end form 3*/
                    for (var i = 0; i < this.form1_singleAttr_selected.length; i++) {
                        if (this.form1_singleAttr_selected[i] == true) {
                            attrIds += "/" + i;
                        }
                    }

                    this.attrIds = attrIds;
                    /*/////////////////////////////////////////////////////////end attr selected*/
                    //////////////////////////////////////////////////////// star attr with value
                    var attr_value_select_help = [];
                    for (var i = 0; i < this.attr_value.length; i++) {
                        var ob = {};
                        if (this.attr_value[i] != undefined) {
                            ob.attr = i;
                            ob.val = this.attr_value[i];
                            attr_value_select_help.push(ob);
                        }
                    }
                    this.attr_value_select_help_model = attr_value_select_help;
                    ////////////////////////////////////////////////////////end attr with value
                    $(".box-parent .box-account")
                        .eq(step - 1)
                        .find(".box-account-sub i")
                        .addClass("my-check-step");
                    this.save_register_attr();
                }
            }
        },
        changeFormToBack(step) {
            if (step == 1) {
                this.formChange = "1";
                $(".box-parent .box-account")
                    .eq(step)
                    .find(".box-account-sub i")
                    .removeClass("my-check-step");
            } else if (step == 2) {
                $(".box-parent .box-account")
                    .eq(step)
                    .find(".box-account-sub i")
                    .removeClass("my-check-step");
                this.formChange = "2";
            } else if (step == 3) {
                $(".box-parent .box-account")
                    .eq(step)
                    .find(".box-account-sub i")
                    .removeClass("my-check-step");
                this.formChange = "3";
            }
        },
        ///////////////////////////////////////////////////////admin panel

        /*******************************start chart for dashboard*/
        get_charts() {
            this.isLoading = true;
            axios.get("/admin/get_charts").then(response => {
                this.isLoading = false;


                var arr = response.data.optionschart_v_n_v;
                var arr_v_tahol = response.data.optionschart_v_tahol;
                var arr_ostan_tahsil = response.data.optionschart_ostan_tahsil;
                var arr_v_ertebat_ba_etehadiye = response.data.optionschart_v_ertebat_ba_etehadiye;
                var arr_noe_daneshkah = response.data.optionschart_noe_daneshkah;
                var arr_v_tahsili = response.data.optionschart_v_tahsili;
                var arr_dar_hale_tahsil = response.data.optionschart_dar_hale_tahsil;
                var arr_tahsilat_daneshkah = response.data.optionschart_tahsilat_daneshkah;
                var arr_tahsilat_hoze = response.data.optionschart_tahsilat_hoze;
                var arr_dore_tahsili = response.data.optionschart_dore_tahsili;
                this.usersNumber = response.data.usersNumber;


                /************************وظیفه نظام وضعیت  **************/

                for (var i = 0; i < arr.length; i++) {
                    this.optionschart.push(arr[i]);
                }
                this.$refs.chart.setOption()

                /**************************تاهل وضعیت**************/
                for (var i = 0; i < arr_v_tahol.length; i++) {
                    this.optionschart_v_tahol.push(arr_v_tahol[i]);
                }
                this.$refs.chart_v_tahol.setOption()
                /**************************تحصیل محل استان**************/
                for (var i = 0; i < arr_ostan_tahsil.length; i++) {
                    this.optionschart_ostan_tahsil.push(arr_ostan_tahsil[i].number);

                }
                this.$refs.chart_ostan_tahsil.setOption()

                /**************************اتحادیه با ارتباط وضعیت**************/
                for (var i = 0; i < arr_v_ertebat_ba_etehadiye.length; i++) {
                    this.optionschart_v_ertebat_ba_etehadiye.push(arr_v_ertebat_ba_etehadiye[i].number);
                }
                this.$refs.chart_v_ertebat_ba_etehadiye.setOption()

                /**************************دانشگاه نوع**************/
                for (var i = 0; i < arr_noe_daneshkah.length; i++) {
                    this.optionschart_noe_daneshkah.push(arr_noe_daneshkah[i].number);
                }
                this.$refs.chart_noe_daneshkah.setOption()
                /**************************تحصیلی وضعیت**************/
                for (var i = 0; i < arr_v_tahsili.length; i++) {
                    this.optionschart_v_tahsili.push(arr_v_tahsili[i].number);
                }
                this.$refs.chart_v_tahsili.setOption()

                /**************************تحصیل حال در**************/
                for (var i = 0; i < arr_dar_hale_tahsil.length; i++) {
                    this.optionschart_dar_hale_tahsil.push(arr_dar_hale_tahsil[i].number);
                }
                this.$refs.chart_dar_hale_tahsil.setOption()
                /**************************دانشگاه تحصیلات**************/
                for (var i = 0; i < arr_tahsilat_daneshkah.length; i++) {
                    this.optionschart_tahsilat_daneshkah.push(arr_tahsilat_daneshkah[i].number);
                }
                this.$refs.chart_tahsilat_daneshkah.setOption()
                /**************************حوزه تحصیلات**************/
                for (var i = 0; i < arr_tahsilat_hoze.length; i++) {
                    this.optionschart_tahsilat_hoze.push(arr_tahsilat_hoze[i].number);
                }
                this.$refs.chart_tahsilat_hoze.setOption()
                /**************************تحصیلی دوره**************/
                for (var i = 0; i < arr_dore_tahsili.length; i++) {
                    this.optionschart_dore_tahsili.push(arr_dore_tahsili[i].number);
                }
                this.$refs.chart_dore_tahsili.setOption()
                /*/////////////////تعداد افراد ///////////////////////*/

            })
        },

        /*******************************end chart for dashboard*/


        get_all_users() {
            this.isLoading = true;
            this.all_users = [];
            axios.get("/admin/get_all_users").then(response => {
                this.isLoading = false;
                ///////////////////////////////////////////////شته تخصصی
                this.r_t = response.data.r_t.sub;
                this.all_attr_parent.push(response.data.r_t);
                this.r_t_id = 0;
                ///////////////////////////////////////////////حوزه خدمت
                this.h_kh = response.data.h_kh.sub;
                this.all_attr_parent.push(response.data.h_kh);
                this.h_kh_id = 0;
                /////////////////////////////////////////////// حوزه خدمت زیر مجموعه
                this.h_kh = response.data.h_kh.sub;
                this.all_attr_parent.push(response.data.h_kh);
                this.h_kh_id = 0;
                ///////////////////////////////////////////////رشته تخصصی
                this.h_kh_sub_id = 0;
                /////////////////////////////////////تحصیلات حوزی
                this.t_h = response.data.t_h.sub;
                this.all_attr_parent.push(response.data.t_h);
                this.t_h_id = 0;
                ///////////////////////////////////////////////رشته
                this.r = response.data.r.sub;
                this.all_attr_parent.push(response.data.r);
                this.r_id.value = 0;
                if (this.r.length > 0) {
                    this.optionSelectReshte.push({
                        value: 0,
                        text: 'بدون انتخاب'
                    });
                    this.r_id.value = 0;
                    this.r_id.text = "انتخاب کنید";
                }
                for (let i = 0; i < this.r.length; i++) {
                    this.optionSelectReshte.push({
                        value: this.r[i].id,
                        text: this.r[i].attr
                    });
                }
                ///////////////////////////////////////////////دانشگاه
                this.d = response.data.d.sub;
                this.all_attr_parent.push(response.data.d);

                this.d_id.value = 0;
                if (this.d.length > 0) {
                    this.optionSelectdaneshgah.push({
                        value: 0,
                        text: 'بدون انتخاب'
                    });
                    this.d_id.value = 0;
                    this.d_id.text = "انتخاب کنید";

                }
                for (let i = 0; i < this.d.length; i++) {
                    this.optionSelectdaneshgah.push({
                        value: this.d[i].id,
                        text: this.d[i].attr
                    });
                }
                ///////////////////////////////////////////////تحصیلات دانشگاهی
                this.t_d = response.data.t_d.sub;
                this.all_attr_parent.push(response.data.t_d);
                this.t_d_id = 0;
                ///////////////////////////////////////////////وضعیت تحصیلی
                this.v_tt = response.data.v_tt.sub;
                this.all_attr_parent.push(response.data.v_tt);
                this.v_tt_id = 0;
                ///////////////////////////////////////////////در حال تحصیل
                this.dar_h_t = response.data.dar_h_t.sub;
                this.all_attr_parent.push(response.data.dar_h_t);
                this.dar_h_t_id = 0;
                ///////////////////////////////////////////////وضعیت ارتباط با اتحادیه
                this.v_er_ba_et = response.data.v_er_ba_et.sub;
                this.all_attr_parent.push(response.data.v_er_ba_et);
                this.v_er_ba_et_id = 0;

                ///////////////////////////////////////////////دوره قرارگاه ملی
                this.dore = response.data.dore.sub;
                this.all_attr_parent.push(response.data.dore);
                this.dore_id = 0;
                ///////////////////////////////////////////////وضعیت نظام وضیفه
                this.v_nv = response.data.v_nv.sub;
                this.all_attr_parent.push(response.data.v_nv);
                this.v_nv_id = 0;

                ///////////////////////////////////////////////gender
                this.v_t = response.data.v_t.sub;
                this.all_attr_parent.push(response.data.v_t);
                this.v_t_id = 0;
                ///////////////////////////////////////////////ostan
                this.ostan = response.data.ostan.sub;
                this.all_attr_parent.push(response.data.ostan);
                if (this.ostan.length > 0) {
                    this.optionSelectOstan.push({
                        value: 0,
                        text: 'بدون انتخاب'
                    });
                    this.ostan_id.value = 0;
                    this.ostan_id.text = "انتخاب کنید";
                    ///////////استان حوزه
                    this.ostan_h_id.value = 0;
                    this.ostan_h_id.text = "انتخاب کنید";
                }
                for (let i = 0; i < this.ostan.length; i++) {
                    this.optionSelectOstan.push({
                        value: this.ostan[i].id,
                        text: this.ostan[i].attr
                    });
                }
                //////////////////////////////////////////استان حوزه


                ////////////////////////////////////////////////////get user without reapeat
                var user_ids = [];
                for (var i = 0; i < response.data.all_users.length; i++) {
                    if (!user_ids.includes(response.data.all_users[i].id)) {
                        user_ids.push(response.data.all_users[i].id);
                        this.all_users.push(response.data.all_users[i]);
                        this.all_users_always.push(response.data.all_users[i]);
                    }
                }

                /*////////////////////////////////////////////////start attr with single*/
                this.form1_singleAttr = response.data.form1_singleAttr;

                /*////////////////////////////////////////////////end attr with single*/

                ;

            });
        },
        get_all_users_state_dore() {
            this.isLoading = true;
            axios.get("/admin/get_all_users_state_dore").then(response => {

                /*****************************ostan*/
                this.ostan = response.data.ostan.sub;
                if (this.ostan.length > 0) {
                    this.optionSelectOstan.push({
                        value: 0,
                        text: 'بدون انتخاب'
                    });
                    this.ostan_id_for_persons.value = 0;
                    this.ostan_id_for_persons.text = "انتخاب کنید";
                }
                for (let i = 0; i < this.ostan.length; i++) {
                    this.optionSelectOstan.push({
                        value: this.ostan[i].id,
                        text: this.ostan[i].attr
                    });
                }
                /****************************dore ghararghahe meli*/
                ///////////////////////////////////////////////دوره قرارگاه ملی
                this.dore = response.data.dore.sub;
                this.dore_id = 0;


            });
        },

        get_users_scroll($state) {

            axios.get("/admin/get_all_users1?page=" + this.page, {
                params: {
                    page: this.page,
                },
            }).then(response => {
                if (response.data.data.length) {
                    this.page += 1;
                    var user_ids = [];
                    for (var i = 0; i < response.data.data.length; i++) {
                        if (!user_ids.includes(response.data.data[i].id)) {
                            user_ids.push(response.data.data[i].id);
                            this.all_users.push(response.data.data[i]);
                            this.all_users_always.push(response.data.data[i]);
                        }
                    }
                    $state.loaded();
                } else {
                    $state.complete();
                }
            });


        },
        get_news_scroll($state) {

            axios.get("/home/news1?page=" + this.page, {
                params: {
                    page: this.page,
                },
            }).then(response => {
                if (response.data.data.length) {
                    this.page += 1;
                    for (var i = 0; i < response.data.data.length; i++) {
                        this.all_news_for_home.push(response.data.data[i]);
                    }
                    $state.loaded();
                } else {
                    $state.complete();
                }
            });


        },
        filter_all_user: function () {

            this.all_users = this.all_users_always;
            var all_users_help = [];


            /***************start if admin not select anyone show all user even users that have not register */
            if (this.v_nv_id == 0 && this.v_t_id == 0 && this.ostan_id.value == 0 &&
                this.dore_id == 0 && this.v_er_ba_et_id == 0 && this.dar_h_t_id == 0 &&
                this.v_tt_id == 0 && this.t_d_id == 0 && this.d_id.value == 0 &&
                this.r_id.value == 0 && this.t_h_id == 0 && this.ostan_h_id.value == 0 &&
                this.r_t_id == 0 && this.h_kh_id == 0
            ) {
                return;
            }
            /***************start if admin not select anyone show all user even users that have not register */

            this.isLoading = true;
            for (var i = 0; i < this.all_users.length; i++) {
                /*********if user have feacher */
                if (this.all_users[i].ids_attr != null) {
                    var arr_ids_attr = this.all_users[i].ids_attr.split("/");
                } else {
                    /*********if user have not feacher for() not continue beacause user not feacher */
                    continue;
                }

                if (this.v_nv_id == 0) {
                    arr_ids_attr[0] = 0;
                }
                if (this.v_t_id == 0) {
                    arr_ids_attr[1] = 0;
                }
                if (this.ostan_id.value == 0) {
                    arr_ids_attr[2] = 0;
                }
                if (this.dore_id == 0) {
                    arr_ids_attr[3] = 0;
                }
                if (this.v_er_ba_et_id == 0) {
                    arr_ids_attr[4] = 0;
                }
                if (this.dar_h_t_id == 0) {
                    arr_ids_attr[5] = 0;
                }
                if (this.v_tt_id == 0) {
                    arr_ids_attr[6] = 0;
                }
                if (this.t_d_id == 0) {
                    arr_ids_attr[7] = 0;
                }
                if (this.d_id.value == 0) {
                    arr_ids_attr[8] = 0;
                }
                if (this.r_id.value == 0) {
                    arr_ids_attr[9] = 0;
                }
                if (this.t_h_id == 0) {
                    arr_ids_attr[10] = 0;
                }
                if (this.ostan_h_id.value == 0) {
                    arr_ids_attr[11] = 0;
                }
                if (this.r_t_id == 0) {
                    arr_ids_attr[12] = 0;
                }
                if (this.h_kh_id == 0) {
                    arr_ids_attr[13] = 0;
                }
                if (this.h_kh_sub_id == 0) {
                    arr_ids_attr[14] = 0;
                }

                if (this.v_nv_id == arr_ids_attr[0] && this.v_t_id == arr_ids_attr[1] && this.ostan_id.value == arr_ids_attr[2] &&
                    this.dore_id == arr_ids_attr[3] && this.v_er_ba_et_id == arr_ids_attr[4] && this.dar_h_t_id == arr_ids_attr[5] &&
                    this.v_tt_id == arr_ids_attr[6] && this.t_d_id == arr_ids_attr[7] && this.d_id.value == arr_ids_attr[8] &&
                    this.r_id.value == arr_ids_attr[9] && this.t_h_id == arr_ids_attr[10] && this.ostan_h_id.value == arr_ids_attr[11] &&
                    this.r_t_id == arr_ids_attr[12] && this.h_kh_id == arr_ids_attr[13] && this.h_kh_sub_id == arr_ids_attr[14]) {
                    all_users_help.push(this.all_users[i]);
                }

            }
            this.all_users = all_users_help;
            this.isLoading = false

        },
        filter_all_user_for_persons: function () {

            this.all_users = this.all_users_always;
            var all_users_help = [];

            //************اگر در حالت انتخاب بود و هر دور هیچ گزینه رو انتخاب کرده بودن کلش بره تو
            // یوزرها حتی یوزرهایی که استان و دوره رو انتخاب نکردن

            if (this.dore_id == 0 && this.ostan_id_for_persons.value == 0) {

                return;

            }


            for (var i = 0; i < this.all_users.length; i++) {
                if (this.all_users[i].ids_attr != null) {
                    var arr_ids_attr = this.all_users[i].ids_attr.split("/");
                } else {
                    continue;
                }


                if (this.ostan_id_for_persons.value == 0) {
                    arr_ids_attr[2] = 0;
                }
                if (this.dore_id == 0) {
                    arr_ids_attr[3] = 0;
                }


                if (
                    this.ostan_id_for_persons.value == arr_ids_attr[2] &&
                    this.dore_id == arr_ids_attr[3]

                ) {
                    all_users_help.push(this.all_users[i]);
                    console.log("tttt", all_users_help);
                }

            }
            this.all_users = all_users_help;

        },

        show_user_attr(id_user, name, family, fatherName, ncode, birthday, mobile, socialmobile, tellhom) {


            /**********************************start user fields */
            this.user_id = id_user;
            this.name = name;
            this.family = family;
            this.fatherName = fatherName;
            this.birthday = birthday;
            this.nCod = ncode;
            this.mobile = mobile;
            this.socialmobile = socialmobile;
            this.telhome = tellhom;

            this.student_edit_form = 2;

            this.attr_parent_childs = [];
            this.c_user_attr = [];


            for (var i = 0; i < this.all_users.length; i++) {
                if (this.all_users[i].id == id_user) {
                    this.c_user_attr = this.all_users[i].ids_attr.split("/");
                    break;
                }

            }


            for (let i = 0; i < this.c_user_attr.length; i++) {

                for (let j = 0; j < this.all_attr_parent.length; j++) {

                    var c_parent = this.all_attr_parent[j];
                    var childs = c_parent.sub

                    for (let k = 0; k < childs.length; k++) {
                        var c_child = childs[k]

                        if (this.c_user_attr[i] == c_child.id) {

                            c_child.parent_title = c_parent.attr;
                            this.attr_parent_childs.push(c_child);
                        }

                    }

                }

            }
            /**********************************end user fields */
            axios
                .post("/admin/get_user_attr_withValue", {
                    id: id_user,
                })
                .then(response => {
                    /******************************************************start attr with value*/
                    for (var i = 0; i < response.data.user_attr2.length; i++) {
                        if (response.data.user_attr2[i].ids_attr == 15) {
                            this.attr_value[15] = response.data.user_attr2[i].value;
                            this.t_s_s_o_t = response.data.user_attr2[i].value;
                        } else if (response.data.user_attr2[i].ids_attr == 78) {
                            this.attr_value[78] = response.data.user_attr2[i].value;
                            this.k_d = response.data.user_attr2[i].value;
                        } else if
                        (response.data.user_attr2[i].ids_attr == 79) {
                            this.attr_value[79] = response.data.user_attr2[i].value;
                            this.k_m_kh = response.data.user_attr2[i].value;
                        } else if (response.data.user_attr2[i].ids_attr == 80) {
                            this.attr_value[80] = response.data.user_attr2[i].value;
                            this.k_m_m = response.data.user_attr2[i].value;
                        } else if (response.data.user_attr2[i].ids_attr == 81) {
                            this.attr_value[81] = response.data.user_attr2[i].value;
                            this.n_h = response.data.user_attr2[i].value;
                        } else if (response.data.user_attr2[i].ids_attr == 130) {
                            this.attr_value[130] =
                                response.data.user_attr2[i].value;
                            this.o_d_sh = response.data.user_attr2[i].value;
                        }
                    }

                    /****************************************************** end attr with value*/

                    /********************start if tags.text is empty so deleted with jquery*/
                    var tags = $(".my-fancy-checkbox");
                    var tags_length = tags.length;
                    for (let i = 0; i < tags_length; i++) {
                        var tags_label = tags.eq(i).find('.label-account')
                        var tags_label_length = tags_label.length;

                        var removed = true;
                        for (let j = 0; j < tags_label_length; j++) {

                            if (tags_label.eq(j).has('span').length > 0) {
                                removed = false;
                                break;
                            }

                        }
                        if (removed) {
                            tags.eq(i).remove();
                        }

                    }
                    /********************end if tags.text is empty so deleted with jquery*/


                    /**********************************start user article */

                    this.article_arr = response.data.user_article;


                    /**********************************end user article */
                    /**********************************start user karafarin */

                    this.karafrin_arr = response.data.user_karafarin;


                    /**********************************end user karafarin */
                    /**********************************start user talif */

                    this.talif_arr = response.data.user_talif;


                    /**********************************end user talif */
                    /**********************************start user savabeghe tashkilati */

                    this.savabegh_taskilati = response.data.savabe_tash;


                    /**********************************end user savabeghe tashkilati */


                });


        },
        funcaddrfilm(val) {

            this.film_addr = val;
        },
        funcaddrfilm1(val, file) {
            /* if (val) {
            file.filenameali = val;
            this.film_addr1.push(val);
            } else {
            var index = this.film_addr1.indexOf(file.filenameali);
            if (index !== -1) {
            this.film_addr1.splice(index, 1);
            }

            }*/
        },
        funcaddrfilm1_0(val, file) {

            if (val) {
                file.filenameali = val;
                /*حذف از خانه صفرم و فقط یکی*/
                this.film_addr1.splice(0, 1);
                /*جایگذاری در خانه صفرم */
                this.film_addr1.splice(0, 0, val)
            } else {

                /*حذف از خانه صفرم و فقط یکی*/
                this.film_addr1.splice(0, 1);
                /*حذف از خانه صفرم و فقط یکی*/
                this.film_addr1.splice(0, 0, "")

            }

        },

        funcaddrfilm1_1(val, file) {
            if (val) {
                file.filenameali = val;
                /*حذف از خانه صفرم و فقط یکی*/
                this.film_addr1.splice(1, 1);
                /*جایگذاری در خانه صفرم */
                this.film_addr1.splice(1, 0, val)
            } else {


                /*حذف از خانه صفرم و فقط یکی*/
                this.film_addr1.splice(1, 1);
                /*حذف از خانه صفرم و فقط یکی*/
                this.film_addr1.splice(1, 0, "")

            }
        },
        funcaddrfilm1_2(val, file) {

            if (val) {
                file.filenameali = val;
                /*حذف از خانه صفرم و فقط یکی*/
                this.film_addr1.splice(2, 1);
                /*جایگذاری در خانه صفرم */
                this.film_addr1.splice(2, 0, val)
            } else {


                /*حذف از خانه صفرم و فقط یکی*/
                this.film_addr1.splice(2, 1);
                /*حذف از خانه صفرم و فقط یکی*/
                this.film_addr1.splice(2, 0, "")

            }
        },
        funcaddrfilm1_3(val, file) {
            if (val) {
                file.filenameali = val;
                /*حذف از خانه صفرم و فقط یکی*/
                this.film_addr1.splice(3, 1);
                /*جایگذاری در خانه صفرم */
                this.film_addr1.splice(3, 0, val)
            } else {
                /*حذف از خانه صفرم و فقط یکی*/
                this.film_addr1.splice(3, 1);
                /*حذف از خانه صفرم و فقط یکی*/
                this.film_addr1.splice(3, 0, "")

            }
        },
        saveNashriye(isEdit) {

            if (this.nashriye_title == ""
                || this.film_addr1[0] == ""
                || this.film_addr1[1] == ""
                || this.film_addr1[2] == ""
                || this.film_addr1[3] == ""

            ) {
                Swal.fire("", "همه موارد را پر کنید", "warning");
                return;
            }

            console.log("ggggggg", this.film_addr1);
            axios

                .post("/admin/save_nashriye", {
                    editId: this.nashriyeEditId,
                    nashriye_title: this.nashriye_title,
                    imgs: this.film_addr1,
                    groupNashriye: this.groupNashriye,

                })
                .then(response => {
                    /*   console.log(response.data);*/
                    this.isLoading = false;
                    if (response.data == "yes") {
                        /*  Swal.fire("", "با موفقیت ذخیره شد", "warning");*/
                        this.nashriye_title = '';
                        /*this.film_addr1 = []*/
                        if (this.nashriyeEditId) {
                            this.all_nashriye_always = [];
                            this.getNashriye();
                            this.ediFormNashriye = 0;
                        } else {

                            this.getLastGroupNashriye();
                        }
                    }
                });
        },
        getNashriye() {
            this.isLoading = true;
            axios.get("/home/get_nashriye").then(response => {
                this.isLoading = false;
                this.all_nashriye = response.data.all_nashriye;
                /*******************convert objects to array*/
                var obj = this.all_nashriye;
                var result = Object.keys(obj).map(i => obj[i])
                /*******************last nashriye*/
                this.selected_nashriye = result[result.length - 1];
                this.lastNashriye = this.selected_nashriye[0].title;
                this.all_nashriye = result.reverse();
                /**********************without repeat row */

                var nash_group = [];
                for (var i = 0; i < this.all_nashriye.length; i++) {
                    var arr = this.all_nashriye[i];
                    for (var j = 0; j < arr.length; j++) {
                        if (!nash_group.includes(arr[j].groupp)) {
                            nash_group.push(arr[j].groupp);
                            this.all_nashriye_always.push(arr[j]);

                        }
                    }
                }
            });

        },
        showSelectNashriye(index) {
            this.nashriyeChange = index;
        },
        getLastGroupNashriye() {
            axios.get("/admin/getLastGroupNashriye").then(response => {


                this.groupNashriye = response.data.lastRecord + 1;

            });
        },

        deleteNashriye() {
            /*  this.isLoading = true;*/
            var n_groupp = [];
            for (var i = 0; i < this.nashriye_ids_delete.length; i++) {
                if (this.nashriye_ids_delete[i]) {
                    n_groupp.push(i);
                }
            }

            if (n_groupp.length == 0) {
                Swal.fire("", "موردی انتخاب نشده", "warning");
                return;
            }
            axios
                .post("/admin/nashriye_delete", {
                    groupp: n_groupp,
                })
                .then(response => {
                    this.isLoading = false;
                    /****update table*/
                    this.all_nashriye_always = [],
                        this.getNashriye();
                });
        },
        showSeletedNashriye: function (group) {


            this.selected_nashriye = [];
            for (var i = 0; i < this.all_nashriye.length; i++) {
                var arr = this.all_nashriye[i];
                for (var j = 0; j < arr.length; j++) {
                    if (arr[j].groupp == group) {
                        this.selected_nashriye.push(arr[j]);
                        this.lastNashriye = arr[j].title;
                    }
                }
            }
        },
        funcEdiFormNashriye(isEdit, nashriye_title, groupp, id) {
            this.nashriyeEditId = id;
            this.ediFormNashriye = 1;
            this.nashriye_title = nashriye_title;
            this.groupNashriye = groupp;
            this.isLoading = true;
            axios
                .post("/admin/current_Nahsriye", {
                    groupp: groupp,
                })
                .then(response => {
                    this.isLoading = false;
                    this.film_addr1 = response.data.current_Nahsriye;
                    /* Swal.fire("", "با موفقیت ذخیره شد", "warning");*/
                });

        },
        funcEdiFormNashriyeCansel() {
            this.ediFormNashriye = 0;
        },
        add_rezome(img, file) {
            if (img) {
                this.rezome_file = img;
            } else {


                if (this.rezome_file == "") {
                    this.rezome_file = this.rezome_file_object.name;
                }

                this.isLoading = true;
                axios
                    .post("/rezome_DropzoneRemove_edit", {
                        img_rezome: this.rezome_file,
                    })
                    .then(response => {
                        if (response.data == "yes") {
                            this.isLoading = false;
                            this.rezome_file = "";
                        }
                    });
            }
        },
        add_user(img, file) {
            if (img) {
                this.user_file = img;
            } else {


                if (this.user_file == "") {
                    this.user_file = this.user_file_object.name;
                }

                this.isLoading = true;
                axios
                    .post("/user_DropzoneRemove_edit", {
                        img_user: this.user_file,
                    })
                    .then(response => {
                        if (response.data == "yes") {
                            this.isLoading = false;
                            this.user_file = "";
                        }
                    });
            }
        },
        add_product(response) {
            this.rezome_file = response;
        },
        editProductLessonSelect(idProduct) {
            this.edit_product_id = idProduct;
            this.ediFormProductLesson = 1;
            this.ediFormProduct = 3;
            this.isLoading = true;
            axios
                .post("/admin/product_lesson/" + idProduct + "", {})
                .then(response => {
                    this.isLoading = false;
                    this.all_product_lessons = response.data.product_lessons;
                });
        },
        editProductLessonSelectCancel(idProduct) {
            this.ediFormProductLesson = 0;
            this.ediFormProduct = 0;

        },
        send_rezome(emId, userId) {
            if (this.rezome_file == "" && this.rezome_file_object.name == "") {
                Swal.fire("", "فایل آپلود نشده", "error");
                return;
            }
            if (this.rezome_file == "") {
                this.rezome_file = this.rezome_file_object.name;
            }
            this.is_send_rezome = true;
            axios.post("/home/employment_rezome_save", {
                rezome_file: this.rezome_file,
                emId: emId,
                currentTime: this.currenttimee,
                userId: userId,


                /* t_s_s_o_t: this.t_s_s_o_t,*/
                /////////////////////////////////////////*start form 2*/
                k_d: this.k_d

                /////////////////////////////////////////*end form 2*/
            })
                .then(response => {
                    this.isLoading = false;
                    if (response.data == "exist") {

                        this.is_send_rezome = false;
                        this.is_send_rezome_success = false;
                        this.send_rezome_befor = true;


                    } else if (response.data == "yes") {

                        this.is_send_rezome = false;
                        this.send_rezome_befor = false;
                        this.is_send_rezome_success = true;

                    } else {

                    }

                });
        },

        employmentSave() {
            var desc_employment = "";
            if (this.employId == "") {
                desc_employment = this.$refs.ref_editor_employment_add.employDesc;
                if (this.employTitle == "" ||
                    desc_employment == "" ||
                    this.employCategory.value == "" ||
                    this.employState.value == ""
                ) {
                    Swal.fire("", "همه موارد را پر کنید", "error");
                    return;
                }

            } else {
                desc_employment = this.$refs.ref_editor_employment_edit.employment_desc;
                /*this code detect your code run when you edit news*/

                if (this.employTitle == "" ||
                    desc_employment == "" ||
                    this.employCategory.value == "" ||
                    this.employState.value == ""

                ) {
                    Swal.fire("", "همه موارد را پر کنید", "error");
                    return;
                }

            }


            this.is_special = this.is_special ? 1 : 0
            // فراخوانی تابع زمان جاری
            this.currentTime();
            this.isLoading = true;
            axios
                .post("/admin/employSave", {
                    id: this.employId,
                    title: this.employTitle,
                    desc: desc_employment,
                    status: this.employStatus,
                    state: this.employState.value,
                    category: this.employCategory.value,
                    date: this.currenttimee,
                    is_special: this.is_special,
                })
                .then(response => {
                    this.isLoading = false;
                    if (response.data == "yes") {

                        if (this.employId == "") {
                            this.employTitle = '',
                                this.$refs.ref_editor_employment_add.employDesc = ""
                        } else {
                            this.ediFormEmployment = 0;
                            this.employ_rezome_sent();
                        }


                    }
                });
        },
        get_all_employment() {

            axios.get("/home/get_all_employment").then(response => {
                this.all_employment = response.data.e;
            });
        },
        employ_rezome_sent(page = 1) {
            this.isLoading = true;
            axios.get("/admin/employ_rezome_sent?page=" + page)
                .then(response => {
                    this.isLoading = false;
                    this.all_employment = response.data.employments;
                    this.special_employment = response.data.specials;
                    this.employment_user_rezome = response.data.e_user_rezome;
                    this.employment_user_rezome_always = response.data.e_user_rezome;
                    this.optionSelectOstan = response.data.states;
                    this.optionSelectCatEmploy = response.data.cats;
                });
        },
        employSelect(employId) {


            /*  this.ediFormRezome = 1;
              var arr = [];
              for (var i = 0; i < this.employment_user_rezome_always.length; i++) {
                  if (this.employment_user_rezome_always[i].employment_id == id) {
                      arr.push(this.employment_user_rezome_always[i])
                  }
              }
              this.employment_user_rezome = arr;*/

            this.ediFormRezome = 1;

            this.isLoading = true;
            axios
                .post("/admin/get_employ_rezome_sendted", {
                    employId: employId,
                })
                .then(response => {
                    this.isLoading = false;
                    this.employment_user_rezome = response.data;
                });


        },
        employSelectCancel() {

            this.ediFormRezome = 0;

        },
        employEdit(id) {
            /***********************empty other check box*/
            for (var i = 0; i < this.employment_edit.length; i++) {
                this.employment_edit[i] = false;
            }

            for (var i = 0; i < this.all_employment.length; i++) {
                if (this.all_employment[i].id == id) {

                    this.employId = this.all_employment[i].id;
                    this.employTitle = this.all_employment[i].title;
                    this.employState.id = this.all_employment[i].state;
                    this.employStatus = this.all_employment[i].status;
                    this.employTitle = this.all_employment[i].title;
                    this.employCategory = this.all_employment[i].category;
                    this.employDesc = this.all_employment[i].description;
                    this.isEditEmploy = "1";

                }

            }

        },
        funcEdiFormEmployment(id, title, desc, status, state, cat, is_special) {


            this.ediFormEmployment = 1;
            this.employId = id;
            this.employTitle = title;
            this.employDesc = desc.replaceAll("aliAli123aliAli3231test", id);
            this.employStatus = status;
            /***********************************start state for set object*/
            this.employState.value = state;

            for (var index = 0; index < this.optionSelectOstan.length; index++) {
                if (this.optionSelectOstan[index].value == this.employState.value) {
                    this.employState.text = this.optionSelectOstan[index].text;
                }
            }
            /***********************************end state for set object*/
            /***********************************start reshte for set object*/
            this.employCategory.value = cat;

            for (var index = 0; index < this.optionSelectCatEmploy.length; index++) {
                if (this.optionSelectCatEmploy[index].value == this.employCategory.value) {
                    this.employCategory.text = this.optionSelectCatEmploy[index].text;
                }
            }
            /***********************************end reshte for set object*/
            this.is_special = is_special;

        },
        funcEdiFormEmploymentCansel() {
            this.ediFormEmployment = 0;
            return;
        },
        get_cat_childerns(idCategory) {


            this.isLoading = true;
            axios
                .post("/admin/cat_childerns/" + idCategory + "", {})
                .then(response => {
                    this.isLoading = false;

                    if (response.data.all_cat.length != 0) {
                        this.all_cat = response.data.all_cat;
                        this.all_cat_for_selector = response.data.all_cat_for_selector;
                        this.all_parent = response.data.all_parent;
                        this.categoryInfo = response.data.categoryInfo;
                    }
                });
        },
        deleteCats() {
            /*this.isLoading = true;*/
            var cat_ids = [];
            for (var i = 0; i < this.cat_ids_delete.length; i++) {
                if (this.cat_ids_delete[i]) {
                    cat_ids.push(i);
                }
            }

            if (cat_ids.length == 0) {
                Swal.fire("", "موردی انتخاب نشده", "warning");
                return;
            }
            axios
                .post("/admin/deleteCats", {
                    ids: cat_ids,
                })
                .then(response => {
                    this.isLoading = false;
                    this.get_cat_childerns();
                    /****update table*/
                    this.get_cat_childerns();
                });
        },
        addCatSelect(id) {
            this.ediFormCat = 1;
            this.isEditCat = 0;
            /*for (var i = 0; i < this.cat_ids_add.length; i++) {
            this.cat_ids_add[i] = false;
            }*/
            this.cat_select_id = id;
            /***********************empty editCatSelect*/
            /* for (var i = 0; i < this.cat_ids_edit.length; i++) {
            this.cat_ids_edit[i] = false;
            }*/
            /***********************empty removeCatSelect*/
            for (var i = 0; i < this.cat_ids_delete.length; i++) {
                this.cat_ids_delete[i] = false;
            }
            /***********************empty input title*/
            this.cat_id_edit = "";
            this.cat_title_add = "";

        },
        editCatSelect(id, title, parent) {
            this.ediFormCat = 1;
            this.isEditCat = 1;
            /*for (var i = 0; i < this.cat_ids_edit.length; i++) {
            this.cat_ids_edit[i] = false;
            }*/
            this.cat_id_edit = id;
            this.cat_title_add = title;
            this.cat_select_id = parent;
            /***********************empty addCatSelect*/
            /*  for (var i = 0; i < this.cat_ids_add.length; i++) {
            this.cat_ids_add[i] = false;
            }*/
            /***********************empty removeCatSelect*/
            for (var i = 0; i < this.cat_ids_delete.length; i++) {
                this.cat_ids_delete[i] = false;
            }
            /**************************************/

        },
        editCatSelectCancel(id, title, parent) {
            this.ediFormCat = 0;
        },
        removeCatSelect() {
            /********************empty addCatSelect*/
            for (var i = 0; i < this.cat_ids_add.length; i++) {
                this.cat_ids_add[i] = false;
            }
            /***********************empty editCatSelect*/
            for (var i = 0; i < this.cat_ids_edit.length; i++) {
                this.cat_ids_edit[i] = false;
            }
            /***************** title cat select 0 ********/
            this.cat_select_id = 0;
            this.cat_title_add = "";

        },
        addCatToServer() {
            if (this.cat_title_add == "") {
                Swal.fire("", "عنوان خالی هست", "warning");
                return;
            }
            /* this.isLoading = true;*/
            axios
                .post("/admin/addCat", {
                    id_edit: this.cat_id_edit,
                    parent: this.cat_select_id,
                    title: this.cat_title_add,
                })
                .then(response => {
                    /*   this.isLoading = false;*/
                    if (response.data == "yes") {
                        /*Swal.fire("", "عملیات با موفقیت انجام شد", "warning");*/
                        /****update table*/
                        this.get_cat_childerns();
                        this.ediFormCat = 0;
                    }
                    this.cat_title_add = "";

                });

        },
        get_products(page = 1) {
            this.isLoading = true;
            axios.get("/admin/get_products?page=" + page)
                .then(response => {
                    this.isLoading = false;
                    this.all_products_always = response.data.all_products;
                    this.all_cat_for_selector = response.data.cats;
                    this.all_products = response.data.all_products;

                });


        },
        get_products_home(page = 1) {
            this.isLoading = true;
            axios.get("/admin/get_products_home?page=" + page)
                .then(response => {
                    this.isLoading = false;
                    this.all_products_always = response.data.all_products;
                    this.all_cat_for_selector = response.data.cats;
                    this.all_products = response.data.all_products;

                });


        },
        get_products_majale(page = 1) {
            this.isLoading = true;
            axios.get("/admin/get_products_majale?page=" + page)
                .then(response => {
                    this.isLoading = false;
                    this.all_products_always = response.data.all_products;
                    this.all_cat_for_selector = response.data.cats;
                    this.all_products = response.data.all_products;

                });

        },

        get_products_pagination(number) {
            this.all_products = [];
            if (number == 1) {
                for (i = 0; i < number * 10; i++) {
                    console.log("kkkkkk", i)
                    this.all_products.push(this.all_products_always[i]);
                }

            } else if (number == this.product_length) {
                var beforNumber = number - 1;
                var i = beforNumber * 10;
                for (i; i < this.all_products_always.length; i++) {
                    this.all_products.push(this.all_products_always[i]);
                }
            } else {
                var beforNumber = number - 1;
                console.log("bn", beforNumber);
                var i = beforNumber * 10;
                console.log("i", i);

                for (; i <= number * 10; i++) {
                    console.log(i);
                    this.all_products.push(this.all_products_always[i]);
                }
            }


        },


        add_img_product(img, file) {
            if (img) {
                this.img_course = img;
            } else {
                this.isLoading = true;
                axios
                    .post("/product_DropzoneRemove", {
                        img: this.img_course,
                    })
                    .then(response => {

                        if (response.data == "yes") {
                            this.isLoading = false;
                            this.img_course = "";
                        }
                    });
            }
        },
        add_img_product_edit(img, file) {
            if (img) {
                this.img_course = img;
            } else {
                this.isLoading = true;
                axios
                    .post("/product_DropzoneRemove_edit", {
                        id_product: this.edit_product_id,
                        img_product: this.img_course,
                    })
                    .then(response => {

                        if (response.data == "yes") {
                            this.isLoading = false;
                            this.img_course = "";
                        }
                    });
            }
        },


        addProdutToServer() {


            var desc_course = "";

            /*this code detect your code run when you add news*/
            if (this.edit_product_id == "") {
                desc_course = this.$refs.ref_editor_product_add.desc_course;
                if (this.title_course == "" ||
                    desc_course == "" ||
                    this.price_course == "" ||
                    /*     this.skyromm_course == "" ||*/
                    /*    this.tedad_afrad_course == "" ||*/
                    this.img_course == "" ||
                    this.cat_select_id == 0
                ) {
                    Swal.fire("", "همه موارد را پر کنید", "warning");
                    return;
                }

            } else {
                desc_course = this.$refs.ref_editor_product_edit.product_desc;
                if (this.title_course == "" ||
                    desc_course == "" ||
                    this.price_course == "" ||
                    /*     this.skyromm_course == "" ||*/
                    /*    this.tedad_afrad_course == "" ||*/
                    this.img_course == "" ||
                    this.cat_select_id == 0
                ) {
                    Swal.fire("", "همه موارد را پر کنید", "warning");
                    return;
                }


            }
            var type_course = parseInt(this.type_course);
            this.isLoading = true;
            axios
                .post("/admin/addProduct", {
                    edit_product_id: this.edit_product_id,
                    title_course: this.title_course,
                    desc_course: desc_course,
                    price_course: this.price_course,
                    skyromm_course: this.skyromm_course,
                    tedad_afrad_course: this.tedad_afrad_course,
                    img_course: this.img_course,
                    cat_select_id: this.cat_select_id,
                    type_course: type_course,
                })
                .then(response => {
                    this.isLoading = false;
                    if (response.data == "yes") {

                        if (this.edit_product_id == "") {
                            this.title_course = "";
                            this.$refs.ref_editor_product_add.desc_course = "";
                            this.price_course = 0;
                            this.skyromm_course = "";
                            this.tedad_afrad_course = 0;
                            this.img_course = "";
                            this.$refs.myVueDropzone.removeFile()
                            this.cat_select_id = 0;
                            this.type_course = "0";
                        } else {
                            this.get_products();
                            this.ediFormProduct = 0;
                        }


                    }


                });

        },
        editProductSelect(id, title, desc_course, price_course, skyromm_course
            , tedad_afrad_course, img_course, cat_select_id, is_online) {


            this.ediFormProduct = 1;

            /*for (var i = 0; i < this.product_ids_edit.length; i++) {
            this.product_ids_edit[i] = false;
            }*/
            this.edit_product_id = id;
            this.title_course = title;
            this.desc_course = desc_course.replaceAll("aliAli123aliAli3231test", id);
            this.price_course = price_course;
            this.skyromm_course = skyromm_course;
            this.tedad_afrad_course = tedad_afrad_course;
            this.img_course = img_course;
            this.cat_select_id = cat_select_id;
            this.type_course = is_online;
            /***********************empty addCatSelect*/
            /* for (var i = 0; i < this.cat_ids_add.length; i++) {
            this.cat_ids_add[i] = false;
            }*/


        },
        editProductLessons(id, title, file) {

            this.editProductLesson = 2;
            this.ediFormProductLesson = 0;

            this.lesson_id = id;
            this.film_title = title;

            var obj = {
                id: "player",
                file: '../uploads/product_lesson/' + id + '/' + file,
                title: 'dddd',
                autoplay: 0,
                download: 0
            }


            $(document).ready(function () {
                var player = new Playerjs(obj);
            })
            this.film_course = file;

        },
        addProductLessons() {
            this.editProductLesson = 1;
            this.ediFormProductLesson = 0;
        },
        editProductLessonsCancel() {

            this.editProductLesson = 0;
            this.ediFormProductLesson = 1;

            this.film_title = "";
            this.film_course = "";
            this.lesson_id = "";


        },
        editProductSelectCancel() {
            this.ediFormProduct = 0;


        },
        funckadamatAdd(val, file) {
            /*    if (val) {
            file.filenameali = val;
            this.kadamatImg.push(val);
            } else {
            var index = this.kadamatImg.indexOf(file.filenameali);
            if (index !== -1) {
            this.kadamatImg.splice(index, 1);
            }

            }*/
            if (val) {
                file.filenameali = val;
                /*حذف از خانه صفرم و فقط یکی*/
                this.kadamatImg.splice(0, 1);
                /*جایگذاری در خانه صفرم */
                this.kadamatImg.splice(0, 0, val)
            } else {

                /*حذف از خانه صفرم و فقط یکی*/
                this.kadamatImg.splice(0, 1);
                /*حذف از خانه صفرم و فقط یکی*/
                this.kadamatImg.splice(0, 0, "")

            }

        },
        funckadamatAdd1(val, file) {

            if (val) {
                file.filenameali = val;
                /*حذف از خانه صفرم و فقط یکی*/
                this.kadamatImg.splice(1, 1);
                /*جایگذاری در خانه صفرم */
                this.kadamatImg.splice(1, 0, val)
            } else {

                /*حذف از خانه صفرم و فقط یکی*/
                this.kadamatImg.splice(1, 1);
                /*حذف از خانه صفرم و فقط یکی*/
                this.kadamatImg.splice(1, 0, "")

            }

        },
        funckadamatAdd2(val, file) {

            if (val) {
                file.filenameali = val;
                /*حذف از خانه صفرم و فقط یکی*/
                this.kadamatImg.splice(2, 1);
                /*جایگذاری در خانه صفرم */
                this.kadamatImg.splice(2, 0, val)
            } else {

                /*حذف از خانه صفرم و فقط یکی*/
                this.kadamatImg.splice(2, 1);
                /*حذف از خانه صفرم و فقط یکی*/
                this.kadamatImg.splice(2, 0, "")

            }

        },
        funckadamatAdd3(val, file) {
            if (val) {
                file.filenameali = val;
                this.kadamatImg.splice(3, 1);
                /*جایگذاری در خانه صفرم */
                this.kadamatImg.splice(3, 0, val)
            } else {
                /*حذف از خانه صفرم و فقط یکی*/
                this.kadamatImg.splice(3, 1);
                /*حذف از خانه صفرم و فقط یکی*/
                this.kadamatImg.splice(3, 0, "")
            }

        },
        funckadamatAdd4(val, file) {
            if (val) {
                file.filenameali = val;
                this.kadamatImg.push(val);
            } else {
                var index = this.kadamatImg.indexOf(file.filenameali);
                if (index >= 0) {
                    this.kadamatImg.splice(index, 1);
                }

            }

        },
        funckadamatAdd4RemovePic(img) {
            this.isLoading = true;
            axios
                .post("/khadamat_Dropzone_slider_remove", {
                    img: img,
                })
                .then(response => {
                    this.isLoading = false;
                    if (response.data == "yes") {
                        /****start delete from array that pushed*/
                        var index = this.kadamatImg.indexOf(img);
                        if (index >= 0) {
                            this.kadamatImg.splice(index, 1);
                            شش
                        }
                        /****end  delete from array that pushed*/
                    }
                });


        },
        funckadamatAdd4RemovePic_edit(img) {
            this.isLoading = true;
            axios
                .post("/khadamat_Dropzone_slider_remove_edit", {
                    id_khadamat: this.id_kadamat,
                    img_khadamat: img,
                })
                .then(response => {
                    this.isLoading = false;
                    if (response.data == "yes") {
                        /****start delete from array that pushed*/
                        var index = this.kadamatImg.indexOf(img);
                        if (index >= 0) {
                            this.kadamatImg.splice(index, 1);
                        }
                        /****end  delete from array that pushed*/
                    }
                });


        },
        get_kadamat(page = 1) {
            this.isLoading = true;
            axios.get('/admin/kadamat_refahi_data?page=' + page)
                .then(response => {
                    this.isLoading = false;
                    this.all_kadamat_refahi = response.data;

                });
        },


        get_kadamat_filter(filter) {
            this.isActive_kadamat = filter;
            this.get_kadamat();
        },

        get_product_filter(filter) {
            this.isActive_product = filter;
            this.get_products_home();
        },
        get_product_filter_majale(filter) {
            this.isActive_product = filter;
            this.get_products_majale();
        },

        get_kadamat_filter_sidebar(filter) {
            this.isLoading = true;
            axios
                .post('/admin/kadamat_refahi_filter_sidebar', {
                    filter: filter
                }).then(response => {
                this.isLoading = false;
                this.all_kadamat_refahi = response.data;
                document.getElementById("mySideFilter").style.width = "0";
            })


        },
        get_employment_filter_sidebar(filter, type) {

            this.isLoading = true;
            axios
                .post('/admin/kadamat_employment_filter_sidebar', {
                    filter: filter,
                    type: type,
                }).then(response => {
                this.isLoading = false;
                this.all_employment = response.data;
                document.getElementById("mySideFilter").style.width = "0";
            })


        },
        get_product_filter_sidebar(filter) {
            this.isLoading = true;
            axios
                .post('/admin/product_refahi_filter_sidebar', {
                    filter: filter
                }).then(response => {
                this.isLoading = false;
                this.all_products = response.data;
                document.getElementById("mySideFilter").style.width = "0";
            })


        },
        get_product_filter_sidebar_majale(filter) {
            this.isLoading = true;
            axios
                .post('/admin/product_refahi_filter_sidebar_majale', {
                    filter: filter
                }).then(response => {
                this.isLoading = false;
                this.all_products = response.data;
                document.getElementById("mySideFilter").style.width = "0";
            })


        },
        saveKadamat() {


            var desc_kadamat = "";

            /*this code detect your code run when you add news*/
            if (this.id_kadamat == "") {
                desc_kadamat = this.$refs.ref_editor_khadamat_add.desc_kadamat;
                if (
                    this.title_kadamat == ""
                    || desc_kadamat == ""
                    || this.info_kadamat == ""
                    || this.price_kadamat == ""
                    || this.kadamatImg.length < 1
                    || this.kadamat_shakhes_Img == ""
                ) {
                    Swal.fire("", "همه موارد را پر کنید", "error");
                    return;
                }

            } else {

                desc_kadamat = this.$refs.ref_editor_khadamat_edit.desc_kadamat;


                /*this code detect your code run when you edit news*/

                if (this.title_kadamat == ""
                    || desc_kadamat == ""
                    || this.info_kadamat == ""
                    || this.price_kadamat == ""
                    || this.kadamatImg.length < 1
                    || this.kadamat_shakhes_Img == ""

                ) {
                    Swal.fire("", "همه موارد را پر کنید", "error");
                    return;
                }

            }

            this.isLoading = true;
            axios
                .post("/admin/save_kadamat", {
                    id: this.id_kadamat,
                    title_kadamat: this.title_kadamat,
                    desc_kadamat: desc_kadamat,
                    info_kadamat: this.info_kadamat,
                    price_kadamat: this.price_kadamat,
                    imgs: this.kadamatImg,
                    shakhes_img: this.kadamat_shakhes_Img,
                    kdadmat_from_date: this.kdadmat_from_date,
                    kdadmat_to_date: this.kdadmat_to_date,
                })
                .then(response => {
                    this.isLoading = false;
                    if (response.data == "yes") {

                        if (this.id_kadamat == "") {
                            this.title_kadamat = ""
                            this.desc_kadamat = ""
                            this.info_kadamat = ""
                            this.price_kadamat = ""
                            this.kdadmat_from_date = ""
                            this.kdadmat_to_date = ""
                            this.kadamatImg = [];
                            this.kadamat_shakhes_Img = ""
                            this.$refs.myVueDropzone.removeFile()
                            this.$refs.ref_editor_khadamat_add.desc_kadamat = "";

                        } else {
                            this.editkadamt = 0;
                            this.get_kadamat();
                        }
                    }


                });
        },
        kadamat_refahi_search_func() {
            this.is_searched_Kadamat = true;
            axios
                .post('/home/kadamat_refahi_search', {
                    search: this.kadamat_refahi_search
                }).then(response => {
                this.is_searched_Kadamat = false;

                this.all_kadamat_refahi_search_result = response.data;

            })
        },
        name_search_func() {
            this.all_users = [];
            if (this.name_search == "") {
                this.all_users = this.all_users_always;
            } else {
                for (let i = 0; i < this.all_users_always.length; i++) {
                    var family = this.all_users_always[i].family;
                    if (family != null) {
                        if (family.includes(this.name_search)) {
                            this.all_users.push(this.all_users_always[i])
                        }
                    }
                }
            }

        },
        product_refahi_search_func() {
            this.is_searched_product = true;
            axios
                .post('/home/product_refahi_search', {
                    search: this.product_refahi_search
                }).then(response => {
                this.is_searched_product = false;

                this.all_product_refahi_search_result = response.data;

            })


        },
        product_refahi_search_func_majale() {
            this.is_searched_product = true;
            axios
                .post('/home/product_refahi_search_majale', {
                    search: this.product_refahi_search_majale
                }).then(response => {
                this.is_searched_product = false;

                this.all_product_refahi_search_result = response.data;

            })


        },

        editkadamatFunc(id, title, desc, price, information, img_shkhes, kdadmat_from_date, kdadmat_to_date) {
            this.id_kadamat = id;
            this.title_kadamat = title;
            this.desc_kadamat = desc.replaceAll("aliAli123aliAli3231test", id);
            this.price_kadamat = price;
            this.info_kadamat = information;
            this.editkadamt = 1;
            this.isLoading = true;
            this.kadamat_shakhes_Img = img_shkhes;
            this.kdadmat_from_date = kdadmat_from_date;
            this.kdadmat_to_date = kdadmat_to_date;
            axios
                .post("/admin/current_kadamat", {
                    id: this.id_kadamat,
                })
                .then(response => {
                    this.isLoading = false;
                    this.kadamatImg = response.data.current_kadamat;
                    /* Swal.fire("", "با موفقیت ذخیره شد", "warning");*/
                });


        },
        editkadamatFuncCancel() {
            this.editkadamt = 0;

        },


        add_lessonFilm(img, file) {


            if (img) {
                var obj = {
                    id: "player",
                    file: '../uploads/product_lesson/aliAli123aliAli3231test/' + img,
                    title: 'dddd',
                    autoplay: 0,
                    download: 0
                }

                $(document).ready(function () {
                    var player = new Playerjs(obj);
                })
                this.film_course = img;
            } else {
                this.isLoading = true;
                axios
                    .post("/product_lesseon_DropzoneRemove", {
                        img: this.film_course,
                    })
                    .then(response => {
                        if (response.data == "yes") {
                            this.isLoading = false;
                            this.film_course = "";
                        }
                    });
            }


        },
        add_lessonFilm_edit(img, file) {


            if (img) {
                var obj = {
                    id: "player",
                    file: '../uploads/product_lesson/' + this.lesson_id + '/' + img,
                    title: 'dddd',
                    autoplay: 0,
                    download: 0
                }

                $(document).ready(function () {
                    var player = new Playerjs(obj);
                })
                this.film_course = img;
            } else {
                this.isLoading = true;
                axios
                    .post("/product_lesseon_DropzoneRemove_edit", {
                        lesson_id: this.lesson_id,
                        film_course: this.film_course,
                    })
                    .then(response => {
                        if (response.data == "yes") {
                            this.isLoading = false;
                            this.film_course = "";
                        }
                    });
            }


        },
        add_lessonToProduct() {

            if (this.film_title == "" || this.film_course == "") {
                Swal.fire("", "همه موارد را پر کنید", "warning");
                return;
            }
            this.isLoading = true;
            axios
                .post("/admin/save_product_lesson", {
                    film_title: this.film_title,
                    film_course: this.film_course,
                    product_id: this.edit_product_id,
                    lesson_id: this.lesson_id
                })
                .then(response => {
                    this.isLoading = false;
                    if (response.data == "yes") {


                        this.film_title = '';
                        this.film_course = '';
                        this.edit_product_id = '';
                        this.lesson_id = '';

                        this.ediFormProduct = 0;
                        this.editProductLesson = 0;
                        this.ediFormProductLesson = 0;


                    }
                });

        },
        exit() {
            this.isLoading = true;
            axios.get('/exit')
                .then(response => {
                    this.isLoading = false
                    location.href = "/user/login";
                }, response => {
                    swal('خارج نشد')
                });
        },
        exit_admin() {
            this.isLoading = true;
            axios.get('/admin/exit_admin')
                .then(response => {
                    this.isLoading = false
                    location.href = "/admin/login";
                }, response => {
                    swal('خارج نشد')
                });
        },
        chap_stu() {
            /*const doc = new jsPDF({
            orientation: "landscape",
            unit: "in",
            format: [4, 2]
            });
            doc.html(document.getElementById('simple_table'), {
            callback: function (doc) {
            },
            x: 10,
            y: 10
            });
            doc.save('two-by-four.pdf');
            doc.text("Hello world!", 1, 1);
            doc.save("two-by-four.pdf");*/
            var pdf = new jsPDF('p', 'pt', 'letter');
            var source = $('#customers')[0];
            var specialElementHandlers = {
                '#bypassme': function (element, renderer) {
                    return true
                }
            };
            var margins = {
                top: 80,
                bottom: 60,
                left: 40,
                width: 522
            };
            pdf.html(
                source,
                {
                    callback: function (doc) {
                        pdf.save('Test.pdf');
                    },
                    'width': margins.width, // max width of content on PDF
                    'elementHandlers': specialElementHandlers
                });
        },
        addCommentToLeader() {
            var isTrue = false;
            if (this.leaderTitle == "") {
                this.leaderIsEmpty.name = true;
                isTrue = true;
            } else {
                this.leaderIsEmpty.name = false;
            }
            if (this.leaderTel == "") {
                this.leaderIsEmpty.tel = true;
                isTrue = true;
            } else {
                this.leaderIsEmpty.tel = false
            }
            if (this.leaderEmail == "" || this.is_leaderEmail_valid == false) {
                this.leaderIsEmpty.email = true;
                isTrue = true;
            } else {
                this.leaderIsEmpty.email = false
            }
            if (this.leaderDesc == "") {
                this.leaderIsEmpty.desc = true;
                isTrue = true;
            } else {
                this.leaderIsEmpty.desc = false;
            }

            if (this.leader_cat_id == "") {
                this.leaderIsEmpty.cat = true;
                isTrue = true;
            } else {
                this.leaderIsEmpty.cat = false;
            }
            if (isTrue) {
                return;
            }
            this.leaderSend = true;
            axios
                .post("/home/save_leaderComment", {
                    leader_cat_id: this.leader_cat_id,
                    leaderTitle: this.leaderTitle,
                    leaderTel: this.leaderTel,
                    leaderDesc: this.leaderDesc,
                    leaderEmail: this.leaderEmail,
                })
                .then(response => {

                    if (response.data == "yes") {
                        this.leaderSend = false;
                        this.leaderSuccessMess = true;
                        this.leaderTitle = '';
                        this.leaderTel = '';
                        this.leaderDesc = '';
                        this.leaderEmail = '';
                        this.is_leaderEmail_valid = true;
                        this.leaderIsEmpty.name = false;
                        this.leaderIsEmpty.tel = false;
                        this.leaderIsEmpty.desc = false;
                        return;

                    }
                    this.leaderSuccessMessFail = true;


                });

        },
        get_leader_cat() {
            axios.get("/home/contactToLeader1").then(response => {
                this.leader_cats = response.data.cats_leader;
                this.repeated_mess = response.data.repeated_mess;
            });
        },


        addStudent() {
            if (this.name == "" || this.family == "" || this.user_name == "" || this.user_pass == "") {
                Swal.fire("", "همه موارد را پرکنید", "error");
                return;
            }
            axios
                .post("/admin/student_save", {
                    id: this.student_edit_id,
                    name: this.name,
                    family: this.family,
                    nCod: this.nCod,
                    birthday: this.birthday,
                    fatherName: this.fatherName,
                    mobile: this.mobile,
                    socialmobile: this.socialmobile,
                    telhome: this.telhome,
                    user_name: this.user_name,
                    user_pass: this.user_pass,
                })
                .then(response => {
                    if (response.data == "yes") {

                        Swal.fire("", "عملیات موفق آمیز بود", "success");

                        if (this.student_edit_id) {
                            this.student_edit_form = 0;
                            this.get_all_users();
                        } else {
                            this.name = '';
                            this.family = '';
                            this.nCod = '';
                            this.birthday = '';
                            this.mobile = '';
                            this.socialmobile = '';
                            this.telhome = '';
                            this.fatherName = "";
                            this.user_name = "";
                            this.user_pass = "";
                        }

                    } else if (response.data == "no") {
                        Swal.fire("", "نام کاربری تکرای است", "warning");

                    }
                });

        },
        addStudentCancel() {
            this.student_edit_form = 0
            this.name = '';
            this.family = '';
            this.fatherName = '';
            this.birthday = '';
            this.nCod = '';
            this.mobile = '';
            this.socialmobile = '';
            this.telhome = '';
            this.o_d_sh = '';
            this.k_m_m = '';
            this.k_m_kh = '';
            this.n_h = '';
            this.k_d = '';
            this.t_s_s_o_t = '';
            this.article_arr = [];
            this.karafrin_arr = [];
            this.talif_arr = [];
            this.savabegh_taskilati = [];

            /* this.c_user_attr = [];
            this.form1_singleAttr = [];
            this.attr_parent_childs = [];*/


        },
        student_edit_form_func(id, name, family, fatherName, ncode, birthday, mobile, socialmobile, tellhom, username, pass) {
            this.student_edit_id = id;
            this.name = name;
            this.family = family;
            this.fatherName = fatherName;
            this.birthday = birthday;
            this.nCod = ncode;
            this.mobile = mobile;
            this.socialmobile = socialmobile;
            this.telhome = tellhom;
            this.student_edit_form = 1;
            this.user_name = username;
            this.user_pass = pass;
        },
        login() {

            var string1 = this.removeSpaces(document.getElementById('Captcha').value);
            var string2 = this.removeSpaces(document.getElementById('txtInput').value);
            if (string1 == string2) {

                //document.getElementById('success').innerHTML = "";
                document.getElementById('error').innerHTML = "";
                if (this.user_name == "" || this.user_pass == "") {
                    this.loginSuccess = false;
                    this.loginMistake = false;
                    return;
                }
                this.loginSuccess = true;
                this.isLoading = true;
                axios
                    .post("/user/login1", {
                        user_name: this.user_name,
                        user_pass: this.user_pass,
                    })
                    .then(response => {
                        this.isLoading = false;
                        if (response.data.is_admin == 0) {
                            this.loginMistake = false;
                            this.user_id = response.data.id;
                            Swal.fire('', 'کاربر  گرامی آقای ' + response.data.name + "  " + response.data.family + ' شما وارد شدید', 'success');
                            location.href = "/user/index";
                        } else {
                            this.loginMistake = true;
                            this.generateCaptcha();
                        }
                    });


                return true;
            } else {
                document.getElementById('error').innerHTML = "کد وارد شده مطابقت ندارد";
                this.generateCaptcha();
                this.loginMistake = false;
                return false;
            }


        },
        login_admin() {
            var string1 = this.removeSpaces(document.getElementById('Captcha').value);
            var string2 = this.removeSpaces(document.getElementById('txtInput').value);
            if (string1 == string2) {

                //document.getElementById('success').innerHTML = "";
                document.getElementById('error').innerHTML = "";
                if (this.user_name == "" || this.user_pass == "") {
                    this.loginSuccess = false;
                    this.loginMistake = false;
                    return
                }
                this.loginSuccess = true;
                this.isLoading = true;
                axios
                    .post("/admin/login_admin", {
                        user_name: this.user_name,
                        user_pass: this.user_pass,
                    })
                    .then(response => {
                        this.isLoading = false;
                        if (response.data.is_admin == 1) {
                            this.loginMistake = false;
                            this.user_id = response.data.id;
                            Swal.fire('', 'مدیر  گرامی آقای ' + response.data.name + "  " + response.data.family + ' شما وارد شدید', 'success');
                            location.href = "/admin/index";
                        } else {
                            this.loginMistake = true;
                            this.generateCaptcha();
                        }
                    });


                return true;
            } else {
                document.getElementById('error').innerHTML = "کد وارد شده مطابقت ندارد";
                this.generateCaptcha();
                this.loginMistake = false;
                return false;
            }


        },
        news(img, file) {
            if (img) {
                this.img_news = img;
            } else {
                this.isLoading = true;
                axios
                    .post("/news_DropzoneRemove", {
                        img: this.img_news,
                    })
                    .then(response => {
                        if (response.data == "yes") {
                            this.isLoading = false;
                            this.img_news = "";
                        }
                    });
            }
        },
        news_edit(img, file) {
            if (img) {
                this.img_news = img;
            } else {
                this.isLoading = true;
                axios
                    .post("/news_DropzoneRemove_edit", {
                        id_news: this.id_news,
                        img_news: this.img_news,
                    })
                    .then(response => {
                        if (response.data == "yes") {
                            this.isLoading = false;
                            this.img_news = "";
                        }
                    });
            }
        },

        addNewsToServer() {

            var desc_news = "";

            /*this code detect your code run when you add news*/
            if (this.id_news == "") {
                desc_news = this.$refs.ref_editor_news_add.desc_news;
                if (this.title_news == "" ||
                    desc_news == "" ||
                    this.img_news == ""

                ) {
                    Swal.fire("", "همه موارد را پر کنید", "error");
                    return;
                }

            } else {
                desc_news = this.$refs.ref_editor_news_edit.desc_news;


                /*this code detect your code run when you edit news*/

                if (this.title_news == "" ||
                    desc_news == "" ||
                    this.img_news == ""

                ) {
                    Swal.fire("", "همه موارد را پر کنید", "error");
                    return;
                }

            }
            this.isLoading = true;

            this.currentTime();
            axios
                .post("/admin/addNews", {
                    id: this.id_news,
                    title_news: this.title_news,
                    desc_news: desc_news,
                    img_news: this.img_news,
                    time: this.currenttimee,
                })
                .then(response => {

                    if (response.data == "yes") {

                        /*******************************when add news*/
                        if (this.id_news == "") {
                            this.$refs.ref_editor_news_add.desc_news = "";
                            this.$refs.myVueDropzone.removeFile()
                            this.title_news = "";
                            this.desc_news = "";
                            this.img_news = "";
                            this.isLoading = false;
                        } else {
                            this.ediFormEmployment = 0;
                            this.getResults();
                        }


                    }


                });

        },
        RemoveNewsImg(img) {
            axios
                .post("/admin/addNews", {
                    img: img
                })
                .then(response => {

                    if (response.data == "yes") {

                    }
                });

        },
        get_news_img() {


            /****************************************************get news img file from server*/

            axios
                .post("/get_news_img", {
                    id_news: this.id_news,
                })
                .then(response => {
                    this.news_file_list = response.data.fil_list[0];

                });


        },
        get_rezome_img(employmentId) {

            /****************************************************get news img file from server*/

            axios
                .post("/get_rezome_img", {
                    employmentId: employmentId,
                })
                .then(response => {
                    if (response.data.fil_list[0] != undefined) {
                        this.rezome_file_object = response.data.fil_list[0];
                    }


                });


        },
        get_user_img() {

            /****************************************************get news img file from server*/
            axios.get("/get_user_img")
                .then(response => {
                    if (response.data.fil_list[0] != undefined) {
                        this.user_file_object = response.data.fil_list[0];
                    }
                });


        },
        get_product_lesson_video() {


            /****************************************************get news img file from server*/

            axios
                .post("/get_product_lesson_video", {
                    lesson_id: this.lesson_id,
                })
                .then(response => {
                    this.ProductLesson_file_list = response.data.fil_list[0];

                });


        },
        news_for_print_func(index_arr, id, question) {


            if (this.news_for_print_ids.includes(id)) {

                /***********************start remove news id for detect exist */
                var index = this.news_for_print_ids.indexOf(id)
                this.news_for_print_ids.splice(index, 1);
                /***********************end remove news id for detect exist */

                /*********************** remove news with detect id */
                this.news_for_print.splice(index, 1);

                /*************************for check box checked we must add a field with value false mean not selected*/
                this.all_leader_message.data.row_selected = false;


            } else {
                /***********************start push news id for detect exist */
                this.news_for_print_ids.push(id);
                /***********************end push news id for detect exist */

                var obj = {id: id, question: question}
                this.news_for_print.push(obj);
                /*************************for check box checked we must add a field with value false mean  selected*/
                this.all_leader_message.data.row_selected = true;

            }


        },
        get_product_img() {


            /****************************************************get news img file from server*/

            axios
                .post("/get_product_img", {
                    id_product: this.edit_product_id,
                })
                .then(response => {
                    this.product_file_list = response.data.fil_list[0];
                });


        },
        get_kadamat_shakes_img() {


            /****************************************************get news img file from server*/

            axios
                .post("/get_kadamat_shakes_img", {
                    id: this.id_kadamat,
                })
                .then(response => {
                    this.kadamat_file_list = response.data.fil_list[0];
                });


        },
        kadamat(img, file) {
            if (img) {
                this.kadamat_shakhes_Img = img;
            } else {
                this.isLoading = true;
                axios
                    .post("/khadamat_DropzoneRemove", {
                        img: this.kadamat_shakhes_Img,
                    })
                    .then(response => {
                        if (response.data == "yes") {
                            this.isLoading = false;
                            this.kadamat_shakhes_Img = ""
                        }
                    });
            }
        },
        kadamat_edit(img, file) {
            if (img) {
                this.kadamat_shakhes_Img = img;
            } else {
                this.isLoading = true;
                axios
                    .post("/khadamat_DropzoneRemove_edit", {
                        id_khadamat: this.id_kadamat,
                        img_khadamat: this.kadamat_shakhes_Img,
                    })
                    .then(response => {
                        if (response.data == "yes") {
                            this.isLoading = false;
                            this.kadamat_shakhes_Img = ""
                        }
                    });
            }
        },
        getResults(page = 1) {
            this.isLoading = true;
            axios.get('/admin/getNews?page=' + page)
                .then(response => {
                    this.isLoading = false;
                    this.all_news = response.data;
                });
        },

        funcEdiFormNews(id, title, desc, img) {
            this.id_news = id;
            this.ediFormEmployment = 1;
            this.title_news = title;
            this.desc_news = desc.replaceAll("aliAli123aliAli3231test", id);
            this.img_news = img;
        },
        deleteNews(newsId) {


            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'آیا مایل به حذف می باشید',
                text: "",
                icon: 'question',
                iconHtml: '؟',
                confirmButtonText: 'بله حذف شود',
                cancelButtonText: 'خیر کنسل شود',
                showCancelButton: true,
                showCloseButton: true
            }).then((result) => {
                if (result.isConfirmed) {

                    this.isLoading = true;
                    axios
                        .post("/admin/news_delete", {
                            newsId: newsId,
                        })
                        .then(response => {
                            this.isLoading = false;
                            if (response.data == "yes") {
                                this.getResults();
                            } else if (response.data == "no") {
                                Swal.fire("", "خطا در پاک کردن خبر", "error");
                            } else {
                                Swal.fire("", "پوشه برای حذف پیدا نشد", "error");
                            }


                        });

                }
            })


        },
        deleteEmployment(employmentId) {


            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'آیا مایل به حذف می باشید',
                text: "",
                icon: 'question',
                iconHtml: '؟',
                confirmButtonText: 'بله حذف شود',
                cancelButtonText: 'خیر کنسل شود',
                showCancelButton: true,
                showCloseButton: true
            }).then((result) => {
                if (result.isConfirmed) {

                    this.isLoading = true;
                    axios
                        .post("/admin/employment_delete", {
                            employmentId: employmentId,
                        })
                        .then(response => {
                            this.isLoading = false;
                            if (response.data == "yes") {
                                this.employ_rezome_sent()
                            } else if (response.data == "no") {
                                Swal.fire("", "خطا در پاک کردن آگهی", "error");
                            } else {
                                Swal.fire("", "پوشه برای حذف پیدا نشد", "error");
                            }


                        });

                }
            })


        },
        deleteProdcut(productId) {


            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'آیا مایل به حذف می باشید',
                text: "",
                icon: 'question',
                iconHtml: '؟',
                confirmButtonText: 'بله حذف شود',
                cancelButtonText: 'خیر کنسل شود',
                showCancelButton: true,
                showCloseButton: true
            }).then((result) => {
                if (result.isConfirmed) {

                    this.isLoading = true;
                    axios
                        .post("/admin/product_delete", {
                            productId: productId,
                        })
                        .then(response => {
                            this.isLoading = false;
                            /*******************start product have lessons*/
                            if (response.data == "haveLesson") {
                                Swal.fire("", "ابتدا درس های این محصول را حذف کنید", "error");
                            }
                            /*******************end product have lessons*/
                            else if (response.data == "yes") {
                                this.get_products();
                            } else if (response.data == "no") {
                                Swal.fire("", "خطا در پاک کردن محصول", "error");
                            } else {
                                Swal.fire("", "پوشه برای حذف پیدا نشد", "error");
                            }


                        });

                }
            })


        },
        deleteProdcut_lesson(lessonId) {


            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'آیا مایل به حذف می باشید',
                text: "",
                icon: 'question',
                iconHtml: '؟',
                confirmButtonText: 'بله حذف شود',
                cancelButtonText: 'خیر کنسل شود',
                showCancelButton: true,
                showCloseButton: true
            }).then((result) => {
                if (result.isConfirmed) {

                    this.isLoading = true;
                    axios
                        .post("/admin/product_lesson_delete", {
                            lesson_id: lessonId,
                        })
                        .then(response => {
                            this.isLoading = false;
                            if (response.data == "yes") {
                                this.ediFormProduct = 0;
                                this.editProductLesson = 0;
                                this.get_products();
                            } else if (response.data == "no") {
                                Swal.fire("", "خطا در پاک کردن محصول", "error");
                            } else {
                                Swal.fire("", "پوشه برای حذف پیدا نشد", "error");
                            }


                        });

                }
            })


        },
        deleteKadamat(kadamtId) {


            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'آیا مایل به حذف می باشید',
                text: "",
                icon: 'question',
                iconHtml: '؟',
                confirmButtonText: 'بله حذف شود',
                cancelButtonText: 'خیر کنسل شود',
                showCancelButton: true,
                showCloseButton: true
            }).then((result) => {
                if (result.isConfirmed) {

                    this.isLoading = true;
                    axios
                        .post("/admin/kadamat_delete", {
                            kadamtId: kadamtId,
                        })
                        .then(response => {
                            this.isLoading = false;
                            if (response.data == "yes") {
                                this.get_kadamat();
                            } else if (response.data == "no") {
                                Swal.fire("", "خطا در پاک کردن خبر", "error");
                            } else {
                                Swal.fire("", "پوشه برای حذف پیدا نشد", "error");
                            }


                        });

                }
            })


        },
        getLeader(page = 1) {
            this.isLoading = true;
            axios.get('/admin/get_contactToLeader1?page=' + page)
                .then(response => {
                    this.isLoading = false;
                    this.all_leader_message = response.data;
                });
        },
        funcShowLeaderMess(form, id, name, tel, desc, is_repeated, email) {
            this.leaderIdMess = id;
            this.ediFormLeader = form;
            this.leaderTitle = name;
            this.leaderTel = tel;
            this.leaderDesc = desc;
            this.is_repeated = is_repeated;
            this.leaderEmail = email;

        },
        funcShowLeaderMessCancel() {
            this.ediFormLeader = 0;
            this.leaderTitle = "";
            this.leaderDesc = "";
            this.leaderDesc_answer = "";
            this.leaderEmail = "";
            this.leaderTel = "";
        },
        LeaderMess_is_repeated() {
            this.isLoading = true;
            this.is_repeated = this.is_repeated ? 1 : 0
            axios
                .post("/admin/is_repeated", {
                    id: this.leaderIdMess,
                    is_repeated: this.is_repeated,
                    answer: this.leaderDesc_answer,
                })
                .then(response => {
                    if (response.data == "yes") {
                        this.isLoading = false;
                        this.ediFormLeader = 0;
                        this.getLeader();
                    }

                });

        },
        emailToUser() {
            if (this.leaderEmail == "") {
                Swal.fire("", "ایمیلی ای وجود ندارد", "error");
                return;
            } else if (this.leaderDesc_answer == "") {
                Swal.fire("", "جواب داده نشده هست", "error");
                return;
            }
            this.isLoading = true;
            axios
                .post("/admin/email_leader_answer", {
                    name: this.leaderTitle,
                    subject: "جواب نماینده رهبری به ایمیلی که زده بودید",
                    email: this.leaderEmail,
                    leaderDesc: this.leaderDesc,
                    leaderDesc_answer: this.leaderDesc_answer,
                })
                .then(response => {
                    this.isLoading = false;
                    if (response.data == "yes") {
                        Swal.fire("", "ایمیل شما با موفقیت ارسال شد", "success");
                    } else {
                        Swal.fire("", "خطا در ارسال", "error");
                    }

                });

        },
        deleteleaderMessages() {
            var ids = [];
            for (var i = 0; i < this.leader_mess_ids_delete.length; i++) {
                if (this.leader_mess_ids_delete[i]) {
                    ids.push(i);
                }
            }

            if (ids.length == 0) {
                Swal.fire("", "موردی انتخاب نشده", "warning");
                return;
            }

            this.isLoading = true;
            axios
                .post("/admin/leader_mess_delete", {
                    ids: ids,
                })
                .then(response => {
                    this.isLoading = false;
                    /****empty because if delete again have last true value ***/
                    this.leader_mess_ids_delete = [];
                    /****update table*/
                    this.getLeader();
                });
        },
        closeDivBladk() {
            this.all_kadamat_refahi_search_result = [];
            this.kadamat_refahi_search = '';
        },
        closeDivBladk1() {
            this.all_product_refahi_search_result = [];
            this.product_refahi_search_majale = '';
        },
        closeDivBladk2() {
            this.all_product_refahi_search_result = [];
            this.product_refahi_search = '';
        },
        changePass() {

            if (this.user_pass_current == ""
                || this.user_pass_new == "" ||
                this.user_pass_confirm == "") {
                Swal.fire("", "همه موارد را پر کنید", "warning");
                return;
            }

            if (this.user_pass_new != this.user_pass_confirm) {
                Swal.fire("", "رمز تایید شده اشتباه هست ", "warning");
                return;
            }

            this.isLoading = true;
            axios
                .post("/user/changePass", {
                    user_pass_current: this.user_pass_current,
                    user_pass_new: this.user_pass_new,
                })
                .then(response => {
                    this.isLoading = false;
                    if (response.data == "yes") {
                        Swal.fire("", "رمز عبور فعلی با موفقیت تغییر یافت", "success");
                        this.exit();
                    } else if (response.data == "no") {
                        Swal.fire("", "رمز عبور فعلی اشتباه هست ", "error");

                    }

                });

        },
        changePass_cancell() {

            this.user_pass_current = "";
            this.user_pass_new = "";
            this.user_pass_confirm = "";


        },
        emailValid() {

            var emailValidator = /^\w+[\w-+\.]*\@\w+([-\.]\w+)*\.[a-zA-Z]{2,}$/;

            this.is_leaderEmail_valid = true;
            if (!this.leaderEmail.match(emailValidator) && this.leaderEmail != "") {
                this.is_leaderEmail_valid = false;
            }


        },
        productAddToBasket(productId) {

            axios
                .post("/user/productAddToBasket", {
                    productId: productId,

                })
                .then(response => {

                    if (response.data == "yes") {

                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-start',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                        })

                        Toast.fire({
                            icon: 'success',
                            title: 'با موفقیت به سبد خرید اضافه شد'
                        })


                    } else if (response.data == "no") {

                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-start',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                        })

                        Toast.fire({
                            icon: 'error',
                            title: 'به سبد خرید اضافه شده است'
                        })

                    }
                });

        }

    }
});
