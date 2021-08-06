<?php

namespace App\Http\Controllers;


use App\Tbl_my_attr_article;
use App\Tbl_my_attr_karafrin;
use App\Tbl_my_attr_savabegh_taskilati;
use App\Tbl_my_attr_talif;
use App\Tbl_my_ostan;
use Illuminate\Http\Request;
use App\Tbl_my_user;
use App\Tbl_my_attr;
use App\Tbl_my_user_attr;
use App\Tbl_my_basket;
use DB;
use Session;


class UserController extends Controller
{
    public function index()
    {


        if (Session::get('id_user')) {


            return view('user.index');
        }
        return redirect('user/login');
    }

    public function get_lgoin()
    {
        if (Session::get('id_user')) {

            return redirect('user/index');
        }
        return view('view1.login');

    }

    public function pass()
    {

        if (Session::get('id_user')) {

            return view('user.pass');
        }
        return redirect('user/login');


    }

    public function change_pass(Request $request)
    {
        $id = Session::get('id_user');
        $user_pass_current = $request->user_pass_current;
        $user_pass_new = $request->user_pass_new;
        $user = Tbl_my_user::where('pass', $user_pass_current)
            ->where('id', $id)
            ->where('is_admin', 0)
            ->first();

        if (!is_null($user)) {
            $user->pass = $user_pass_new;
            if ($user->update()) {
                return "yes";
            }
        }
        return "no";


    }

    public function login(Request $request)
    {
        $user_name = $request->user_name;
        $user_pass = $request->user_pass;
        $user = Tbl_my_user::where('user_name', $user_name)
            ->where('pass', $user_pass)
            ->where('is_admin', 0)
            ->first();
        if ($user) {
            Session::put('id_user', $user->id);
            return $user;
        }

        /* return redirect('admin/login')->with('err', 1);*/
    }

    public function account()
    {


        if (Session::get('id_user')) {

            return view('user.account');
        }
        return redirect('user/login');

    }

