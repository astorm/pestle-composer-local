<?php
namespace Pulsestorm\Hellocomposer\Ui\Component\Listing\DataProviders\Pulsestorm\Hellocomposer;

class Things extends \Magento\Ui\DataProvider\AbstractDataProvider
{    
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        \Pulsestorm\Hellocomposer\Model\ResourceModel\Thing\CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collectionFactory->create();
    }
}
