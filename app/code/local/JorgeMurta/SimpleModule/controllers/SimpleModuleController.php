<?php

class JorgeMurta_SimpleModule_SimplemoduleController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
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