    public function get_register_attr()
    {

        /*******************start authentication********************************/

        if (!Session::get('id_user')) {

            return redirect('user/login');
        }

        /*******************end authentication********************************/


        $id = Session::get('id_user');


        /*////////////////////////////////////////////////start user information*/

        $user = DB::table('tbl_my_user')
            ->where('id', $id)->first();


        /*////////////////////////////////////////////////end user information*/

        /*////////////////////////////////////////////////start attr with single*/
        $singleAttr = Tbl_my_attr::where('type', 0)->get();

        /*////////////////////////////////////////////////end attr with single*/

        /*////////////////////////////////////////////////start get user attr*/

        $parent = DB::table('tbl_my_attr')
            ->where('parent', 0)->get();


        $parent_sub = DB::table('tbl_my_attr')
            ->where('parent', '!=', 0)->get();

        $parent_sub_sub = Tbl_my_attr::
        where('type', 3)->get();

        foreach ($parent as $key => $value) {
            $parent_id_field = $value->id;

            $i = 0;
            foreach ($parent_sub as $key1 => $row) {
                $sub_parent_field = $row->parent;
                $sub_id_field = $row->id;

                if ($parent_id_field == $sub_parent_field) {

                    $parent[$key]->sub[$i] = $row;
                    $j = 0;
                    foreach ($parent_sub_sub as $key2 => $row1) {
                        $sub_sub_parent_field = $row1->parent;

                        if ($sub_sub_parent_field == $sub_id_field) {

                            $parent[$key]->sub[$i]->sub[$j++] = $row1;
                        }
                    }
                    $i++;
                }

            }
        }

        $v_nv = '';
        if (isset($parent[0])) {
            $v_nv = $parent[0];
        }

        $v_t = '';
        if (isset($parent[1])) {
            $v_t = $parent[1];
        }


        $ostan = '';
        if (isset($parent[2])) {
            $ostan = $parent[2];
        }

        $dore = $parent[17];

        if (isset($parent[17])) {
            $dore = $parent[17];
        }


        $v_er_ba_et = '';

        if (isset($parent[18])) {
            $v_er_ba_et = $parent[18];
        }
        $dar_h_t = '';

        if (isset($parent[19])) {
            $dar_h_t = $parent[19];
        }


        $v_tt = '';

        if (isset($parent[20])) {
            $v_tt = $parent[20];
        }


        $d = '';
        if (isset($parent[21])) {
            $d = $parent[21];
        }

        $r = '';
        if (isset($parent[22])) {
            $r = $parent[22];
        }

        $t_h = '';
        if (isset($parent[23])) {
            $t_h = $parent[23];
        }

        $t_d = '';
        if (isset($parent[25])) {
            $t_d = $parent[25];
        }
        $r_t = '';

        if (isset($parent[30])) {
            $r_t = $parent[30];
        }

        $h_kh = '';
        if (isset($parent[37])) {
            $h_kh = $parent[37];
        }

        $noe_daneshkah = '';

        if (isset($parent[38])) {
            $noe_daneshkah = $parent[38];
        }


        /*//////////////////////////////////////////////////////////start get tbl_user-attr for user*/

        $user_attr = Tbl_my_user_attr::where('id_user', $id)
            ->where('type', 1)
            ->get();

        $user_attr1 = array();
        if (count($user_attr) != 0) {

            $user_attr1 = explode('/', $user_attr[0]->ids_attr);
        }


        /*//////////////////////////////////////////////////////end get tbl_user-attr for user*/
        /*//////////////////////////////////////////////////////start get user attr with value*/

        $user_attr2 = array();
        $user_attr2 = Tbl_my_user_attr::where('id_user', $id)
            ->where('type', 2)
            ->get();


        /*//////////////////////////////////////////////////////end get user attr with value*/
        /*        ///////////////////////////////////////////////////start attr with article*/

        $articles = array();
        $articles = Tbl_my_attr_article::where('user_id', $id)->get();


        ///////////////////////////////////////////////////end attr with article
        ///////////////////////////////////////////////////start attr with talif
        $talifs = array();
        $talifs = Tbl_my_attr_talif::where('user_id', $id)->get();


        /* ///////////////////////////////////////////////////end attr with talif*/
        /*  ///////////////////////////////////////////////////start attr with talif*/
        $karafrins = array();
        $karafrins = Tbl_my_attr_karafrin::where('user_id', $id)->get();


        ///////////////////////////////////////////////////end attr with talif

        ///////////////////////////////////////////////////start attr with talif
        $karafrins = array();
        $karafrins = Tbl_my_attr_karafrin::where('user_id', $id)->get();


        /*  ///////////////////////////////////////////////////end attr with talif*/


        /*        ///////////////////////////////////////////////////start attr with tbl_my_attr_savabegh_taskilati*/


        /*////////////////sayer tashkol ostan*/
        $sayer_tashakol_ostan = array();
        $sayer_tashakol_ostan = Tbl_my_ostan::get();
        /* /////////////////sayer tashkol ostan*/
        $sayer_tashakol = array();
        $sayer_tashakol = Tbl_my_attr::where('parent', 90)->get();
        /* //////////////////////////////////////////////////*/
        $savabegh_taskilati = array();
        $savabegh_taskilati = Tbl_my_attr_savabegh_taskilati::where('user_id', $id)->get();


        foreach ($savabegh_taskilati as $key => $value) {

            foreach ($sayer_tashakol_ostan as $key1 => $value1) {
                if ($savabegh_taskilati[$key]->ostan_id == $sayer_tashakol_ostan[$key1]->id_ostan) {
                    $obj = array(
                        "value" => $sayer_tashakol_ostan[$key1]->id_ostan,
                        "text" => $sayer_tashakol_ostan[$key1]->title_ostan,
                    );
                    $savabegh_taskilati[$key]->sayer_tashakol_ostan = $obj;
                }


            }


        }

        foreach ($savabegh_taskilati as $key => $value) {

            foreach ($sayer_tashakol as $key1 => $value1) {
                if ($savabegh_taskilati[$key]->s_o_dar_s_t == $sayer_tashakol[$key1]->id) {
                    $obj = array(
                        "value" => $sayer_tashakol[$key1]->id,
                        "text" => $sayer_tashakol[$key1]->attr,
                    );
                    $savabegh_taskilati[$key]->sayer_tashakol = $obj;
                }
            }
        }


        /*///////////////////////////////////////////////////end attr with tbl_my_attr_savabegh_taskilati*/
        return response()->json([
            'userInfo' => $user, 'form1_singleAttr' => $singleAttr,
            'v_nv' => $v_nv, 'v_t' => $v_t,
            'ostan' => $ostan, 'dore' => $dore,
            'v_er_ba_et' => $v_er_ba_et, 'dar_h_t' => $dar_h_t,
            'user_attr1' => $user_attr1, 'user_attr2' => $user_attr2,
            'v_tt' => $v_tt, 'd' => $d, 'r' => $r, 't_h' => $t_h, 't_d' => $t_d,
            'r_t' => $r_t, 'h_kh' => $h_kh,
            'noe_daneshkgah' => $noe_daneshkah,
            'articles' => $articles,
            'talifs' => $talifs,
            'karafrins' => $karafrins,
            'sayer_tashakol_ostan' => $sayer_tashakol_ostan,
            'sayer_tashakol' => $sayer_tashakol,
            'savabegh_taskilati' => $savabegh_taskilati,

        ]);
    }

