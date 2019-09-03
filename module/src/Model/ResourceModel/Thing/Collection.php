<?php
namespace Pulsestorm\Hellocomposer\Model\ResourceModel\Thing;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Pulsestorm\Hellocomposer\Model\Thing','Pulsestorm\Hellocomposer\Model\ResourceModel\Thing');
    }
}
