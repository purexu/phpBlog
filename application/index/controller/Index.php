<?php
namespace app\index\controller;
use app\Common\Controller\BlogBaseController;
class Index extends BlogBaseController{

    public function __construct() {
        parent::__construct();
    }

    //just a test~ finally !!!
    public function index() {
        return "hello ThinkPHP!";
    }
}
