<?php
namespace Admin\Controller;
use Org\Util\ArrayList;
use Think\Controller;
class EditController extends Controller{

    public function __before_doEdit(){
        echo "before";
    }
    public function doEdit() {
        $date1 = 'date1-------->'.I('post.date1').'</br>';
        $date2 = 'date2-------->'.I('post.date1').'</br>';
        $eating = 'eating-------->'.I('post.eating').'</br>';
        $roast = 'roast-------->'.I('post.roast').'</br>';
        $tea = 'tea-------->'.I('post.tea').'</br>';
        $sleep =  'sleep-------->'.I('post.sleep').'</br>';
//        $this-> success("success");
        $array = new ArrayList();
        $array->add($date1);
        $array->add($date2);
        $array->add($eating);
        $array->add($roast);
        $array->add($tea);
        $array->add($sleep);
        $this->ajaxReturn($array ->toArray(),"JSONP");
    }
    public function __after_doEdit(){
        echo "after";
    }
}