<?php
/**
 * 秒杀
 */
namespace app\mobile\controller;

use think\Db;
use app\common\model\WxNews;
 
class Seckill extends MobileBase
{
    /**
     * 秒杀
     */
    public function index()
    {
       
        return $this->fetch();
    }

    /**
     * 秒杀 倒计时    
     * 秒杀 结束
     */
    public function detail()
    {
       
        return $this->fetch();
    }

    /**
     * 秒杀 提交 订单
     */
    public function submit()
    {
       
        return $this->fetch();
    }

    /**
     * 秒杀 填写 订单
     */
    public function add()
    {
       
        return $this->fetch();
    }
    
}