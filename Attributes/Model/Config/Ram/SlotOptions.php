<?php

namespace Andromeda\Attributes\Model\Config\Ram;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class SlotOptions extends AbstractSource
{

    public function getAllOptions()
    {
        $this->_options = [
            ['label' =>__('1 Zócalo Libre - 1 Zócalo Ocupado'), 'value' => '1z_libre_1z_ocupado']
        ];

        return $this->_options;
    }

}