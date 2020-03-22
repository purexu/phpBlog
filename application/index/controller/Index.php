<?php
namespace app\index\controller;
use app\Common\Controller\BlogBaseController;
class Index extends BlogBaseController{

    public function __construct() {
        parent::__construct();
    }

    //test again again again again again this must success!
    public function index() {
        return "hello ThinkPHP!";
    }
}