    public function remove_article_row(Request $request)
    {
        /*******************start authentication********************************/

        if (!Session::get('id_user')) {

            return redirect('user/login');
        }

        /*******************end authentication********************************/


        $article_id = $request->article_id;

        DB::table('tbl_my_attr_article')
            ->Where('article_id', $article_id)->delete();


        return "yes";
    }


    public function save_register_attr(Request $request)
    {

        /*******************start authentication********************************/

        if (!Session::get('id_user')) {

            return redirect('user/login');
        }

        /*******************end authentication********************************/


        $id = Session::get('id_user');

        ///////////////////////////////////////////////start save  user information

        $user = Tbl_my_user::where('id', $id)->first();


        if ($user) {
            $user->name = $request->name;
            $user->family = $request->family;
            $user->fatherName = $request->fatherName;
            $user->nCod = $request->nCod;
            $user->birthday = $request->birthday;
            $user->socialmobile = $request->socialmobile;
            $user->mobile = $request->mobile;
            $user->telhome = $request->telhome;
            $user->address = $request->address;
            $user->img = $request->img_user;
            $user->update();
        }
        ///////////////////////////////////////////////end save  user information
        /////////////////////////////////////////////////////////////start attr with ids without value

        $user_attr = Tbl_my_user_attr::where('id_user', $id)
            ->where('type', 1)
            ->first();

        if ($user_attr) {
            $user_attr->ids_attr = $request->ids_attr;
            $user_attr->value = 0;
            $user_attr->type = 1;
            $user_attr->update();
        } else {

            $attr = new Tbl_my_user_attr();
            $attr->id_user = $id;
            $attr->ids_attr = $request->ids_attr;
            $attr->value = 1;
            $attr->type = 1;

            $attr->save();
        }
        /*/////////////////////////////////////////////////////////////end attr with ids  without value */
        /*/////////////////////////////////////////////////////////////start attr with value*/


        $av = [];
        $av = $request->attr_value_select_help;


        $user_attr_value = [];
        foreach ($av as $key => $value) {

            $user_attr_value = Tbl_my_user_attr::where('id_user', $id)
                ->where('ids_attr', $av[$key]['attr'])
                ->first();
            if ($user_attr_value) {
                $user_attr_value->ids_attr = $av[$key]['attr'];
                $user_attr_value->value = $av[$key]['val'];
                $user_attr_value->type = 2;
                $user_attr_value->update();
            } else {
                Tbl_my_user_attr::insert([
                    'id_user' => $id,
                    'ids_attr' => $av[$key]['attr'],
                    'value' => $av[$key]['val'],
                    'type' => 2,

                ]);
            }
        }


        return "yes";
    }


