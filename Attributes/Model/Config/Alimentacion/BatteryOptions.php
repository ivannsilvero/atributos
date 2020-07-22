<?php

namespace Andromeda\Attributes\Model\Config\Alimentacion;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class BatteryOptions extends AbstractSource
{

    public function getAllOptions()
    {

        $this->_options = [
            ['label' =>__('54Wh'), 'value' => 'bateria_54wh']
        ];

        return $this->_options;
    }

}