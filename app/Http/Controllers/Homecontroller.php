<?php

namespace App\Http\Controllers;

use App\Tbl_my_kadamat_refahi;
use App\Tbl_my_news;
use App\Tbl_my_product;
use App\Tbl_my_user;
use Illuminate\Http\Request;
use App\Tbl_my_employment;
use App\Tbl_my_employment_user_rezome;
use App\Tbl_my_leadercontact;
use App\Tbl_my_options;
use DB;
use Session;

class Homecontroller extends Controller
{
    public function index()
    {
        /*******************************************start news */
        $news = Tbl_my_news::orderBy('id', 'desc')->take(4)->get();
        /*******************************************end news */
        /*******************************************start kadamat refahi */
        $kadamat_refahi = Tbl_my_kadamat_refahi::orderBy('id', 'desc')->take(8)->get();

        /*******************************************end kadamat refahi */
        /*******************************************start product */
        $products = Tbl_my_product::orderBy('id', 'desc')->take(8)->get();

        /*******************************************end product */

        /******************************************* start majale tasviri mighat */
        $products_majale = Tbl_my_product::orderBy('id', 'desc')
            ->where('cat_id', 35)
            ->take(4)
            ->get();

        /******************************************* end majale tasviri mighat */


        return view('view1.index',
            [
                'news' => $news,
                'kadamat_refahi' => $kadamat_refahi,
                'products' => $products,
                'products_majale' => $products_majale,
            ]);
    }

    public function pagenotfound()
    {
        return view('errors.page-404');
    }

    public function single_person()
    {
        return view('view.single_person');
    }

    public function persons()
    {
        return view('view.persons');
    }

    public function persons_detail($id)
    {
        /* ************************************* start  join user with user_attr table*/
        $user = DB::table('tbl_my_user')
            ->where('tbl_my_user.id', $id)
            ->leftJoin('tbl_my_user_attr', 'tbl_my_user.id', '=', 'tbl_my_user_attr.id_user')
            ->where('tbl_my_user_attr.type', 1)
            ->first();


        /* *********************************** start convert string to array *****************/
        if (isset($user->ids_attr)) {
            $ids_attr = $user->ids_attr;
            $ids_attr_arr = explode('/', $ids_attr);
        }
        /* *********************************** start ostan *****************/
        $ostan = "";
        if (!empty($ids_attr_arr[2])) {
            $ostan_id = $ids_attr_arr[2];
            $ostan = DB::table('tbl_my_attr')
                ->where('id', $ostan_id)->first();
            if (isset($ostan)) {
                $ostan = $ostan->attr;
            }
        }


        /* *********************************** start daneshgah *****************/
        $d = "";
        if (!empty($ids_attr_arr[8])) {
            $d_id = $ids_attr_arr[8];
            $d = DB::table('tbl_my_attr')
                ->where('id', $d_id)->first();
            if (isset($d)) {
                $d = $d->attr;
            }
        }


        /* *********************************** start reshte *****************/
        $r = "";
        if (!empty($ids_attr_arr[9])) {
            $r_id = $ids_attr_arr[9];
            $r = DB::table('tbl_my_attr')
                ->where('id', $r_id)->first();

            if (isset($r)) {
                $r = $r->attr;
            }

        }

        /* *********************************** tye university *****************/
        $type_uni = "";
        if (!empty($ids_attr_arr[15])) {
            $type_id = $ids_attr_arr[15];

            $type_uni = DB::table('tbl_my_attr')
                ->where('id', $type_id)->first();

            if (isset($type_uni)) {
                $type_uni = $type_uni->attr;
            }
        }


        return view('view.single_person', ['user' => $user,
            'ostan' => $ostan,
            'd' => $d
            , 'r' => $r
            , 'type_uni' => $type_uni
        ]);
    }

    public function nashriye()
    {
        $all_nashriye = DB::table('tbl_my_nashriye')->get()
            ->groupBy('groupp');
        return view('view.nashriye', ['all_nashriye' => $all_nashriye]);

    }

    public function get_nashriye()
    {
        $n = DB::table('tbl_my_nashriye')->get();
        $lastRecord = DB::table('tbl_my_nashriye')
            ->orderBy('id', 'desc')->first();


        $all_nashriye = DB::table('tbl_my_nashriye')->get()
            ->groupBy('groupp');

        return response()->json([
            'all_nashriye' => $n,
            'lastRecord' => $lastRecord,
            'all_nashriye' => $all_nashriye,
        ]);

    }

    public function nashriye_Dropzone(Request $request)
    {
        ini_set("memory_limit", "500000");
        ini_set('post_max_size', '500000');
        ini_set('upload_max_filesize', '500000');

        $imageName = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('nashriye'), $imageName);

