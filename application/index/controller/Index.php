<?php
namespace app\index\controller;
use app\Common\Controller\BlogBaseController;
class Index extends BlogBaseController{

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        //test
        return "hello thinkphp";
    }
}
