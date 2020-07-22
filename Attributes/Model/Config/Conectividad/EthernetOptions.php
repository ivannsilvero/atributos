<?php

namespace Andromeda\Attributes\Model\Config\Conectividad;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class EthernetOptions extends AbstractSource
{

    public function getAllOptions()
    {
        $this->_options = [
            ['label' =>__('10/100/1000Mb'), 'value' => '10_100_1000_mb']
        ];

        return $this->_options;
    }

}