        return response()->json($imageName);
    }

    /*   public function news_Dropzone(Request $request)
       {
           ini_set("memory_limit", "500000");
           ini_set('post_max_size', '500000');
           ini_set('upload_max_filesize', '500000');

           $imageName = time() . '.' . $request->file->getClientOriginalExtension();
           $request->file->move(public_path('news'), $imageName);

           return response()->json($imageName);
       }*/

    /*public function news_DropzoneRemove(Request $request)
    {
        $img = $request->img;


        if (isset($img)) {
            $fileName = public_path('news' . '/' . $img);
            unlink($fileName);
        }
        return "yes";
    }*/

    /*public function get_news_img(Request $request)
    {
        $id_news = $request->id_news;


        $curent_news = DB::table('tbl_my_news')
            ->where('id', $id_news)
            ->first();
        $curent_news_img = $curent_news->img_news;



        $target_dir = public_path('news' . '/');

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

    }*/

    /*    public function get_product_img(Request $request)
        {
            $id_news = $request->id_news;


            $curent_news = DB::table('tbl_my_product')
                ->where('id', $id_news)
                ->first();
            $curent_news_img = $curent_news->img;



            $target_dir = public_path('news' . '/');

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

        }*/


    public function get_kadamat_refahi_search(Request $request)
    {
        $search = $request->search;

        if (isset($search)) {
            $query = DB::table('tbl_my_kadamat_refahi')
                ->orderBy('id', 'desc')
                ->where('title', 'like', '%' . $search . '%')
                ->get();
            return $query;
        }
    }


    public function get_product_refahi_search(Request $request)
    {
        $search = $request->search;

        if (isset($search)) {
            $query = DB::table('tbl_my_product')
                ->orderBy('id', 'desc')
                ->where('title', 'like', '%' . $search . '%')
                ->where('cat_id', '!=', 35)
                ->get();
            return $query;
        }
    }

    public function get_product_refahi_search_majale(Request $request)
    {
        $search = $request->search;

        if (isset($search)) {
            $query = DB::table('tbl_my_product')
                ->orderBy('id', 'desc')
                ->where('title', 'like', '%' . $search . '%')
                ->where('cat_id', 35)
                ->get();
            return $query;
        }
    }

    public function get_employment()
    {
        /*****************************end special employment */


        $specials = DB::table('tbl_my_employment')
            ->where('is_special', 1)
            ->leftJoin('tbl_my_options', 'tbl_my_employment.category', '=', 'tbl_my_options.id_option')
            ->leftJoin('tbl_my_ostan', 'tbl_my_employment.state', '=', 'tbl_my_ostan.id_ostan')
            ->get();
        /*****************************end special employment */

        return view('view1.employment', ['specials' => $specials]);

    }


    public function get_employ_Dropzone(Request $request)
    {


        /*******************************************************/
        ini_set("memory_limit", "500000");
        ini_set('post_max_size', '500000');
        ini_set('upload_max_filesize', '500000');

        $imageName = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('employment'), $imageName);
        /********************************************************************/


        return response()->json($imageName);

    }

    public function ckUpload(Request $request)
    {
        $this->validate($request, [
            'upload' => ['required', 'image']
        ]);

        try {
            $file = $request->upload;
            $path = str_replace('local/public/', '', public_path('employCheckEditor'));
            $name = round(microtime(true) * 1000) . '-' . rand(100000, 999999) . '.';
            //Display File Mime Type
            $fileMimeType = $file->getMimeType();
            $name = $name . str_after($fileMimeType, '/');

            $file->move(($path), $name);

            return response()->json(['fileName' => $name, 'uploaded' => 1, 'url' => 'https://mysite/img/ckeditor/' . $name], 200);
        } catch (\Exception $exception) {
            return httpStatusCode::status500();
        }
    }

    public function get_all_employment(Request $request)
    {
        $e = DB::table('tbl_my_employment')->get();
        return response()->json(['e' => $e]);
    }

    public function employment_detail($id)
    {

        $employment_detail = DB::table('tbl_my_employment')
            ->where('id', $id)
            ->first();
        return view('view.employmentSingle', ['e_d' => $employment_detail]);
    }

    public function employment_rezome_save(Request $request)
    {

        $rezome_file = $request->rezome_file;
        /*********************** start if is exist before this row tell exist*/
        $rezome = Tbl_my_employment_user_rezome::where('rezome_file', $request->rezome_file)
            ->first();

        if (isset($rezome)) {
            return "exist";

        }

        /*********************** start if is exist before this row tell exist*/


        $employment_id = $request->emId;
        $currentTime = $request->currentTime;
        $userId = $request->userId;

        $attr = new Tbl_my_employment_user_rezome();
        $attr->employment_id = $employment_id;
        $attr->idUser = $userId;
        $attr->rezome_file = $rezome_file;
        $attr->currentTime = $currentTime;


        if ($attr->save()) {
            return "yes";
        }

    }

    public function login(Request $request)
    {
        /*     $user = Tbl_my_user::where('user_name', $request->username)
                 ->where('pass', $request->pass)
                 ->first();
             if ($user) {
                 if ($user->is_admin) {
                     Session::put('username', $request->username);
                     return redirect('admin/index');
                 } else {
                     Session::put('username', $request->username);
                     return redirect('user/index');
                 }
             }

             return redirect('admin/login')->with('err', 1);*/
    }

    public function exit()
    {
        $exit_user = Session::forget('id_user');
        if ($exit_user) {
            return 'true';
        }
    }

    public function contactToLeader()
    {
        return view('view.contactToLeader');
    }

    public function contactToLeader1()
    {
        $n = DB::table('tbl_my_options')
            ->where('keyy', "leader_cat")
            ->get();


        $r = DB::table('tbl_my_leadercontact')
            ->orderBy('id', 'desc')
            ->where('is_repeated', 1)
            ->get();


        return response()->json([
            'cats_leader' => $n,
            'repeated_mess' => $r
        ]);
    }

    public function save_leaderComment(Request $request)
    {
        $leader_cat_id = $request->leader_cat_id;
        $leaderTitle = $request->leaderTitle;
        $leaderTel = $request->leaderTel;
        $leaderDesc = $request->leaderDesc;
        $leaderEmail = $request->leaderEmail;


        $attr = new tbl_my_leadercontact();
        $attr->name = $leaderTitle;
        $attr->tel = $leaderTel;
        $attr->descc = $leaderDesc;
        $attr->option_cat_id = $leader_cat_id;
        $attr->email = $leaderEmail;
        if ($attr->save()) {
            return "yes";
        }
    }

    public function get_news()
    {
        return view('view1.news');
    }

    public function get_news1()
    {
        $news = DB::table('tbl_my_news')
            ->orderBy('id', 'desc')
            ->paginate(5);

        return $news;


    }

    public function get_news_single($id)
    {


        $n = DB::table('tbl_my_news')
            ->where('id', $id)
            ->first();

        /*10 last record*/

        $last10 = Tbl_my_news::orderBy('id', 'desc')->take(10)->get();
        $last6 = Tbl_my_news::orderBy('id', 'desc')->take(6)->get();

        return view('view1.news_single', ['news' => $n,
            "last10" => $last10,
            "last6" => $last10]);
    }


    public function get_shop()
    {


        return view('view1.shop');
    }


    public function get_shop_single($id)
    {
        /*********************tbl_my_kadamat_refahi****************/

        $q_kr = DB::table('tbl_my_kadamat_refahi')
            ->where('id', $id)
            ->first();

        /*********************tbl_my_kadamat_refahi_imgs****************/

        $q_kr_imgs = DB::table('tbl_my_kadamat_refahi_imgs')
            ->where('khadamat_id', $id)
            ->get();


        return view('view1.shop_single',
            [
                'id' => $id,
                'q_kr' => $q_kr,
                'q_kr_imgs' => $q_kr_imgs

            ]);
    }

    public function get_shop_single_product($id)
    {
        /*********************tbl_my_kadamat_refahi****************/

        $product_single = DB::table('tbl_my_product')
            ->where('id', $id)
            ->first();


        return view('view1.shop_single_prodcut',
            [
                'product_single' => $product_single,
            ]);
    }

    public function get_shop_product()
    {
        return view('view1.shop_product');
    }

    public function get_shop_product_majale()
    {
        return view('view1.shop_product_majale');
    }

    public function get_employment_single($id)
    {

        $id_user = Session::get('id_user');


        if (!isset($id_user)) {
            return redirect('user/login');
        }

        $user = DB::table('tbl_my_user')
            ->where('id', $id_user)
            ->first();

        if ($id_user)

            /* print_r($user);

             return;*/

            $query = DB::table('tbl_my_employment')
                ->where('tbl_my_employment.id', $id)
                ->leftJoin('tbl_my_options', 'tbl_my_employment.category', '=', 'tbl_my_options.id_option')
                ->leftJoin('tbl_my_ostan', 'tbl_my_employment.state', '=', 'tbl_my_ostan.id_ostan')
                ->first();


        return view('view1.employment_single', [
            'employ_single' => $query,
            'user' => $user
        ]);


    }

    public function basket()
    {
        return view('view1.basket');
    }


}