    public function add_article_row(Request $request)
    {
        /*******************start authentication********************************/

        if (!Session::get('id_user')) {

            return redirect('user/login');
        }

        /*******************end authentication********************************/


        $user_id = Session::get('id_user');

        /*****************************************/
        $article_id = $request->article_id;
        $article_title = $request->article_title;
        $article_type = $request->article_type;
        $article_customer = $request->article_customer;
        $article_date = $request->article_date;
        $article_desc = $request->article_desc;

        /**************************************/


        if (empty($article_id)) {

            $attr_article = new Tbl_my_attr_article();
            $attr_article->article_title = $article_title;
            $attr_article->article_type = $article_type;
            $attr_article->article_customer = $article_customer;
            $attr_article->article_date = $article_date;
            $attr_article->article_desc = $article_desc;
            $attr_article->user_id = $user_id;


            if ($attr_article->save()) {
                $lastRecord_article = DB::table('tbl_my_attr_article')
                    ->orderBy('article_id', 'desc')->first();

                return response()->json([
                    'lastRecord_article_id' => $lastRecord_article->article_id,
                    'mess' => 'با موفقیت ذخیره شد',
                    'alert' => 'yes',
                ]);
            }

        } else {
            $article_current = Tbl_my_attr_article::where('article_id', $article_id)->first();
            $article_current->article_title = $article_title;
            $article_current->article_type = $article_type;
            $article_current->article_customer = $article_customer;
            $article_current->article_date = $article_date;
            $article_current->article_desc = $article_desc;

            if ($article_current->update()) {
                return response()->json([
                    'lastRecord_article_id' => $article_id,
                    'mess' => 'با موفقیت ویرایش  شد',
                    'alert' => 'yes',
                ]);
            }
        }


    }

    public function add_talif_row(Request $request)
    {
        /*******************start authentication********************************/

        if (!Session::get('id_user')) {

            return redirect('user/login');
        }

        /*******************end authentication********************************/


        $user_id = Session::get('id_user');

        /*****************************************/
        $talif_id = $request->talif_id;
        $talif_title = $request->talif_title;
        $talif_subject = $request->talif_subject;
        $talif_nasher = $request->talif_nasher;
        $talif_date = $request->talif_date;
        $talif_desc = $request->talif_desc;

        /**************************************/


        if (empty($talif_id)) {

            $attr_talif = new Tbl_my_attr_talif();
            $attr_talif->talif_title = $talif_title;
            $attr_talif->talif_subject = $talif_subject;
            $attr_talif->talif_nasher = $talif_nasher;
            $attr_talif->talif_date = $talif_date;
            $attr_talif->talif_desc = $talif_desc;
            $attr_talif->user_id = $user_id;


            if ($attr_talif->save()) {
                $lastRecord_talif = DB::table('tbl_my_attr_talif')
                    ->orderBy('talif_id', 'desc')->first();

                return response()->json([
                    'lastRecord_talif_id' => $lastRecord_talif->talif_id,
                    'mess' => 'با موفقیت ذخیره شد',
                    'alert' => 'yes',
                ]);
            }

        } else {
            $attr_talif = Tbl_my_attr_talif::where('talif_id', $talif_id)->first();
            $attr_talif->talif_title = $talif_title;
            $attr_talif->talif_subject = $talif_subject;
            $attr_talif->talif_nasher = $talif_nasher;
            $attr_talif->talif_date = $talif_date;
            $attr_talif->talif_desc = $talif_desc;
            $attr_talif->user_id = $user_id;

            if ($attr_talif->update()) {
                return response()->json([
                    'lastRecord_talif_id' => $talif_id,
                    'mess' => 'با موفقیت ویرایش  شد',
                    'alert' => 'yes',
                ]);
            }
        }


    }

