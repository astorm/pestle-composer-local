<?php
namespace Pulsestorm\Hellocomposer\Controller\Adminhtml\Thing;

class Index extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'Pulsestorm_Hellocomposer::things';
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('*/index/index');
        return $resultRedirect;
    }
}
