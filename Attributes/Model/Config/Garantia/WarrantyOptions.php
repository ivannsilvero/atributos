<?php

namespace Andromeda\Attributes\Model\Config\Garantia;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class WarrantyOptions extends AbstractSource
{

    public function getAllOptions()
    {

        $this->_options = [
            ['label' =>__('2 años'), 'value' => 'warranty_2years'],
            ['label' =>__('1 año'), 'value' => 'warranty_1year']
        ];

        return $this->_options;
    }

}