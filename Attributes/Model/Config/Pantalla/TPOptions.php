<?php

namespace Andromeda\Attributes\Model\Config\Pantalla;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class TPOptions extends AbstractSource
{

    public function getAllOptions()
    {
        $this->_options = [
            ['label' =>__('15.6"'), 'value' => '15_6'],
            ['label' =>__('23"'), 'value' => '23'],
            ['label' =>__('21.5"'), 'value' => '21_5']
        ];

        return $this->_options;
    }

}