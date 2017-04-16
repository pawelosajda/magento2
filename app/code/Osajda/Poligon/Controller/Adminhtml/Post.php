<?php

namespace Osajda\Poligon\Controller\Adminhtml;

/**
 * Description of Crud
 *
 * @author pawel
 */
abstract class Post extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'Osajda_Poligon:post';
    
    /**
     * @param \Magento\Backend\Model\View\Result\Page $resultPage
     * @return \Magento\Backend\Model\View\Result\Page
     */
    protected function _initPage(\Magento\Backend\Model\View\Result\Page $resultPage)
    {
        $resultPage->setActiveMenu('Osajda_Poligon::post')
            ->addBreadcrumb(__('Osajda Poligon'), __('Osajda Poligon'))
            ->addBreadcrumb(__('Post'), __('Post'));
        return $resultPage;
    }
}