    public function remove_talif_row(Request $request)
    {
        /*******************start authentication********************************/

        if (!Session::get('id_user')) {

            return redirect('user/login');
        }

        /*******************end authentication********************************/


        $talif_id = $request->talif_id;

        DB::table('tbl_my_attr_talif')
            ->Where('talif_id', $talif_id)->delete();


        return "yes";
    }

    public function add_karafrin_row(Request $request)
    {
        /*******************start authentication********************************/

        if (!Session::get('id_user')) {

            return redirect('user/login');
        }

        /*******************end authentication********************************/


        $user_id = Session::get('id_user');

        /*****************************************/
        $karafrin_id = $request->karafrin_id;
        $karafrin_title = $request->karafrin_title;
        $karafrin_subject = $request->karafrin_subject;
        $karafrin_sabeghe = $request->karafrin_sabeghe;
        $karafrin_mizan_eshteghazayi = $request->karafrin_mizan_eshteghazayi;
        $karafrin_desc = $request->karafrin_desc;

        /**************************************/


        if (empty($karafrin_id)) {

            $attr_karafarin = new Tbl_my_attr_karafrin();
            $attr_karafarin->karafrin_title = $karafrin_title;
            $attr_karafarin->karafrin_subject = $karafrin_subject;
            $attr_karafarin->karafrin_sabeghe = $karafrin_sabeghe;
            $attr_karafarin->karafrin_mizan_eshteghazayi = $karafrin_mizan_eshteghazayi;
            $attr_karafarin->karafrin_desc = $karafrin_desc;
            $attr_karafarin->user_id = $user_id;


            if ($attr_karafarin->save()) {
                $lastRecord_karafarin = DB::table('tbl_my_attr_karafrin')
                    ->orderBy('karafrin_id', 'desc')->first();

                return response()->json([
                    'lastRecord_karafarin_id' => $lastRecord_karafarin->karafrin_id,
                    'mess' => 'با موفقیت ذخیره شد',
                    'alert' => 'yes',
                ]);
            }

        } else {
            $attr_karafarin = Tbl_my_attr_karafrin::where('karafrin_id', $karafrin_id)->first();
            $attr_karafarin->karafrin_title = $karafrin_title;
            $attr_karafarin->karafrin_subject = $karafrin_subject;
            $attr_karafarin->karafrin_sabeghe = $karafrin_sabeghe;
            $attr_karafarin->karafrin_mizan_eshteghazayi = $karafrin_mizan_eshteghazayi;
            $attr_karafarin->karafrin_desc = $karafrin_desc;
            $attr_karafarin->user_id = $user_id;

            if ($attr_karafarin->update()) {
                return response()->json([
                    'lastRecord_karafarin_id' => $karafrin_id,
                    'mess' => 'با موفقیت ویرایش  شد',
                    'alert' => 'yes',
                ]);
            }
        }


    }

    public function remove_karafrin_row(Request $request)
    {

        /*******************start authentication********************************/

        if (!Session::get('id_user')) {

            return redirect('user/login');
        }

        /*******************end authentication********************************/


        $karafrin_id = $request->karafrin_id;

        DB::table('tbl_my_attr_karafrin')
            ->Where('karafrin_id', $karafrin_id)
            ->delete();


        return "yes";
    }


