<?php
    /**
     * Created by PhpStorm.
     * User: rachel.ran
     * Date: 2018/11/3
     * Time: 15:50
     */
    
    namespace App\Api\Controllers\V1\Demo;
    use DB;
    use Illuminate\Routing\Controller;

    class UserController extends Controller
    {
        public function index()
        {
            $infos = DB::table('ins_company_info')->get();
            
            return view('user.index', ['infos'=> $infos]);
        }
        
    }