<?php
namespace app\index\controller;
use app\Common\Controller\BlogBaseController;
class Index extends BlogBaseController{

    public function __construct() {
        parent::__construct();
    }

    //test again
    public function index() {
        return "hello ThinkPHP!";
    }
}
