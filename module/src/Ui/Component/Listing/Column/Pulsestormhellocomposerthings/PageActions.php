<?php
namespace Pulsestorm\Hellocomposer\Ui\Component\Listing\Column\Pulsestormhellocomposerthings;

class PageActions extends \Magento\Ui\Component\Listing\Columns\Column
{
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource["data"]["items"])) {
            foreach ($dataSource["data"]["items"] as & $item) {
                $name = $this->getData("name");
                $id = "X";
                if(isset($item["thing_id"]))
                {
                    $id = $item["thing_id"];
                }
                $item[$name]["view"] = [
                    "href"=>$this->getContext()->getUrl(
                        "pulsestorm_hellocomposer_things/thing/edit",["thing_id"=>$id]),
                    "label"=>__("Edit")
                ];
            }
        }

        return $dataSource;
    }    
    
}
