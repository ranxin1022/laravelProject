<?php
    /**
     * Created by PhpStorm.
     * User: rachel.ran
     * Date: 2018/11/7
     * Time: 14:21
     */
    
    namespace App\Api\Controllers\V1\Demo;


    use Dingo\Api\Routing\Helpers;
    use Illuminate\Http\Request;
    use Illuminate\Routing\Controller;

    class MemberController extends Controller
    {
        use Helpers;
        
        public function info()
        {
            //return "heeh: " . route('memberinfo');
            
        }
    
        /**
         * @SWG\Get(
         *     path="/demo/member/get",
         *     summary="单用户详细信息",
         *     tags={"member"},
         *     description="返回单个用户的详细信息",
         *     operationId="demo.member.get",
         *     produces={"application/json"},
         *
         *     @SWG\Response(
         *         response=200,description="返回回成功相关说明"
         *     ),
         *     @SWG\Response(
         *         response=401,description="返回失败相关说明",
         *     )
         * )
         */
        public function get(Request $request)
        {
            //return $this->response->error ("this is an error", 404);
            //return $this->response->errorBadRequest();
            if($request->isMethod('get'))
            {
                echo 'hah get adssfd 123';
                //dd($request);
                //echo 'hah get adssfd 456';
            }
        }
    }