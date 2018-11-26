<?php
    /**
     * Created by PhpStorm.
     * User: rachel.ran
     * Date: 2018/11/3
     * Time: 18:02
     */
    
    namespace App\Api\Controllers\V1\Insurance;
    
    use App\Repositories\CompanyRepository;

    class CompanyController extends BaseController
    {
        /**
         * @SWG\Get(
         *     path="/company/get",
         *     summary="所有用户相关信息",
         *     tags={"users"},
         *     description="返回所有用户的相关基本信息",
         *     operationId="demo.users",
         *     produces={"application/json"},
         *     @SWG\Parameter(
         *         name="tags",in="query",description="接口需要的参相关信息，字段名，传参方式，是否必须，类型等",required=true,type="string",
         *     ),
         *     @SWG\Response(
         *         response=200,description="返回回成功相关说明"
         *     ),
         *     @SWG\Response(
         *         response=401,description="返回失败相关说明",
         *     )
         * )
         */
        public function get()
        {
            $company = new CompanyRepository();
            echo 'haa';
            $array = $company->getCooperativeCompanies(0, 1);
            print_r($array);
            
        }
    }