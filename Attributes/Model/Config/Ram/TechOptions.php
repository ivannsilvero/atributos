<?php

namespace Andromeda\Attributes\Model\Config\Ram;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class TechOptions extends AbstractSource
{

    public function getAllOptions()
    {
        $this->_options = [
            ['label' =>__('DDR4 2400MHZ'), 'value' => 'ddr4_2400mhz'],
            ['label' =>__('DDR4'), 'value' => 'ddr4']
        ];

        return $this->_options;
    }

}