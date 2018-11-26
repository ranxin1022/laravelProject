<?php
    /**
     * Created by PhpStorm.
     * User: rachel.ran
     * Date: 2018/11/3
     * Time: 17:10
     */
    
    namespace App\Models;

    use App\Http\Controllers\UserController;

    /**
     * Class InsCompanyInfo
     * @package App\Model
     * @property int id
     * @property string jfz_create_time
     * @property string jfz_update_time
     * @property string primary_key
     * @property string data_source
     * @property string fund_dc_id
     * @property string company_name
     * @property string company_full_name
     * @property string company_logo
     * @property string company_logo_filename
     * @property string company_profile
     * @property string is_sign_contract
     * @property string certificate_of_authorization
     * @property string certificate_of_authorization_filename
     * @property string hesitation_period
     * @property string registration_time
     * @property float registered_capital
     * @property string site_url
     * @property string company_address
     * @property string service_hotline
     * @property string operation_state
     * @property int weight
     * @property string remark
     * @property int base_currency
     * @property int creator_id
     * @property string creator_name
     * @property int updator_id
     * @property string updator_name
     * @property string update_source
     * @property int isvalid
     *
     */
    class InsCompanyInfo extends BaseModel
    {
        protected $table = 'ins_company_info';
    }