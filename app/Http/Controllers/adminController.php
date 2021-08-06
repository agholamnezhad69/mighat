<?php

namespace App\Http\Controllers;

use App\Tbl_my_attr_article;
use App\Tbl_my_attr_karafrin;
use App\Tbl_my_attr_savabegh_taskilati;
use App\Tbl_my_attr_talif;
use App\Tbl_my_employment;
use App\Tbl_my_user_attr;
use Illuminate\Http\Request;
use App\Tbl_my_user;
use App\Tbl_my_attr;
use App\Tbl_my_nashriye;
use App\Tbl_my_employment_user_rezome;
use App\Tbl_my_category;
use App\Tbl_my_product;
use App\Tbl_my_product_lesson;
use App\Tbl_my_kadamat_refahi;
use App\Tbl_my_kadamat_refahi_imgs;
use App\Tbl_my_news;
use App\Tbl_my_leadercontact;
use App\Tbl_my_options;
use DB;
use Session;
use Illuminate\Filesystem\Filesystem;
use PDF;

/***************************************email */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class adminController extends Controller
{
    public function index()
    {

        if (Session::get('id_admin')) {

            return view('admin.index');
        }
        return redirect('admin/login');

    }

    public function get_lgoin()
    {

        if (Session::get('id_admin')) {

            return redirect('admin/index');
        }
        return view('admin.login');


    }

    public function login(Request $request)
    {
        $user_name = $request->user_name;
        $user_pass = $request->user_pass;
        $user = Tbl_my_user::where('user_name', $user_name)
            ->where('pass', $user_pass)
            ->where('is_admin', 1)
            ->first();
        if ($user) {
            Session::put('id_admin', $user->id);
            return $user;
        }

        /* return redirect('admin/login')->with('err', 1);*/
    }

    public function getStudents()
    {
        if (Session::get('id_admin')) {

            return view('admin.students');
        }
        return redirect('admin/login');


    }

    public function get_all_users()
    {
        /*//////////////////////////////////////////////////////start get user attr with value*/

        $user_attr2 = Tbl_my_user_attr::where('id_user', 1)
            ->where('type', 2)
            ->get();


        /*//////////////////////////////////////////////////////end get user attr with value*/
        /*////////////////////////////////////////////////start attr with single*/
        $singleAttr = Tbl_my_attr::where('type', 0)->get();

        /*////////////////////////////////////////////////end attr with single*/

        /*////////////////////////////////////////////////start get user attr*/

        $parent = DB::table('tbl_my_attr')
            ->where('parent', 0)->get();


        $parent_sub = DB::table('tbl_my_attr')
            ->where('parent', '!=', 0)->get();

        $parent_sub_sub = Tbl_my_attr::where('type', 3)->get();

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


        $v_nv = $parent[0];
        $v_t = $parent[1];
        $ostan = $parent[2];
        $dore = $parent[17];
        $v_er_ba_et = $parent[18];
        $dar_h_t = $parent[19];
        $v_tt = $parent[20];
        $d = $parent[21];
        $r = $parent[22];
        $t_h = $parent[23];
        $t_d = $parent[25];
        $r_t = $parent[30];
        $h_kh = $parent[37];


        $user_attr = DB::table('tbl_my_user_attr')
            ->where('tbl_my_user_attr.type', 1)
            ->leftJoin('tbl_my_user', 'tbl_my_user_attr.id_user', '=', 'tbl_my_user.id')
            // ->where('tbl_my_user.id',1)
            ->get();


        $user_attr_help = [];
        foreach ($user_attr as $key => $value) {

            $ids_attr = $user_attr[$key]->ids_attr;
            $ids_attr = explode('/', $ids_attr);

            foreach ($ids_attr as $key1 => $value1) {

                /***********find attr */
                $attr = DB::table('tbl_my_attr')
                    ->where('id', $ids_attr[$key1])->first();

                if (isset($attr)) {
                    $attr_parent = $attr->parent;

                    if ($attr_parent == 1) {
                        $user_attr[$key]->v_n_v = $attr->attr;
                    } else if ($attr_parent == 6) {
                        $user_attr[$key]->v_t = $attr->attr;
                    } else if ($attr_parent == 9 && $key1 == 2) {
                        $user_attr[$key]->o_m_t = $attr->attr;
                    } else if ($attr_parent == 9 && $key1 == 11) {
                        $user_attr[$key]->o_h = $attr->attr;
                    } else if ($attr_parent == 29) {
                        $user_attr[$key]->dore = $attr->attr;
                    } else if ($attr_parent == 36) {
                        $user_attr[$key]->v_er_b_et = $attr->attr;
                    } else if ($attr_parent == 41) {
                        $user_attr[$key]->dar_h_ta = $attr->attr;
                    } else if ($attr_parent == 44) {
                        $user_attr[$key]->v_tahsil = $attr->attr;
                    } else if ($attr_parent == 50) {
                        $user_attr[$key]->n_daneshkah = $attr->attr;
                    } else if ($attr_parent == 54) {
                        $user_attr[$key]->major = $attr->attr;
                    } else if ($attr_parent == 60) {
                        $user_attr[$key]->tah_hoze = $attr->attr;
                    } else if ($attr_parent == 66) {
                        $user_attr[$key]->n_hoze = $attr->attr;
                    } else if ($attr_parent == 71) {
                        $user_attr[$key]->tahsilate_daneshkah = $attr->attr;
                    } else if ($attr_parent == 82) {
                        $user_attr[$key]->major_tahsil_hoze = $attr->attr;
                    } else if ($attr_parent == 131) {
                        $user_attr[$key]->hoze_khedmat = $attr->attr;
                    } else if ($attr_parent == 164) {
                        $user_attr[$key]->noe_daneshkah = $attr->attr;
                    }


                }

                /*$user_attr[$key]->attrs[$key1] = $attr;*/
                /***********find attr parent*/
                /*$attr_parent = Tbl_my_attr::where('parent', $attr->id)->first();*/
                /* $user_attr[$key]->attrs[$key1]->parent = $attr_parent;*/


            }
        }


        return response()->json(['form1_singleAttr' => $singleAttr,
            'user_attr2' => $user_attr2,
            'all_users' => $user_attr,
            'ostan' => $ostan, 'v_t' => $v_t, 'v_nv' => $v_nv, 'dore' => $dore,
            'v_er_ba_et' => $v_er_ba_et,
            'dar_h_t' => $dar_h_t, 'v_tt' => $v_tt,
            't_d' => $t_d,
            'd' => $d,
            'r' => $r,
            't_h' => $t_h,
            'r_t' => $r_t,
            'h_kh' => $h_kh,
            'user_with_attr' => $user_attr]);
    }

    public
    function get_all_users_state_dore()
    {
        /*////////////////////////////////////////////////start get user attr*/

        $parent = DB::table('tbl_my_attr')
            ->where('parent', 0)->get();


        $parent_sub = DB::table('tbl_my_attr')
            ->where('parent', '!=', 0)->get();

        $parent_sub_sub = Tbl_my_attr::where('type', 3)->get();

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


        $ostan = $parent[2];
        $dore = $parent[17];

        return response()->json(['ostan' => $ostan, 'dore' => $dore,]);


    }

    public
    function get_all_users1()
    {


        $user_attr = DB::table('tbl_my_user_attr')
            ->where('tbl_my_user_attr.type', 1)
            ->leftJoin('tbl_my_user', 'tbl_my_user_attr.id_user', '=', 'tbl_my_user.id')
            // ->where('tbl_my_user.id',1)
            ->paginate(6);


        foreach ($user_attr as $key => $value) {


            $ids_attr = $user_attr[$key]->ids_attr;
            $ids_attr = explode('/', $ids_attr);


            $user_attr[$key]->is_member_ghararghah = "no";

            foreach ($ids_attr as $key1 => $value1) {



                /*************start user must be member of gharaghahe meli */


                if ($value1 == 21) {
                    $user_attr[$key]->is_member_ghararghah = "yes";
                }

                /*************end user must be member of gharaghahe meli */




                /***********find attr */
                $attr = DB::table('tbl_my_attr')
                    ->where('id', $ids_attr[$key1])->first();

                if (isset($attr)) {

                    $attr_parent = $attr->parent;

                    switch ($attr_parent) {
                        case 1:
                            $user_attr[$key]->v_n_v = $attr->attr;
                            break;
                        case 6:
                            $user_attr[$key]->v_t = $attr->attr;
                            break;
                        case 9:
                            $user_attr[$key]->o_m_t = $attr->attr;
                            break;
                        case 29:
                            $user_attr[$key]->dore = $attr->attr;
                            break;
                        case 36:
                            $user_attr[$key]->v_er_b_et = $attr->attr;
                            break;
                        case 41:
                            $user_attr[$key]->dar_h_ta = $attr->attr;
                            break;
                        case 44:
                            $user_attr[$key]->v_tahsil = $attr->attr;
                            break;
                        case 50:
                            $user_attr[$key]->n_daneshkah = $attr->attr;
                            break;
                        case 54:
                            $user_attr[$key]->major = $attr->attr;
                            break;
                        case 60:
                            $user_attr[$key]->tah_hoze = $attr->attr;
                            break;
                        case 66:
                            $user_attr[$key]->n_hoze = $attr->attr;
                            break;
                        case 71:
                            $user_attr[$key]->tahsilate_daneshkah = $attr->attr;
                            break;
                        case 82:
                            $user_attr[$key]->major_tahsil_hoze = $attr->attr;
                            break;
                        case 131:
                            $user_attr[$key]->hoze_khedmat = $attr->attr;
                            break;
                        case 164:
                            $user_attr[$key]->noe_daneshkah = $attr->attr;
                            break;

                    }

                }

                /*$user_attr[$key]->attrs[$key1] = $attr;*/
                /***********find attr parent*/
                /*$attr_parent = Tbl_my_attr::where('parent', $attr->id)->first();*/
                /* $user_attr[$key]->attrs[$key1]->parent = $attr_parent;*/


            }


        }


        return $user_attr;


    }


    public
    function get_user_attr_withValue(Request $request)
    {

        $id = $request->id;
        /*//////////////////////////////////////////////////////start get user attr with value*/
        $user_attr2 = Tbl_my_user_attr::where('id_user', $id)
            ->where('type', 2)
            ->get();


        /*//////////////////////////////////////////////////////end get user attr with value*/

        /*//////////////////////////////////////////////////////start get user article*/
        $user_article = Tbl_my_attr_article::where('user_id', $id)
            ->get();
        /*//////////////////////////////////////////////////////end get user article*/

        $user_karafarin = Tbl_my_attr_karafrin::where('user_id', $id)
            ->get();
        /*//////////////////////////////////////////////////////end get user article*/
        /*//////////////////////////////////////////////////////end get user talif*/

        $user_talif = Tbl_my_attr_talif::where('user_id', $id)
            ->get();
        /*//////////////////////////////////////////////////////end get user talif*/

        /*//////////////////////////////////////////////////////end get user talif*/
        $savabe_tash = DB::table('tbl_my_attr_savabegh_taskilati')
            ->where('user_id', $id)
            ->leftJoin('tbl_my_ostan', 'tbl_my_attr_savabegh_taskilati.ostan_id', '=', 'tbl_my_ostan.id_ostan')
            ->leftJoin('tbl_my_attr', 'tbl_my_attr_savabegh_taskilati.s_o_dar_s_t', '=', 'tbl_my_attr.id')
            ->get();
        /*//////////////////////////////////////////////////////end get user talif*/


        return response()->json([
            'user_attr2' => $user_attr2,
            'user_article' => $user_article,
            'user_karafarin' => $user_karafarin,
            'user_talif' => $user_talif,
            'savabe_tash' => $savabe_tash,
        ]);
    }

    public
    function get_nashriye()
    {
        if (Session::get('id_admin')) {

            return view('admin.nashriye');
        }
        return redirect('admin/login');

    }

    public
    function get_current_Nahsriye(Request $request)
    {

        $groupp = $request->groupp;
        $current_Nahsriye = DB::table('tbl_my_nashriye')
            ->where('groupp', $groupp)->get();

//        nashriye without object and only array
        $arr = [];
        foreach ($current_Nahsriye as $key => $value) {
            $c = $current_Nahsriye[$key]->img;
            array_push($arr, $c);
        }

        return response()->json([
            'current_Nahsriye' => $arr,
        ]);

    }

    public
    function save_nashriye(Request $request)
    {
        $editId = $request->editId;
        $imgs = $request->imgs;
        $title = $request->nashriye_title;
        $groupNashriye = $request->groupNashriye;


        if (empty($editId)) {

            foreach ($imgs as $key => $value) {
                $attr = new Tbl_my_nashriye();
                $attr->title = $title;
                $attr->img = $imgs[$key];
                $attr->groupp = $groupNashriye;
                if (!$attr->save()) {
                    return;
                }


            }


        } else {

            /*first get all groupp*/
            $group = Tbl_my_nashriye::where('groupp', $groupNashriye)->get();

            /****************/

            foreach ($group as $key => $value) {
                $new_result = Tbl_my_nashriye::where('id', $group[$key]->id)->first();
                $new_result->title = $title;
                $new_result->img = $imgs[$key];
                $new_result->groupp = $groupNashriye;

                if (!$new_result->update()) {
                    return;
                }


            }

        }


        return "yes";


    }

    public
    function getLastGroupNashriye(Request $request)
    {
        $lastRecord = DB::table('tbl_my_nashriye')
            ->orderBy('id', 'desc')->first();

        if (!$lastRecord) {
            $lastRecord = 0;
        } else {
            $lastRecord = $lastRecord->groupp;
        }


        return response()->json([
            'lastRecord' => $lastRecord,
        ]);


    }

    public
    function get_nashriye_add(Request $request)
    {
        if (Session::get('id_admin')) {

            return view('admin.nashriye_add');
        }
        return redirect('admin/login');


    }

    public
    function deleteNashriye(Request $request)
    {
        $groupp = $request->groupp;
        DB::table('tbl_my_nashriye')
            ->WhereIn('groupp', $groupp)->delete();
    }

    public
    function getEmployment(Request $request)
    {

        if (Session::get('id_admin')) {

            return view('admin.employment');
        }
        return redirect('admin/login');

    }

    public
    function getEmployment_add(Request $request)
    {


        if (Session::get('id_admin')) {

            return view('admin.employment_add');
        }
        return redirect('admin/login');

    }

    public
    function employSave(Request $request)
    {
        $id = $request->id;
        $title = $request->title;
        $desc = $request->desc;
        $date = $request->date;
        $status = $request->status;
        $state = $request->state;
        $category = $request->category;
        $is_special = $request->is_special;

        if (empty($id)) {
            $attr = new Tbl_my_employment();
            $attr->title = $title;
            $attr->description = $desc;
            $attr->date = $date;
            $attr->status = $status;
            $attr->state = $state;
            $attr->category = $category;
            $attr->is_special = $is_special;
            if ($attr->save()) {


                $lastPath = public_path('uploads/employment/aliAli123aliAli3231test');

                $lastEmployment = DB::table('tbl_my_employment')->latest('id')->first();
                $lastEmployment_id = $lastEmployment->id;

                $newPath = public_path('uploads/employment/' . $lastEmployment_id);


                if (is_dir($lastPath)) {
                    rename($lastPath, $newPath);
                } else {
                    mkdir($newPath, 0755);
                }


                return "yes";
            }


        } else {
            $employment = Tbl_my_employment::where('id', $id)->first();
            $employment->title = $title;
            $employment->description = $desc;
            $employment->date = $date;
            $employment->status = $status;
            $employment->state = $state;
            $employment->category = $category;
            $employment->is_special = $is_special;

            if ($employment->update()) {
                return "yes";
            }

        }


    }

    public
    function get_employ_rezome(Request $request)
    {


        if (Session::get('id_admin')) {

            return view('admin.employ_rezome_sent');
        }
        return redirect('admin/login');


    }

    public
    function get_employ_rezome_sent(Request $request)
    {


        /*****************************start state  */
        $states = DB::table('tbl_my_ostan')
            ->get();

        $state_help = array();
        /*convert to text value array objects*/

        foreach ($states as $key => $value) {
            /*thi blow is pushed */
            $state_help[] = array('text' => $value->title_ostan, 'value' => $value->id_ostan);
        }


        /*****************************start cat_employ */
        $cats = DB::table('tbl_my_options')
            ->where('keyy', 'cat_employ')
            ->get();

        $cat_help = array();
        /*convert to text value array objects*/

        foreach ($cats as $key => $value) {
            /*this blow is pushed */
            $cat_help[] = array('text' => $value->valuee, 'value' => $value->id_option);
        }

        /*****************************end cat_employt */
        /*****************************end special employment */


        $specials = DB::table('tbl_my_employment')
            ->where('is_special', 1)
            ->leftJoin('tbl_my_options', 'tbl_my_employment.category', '=', 'tbl_my_options.id_option')
            ->leftJoin('tbl_my_ostan', 'tbl_my_employment.state', '=', 'tbl_my_ostan.id_ostan')
            ->get();
        /*****************************end special employment */
        /*****************************start employments*/
        /* $employments = DB::table('tbl_my_employment')
             ->orderBy('id', 'desc')
             ->paginate(6);  */

        $employments = DB::table('tbl_my_employment')
            ->leftJoin('tbl_my_options', 'tbl_my_employment.category', '=', 'tbl_my_options.id_option')
            ->leftJoin('tbl_my_ostan', 'tbl_my_employment.state', '=', 'tbl_my_ostan.id_ostan')
            ->orderBy('id', 'desc')
            ->paginate(6);


        /*****************************start employment_rezome user with employment join*/


        $employment_user_rezome = DB::table('tbl_my_employment_user_rezome')
            ->leftJoin('tbl_my_employment', 'tbl_my_employment_user_rezome.employment_id', '=', 'tbl_my_employment.id')
            ->get();
        return response()->json([
            'employments' => $employments,
            'e_user_rezome' => $employment_user_rezome,
            'specials' => $specials,
            'states' => $state_help,
            'cats' => $cat_help,
        ]);

    }

    public
    function get_category_product()
    {


        if (Session::get('id_admin')) {

            return view('admin.category_product');
        }
        return redirect('admin/login');


    }

    public
    function get_cat_childerns($idCategory)
    {


        $categoryInfo = '';
        $all_parent = [];
        if ($idCategory != 0) {
            /**********************************************category info*/
            $categoryInfo = DB::table('tbl_my_category')
                ->where('id', $idCategory)->first();
            /**********************************************category parents*/
            $parent = $categoryInfo->parent;
            $all_parent = [];
            while ($parent != 0) {
                $parentCategory = DB::table('tbl_my_category')
                    ->where('id', $parent)->first();
                array_push($all_parent, $parentCategory);
                $parent = $parentCategory->parent;
            }
            $all_parent = array_reverse($all_parent);
            array_push($all_parent, $categoryInfo);
        }

        /*********************************************sub category*/
        $cats = DB::table('tbl_my_category')
            ->where('parent', $idCategory)->get();

        /****************************all_cat_for_selector add or edit */
        $all_cat_for_selector = DB::table('tbl_my_category')->get();


        /***************************************************/
        return response()->json([
            'all_cat' => $cats,
            'all_cat_for_selector' => $all_cat_for_selector,
            'all_parent' => $all_parent,
            'categoryInfo' => $categoryInfo,
        ]);
        /*********************************************category parents*/


    }

    public
    function deleteCats(Request $request)
    {


        $catIds = $request->ids;


        $allChildrenIds = [];
        $allChildrenIds = array_merge($allChildrenIds, $catIds);

        while (sizeof($catIds) > 0) {

            $childrenIds = [];
            foreach ($catIds as $catId) {

                $children = DB::table('tbl_my_category')
                    ->where('parent', $catId)->get();


                foreach ($children as $child) {
                    array_push($childrenIds, $child->id);
                }
            }

            $allChildrenIds = array_merge($allChildrenIds, $childrenIds);
            $catIds = $childrenIds;
        }

        $allChildrenIds_string = join(',', $allChildrenIds);
        DB::table('tbl_my_category')
            ->WhereIn('id', $allChildrenIds)->delete();


    }

    public
    function addCat(Request $request)
    {

        $id_edit = $request->id_edit;


        if (empty($id_edit)) {

            $new_result = new Tbl_my_category;
            $new_result->title = $request->title;
            $new_result->parent = $request->parent;
            if ($new_result->save()) {
                return 'yes';
            }

        } else {
            $new_result = Tbl_my_category::where('id', $id_edit)->first();
            $new_result->title = $request->title;
            $new_result->parent = $request->parent;

            if ($new_result->update()) {
                return "yes";
            }
        }
    }

    public
    function get_product(Request $request)
    {


        if (Session::get('id_admin')) {

            return view('admin.product');
        }
        return redirect('admin/login');

    }

    public
    function get_products(Request $request)
    {

        $cats = DB::table('tbl_my_category')->get();
        /***************************************************/
        $all_products = DB::table('tbl_my_product')
            /*->where('cat_id', '!=', 35)*/
            ->leftJoin('tbl_my_category', 'tbl_my_product.cat_id', '=', 'tbl_my_category.id')
            ->select('tbl_my_product.*', 'tbl_my_category.title as cat_title')
            ->orderBy('id', 'desc')
            ->paginate(6);

        return response()->json([
            'all_products' => $all_products,
            'cats' => $cats]);
    }

    public
    function get_products_home(Request $request)
    {

        /***************************************************/
        $all_products = DB::table('tbl_my_product')
            ->where('cat_id', '!=', 35)
            ->leftJoin('tbl_my_category', 'tbl_my_product.cat_id', '=', 'tbl_my_category.id')
            ->select('tbl_my_product.*', 'tbl_my_category.title as cat_title')
            ->orderBy('id', 'desc')
            ->paginate(6);

        return response()->json([
            'all_products' => $all_products]);

    }

    public
    function get_products_majale(Request $request)
    {

        $cats = DB::table('tbl_my_category')
            ->where('id', 35)
            ->get();
        /***************************************************/
        $all_products = DB::table('tbl_my_product')
            ->where('tbl_my_product.cat_id', 35)
            ->leftJoin('tbl_my_category', 'tbl_my_product.cat_id', '=', 'tbl_my_category.id')
            ->select('tbl_my_product.*', 'tbl_my_category.title as cat_title')
            ->orderBy('id', 'desc')
            ->paginate(6);

        return response()->json([
            'all_products' => $all_products,
            'cats' => $cats]);
    }


    public function addProduct(Request $request)
    {

        $id_edit = $request->edit_product_id;


        if (empty($id_edit)) {


            $new_result = new Tbl_my_product();
            $new_result->title = $request->title_course;
            $new_result->descc = $request->desc_course;
            $new_result->price = $request->price_course;
            $new_result->is_online = $request->type_course;
            $new_result->skyromm = $request->skyromm_course;
            $new_result->tedad_afrad_course = $request->tedad_afrad_course;
            $new_result->cat_id = $request->cat_select_id;
            $new_result->img = $request->img_course;
            if ($new_result->save()) {
                /***********************************rename folder test to id of news*/
                $lastProduct = DB::table('tbl_my_product')->latest('id')->first();
                $lastProduct = $lastProduct->id;
                rename(public_path('uploads/product/aliAli123aliAli3231test'), public_path('uploads/product/' . $lastProduct));
                /***********************************rename folder test to id of news*/
                return 'yes';
            }

        } else {
            $new_result = Tbl_my_product::where('id', $id_edit)->first();
            $new_result->title = $request->title_course;
            $new_result->descc = $request->desc_course;
            $new_result->price = $request->price_course;
            $new_result->is_online = $request->type_course;
            $new_result->skyromm = $request->skyromm_course;
            $new_result->cat_id = $request->cat_select_id;
            $new_result->img = $request->img_course;

            if ($new_result->update()) {
                return "yes";
            }
        }
    }

    public
    function get_product_add(Request $request)
    {


        if (Session::get('id_admin')) {

            return view('admin.product_add');
        }
        return redirect('admin/login');

    }


    public function get_product_lesson($idproduct)
    {

        $product_lesson = DB::table('tbl_my_product_lesson')
            ->leftJoin('tbl_my_product', 'tbl_my_product_lesson.product_id', '=', 'tbl_my_product.id')
            ->where('product_id', $idproduct)
            ->select('tbl_my_product_lesson.*', 'tbl_my_product.title as cat_title')
            ->get();
        return response()->json([
            'product_lessons' => $product_lesson,
            'idproduct' => $idproduct,
        ]);


    }


    public function ckeditor_upload_khadamat_add(Request $request)
    {


        /**********************start directory*/

        $directoryName = public_path('uploads/khadamat/' . 'aliAli123aliAli3231test');

        /* Check if the directory already exists. */
        if (!is_dir($directoryName)) {
            /* Directory does not exist, so lets create it. */
            mkdir($directoryName, 0755);
        }

        /**********************start directory*/

        if ($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;

            //Upload File
            $request->upload->move(public_path('uploads/khadamat/' . 'aliAli123aliAli3231test'), $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('uploads/khadamat/' . 'aliAli123aliAli3231test' . '/' . $filenametostore);
            $msg = 'باموفقیت بارگذاری شد';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }

    public function ckeditor_upload_khadamat_edit(Request $request)
    {

        /**********************start get last row id */


        $id_khadamat = $request->id_khadamat;


        /**********************end get last row id */
        /**********************start directory*/

        $directoryName = public_path('uploads/khadamat/' . $id_khadamat);

        /* Check if the directory already exists. */
        if (!is_dir($directoryName)) {
            /* Directory does not exist, so lets create it. */
            mkdir($directoryName, 0755);
        }

        /**********************start directory*/

        if ($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;

            //Upload File
            $request->upload->move(public_path('uploads/khadamat/' . $id_khadamat), $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('uploads/khadamat/' . $id_khadamat . '/' . $filenametostore);
            $msg = 'باموفقیت بارگذاری شد';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }

    public function khadamat_Dropzone(Request $request)
    {

        /**************************start directory*/


        $directoryName = public_path('uploads/khadamat/' . 'aliAli123aliAli3231test');


        /* Check if the directory already exists. */


        if (!is_dir($directoryName)) {
            /* Directory does not exist, so lets create it. */
            mkdir($directoryName, 0755);
        }

        /**********************end directory*/


        ini_set("memory_limit", "500000");
        ini_set('post_max_size', '500000');
        ini_set('upload_max_filesize', '500000');

        $imageName = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('uploads/khadamat/' . 'aliAli123aliAli3231test'), $imageName);

        return response()->json($imageName);
    }

    public function khadamat_Dropzone_edit(Request $request)
    {
        $id = $request->id;

        /**********************end get last row id */

        ini_set("memory_limit", "500000");
        ini_set('post_max_size', '500000');
        ini_set('upload_max_filesize', '500000');

        $imageName = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('uploads/khadamat/' . $id), $imageName);

        return response()->json($imageName);
    }

    public function khadamat_Dropzone_slider_edit(Request $request)
    {
        $id = $request->id;

        /**********************end get last row id */

        ini_set("memory_limit", "500000");
        ini_set('post_max_size', '500000');
        ini_set('upload_max_filesize', '500000');

        $imageName = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('uploads/khadamat/' . $id), $imageName);

        return response()->json($imageName);
    }


    public function khadamat_DropzoneRemove(Request $request)
    {


        $img = $request->img;
        /******************************remove from directory*/

        if (isset($img)) {
            $fileName = public_path('uploads/khadamat/aliAli123aliAli3231test/' . $img);
            unlink($fileName);
        }
        return "yes";
    }

    public function get_kadamat_shakes_img(Request $request)
    {
        $id = $request->id;

        /*******************************get current news*/
        $curent_row = DB::table('tbl_my_kadamat_refahi')
            ->where('id', $id)
            ->first();
        $curent_row_img = $curent_row->img;


        /*******************************get img*/
        $target_dir = public_path('uploads/khadamat/' . $id . '/');

        $fil_list = array();

        $dir = $target_dir;

        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {

                while (($file = readdir($dh)) !== false) {
                    if ($file != '' && $file != '.' && $file != '..' && $file == $curent_row_img) {
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


    public function khadamat_Dropzone_slider(Request $request)
    {

        /**************************start directory*/


        $directoryName = public_path('uploads/khadamat/' . 'aliAli123aliAli3231test');


        /* Check if the directory already exists. */


        if (!is_dir($directoryName)) {
            /* Directory does not exist, so lets create it. */
            mkdir($directoryName, 0755);
        }

        /**********************end directory*/


        ini_set("memory_limit", "500000");
        ini_set('post_max_size', '500000');
        ini_set('upload_max_filesize', '500000');

        $imageName = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('uploads/khadamat/' . 'aliAli123aliAli3231test'), $imageName);

        return response()->json($imageName);
    }

    public function khadamat_Dropzone_slider_remove(Request $request)
    {
        $img = $request->img;
        /******************************remove from table*/
        DB::table('tbl_my_kadamat_refahi_imgs')
            ->Where('img', $img)->delete();


        /******************************remove from directory*/
        /*      $fileName = public_path('kadamatImg' . '/' . $img);*/
        $fileName = public_path('uploads/khadamat/aliAli123aliAli3231test/' . $img);
        unlink($fileName);


        return "yes";


    }

    public function khadamat_Dropzone_slider_remove_edit(Request $request)
    {


        $id_khadamat = $request->id_khadamat;
        $img_khadamat = $request->img_khadamat;


        /******************************remove from table*/
        DB::table('tbl_my_kadamat_refahi_imgs')
            ->Where('img', $img_khadamat)->delete();


        /******************************remove from directory*/
        /*      $fileName = public_path('kadamatImg' . '/' . $img);*/
        $fileName = public_path('uploads/khadamat/' . $id_khadamat . '/' . $img_khadamat);
        unlink($fileName);


        return "yes";

    }


    public function get_kadamat_refahi(Request $request)
    {

        if (Session::get('id_admin')) {

            return view('admin.kadamat_refahi');
        }
        return redirect('admin/login');


    }


    public function get_kadamat_refahi_add(Request $request)
    {


        if (Session::get('id_admin')) {

            return view('admin.kadamat_refahi_add');
        }
        return redirect('admin/login');

    }


    public function get_kadamat_refahi_data(Request $request)
    {

        /*$cats = DB::table('tbl_my_category')->get();*/
        /***************************************************/
        /*$kadamat_refahi = DB::table('tbl_my_kadamat_refahi')
            ->get();*/


        $kadamat_refahi = Tbl_my_kadamat_refahi::orderBy('id', 'desc')->paginate(6);
        return $kadamat_refahi;


        /*        return response()->json([
                    'kadamat_refahi' => $kadamat_refahi,
                ]);*/
    }


    public function save_kadamat(Request $request)
    {


        $id = $request->id;
        $imgs = $request->imgs;
        $title_kadamat = $request->title_kadamat;
        $desc_kadamat = $request->desc_kadamat;
        $info_kadamat = $request->info_kadamat;
        $price_kadamat = $request->price_kadamat;
        $img = $request->shakhes_img;
        $kdadmat_from_date = $request->kdadmat_from_date;
        $kdadmat_to_date = $request->kdadmat_to_date;
        /************************************khadamate refahi*/

        if (empty($id)) {
            $attr = new Tbl_my_kadamat_refahi();
            $attr->title = $title_kadamat;
            $attr->descc = $desc_kadamat;
            $attr->price = $price_kadamat;
            $attr->information = $info_kadamat;
            $attr->img = $img;
            $attr->kdadmat_from_date = $kdadmat_from_date;
            $attr->kdadmat_to_date = $kdadmat_to_date;

            if ($attr->save()) {


                /***********************************start rename folder test to id of news*/
                $lastkadamat = DB::table('tbl_my_kadamat_refahi')->latest('id')->first();

                $lastkadamat_id = $lastkadamat->id;


                rename(public_path('uploads/khadamat/aliAli123aliAli3231test'), public_path('uploads/khadamat/' . $lastkadamat_id));


                /***********************************end rename folder test to id of news*/

                foreach ($imgs as $key => $value) {
                    $attr = new Tbl_my_kadamat_refahi_imgs();
                    $attr->img = $imgs[$key];
                    $attr->khadamat_id = $lastkadamat_id;
                    $attr->save();
                }
                return "yes";


            }


        } else {
            /*update kadamat refahi*/
            $new_result = Tbl_my_kadamat_refahi::where('id', $id)->first();
            $new_result->title = $title_kadamat;
            $new_result->descc = $desc_kadamat;
            $new_result->price = $price_kadamat;
            $new_result->information = $info_kadamat;
            $new_result->img = $img;
            $new_result->kdadmat_from_date = $kdadmat_from_date;
            $new_result->kdadmat_to_date = $kdadmat_to_date;

            if ($new_result->update()) {
                foreach ($imgs as $key => $value) {

                    $imgKadamaRefahi = Tbl_my_kadamat_refahi_imgs::where('img', $imgs[$key])->first();

                    if (!$imgKadamaRefahi) {
                        $attr = new Tbl_my_kadamat_refahi_imgs();
                        $attr->img = $imgs[$key];
                        $attr->khadamat_id = $id;
                        $attr->save();
                    }


                }
            }
            /*update kadamat refahi imgs*/


            /*$imgKadamaRefahi = Tbl_my_kadamat_refahi_imgs::where('khadamat_id', $id)->get();*/


        }


        return "yes";


    }


    public function get_current_kadamat(Request $request)
    {

        $id = $request->id;
        $current_kadamat = DB::table('tbl_my_kadamat_refahi_imgs')
            ->where('khadamat_id', $id)->get();

//        kadamat without object and only array
        $arr = [];
        foreach ($current_kadamat as $key => $value) {
            $c = $current_kadamat[$key]->img;
            array_push($arr, $c);
        }

        return response()->json([
            'current_kadamat' => $arr,
        ]);

    }

    public
    function get_kadamat_refahi_filter_sidebar(Request $request)
    {


        $filter = $request->filter;

        /************همه خدمات رفاهی*****************/
        if ($filter == 0) {
            $query = DB::table('tbl_my_kadamat_refahi')
                ->orderBy('id', 'desc')
                ->paginate(6);
            return $query;
        } /************رایگان ها*****************/
        else if ($filter == 1) {
            $query = DB::table('tbl_my_kadamat_refahi')
                ->orderBy('id', 'desc')
                ->where('price', 0)
                ->paginate(6);
            return $query;
        } /************غیر رایگان*****************/
        else if ($filter == 2) {
            $query = DB::table('tbl_my_kadamat_refahi')
                ->orderBy('id', 'desc')
                ->where('price', '!=', 0)
                ->paginate(6);
            return $query;
        }
    }

    public
    function get_employment_refahi_filter_sidebar(Request $request)
    {


        $filter = $request->filter;
        $type = $request->type;

        /************همه خدمات رفاهی*****************/
        if ($type == 'status') {
            if ($filter == 2) {
                $query = DB::table('tbl_my_employment')
                    ->leftJoin('tbl_my_options', 'tbl_my_employment.category', '=', 'tbl_my_options.id_option')
                    ->leftJoin('tbl_my_ostan', 'tbl_my_employment.state', '=', 'tbl_my_ostan.id_ostan')
                    ->orderBy('id', 'desc')
                    ->paginate(6);
                return $query;
            } else {
                $query = DB::table('tbl_my_employment')
                    ->where('status', $filter)
                    ->leftJoin('tbl_my_options', 'tbl_my_employment.category', '=', 'tbl_my_options.id_option')
                    ->leftJoin('tbl_my_ostan', 'tbl_my_employment.state', '=', 'tbl_my_ostan.id_ostan')
                    ->orderBy('id', 'desc')
                    ->paginate(6);
                return $query;
            }
        } else if ($type == 'state')
            if ($filter == 0) {
                $query = DB::table('tbl_my_employment')
                    ->leftJoin('tbl_my_options', 'tbl_my_employment.category', '=', 'tbl_my_options.id_option')
                    ->leftJoin('tbl_my_ostan', 'tbl_my_employment.state', '=', 'tbl_my_ostan.id_ostan')
                    ->orderBy('id', 'desc')
                    ->paginate(6);
                return $query;
            } else {
                $query = DB::table('tbl_my_employment')
                    ->where('state', $filter)
                    ->leftJoin('tbl_my_options', 'tbl_my_employment.category', '=', 'tbl_my_options.id_option')
                    ->leftJoin('tbl_my_ostan', 'tbl_my_employment.state', '=', 'tbl_my_ostan.id_ostan')
                    ->orderBy('id', 'desc')
                    ->paginate(6);
                return $query;
            }

    }

    public
    function get_product_refahi_filter_sidebar(Request $request)
    {
        $filter = $request->filter;
        /************همه خدمات رفاهی*****************/
        if ($filter == 0) {
            $query = DB::table('tbl_my_product')
                ->orderBy('id', 'desc')
                ->where('cat_id', '!=', 35)
                ->paginate(6);
            return $query;
        } /************رایگان ها*****************/
        else if ($filter == 1) {
            $query = DB::table('tbl_my_product')
                ->orderBy('id', 'desc')
                ->where('price', 0)
                ->where('cat_id', '!=', 35)
                ->paginate(6);
            return $query;
        } /************غیر رایگان*****************/
        else if ($filter == 2) {
            $query = DB::table('tbl_my_product')
                ->orderBy('id', 'desc')
                ->where('price', '!=', 0)
                ->where('cat_id', '!=', 35)
                ->paginate(6);
            return $query;
        } else if ($filter == 3) {
            $query = DB::table('tbl_my_product')
                ->orderBy('id', 'desc')
                ->where('is_online', 0)
                ->where('cat_id', '!=', 35)
                ->paginate(6);
            return $query;
        } else if ($filter == 4) {
            $query = DB::table('tbl_my_product')
                ->orderBy('id', 'desc')
                ->where('is_online', 1)
                ->where('cat_id', '!=', 35)
                ->paginate(6);
            return $query;
        }
    }

    public
    function get_product_refahi_filter_sidebar_majale(Request $request)
    {
        $filter = $request->filter;
        /************همه خدمات رفاهی*****************/
        if ($filter == 0) {
            $query = DB::table('tbl_my_product')
                ->orderBy('id', 'desc')
                ->where('cat_id', 35)
                ->paginate(6);
            return $query;
        } /************رایگان ها*****************/
        else if ($filter == 1) {
            $query = DB::table('tbl_my_product')
                ->orderBy('id', 'desc')
                ->where('price', 0)
                ->where('cat_id', 35)
                ->paginate(6);
            return $query;
        } /************غیر رایگان*****************/
        else if ($filter == 2) {
            $query = DB::table('tbl_my_product')
                ->orderBy('id', 'desc')
                ->where('price', '!=', 0)
                ->where('cat_id', 35)
                ->paginate(6);
            return $query;
        } else if ($filter == 3) {
            $query = DB::table('tbl_my_product')
                ->orderBy('id', 'desc')
                ->where('is_online', 0)
                ->where('cat_id', 35)
                ->paginate(6);
            return $query;
        } else if ($filter == 4) {
            $query = DB::table('tbl_my_product')
                ->orderBy('id', 'desc')
                ->where('is_online', 1)
                ->where('cat_id', 35)
                ->paginate(6);
            return $query;
        }
    }


    public
    function save_product_lesson(Request $request)
    {

        $film_title = $request->film_title;
        $film_course = $request->film_course;
        $product_id = $request->product_id;
        $lesson_id = $request->lesson_id;
        if (empty($lesson_id)) {
            $attr = new Tbl_my_product_lesson();
            $attr->title = $film_title;
            $attr->file = $film_course;
            $attr->product_id = $product_id;

            if ($attr->save()) {

                /***********************************rename folder test to id of news*/
                $product_lesson = DB::table('tbl_my_product_lesson')->latest('id')->first();
                $product_lesson = $product_lesson->id;
                rename(public_path('/uploads/product_lesson/aliAli123aliAli3231test'), public_path('uploads/product_lesson/' . $product_lesson));

                /***********************************rename folder test to id of news*/

                return "yes";
            }
        } else {

            $new_result = Tbl_my_product_lesson::where('id', $lesson_id)->first();
            $new_result->title = $film_title;
            $new_result->file = $film_course;
            $new_result->product_id = $product_id;

            if ($new_result->update()) {
                return "yes";
            }


        }


    }

    public
    function student_add()
    {


        if (Session::get('id_admin')) {

            return view('admin.student_add');
        }
        return redirect('admin/login');


    }

    public
    function save_student(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $family = $request->family;
        $fatherName = $request->fatherName;
        $nCod = $request->nCod;
        $mobile = $request->mobile;
        $birthday = $request->birthday;
        $socialmobile = $request->socialmobile;
        $telhome = $request->telhome;
        $user_name = $request->user_name;
        $user_pass = $request->user_pass;


        if ($id) {


            $employment = Tbl_my_user::where('id', $id)->first();
            $employment->name = $name;
            $employment->family = $family;
            $employment->fatherName = $fatherName;
            $employment->nCod = $nCod;
            $employment->mobile = $mobile;
            $employment->birthday = $birthday;
            $employment->socialmobile = $socialmobile;
            $employment->telhome = $telhome;
            $employment->user_name = $user_name;
            $employment->pass = $user_pass;

            if ($employment->update()) {
                return "yes";
            }


        } else {

            /*********************start if user name is repeated*/
            $user = Tbl_my_user::where('user_name', $user_name)->first();

            if (!is_null($user)) {
                return "no";
            }
            /*********************end if user name is repeated*/


            $employment = new Tbl_my_user();
            $employment->name = $name;
            $employment->family = $family;
            $employment->fatherName = $fatherName;
            $employment->nCod = $nCod;
            $employment->mobile = $mobile;
            $employment->birthday = $birthday;
            $employment->socialmobile = $socialmobile;
            $employment->telhome = $telhome;
            $employment->user_name = $user_name;
            $employment->pass = $user_pass;

            if (!$employment->save()) {
                return;
            }


            /********************************start get last user id*/


            $lastRecord = DB::table('tbl_my_user')
                ->orderBy('id', 'desc')->first();

            $lastRecordId = $lastRecord->id;

            /********************************end get last user id*/
            /*به این دلیل در جدول واسط هم ذخیره میکنیم چون زمانی که تمام کاربران را در پنل ادمین نمایش میدهد
            ما از join استفاده کردیم و می خواهیم همه کاربران نمایش داده شود*/
            /***************************************save attr for this user in Tbl_my_user_attr table*/
            $attr = new Tbl_my_user_attr();
            $attr->id_user = $lastRecordId;
            $attr->ids_attr = null;
            $attr->value = 0;
            $attr->type = 1;


            /**********************************************************/
            if ($attr->save()) {
                return "yes";
            }
        }


    }

    public
    function get_news_add(Request $request)
    {


        if (Session::get('id_admin')) {

            return view('admin.news_add');
        }
        return redirect('admin/login');


    }

    public
    function addNews(Request $request)
    {

        $id_edit = $request->id;


        if (empty($id_edit)) {


            $new_result = new Tbl_my_news();
            $new_result->title_news = $request->title_news;
            $new_result->desc_news = $request->desc_news;
            $new_result->date_news = $request->time;
            $new_result->img_news = $request->img_news;


            if ($new_result->save()) {

                /***********************************rename folder test to id of news*/
                $lastNews = DB::table('tbl_my_news')->latest('id')->first();
                $lastNews = $lastNews->id;
                rename(public_path('/uploads/news/aliAli123aliAli3231test'), public_path('uploads/news/' . $lastNews));

                /***********************************rename folder test to id of news*/


                return 'yes';
            }

        } else {
            $new_result = Tbl_my_news::where('id', $id_edit)->first();
            $new_result->title_news = $request->title_news;
            $new_result->desc_news = $request->desc_news;
            $new_result->date_news = $request->time;
            $new_result->img_news = $request->img_news;

            if ($new_result->update()) {
                return "yes";
            }
        }
    }

    public
    function get_news(Request $request)
    {


        if (Session::get('id_admin')) {

            return view('admin.news');
        }
        return redirect('admin/login');

    }

    public
    function get_news1()
    {

        /*****************************start employments*/
        /*$n = Tbl_my_news::paginate(5);*/
        $n = Tbl_my_news::orderBy('id', 'desc')->paginate(5);

        return $n;
        /*return response()->json([
            'news' => $n,
        ]);*/

    }


    public function deleteNews(Request $request)
    {


        $newsId = $request->newsId;


        /***************************************delete from table*/
        $del = DB::table('tbl_my_news')
            ->Where('id', $newsId)->delete();

        /*****************************delete img from directory*/

        if ($del) {

            $dirPath = public_path('uploads/news/' . $newsId);

            if (!is_dir($dirPath)) {
                return "no";
            }

            if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
                $dirPath .= '/';
            }


            $files = glob($dirPath . '*', GLOB_MARK);
            foreach ($files as $file) {
                if (is_dir($file)) {
                    self::deleteDir($file);
                } else {
                    unlink($file);
                }
            }
            rmdir($dirPath);


            return "yes";

        } else {
            return "no";
        }


    }

    public function employment_delete(Request $request)
    {


        $employmentId = $request->employmentId;


        /***************************************delete from table*/
        $del = DB::table('tbl_my_employment')
            ->Where('id', $employmentId)->delete();

        /*****************************delete img from directory*/

        if ($del) {

            $dirPath = public_path('uploads/employment/' . $employmentId);

            if (!is_dir($dirPath)) {
                return "no";
            }

            if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
                $dirPath .= '/';
            }


            $files = glob($dirPath . '*', GLOB_MARK);
            foreach ($files as $file) {
                if (is_dir($file)) {
                    self::deleteDir($file);
                } else {
                    unlink($file);
                }
            }
            rmdir($dirPath);


            return "yes";

        } else {
            return "no";
        }


    }

    function product_delete(Request $request)
    {


        $productId = $request->productId;


        /**********************start if this product have lessons we must return show message*/

        $product_lesson = DB::table('tbl_my_product_lesson')
            ->Where('product_id', $productId)->get();

        if (sizeof($product_lesson) > 0) {
            return "haveLesson";
        }


        /**********************end if this product have lessons we must return show message*/


        /***************************************delete from table*/
        $del = DB::table('tbl_my_product')
            ->Where('id', $productId)->delete();

        /*****************************delete img from directory*/


        if ($del) {

            $dirPath = public_path('uploads/product/' . $productId);

            if (!is_dir($dirPath)) {
                return "no";
            }

            if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
                $dirPath .= '/';
            }


            $files = glob($dirPath . '*', GLOB_MARK);
            foreach ($files as $file) {
                if (is_dir($file)) {
                    self::deleteDir($file);
                } else {
                    unlink($file);
                }
            }
            rmdir($dirPath);

            return "yes";

        } else {
            return "no";
        }


    }

    function product_lesson_delete(Request $request)
    {


        $lesson_id = $request->lesson_id;


        /***************************************delete from table*/
        $del = DB::table('tbl_my_product_lesson')
            ->Where('id', $lesson_id)->delete();

        /*****************************delete img from directory*/


        if ($del) {

            $dirPath = public_path('uploads/product_lesson/' . $lesson_id);

            if (!is_dir($dirPath)) {
                return "no";
            }

            if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
                $dirPath .= '/';
            }


            $files = glob($dirPath . '*', GLOB_MARK);
            foreach ($files as $file) {
                if (is_dir($file)) {
                    self::deleteDir($file);
                } else {
                    unlink($file);
                }
            }
            rmdir($dirPath);

            return "yes";

        } else {
            return "no";
        }


    }

    function kadamat_delete(Request $request)
    {


        $kadamtId = $request->kadamtId;


        /***************************************delete from table*/
        $del = DB::table('tbl_my_kadamat_refahi')
            ->Where('id', $kadamtId)->delete();

        /*****************************delete img from directory*/

        if ($del) {

            $dirPath = public_path('uploads/khadamat/' . $kadamtId);

            if (!is_dir($dirPath)) {
                return "no";
            }

            if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
                $dirPath .= '/';
            }


            $files = glob($dirPath . '*', GLOB_MARK);
            foreach ($files as $file) {
                if (is_dir($file)) {
                    self::deleteDir($file);
                } else {
                    unlink($file);
                }
            }
            rmdir($dirPath);


            return "yes";

        } else {
            return "no";
        }


    }


    public function ckeditor_upload_news_add(Request $request)
    {


        /**********************start directory*/

        $directoryName = public_path('uploads/news/' . 'aliAli123aliAli3231test');

        /* Check if the directory already exists. */
        if (!is_dir($directoryName)) {
            /* Directory does not exist, so lets create it. */
            mkdir($directoryName, 0755);
        }

        /**********************start directory*/

        if ($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;

            //Upload File
            $request->upload->move(public_path('uploads/news/' . 'aliAli123aliAli3231test'), $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('uploads/news/' . 'aliAli123aliAli3231test' . '/' . $filenametostore);
            $msg = 'باموفقیت بارگذاری شد';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }

    public function ckeditor_upload_employment_add(Request $request)
    {


        /**********************start directory*/

        $directoryName = public_path('uploads/employment/' . 'aliAli123aliAli3231test');

        /* Check if the directory already exists. */
        if (!is_dir($directoryName)) {
            /* Directory does not exist, so lets create it. */
            mkdir($directoryName, 0755);
        }

        /**********************start directory*/

        if ($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;

            //Upload File
            $request->upload->move(public_path('uploads/employment/' . 'aliAli123aliAli3231test'), $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('uploads/employment/' . 'aliAli123aliAli3231test' . '/' . $filenametostore);
            $msg = 'باموفقیت بارگذاری شد';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }

    public function ckeditor_upload_product_add(Request $request)
    {


        /**********************start directory*/

        $directoryName = public_path('uploads/product/' . 'aliAli123aliAli3231test');

        /* Check if the directory already exists. */
        if (!is_dir($directoryName)) {
            /* Directory does not exist, so lets create it. */
            mkdir($directoryName, 0755);
        }

        /**********************start directory*/

        if ($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;

            //Upload File
            $request->upload->move(public_path('uploads/product/' . 'aliAli123aliAli3231test'), $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('uploads/product/' . 'aliAli123aliAli3231test' . '/' . $filenametostore);
            $msg = 'باموفقیت بارگذاری شد';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }

    public function ckeditor_upload_news_edit(Request $request)
    {

        /**********************start get last row id */


        $id_news = $request->id_news;


        /**********************end get last row id */
        /**********************start directory*/

        $directoryName = public_path('uploads/news/' . $id_news);

        /* Check if the directory already exists. */
        if (!is_dir($directoryName)) {
            /* Directory does not exist, so lets create it. */
            mkdir($directoryName, 0755);
        }

        /**********************start directory*/

        if ($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;

            //Upload File
            $request->upload->move(public_path('uploads/news/' . $id_news), $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('uploads/news/' . $id_news . '/' . $filenametostore);
            $msg = 'باموفقیت بارگذاری شد';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }

    public function ckeditor_upload_employment_edit(Request $request)
    {

        /**********************start get last row id */


        $id_employment = $request->id_employment;


        /**********************end get last row id */
        /**********************start directory*/

        $directoryName = public_path('uploads/employment/' . $id_employment);

        if (!is_dir($directoryName)) {

            mkdir($directoryName, 0755);
        }

        /**********************start directory*/

        if ($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;

            //Upload File
            $request->upload->move(public_path('uploads/employment/' . $id_employment), $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('uploads/employment/' . $id_employment . '/' . $filenametostore);
            $msg = 'باموفقیت بارگذاری شد';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }

    public function ckeditor_upload_product_edit(Request $request)
    {

        /**********************start get last row id */


        $id_product = $request->id_product;


        /**********************end get last row id */
        /**********************start directory*/

        $directoryName = public_path('uploads/product/' . $id_product);

        /* Check if the directory already exists. */
        if (!is_dir($directoryName)) {
            /* Directory does not exist, so lets create it. */
            mkdir($directoryName, 0755);
        }

        /**********************start directory*/

        if ($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;

            //Upload File
            $request->upload->move(public_path('uploads/product/' . $id_product), $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('uploads/product/' . $id_product . '/' . $filenametostore);
            $msg = 'باموفقیت بارگذاری شد';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }


    public function news_Dropzone(Request $request)
    {

        /**************************start directory*/


        $directoryName = public_path('uploads/news/' . 'aliAli123aliAli3231test');


        /* Check if the directory already exists. */


        if (!is_dir($directoryName)) {
            /* Directory does not exist, so lets create it. */
            mkdir($directoryName, 0755);
        }

        /**********************end directory*/


        ini_set("memory_limit", "500000");
        ini_set('post_max_size', '500000');
        ini_set('upload_max_filesize', '500000');

        $imageName = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('uploads/news/' . 'aliAli123aliAli3231test'), $imageName);

        return response()->json($imageName);
    }

    public function product_Dropzone(Request $request)
    {

        /**************************start directory*/


        $directoryName = public_path('uploads/product/' . 'aliAli123aliAli3231test');


        /* Check if the directory already exists. */


        if (!is_dir($directoryName)) {
            /* Directory does not exist, so lets create it. */
            mkdir($directoryName, 0755);
        }

        /**********************end directory*/


        ini_set("memory_limit", "500000");
        ini_set('post_max_size', '500000');
        ini_set('upload_max_filesize', '500000');

        $imageName = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('uploads/product/' . 'aliAli123aliAli3231test'), $imageName);

        return response()->json($imageName);
    }

    public function product_lesseon_Dropzone(Request $request)
    {

        /**************************start directory*/


        $directoryName = public_path('uploads/product_lesson/' . 'aliAli123aliAli3231test');


        /* Check if the directory already exists. */


        if (!is_dir($directoryName)) {
            /* Directory does not exist, so lets create it. */
            mkdir($directoryName, 0755);
        }

        /**********************end directory*/


        ini_set("memory_limit", "500000");
        ini_set('post_max_size', '500000');
        ini_set('upload_max_filesize', '500000');

        $imageName = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('uploads/product_lesson/' . 'aliAli123aliAli3231test'), $imageName);

        return response()->json($imageName);
    }


    public function news_Dropzone_edit(Request $request)
    {
        $id = $request->id;

        /**********************end get last row id */

        ini_set("memory_limit", "500000");
        ini_set('post_max_size', '500000');
        ini_set('upload_max_filesize', '500000');

        $imageName = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('uploads/news/' . $id), $imageName);

        return response()->json($imageName);
    }

    public function rezome_Dropzone_edit(Request $request)
    {
        $id_user = Session::get('id_user');

        /**********************end get last row id */

        ini_set("memory_limit", "500000");
        ini_set('post_max_size', '500000');
        ini_set('upload_max_filesize', '500000');

        $imageName = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('uploads/employment_rezome/'), $imageName);

        return response()->json($imageName);
    }

    public function product_lesson_Dropzone_edit(Request $request)
    {
        $id = $request->id;

        /**********************end get last row id */

        ini_set("memory_limit", "500000");
        ini_set('post_max_size', '500000');
        ini_set('upload_max_filesize', '500000');

        $imageName = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('uploads/product_lesson/' . $id), $imageName);

        return response()->json($imageName);
    }

    public function product_Dropzone_edit(Request $request)
    {
        $id = $request->id;

        /**********************end get last row id */

        ini_set("memory_limit", "500000");
        ini_set('post_max_size', '500000');
        ini_set('upload_max_filesize', '500000');

        $imageName = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('uploads/product/' . $id), $imageName);

        return response()->json($imageName);
    }

    public function news_DropzoneRemove(Request $request)
    {


        $img = $request->img;
        /******************************remove from directory*/

        if (isset($img)) {
            $fileName = public_path('uploads/news/aliAli123aliAli3231test/' . $img);
            unlink($fileName);
        }
        return "yes";
    }

    public function product_lesseon_DropzoneRemove(Request $request)
    {


        $img = $request->img;
        /******************************remove from directory*/

        if (isset($img)) {
            $fileName = public_path('uploads/product_lesson/aliAli123aliAli3231test/' . $img);
            unlink($fileName);
        }
        return "yes";
    }


    public function product_DropzoneRemove(Request $request)
    {

        $img = $request->img;
        /******************************remove from directory*/

        if (isset($img)) {
            $fileName = public_path('uploads/product/aliAli123aliAli3231test/' . $img);
            unlink($fileName);
        }
        return "yes";
    }


    public function news_DropzoneRemove_edit(Request $request)
    {


        $id_news = $request->id_news;
        $img_news = $request->img_news;

        if (isset($img_news)) {
            $fileName = public_path('uploads/news/' . $id_news . '/' . $img_news);
            unlink($fileName);
        }
        return "yes";
    }

    public function rezome_DropzoneRemove_edit(Request $request)
    {


        $img_rezome = $request->img_rezome;

        if (isset($img_rezome)) {
            $fileName = public_path('uploads/employment_rezome/' . $img_rezome);
            unlink($fileName);
        }

        /*******************************if user rezome set in employment_user_rezome table */
        $employment_user_rezome = DB::table('tbl_my_employment_user_rezome')
            ->where('rezome_file', $img_rezome)
            ->first();

        if (isset($employment_user_rezome)) {
            DB::table('tbl_my_employment_user_rezome')
                ->where('rezome_file', $img_rezome)->delete();
        }


        return "yes";
    }

    public function get_employ_rezome_sendted(Request $request)
    {

        $employId = $request->employId;


        $query = DB::table('tbl_my_employment_user_rezome')
            ->where('employment_id', $employId)
            ->get();

        return $query;
    }

    public function product_DropzoneRemove_edit(Request $request)
    {


        $id_product = $request->id_product;
        $img_product = $request->img_product;

        if (isset($img_product)) {
            $fileName = public_path('uploads/product/' . $id_product . '/' . $img_product);
            unlink($fileName);
        }
        return "yes";
    }

    public function product_lesseon_DropzoneRemove_edit(Request $request)
    {


        $lesson_id = $request->lesson_id;
        $film_course = $request->film_course;

        if (isset($film_course)) {
            $fileName = public_path('uploads/product_lesson/' . $lesson_id . '/' . $film_course);
            unlink($fileName);
        }
        return "yes";
    }


    public function khadamat_DropzoneRemove_edit(Request $request)
    {


        $id_khadamat = $request->id_khadamat;
        $img_khadamat = $request->img_khadamat;

        if (isset($img_khadamat)) {
            $fileName = public_path('uploads/khadamat/' . $id_khadamat . '/' . $img_khadamat);
            unlink($fileName);
        }
        return "yes";
    }

    public function get_news_img(Request $request)
    {
        $id_news = $request->id_news;

        /*******************************get current news*/
        $curent_news = DB::table('tbl_my_news')
            ->where('id', $id_news)
            ->first();
        $curent_news_img = $curent_news->img_news;


        /*******************************get img*/
        $target_dir = public_path('uploads/news/' . $id_news . '/');

        $fil_list = array();

        $dir = $target_dir;

        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {

                while (($file = readdir($dh)) !== false) {
                    if ($file != '' && $file != '.' && $file != '..' && $file == $curent_news_img) {
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

    public function get_rezome_img(Request $request)
    {


        $id_user = Session::get('id_user');


        if (isset($id_user)) {


            $employmentId = $request->employmentId;


            /*******************************get current news*/
            $employment_user_rezome = DB::table('tbl_my_employment_user_rezome')
                ->where('idUser', $id_user)
                ->where('employment_id', $employmentId)
                ->first();
            $employment_user_rezome = $employment_user_rezome->rezome_file;


            /*******************************get img*/
            $target_dir = public_path('uploads/employment_rezome/');

            $fil_list = array();

            $dir = $target_dir;

            if (is_dir($dir)) {
                if ($dh = opendir($dir)) {

                    while (($file = readdir($dh)) !== false) {
                        if ($file != '' && $file != '.' && $file != '..' && $file == $employment_user_rezome) {
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

    public function get_product_lesson_video(Request $request)
    {
        $lesson_id = $request->lesson_id;

        /*******************************get current news*/
        $curent_product_lesson = DB::table('tbl_my_product_lesson')
            ->where('id', $lesson_id)
            ->first();
        $curent_product_lesson_file = $curent_product_lesson->file;


        /*******************************get img*/
        $target_dir = public_path('uploads/product_lesson/' . $lesson_id . '/');

        $fil_list = array();

        $dir = $target_dir;

        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {

                while (($file = readdir($dh)) !== false) {
                    if ($file != '' && $file != '.' && $file != '..' && $file == $curent_product_lesson_file) {
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

    public function get_product_img(Request $request)
    {
        $id_product = $request->id_product;

        /*******************************get current news*/
        $curent_prodcut = DB::table('tbl_my_product')
            ->where('id', $id_product)
            ->first();
        $curent_prodcut_img = $curent_prodcut->img;


        /*******************************get img*/
        $target_dir = public_path('uploads/product/' . $id_product . '/');

        $fil_list = array();

        $dir = $target_dir;

        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {

                while (($file = readdir($dh)) !== false) {
                    if ($file != '' && $file != '.' && $file != '..' && $file == $curent_prodcut_img) {
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


    public
    function get_contactToLeader(Request $request)
    {

        if (Session::get('id_admin')) {

            return view('admin.contactToleader');
        }
        return redirect('admin/login');

    }

    public
    function get_contactToLeader1(Request $request)
    {
        /* $n = Tbl_my_leadercontact::orderBy('id', 'desc')->paginate(5);
         return $n;*/

        $result = DB::table('tbl_my_leadercontact')
            ->join('tbl_my_options', 'tbl_my_leadercontact.option_cat_id', '=', 'tbl_my_options.id_option')
            ->paginate(5);

        return $result;
    }

    public
    function is_repeated(Request $request)
    {
        $id = $request->id;
        $is_repeated = $request->is_repeated;
        $answer = $request->answer;
        $new_result = Tbl_my_leadercontact::where('id', $id)->first();
        $new_result->is_repeated = $is_repeated;
        $new_result->answer = $answer;
        if ($new_result->update()) {
            return "yes";
        }

    }

    public function email_leader_answer(Request $request)
    {


        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $leaderDesc = $request->leaderDesc;
        $leaderDesc_answer = $request->leaderDesc_answer;

        $message = $leaderDesc . '</b> جواب :  </b>' . $leaderDesc_answer;


        /*address in the server*/
        /*require "../laravel/vendor/autoload.php";*/

        require base_path("vendor/autoload.php");

        $mail = new PHPMailer(true);
        try {


            $mail->SMTPDebug = 0;

            $mail->isSMTP();

            $mail->Host = "smtp.gmail.com";

            $mail->SMTPAuth = true;

            $mail->Username = "agholamnezhad69@gmail.com";

            $mail->Password = "!@#1490199209";

            $mail->SMTPSecure = "tls";

            $mail->Port = 587;

            $mail->setFrom($email, $name);

            $mail->addAddress($email);

            $mail->isHTML(true);

            $mail->Subject = $subject;

            $mail->Body = $message;

            $mail->ContentType = 'text/html';

            $mail->CharSet = 'UTF-8';

            $mail->send();


            return "yes";

        } catch (Exception $e) {

            echo $mail->ErrorInfo;


        }


    }


    public
    function leader_mess_delete(Request $request)
    {
        $ids = $request->ids;


        /***************************************delete from table*/
        DB::table('tbl_my_leadercontact')
            ->WhereIn('id', $ids)->delete();


        return "yes";

    }


    public
    function get_charts()
    {
        $users = Tbl_my_user::where('is_admin', 0)
            ->get();

        $users = count($users);

        /******************start get attr with not value */
        $user_attr = Tbl_my_user_attr::where('type', 1)
            ->get();
        /******************end get attr with not value */

        $optionschart = [0, 0, 0, 0];
        $optionschart_v_tahol = [0, 0];
        $optionschart_ostan_tahsil = array(
            array(
                'id' => '10',
                'title' => 'آذربایجان شرقی',
                'number' => 0
            ),
            array(
                'id' => '173',
                'title' => 'آذربایجان غربی',
                'number' => 0
            ),
            array(
                'id' => '174',
                'title' => 'اردبیل',
                'number' => 0
            ),
            array(
                'id' => '175',
                'title' => 'اصفهان',
                'number' => 0
            ),
            array(
                'id' => '176',
                'title' => 'البرز',
                'number' => 0
            ),
            array(
                'id' => '177',
                'title' => 'ایلام',
                'number' => 0
            ),
            array(
                'id' => '178',
                'title' => 'بوشهر',
                'number' => 0
            ),
            array(
                'id' => '179',
                'title' => 'تهران',
                'number' => 0
            ),
            array(
                'id' => '180',
                'title' => 'چهارمحال و بختیاری',
                'number' => 0
            ),
            array(
                'id' => '181',
                'title' => 'خراسان جنوبی',
                'number' => 0
            ),
            array(
                'id' => '182',
                'title' => 'خراسان رضوی',
                'number' => 0
            ),
            array(
                'id' => '183',
                'title' => 'خراسان شمالی',
                'number' => 0
            ),
            array(
                'id' => '184',
                'title' => 'خوزستان',
                'number' => 0
            ),
            array(
                'id' => '185',
                'title' => 'زنجان',
                'number' => 0
            ),
            array(
                'id' => '186',
                'title' => 'سمنان',
                'number' => 0
            ),
            array(
                'id' => '187',
                'title' => 'سیستان و بلوچستان',
                'number' => 0
            ),
            array(
                'id' => '188',
                'title' => 'فارس',
                'number' => 0
            ),
            array(
                'id' => '189',
                'title' => 'قزوین',
                'number' => 0
            ),
            array(
                'id' => '190',
                'title' => 'قم',
                'number' => 0
            ), array(
                'id' => '191',
                'title' => 'کردستان',
                'number' => 0
            ),
            array(
                'id' => '192',
                'title' => 'کرمان',
                'number' => 0
            ),
            array(
                'id' => '193',
                'title' => 'کرمانشاه',
                'number' => 0
            ),
            array(
                'id' => '194',
                'title' => 'کهگیلویه و بویراحمد',
                'number' => 0
            ),
            array(
                'id' => '195',
                'title' => 'گلستان',
                'number' => 0
            ),
            array(
                'id' => '196',
                'title' => 'گیلان',
                'number' => 0
            ),
            array(
                'id' => '197',
                'title' => 'لرستان',
                'number' => 0
            ),
            array(
                'id' => '198',
                'title' => 'مازندران',
                'number' => 0
            ),
            array(
                'id' => '199',
                'title' => 'مرکزی',
                'number' => 0
            ),
            array(
                'id' => '200',
                'title' => 'هرمزگان',
                'number' => 0
            ),
            array(
                'id' => '201',
                'title' => 'همدان',
                'number' => 0
            ),
            array(
                'id' => '202',
                'title' => 'یزد',
                'number' => 0
            ),


        );
        $optionschart_v_ertebat_ba_etehadiye = array(
            array(
                'id' => '37',
                'title' => 'ارتباطم قطع شده',
                'number' => 0
            ),
            array(
                'id' => '38',
                'title' => 'کم وبیش ارتباط دارم',
                'number' => 0
            ),
            array(
                'id' => '39',
                'title' => 'دورا دور اخبار رو پیگیری میکنم',
                'number' => 0
            ),
            array(
                'id' => '40',
                'title' => 'ارتباط مستمر دارم',
                'number' => 0
            ),
        );
        $optionschart_noe_daneshkah = array(
            array(
                'id' => '165',
                'title' => 'آزاد اسلامی',
                'number' => 0
            ),
            array(
                'id' => '167',
                'title' => 'دولتی',
                'number' => 0
            ),
            array(
                'id' => '168',
                'title' => 'پیام نور',
                'number' => 0
            ),
            array(
                'id' => '169',
                'title' => 'غیر انتفاعی',
                'number' => 0
            ),

            array(
                'id' => '170',
                'title' => 'نظامی و انتظامی',
                'number' => 0
            ),
            array(
                'id' => '171',
                'title' => 'فرهنگیان',
                'number' => 0
            ),
            array(
                'id' => '172',
                'title' => 'علمی-کاربردی',
                'number' => 0
            ),
        );
        $optionschart_v_tahsili = array(
            array(
                'id' => '45',
                'title' => 'فقط دانشگاهی هستم',
                'number' => 0
            ),
            array(
                'id' => '46',
                'title' => 'فقط حوزوی هستم',
                'number' => 0
            ),
            array(
                'id' => '47',
                'title' => 'دانشگاه و حوزه',
                'number' => 0
            ),
            array(
                'id' => '48',
                'title' => 'هیچکدام',
                'number' => 0
            ),


        );
        $optionschart_dar_hale_tahsil = array(
            array(
                'id' => '42',
                'title' => 'هستم',
                'number' => 0
            ),
            array(
                'id' => '43',
                'title' => 'نیستم',
                'number' => 0
            ),
        );
        $optionschart_tahsilat_daneshkah = array(
            array(
                'id' => '73',
                'title' => 'دیپلم',
                'number' => 0
            ),
            array(
                'id' => '74',
                'title' => 'کاردانی',
                'number' => 0
            ),
            array(
                'id' => '75',
                'title' => 'کارشناسی',
                'number' => 0
            ),
            array(
                'id' => '76',
                'title' => 'ارشد',
                'number' => 0
            ),
            array(
                'id' => '77',
                'title' => 'دکتری',
                'number' => 0
            ),
        );
        $optionschart_tahsilat_hoze = array(
            array(
                'id' => '61',
                'title' => 'مقدماتی',
                'number' => 0
            ),
            array(
                'id' => '62',
                'title' => 'سطح 1',
                'number' => 0
            ),
            array(
                'id' => '63',
                'title' => 'سطح 2',
                'number' => 0
            ),
            array(
                'id' => '64',
                'title' => 'سطح 3',
                'number' => 0
            ),
            array(
                'id' => '65',
                'title' => 'سطح 4 و خارج فقه',
                'number' => 0
            ),
        );
        $optionschart_dore_tahsili = array(
            array(
                'id' => '30',
                'title' => '1404-1405',
                'number' => 0
            ),
            array(
                'id' => '31',
                'title' => '1403-1404',
                'number' => 0
            ),
            array(
                'id' => '32',
                'title' => '1402-1403',
                'number' => 0
            ),
            array(
                'id' => '33',
                'title' => '1401-1402',
                'number' => 0
            ),
            array(
                'id' => '34',
                'title' => '1400-1401',
                'number' => 0
            ),
            array(
                'id' => '35',
                'title' => '99-1400',
                'number' => 0
            ),
            array(
                'id' => '206',
                'title' => '98-99',
                'number' => 0
            ),
            array(
                'id' => '207',
                'title' => '97-98',
                'number' => 0
            ),
            array(
                'id' => '208',
                'title' => '96-97',
                'number' => 0
            ),
            array(
                'id' => '209',
                'title' => '95-96',
                'number' => 0
            ),
            array(
                'id' => '210',
                'title' => '94-95',
                'number' => 0
            ),
            array(
                'id' => '211',
                'title' => '93-94',
                'number' => 0
            ),
            array(
                'id' => '212',
                'title' => '92-93',
                'number' => 0
            ),
            array(
                'id' => '213',
                'title' => '91-92',
                'number' => 0
            ),
            array(
                'id' => '214',
                'title' => '90-91',
                'number' => 0
            ),
        );


        if (count($user_attr) != 0) {

            foreach ($user_attr as $key => $row) {

                $attr = $row->ids_attr;
                $attr = explode('/', $attr);

                foreach ($attr as $key1 => $row1) {

                    /*وضعیت نظام وظیفه*/
                    if ($key1 == 0) {
                        switch ($row1) {
                            case "2":
                                $optionschart[0] += 1;
                                break;
                            case "3":
                                $optionschart[1] += 1;
                                break;
                            case "4":
                                $optionschart[2] += 1;
                                break;
                            case "5":
                                $optionschart[3] += 1;
                                break;

                        }
                    }
                    /*وضعیت تاهل*/
                    if ($key1 == 1) {
                        switch ($row1) {
                            case "7":
                                $optionschart_v_tahol[0] += 1;
                                break;
                            case "8":
                                $optionschart_v_tahol[1] += 1;
                                break;
                        }
                    }
                    /*استان محل تحصیل*/
                    if ($key1 == 2) {
                        foreach ($optionschart_ostan_tahsil as $key2 => $value2) {

                            if ($optionschart_ostan_tahsil[$key2]['id'] == $row1) {
                                $optionschart_ostan_tahsil[$key2]['number'] += 1;
                            }

                        }
                    }
                    /*دوره قرارگاه ملی*/
                    if ($key1 == 3) {
                        foreach ($optionschart_dore_tahsili as $key2 => $value2) {

                            if ($optionschart_dore_tahsili[$key2]['id'] == $row1) {
                                $optionschart_dore_tahsili[$key2]['number'] += 1;
                            }

                        }
                    }


                    /*وضعیت ارتباط با اتحادیه*/
                    if ($key1 == 4) {
                        foreach ($optionschart_v_ertebat_ba_etehadiye as $key3 => $value3) {

                            if ($optionschart_v_ertebat_ba_etehadiye[$key3]['id'] == $row1) {
                                $optionschart_v_ertebat_ba_etehadiye[$key3]['number'] += 1;
                            }

                        }
                    }
                    /*تحصیلات حوزی*/
                    if ($key1 == 10) {
                        foreach ($optionschart_tahsilat_hoze as $key3 => $value3) {

                            if ($optionschart_tahsilat_hoze[$key3]['id'] == $row1) {
                                $optionschart_tahsilat_hoze[$key3]['number'] += 1;
                            }

                        }
                    }
                    /*وضعیت تحصیلی */
                    if ($key1 == 6) {
                        foreach ($optionschart_v_tahsili as $key3 => $value3) {

                            if ($optionschart_v_tahsili[$key3]['id'] == $row1) {
                                $optionschart_v_tahsili[$key3]['number'] += 1;
                            }

                        }
                    }
                    /*تحصیلات دانشگاهی */
                    if ($key1 == 7) {
                        foreach ($optionschart_tahsilat_daneshkah as $key3 => $value3) {

                            if ($optionschart_tahsilat_daneshkah[$key3]['id'] == $row1) {
                                $optionschart_tahsilat_daneshkah[$key3]['number'] += 1;
                            }

                        }
                    }
                    /*استان محل تحصیل*/
                    if ($key1 == 15) {
                        foreach ($optionschart_noe_daneshkah as $key3 => $value3) {

                            if ($optionschart_noe_daneshkah[$key3]['id'] == $row1) {
                                $optionschart_noe_daneshkah[$key3]['number'] += 1;
                            }

                        }
                    }
                    /*در حال تحصیل*/
                    if ($key1 == 5) {
                        foreach ($optionschart_dar_hale_tahsil as $key3 => $value3) {

                            if ($optionschart_dar_hale_tahsil[$key3]['id'] == $row1) {
                                $optionschart_dar_hale_tahsil[$key3]['number'] += 1;
                            }

                        }
                    }

                }


            }

        }


        return response()->json([
            'optionschart_v_n_v' => $optionschart,
            'optionschart_v_tahol' => $optionschart_v_tahol,
            'optionschart_ostan_tahsil' => $optionschart_ostan_tahsil,
            'optionschart_v_ertebat_ba_etehadiye' => $optionschart_v_ertebat_ba_etehadiye,
            'optionschart_noe_daneshkah' => $optionschart_noe_daneshkah,
            'optionschart_v_tahsili' => $optionschart_v_tahsili,
            'optionschart_dar_hale_tahsil' => $optionschart_dar_hale_tahsil,
            'optionschart_tahsilat_daneshkah' => $optionschart_tahsilat_daneshkah,
            'optionschart_tahsilat_hoze' => $optionschart_tahsilat_hoze,
            'optionschart_dore_tahsili' => $optionschart_dore_tahsili,
            'usersNumber' => $users,
        ]);
    }


    public function exit()
    {
        $exit_user = Session::forget('id_admin');
        if ($exit_user) {
            return 'true';
        }
    }

    public function user_pdf($id)
    {


        $user = Tbl_my_user::where('id', $id)
            ->first();

//************** start user attr without value
        $user_attr2 = Tbl_my_user_attr::where('id_user', $id)
            ->where('type', 1)
            ->first();

        /* start convert string array to number array*/
        $ids_attr = array();
        $ids_attr = array_map('intval', explode('/', $user_attr2->ids_attr));


        $attr_result = array();
        $attr_savabegh = array();
        $attr_sayer_tashkolha = array();
        $shoghl = array();
        $elmiPazhoheshi = array();
        $resanei = array();
        $moshaveri = array();

        foreach ($ids_attr as $key => $value) {


            $attr = Tbl_my_attr::where('id', $value)->first();


            $attr_val = "";
            $attr_id = "";
            $attr_parent = "";
            if ($attr != null) {
                $attr_val = $attr->attr;
                $attr_id = $attr->id;
                $attr_parent = $attr->parent;
            }

            $attr_result['v_n_v'] = "";
            $attr_result['v_tahol'] = "";
            $attr_result['o_m_t'] = "";
            $attr_result['dore_ghar'] = "";
            $attr_result['v_er_ba_et'] = "";
            $attr_result['d_h_t'] = "";
            $attr_result['v_tahsili'] = "";
            $attr_result['tahsil_danesh'] = "";
            $attr_result['name_danesh'] = "";
            $attr_result['reshte_danesh'] = "";
            $attr_result['tahsil_hoze'] = "";
            $attr_result['os_mah_tahsil_hoze'] = "";
            $attr_result['resh_takh'] = "";
            $attr_result['hoze_khedmat'] = "";
            if ($key == 0)
                $attr_result['v_n_v'] = $attr_val;
            else if ($key == 1)
                $attr_result['v_tahol'] = $attr_val;
            else if ($key == 2)
                $attr_result['o_m_t'] = $attr_val;
            else if ($key == 3)
                $attr_result['dore_ghar'] = $attr_val;
            else if ($key == 4)
                $attr_result['v_er_ba_et'] = $attr_val;
            else if ($key == 5)
                $attr_result['d_h_t'] = $attr_val;
            else if ($key == 6)
                $attr_result['v_tahsili'] = $attr_val;
            else if ($key == 7)
                $attr_result['tahsil_danesh'] = $attr_val;
            else if ($key == 8)
                $attr_result['name_danesh'] = $attr_val;
            else if ($key == 9)
                $attr_result['reshte_danesh'] = $attr_val;
            else if ($key == 10)
                $attr_result['tahsil_hoze'] = $attr_val;
            else if ($key == 11)
                $attr_result['os_mah_tahsil_hoze'] = $attr_val;
            else if ($key == 12)
                $attr_result['resh_takh'] = $attr_val;
            else if ($key == 13)
                $attr_result['hoze_khedmat'] = $attr_val;
            else if ($attr_id >= 16 && $attr_id <= 28)
                array_push($attr_savabegh, $attr_val);
            else if ($attr_parent == 90)
                array_push($attr_sayer_tashkolha, $attr_val);
            else if ($attr_parent == 95)
                array_push($shoghl, $attr_val);
            else if ($attr_parent == 107)
                array_push($elmiPazhoheshi, $attr_val);
            else if ($attr_parent == 111)
                array_push($resanei, $attr_val);
            else if ($attr_parent == 123)
                array_push($moshaveri, $attr_val);

        }

//************** end user attr without value
//************** start user attr with value
        $user_attr_with_value = array();
        $user_attr_with_value = Tbl_my_user_attr::where('id_user', $id)
            ->where('type', 2)
            ->get();

        $attr_result['t_s_s_da_t'] = "";
        $attr_result['kode_daneshjoyi'] = "";
        $attr_result['kode_markaze_khadamt'] = "";
        $attr_result['kode_markaze_modirayat'] = "";
        $attr_result['name_hoze'] = "";
        $attr_result['onvan_daghighe_shoghl'] = "";
        foreach ($user_attr_with_value as $key => $value) {

            if ($value->ids_attr == 15) {
                $attr_result['t_s_s_da_t'] = $value->value;
            }
            if ($value->ids_attr == 78) {
                $attr_result['kode_daneshjoyi'] = $value->value;
            }
            if ($value->ids_attr == 79) {
                $attr_result['kode_markaze_khadamt'] = $value->value;
            }
            if ($value->ids_attr == 80) {
                $attr_result['kode_markaze_modirayat'] = $value->value;
            }
            if ($value->ids_attr == 81) {
                $attr_result['name_hoze'] = $value->value;
            }
            if ($value->ids_attr == 130) {
                $attr_result['onvan_daghighe_shoghl'] = $value->value;
            }


        }


//************** end user attr with value
//************** start user article
        $user_article = array();
        $user_article = Tbl_my_attr_article::where('user_id', $id)
            ->get();
//************** end user article

        //************** start user karafari
        $user_karafarin = array();
        $user_karafarin = Tbl_my_attr_karafrin::where('user_id', $id)
            ->get();
//************** end user karafarin
//************** start savabesh tashkilati
        $savabe_tash = array();
        $savabe_tash = DB::table('tbl_my_attr_savabegh_taskilati')
            ->where('user_id', $id)
            ->leftJoin('tbl_my_ostan', 'tbl_my_attr_savabegh_taskilati.ostan_id', '=', 'tbl_my_ostan.id_ostan')
            ->leftJoin('tbl_my_attr', 'tbl_my_attr_savabegh_taskilati.s_o_dar_s_t', '=', 'tbl_my_attr.id')
            ->get();
//************** start savabesh tashkilati
////************** start user talif
        $user_talif = array();
        $user_talif = Tbl_my_attr_talif::where('user_id', $id)
            ->get();
//**************  end user talif


        $data = [
            'name' => $user->name,
            'family' => $user->family,
            'fatherName' => $user->fatherName,
            'nCod' => $user->nCod,
            'birthday' => $user->birthday,
            'mobile' => $user->mobile,
            'socialmobile' => $user->socialmobile,
            'telhome' => $user->telhome,
            'address' => $user->address,
            'userImg' => $user->img,
            'v_n_v' => $attr_result['v_n_v'],
            'v_tahol' => $attr_result['v_tahol'],
            'o_m_t' => $attr_result['o_m_t'],
            'dore_ghar' => $attr_result['dore_ghar'],
            'v_er_ba_et' => $attr_result['v_er_ba_et'],
            'd_h_t' => $attr_result['d_h_t'],
            'v_tahsili' => $attr_result['v_tahsili'],
            'tahsil_danesh' => $attr_result['tahsil_danesh'],
            'name_danesh' => $attr_result['name_danesh'],
            'reshte_danesh' => $attr_result['reshte_danesh'],
            'tahsil_hoze' => $attr_result['tahsil_hoze'],
            'os_mah_tahsil_hoze' => $attr_result['os_mah_tahsil_hoze'],
            'resh_takh' => $attr_result['resh_takh'],
            'hoze_khedmat' => $attr_result['hoze_khedmat'],
            'attr_savabegh' => $attr_savabegh,
            'attr_sayer_tashkolha' => $attr_sayer_tashkolha,
            'shoghl' => $shoghl,
            'elmiPazhoheshi' => $elmiPazhoheshi,
            'resanei' => $resanei,
            'moshaveri' => $moshaveri,
            't_s_s_da_t' => $attr_result['t_s_s_da_t'],
            'kode_daneshjoyi' => $attr_result['kode_daneshjoyi'],
            'kode_markaze_khadamt' => $attr_result['kode_markaze_khadamt'],
            'kode_markaze_modirayat' => $attr_result['kode_markaze_modirayat'],
            'name_hoze' => $attr_result['name_hoze'],
            'onvan_daghighe_shoghl' => $attr_result['onvan_daghighe_shoghl'],
            'user_article' => $user_article,
            'user_karafarin' => $user_karafarin,
            'user_savabegh_taskilati' => $savabe_tash,
            'user_talif' => $user_talif,

        ];

        /*  return $data;*/


        /*$data["user"] = $user;*/
        /*    $data[0] = $user;*/
        $pdf = PDF::loadView('user_feacher_pdf', $data);
        /* $pdf->SetProtection(['copy', 'print'], '', 'pass');*/
        return $pdf->download('user_feacher_pdf.pdf');


    }


}
