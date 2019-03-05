<?php
/**
 * 竞拍 的 PHP 后端
 */
namespace app\mobile\controller;

use think\Db;
use app\common\model\WxNews;
 
class Auction extends MobileBase
{
     /**
     * 竞拍
     */
    public function index()
    {
       
        return $this->fetch();
    }

    /**
     * 竞拍成功 付款页面
     */
    public function pay()
    {
       
        return $this->fetch();
    }

    /**
     * 开始 竞拍
     */
    public function detail()
    {
       
        return $this->fetch();
    }

  
    
}