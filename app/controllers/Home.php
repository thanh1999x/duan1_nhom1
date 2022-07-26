<?php
class Home extends BaseController{
    public function SayHi(){
        $kh = $this->model('Khoahoc');
        $kh->getKH();
        //view
        
    }
    public function Show(){
        echo "Home-Show";
    }
}