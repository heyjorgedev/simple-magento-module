<?php

class JorgeMurta_SimpleModule_Adminhtml_SimplemoduleController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        // var_dump(Mage::getSingleton('core/layout')->getUpdate()->getHandles());
        // die(__METHOD__);
        //
        var_dump($this->getLayout()->getUpdate()->getHandles());
        die();

        $this->getLayout()->getBlock('head')->setTitle($this->__("View Logs"));
        $this->renderLayout();
    }

    public function configurationAction()
    {
        $this->loadLayout();
        $this->getLayout()->getBlock('head')->setTitle($this->__("Logs Configuration"));
        $this->renderLayout();
    }
}
