<?php

namespace app\index\controller;

use think\App;
use think\Controller;

class BaseController extends Controller{

    //用来初始化一些常用常量
    public function __construct(App $app = null){
        parent::__construct($app);
        include_once dirname(dirname(__FILE__))."/const.php";
        include_once dirname(dirname(_FILE_))."/define.php";
    }

}