<?php

namespace Andromeda\Attributes\Model\Config\Conectividad;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class BluetoothOptions extends AbstractSource
{

    public function getAllOptions()
    {
        $this->_options = [
            ['label' =>__('5.1'), 'value' => 'bluetooth_5_1'],
            ['label' =>__('No posee'), 'value' => 'bluetooth_no_posee']
        ];

        return $this->_options;
    }

}