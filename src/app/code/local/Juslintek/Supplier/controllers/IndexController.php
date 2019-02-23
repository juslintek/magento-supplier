<?php
/**
 * Controller description
 *
 * @category   Juslintek
 * @package    Juslintek_Supplier
 * @author     Linas Jusys <jusys.linas@gmail.com>
 */
class Juslintek_Supplier_IndexController extends Mage_Core_Controller_Front_Action
{
    /**
     * indexAction description
     *
     * @return void
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}