    public function add_savabegh_row(Request $request)
    {

        /*******************start authentication********************************/

        if (!Session::get('id_user')) {

            return redirect('user/login');
        }

        /*******************end authentication********************************/


        $user_id = Session::get('id_user');

        /*****************************************/
        $savabegh_id = $request->savabegh_id;
        $savabegh_semat = $request->savabegh_semat;
        $s_o_dar_s_t = $request->s_o_dar_s_t;
        $ostan_id = $request->ostan_id;
        $sabegh_desc = $request->sabegh_desc;
        $sabeghe_number = $request->sabeghe_number;

        /**************************************/


        if (empty($savabegh_id)) {

            $savabegh_taskilati = new Tbl_my_attr_savabegh_taskilati();
            $savabegh_taskilati->savabegh_semat = $savabegh_semat;
            $savabegh_taskilati->s_o_dar_s_t = $s_o_dar_s_t;
            $savabegh_taskilati->ostan_id = $ostan_id;
            $savabegh_taskilati->sabegh_desc = $sabegh_desc;
            $savabegh_taskilati->sabeghe_number = $sabeghe_number;
            $savabegh_taskilati->user_id = $user_id;


            if ($savabegh_taskilati->save()) {
                $lastRecord_savabegh = DB::table('tbl_my_attr_savabegh_taskilati')
                    ->orderBy('savabegh_id', 'desc')->first();

                return response()->json([
                    'lastRecord_savabegh_id' => $lastRecord_savabegh->savabegh_id,
                    'mess' => 'با موفقیت ذخیره شد',
                    'alert' => 'yes',
                ]);
            }

        } else {
            $savabegh_taskilati = Tbl_my_attr_savabegh_taskilati::where('savabegh_id', $savabegh_id)->first();
            $savabegh_taskilati->savabegh_semat = $savabegh_semat;
            $savabegh_taskilati->s_o_dar_s_t = $s_o_dar_s_t;
            $savabegh_taskilati->ostan_id = $ostan_id;
            $savabegh_taskilati->sabegh_desc = $sabegh_desc;
            $savabegh_taskilati->sabeghe_number = $sabeghe_number;
            $savabegh_taskilati->user_id = $user_id;

            if ($savabegh_taskilati->update()) {
                return response()->json([
                    'lastRecord_savabegh_id' => $savabegh_id,
                    'mess' => 'با موفقیت ویرایش  شد',
                    'alert' => 'yes',
                ]);
            }
        }


    }

    public function remove_savabegh_row(Request $request)
    {
        /*******************start authentication********************************/

        if (!Session::get('id_user')) {

            return redirect('user/login');
        }

        /*******************end authentication********************************/

        $savabegh_id = $request->savabegh_id;

        DB::table('tbl_my_attr_savabegh_taskilati')
            ->Where('savabegh_id', $savabegh_id)->delete();

        return "yes";
    }


    public function formSubmit(Request $request)
    {
        /*******************start authentication********************************/

        if (!Session::get('id_user')) {

            return redirect('user/login');
        }

        /*******************end authentication********************************/

        ini_set("memory_limit", "500000");
        ini_set('post_max_size', '500000');
        ini_set('upload_max_filesize', '500000');

        $imageName = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('imgUser'), $imageName);

