<?php
namespace Pulsestorm\Hellocomposer\Model\ResourceModel;
class Thing extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('pulsestorm_hellocomposer_thing','thing_id');
    }
}
