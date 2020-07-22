<?php

namespace Andromeda\Attributes\Model\Config\Pantalla;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class ContrasteOptions extends AbstractSource
{

    public function getAllOptions()
    {
        $this->_options = [
            ['label' =>__('1000:1'), 'value' => '169r']
        ];

        return $this->_options;
    }

}