        return response()->json($imageName);
    }

    public function get_kadamat_refahi()
    {
        /*******************start authentication********************************/

        if (!Session::get('id_user')) {

            return redirect('user/login');
        }

        /*******************end authentication********************************/


        /*    $id = Session::get('id_user');
            $query = DB::table('tbl_my_kadamat_refahi_tbl_user')
                ->where('id_user', $id)
                ->leftJoin('tbl_my_kadamat_refahi', 'tbl_my_kadamat_refahi_tbl_user.id_kadamat_refahi', '=', 'tbl_my_kadamat_refahi.id')
                ->leftJoin('tbl_my_user', 'tbl_my_kadamat_refahi_tbl_user.id_user', '=', 'tbl_my_user.id')
                //->select('teacher_management.id', 'branch.name as b_name', 'paye.title as p_name', 'reshte.title as r_name', 'lesson.name as l_name', 'branch.id as b_id')
                ->orderBy('id_kadamat_refahi', 'desc')
                ->paginate(5);*/


        return view('user.kadamat_refahi');


    }

    public function get_kadamat_refahi1()
    {
        /*******************start authentication********************************/

        if (!Session::get('id_user')) {

            return redirect('user/login');
        }

        /*******************end authentication********************************/

        $id = Session::get('id_user');
        $query = DB::table('tbl_my_kadamat_refahi_tbl_user')
            ->where('id_user', $id)
            ->leftJoin('tbl_my_kadamat_refahi', 'tbl_my_kadamat_refahi_tbl_user.id_kadamat_refahi', '=', 'tbl_my_kadamat_refahi.id')
            ->leftJoin('tbl_my_user', 'tbl_my_kadamat_refahi_tbl_user.id_user', '=', 'tbl_my_user.id')
            //->select('teacher_management.id', 'branch.name as b_name', 'paye.title as p_name', 'reshte.title as r_name', 'lesson.name as l_name', 'branch.id as b_id')
            ->orderBy('id_kadamat_refahi', 'desc')
            ->paginate(5);
        return $query;


    }

    public function get_products()
    {
        /*******************start authentication********************************/

        if (!Session::get('id_user')) {

            return redirect('user/login');
        }

        /*******************end authentication********************************/

        return view('user.products');
    }


    public function user_Dropzone_edit(Request $request)
    {


        /**********************end get last row id */

        ini_set("memory_limit", "500000");
        ini_set('post_max_size', '500000');
        ini_set('upload_max_filesize', '500000');

        $imageName = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('uploads/user/'), $imageName);

        return response()->json($imageName);
    }

    public function user_DropzoneRemove_edit(Request $request)
    {


        $img_user = $request->img_user;

        if (isset($img_user)) {
            $fileName = public_path('uploads/user/' . $img_user);
            unlink($fileName);
        }

        /*******************************if user rezome set in employment_user_rezome table */

        $user = Tbl_my_user::where('img', $img_user)
            ->first();


        if (isset($user)) {

            $user->img = null;
            if ($user->update()) {
                return "yes";
            }
        }
        return "yes";

    }

    public function get_user_img(Request $request)
    {


        $id_user = Session::get('id_user');


        if (isset($id_user)) {


            /*******************************get current news*/
            $user = DB::table('tbl_my_user')
                ->where('id', $id_user)
                ->first();
            $user_img = $user->img;


            /*******************************get img*/
            $target_dir = public_path('uploads/user/');

            $fil_list = array();

            $dir = $target_dir;

            if (is_dir($dir)) {
                if ($dh = opendir($dir)) {

                    while (($file = readdir($dh)) !== false) {
                        if ($file != '' && $file != '.' && $file != '..' && $file == $user_img) {
                            $file_path = $target_dir . $file;

                            if (!is_dir($file_path)) {
                                $size = filesize($file_path);
                                $fil_list[] = array('name' => $file, 'size' => $size, 'path' => $file_path);
                            }
                        }
                    }
                    closedir($dh);
                }

            }

            return response()->json(['fil_list' => $fil_list]);


        }


    }

    public function productAddToBasket(Request $request)
    {
        $productId = $request->productId;


        /**************************************start set basket cookie*/
        if (!isset($_COOKIE["basket"])) {
            $expire_time = time() + 365 * 24 * 3600;
            $cookie_value = time() . rand(100, 999);
            setcookie("basket", $cookie_value, $expire_time, "/");
        }
        /**************************************end set basket cookie*/
        /**************************************start if is not exist in table add to table*/

        $basket = DB::table('tbl_my_basket')
            ->where('id_product', $productId)
            ->where('cookie', $_COOKIE["basket"])
            ->first();



        if (is_null($basket)) {

            $attr = new Tbl_my_basket();
            $attr->id_product = $productId;
            $attr->cookie = $_COOKIE["basket"];
            $attr->tedad =1;
            if ($attr->save()) {
                return "yes";
            }
        }

        /**************************************start if is not exist in table add to table*/



    }




}
