<?php
namespace Pulsestorm\Hellocomposer\Controller\Adminhtml\Thing;

class NewAction extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'Pulsestorm_Hellocomposer::things';
    protected $resultPageFactory;
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}
