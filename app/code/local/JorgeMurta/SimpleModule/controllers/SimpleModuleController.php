<?php

class JorgeMurta_SimpleModule_SimpleModuleController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}
