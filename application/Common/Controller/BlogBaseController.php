<?php

namespace app\Common\Controller;

use app\index\controller\BaseController;
use think\App;

class BlogBaseController extends BaseController{

    //初始化头部导航
    public function __construct(App $app = null)
    {
        parent::__construct($app);
        $this->blogHeadNav();
    }

    //获取博客头部分类
    protected function blogHeadNav(){
    }
}