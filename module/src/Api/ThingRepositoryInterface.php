<?php
namespace Pulsestorm\Hellocomposer\Api;

use Pulsestorm\Hellocomposer\Api\Data\ThingInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

interface ThingRepositoryInterface 
{
    public function save(ThingInterface $page);

    public function getById($id);

    public function getList(SearchCriteriaInterface $criteria);

    public function delete(ThingInterface $page);

    public function deleteById($id);
}
