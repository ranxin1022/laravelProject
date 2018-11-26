<?php
    /**
     * Created by PhpStorm.
     * User: rachel.ran
     * Date: 2018/11/6
     * Time: 20:15
     */
    
    namespace App\Api\Controllers\V1;
    
    
    class V1Controller
    {
        /**
         * @SWG\Swagger(
         *     schemes={"http","https"},
         *     host=L5_SWAGGER_CONST_HOST,
         *     @SWG\SecurityScheme(
         *         securityDefinition="client",
         *         type="apiKey",
         *         name="Authorization",
         *         in="header",
         *     ),
         *     security={{"client": {}},},
         *     @SWG\Info(
         *         version="1.0.0",
         *         title="laravel项目接口文档",
         *         description="laravel项目API接口文档",
         *         @SWG\Contact(
         *             name="laravelProject",
         *             email="rachel.ran@jfz.com"
         *         )
         *     ),
         * )
         */
    }