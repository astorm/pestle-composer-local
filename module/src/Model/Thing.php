<?php
namespace Pulsestorm\Hellocomposer\Model;
class Thing extends \Magento\Framework\Model\AbstractModel implements \Pulsestorm\Hellocomposer\Api\Data\ThingInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'pulsestorm_hellocomposer_thing';

    protected function _construct()
    {
        $this->_init('Pulsestorm\Hellocomposer\Model\ResourceModel\Thing');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
