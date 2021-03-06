<?php
/**
 * @Author: Grove
 * @File  : Bootstrap.php
 * @Date  : 2021/4/25 2:50 下午
 * @last  : Modified by: I will never know what the next difficulty is
 */
/* bootstrap class should be defined under ./application/Bootstrap.php */
/**
 * 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
class Bootstrap extends Yaf_Bootstrap_Abstract{

    public function _initConfig() {
        $config = Yaf_Application::app()->getConfig();
        Yaf_Registry::set("config", $config);

    }

    public function _initDefaultName(Yaf_Dispatcher $dispatcher) {

        $dispatcher->setDefaultModule("Index")->setDefaultController("Index")->setDefaultAction("index");
    }
}