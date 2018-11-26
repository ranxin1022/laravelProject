<?php

namespace App\Api\Controllers\V1\Demo;

use App\Http\Controllers\Controller;

class SwaggerController extends Controller
{
    
    
    
    
    public function users()
    {

    }


    /**
     * @SWG\Get(
     *     path="/demo/userdetail/{id}",
     *     summary="单用户详细信息",
     *     tags={"users"},
     *     description="返回单个用户的详细信息",
     *     operationId="demo.userdetail",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="",in="query",description="接口需要的参相关信息，字段名，传参方式，是否必须，类型等",required=true,type="integer",
     *     ),
     *     @SWG\Response(
     *         response=200,description="返回回成功相关说明"
     *     ),
     *     @SWG\Response(
     *         response=401,description="返回失败相关说明",
     *     )
     * )
     */
    public function userDetail($id)
    {

    }

    /**
     * @SWG\Get(
     *     path="/demo/index",
     *     summary="用户资料管理",
     *     tags={"users"},
     *     description="用户资料列表",
     *     operationId="user.index",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="page",in="query",description="分页编号,默认1",type="integer",
     *     ),
     *     @SWG\Parameter(
     *         name="pagesize",in="query",description="每页显示条数,默认10",type="integer",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="用户列表",
     *         @SWG\Schema(
     *            type="json",
     *            @SWG\Property(
     *                  property="pages",
     *                  @SWG\Property(
     *                     property="totalnum",type="integer",description="记录总数",
     *                 ),
     *                 @SWG\Property(
     *                     property="totalpage",type="integer",description="总页数",
     *                 ),
     *                 @SWG\Property(
     *                     property="pagesize",type="integer",description="每页显示记录数",
     *                 ),
     *                 @SWG\Property(
     *                     property="page",type="integer",description="当前页数",
     *                 ),
     *            ),
     *            @SWG\Property(
     *               property="lists",
     *               @SWG\Items(
     *                  @SWG\Property(
     *                     property="id",type="integer",description="id",
     *                  ),
     *                  @SWG\Property(
     *                     property="source",type="string",description="数据来源",
     *                  ),
     *                  @SWG\Property(
     *                     property="industry_no",type="integer",description="行业编号",
     *                  ),
     *                  @SWG\Property(
     *                     property="channel_id",type="integer",description="渠道id",
     *                  ),
     *                  @SWG\Property(
     *                     property="name",type="string",description="名称",
     *                  ),
     *              )
     *            ),
     *         ),
     *     ),
     *     @SWG\Response(
     *         response=422,description="error",
     *     )
     * )
     */
    public function index()
    {

    }

    /**
     * @SWG\Get(
     *     path="/demo/list",
     *     summary="测试编辑器生成模板",
     *     tags={"users"},
     *     description="测试编辑器生成模板",
     *     operationId="demo.list",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="id",in="query",description="用户id",required=true,type="integer",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="测试成功",
     *         @SWG\Schema(
     *             type="json",
     *             @SWG\Property(
     *                 property="list",
     *                 @SWG\Property(
     *                     property="name",type="string",description="用户姓名",
     *                 ),
     *             ),
     *         )
     *     ),
     * )
    */
    public function list()
    {

    }

    /**
    * @SWG\Get(
    *     path="/demo/show",
    *     summary="测试编辑器模板",
    *     tags={"users"},
    *     description="测试编辑器模板",
    *     operationId="demo.show",
    *     produces={"application/json"},
    *     @SWG\Parameter(
    *         name="id",in="query",description="id",required=true,type="integer",
    *     ),
    *     @SWG\Parameter(
    *         name="name",in="query",description="姓名",required=true,type="string",
    *     ),
    *     @SWG\Response(
    *         response=200,
    *         description="success",
    *         @SWG\Schema(
    *            type="json",
    *            @SWG\Property(
    *                  property="list1",
    *                  @SWG\Property(
    *                     property="id",type="integer",description="用户id",
    *                 ),
    *                 @SWG\Property(
    *                     property="name",type="string",description="用户姓名",
    *                 ),
    *            ),
    *            @SWG\Property(
    *               property="list2",
    *                  @SWG\Property(
    *                     property="age",type="integer",description="年龄",
    *                  ),
    *                  @SWG\Property(
    *                     property="sex",type="integer",description="性别1男2女",
    *                  ),
    *            ),
    *         ),
    *     )
    * )
    */
    public function show()
    {

    }


}
