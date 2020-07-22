<?php

namespace Andromeda\Attributes\Model\Config\Procesador;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class FamiliaOptions extends AbstractSource
{

    public function getAllOptions()
    {
        $this->_options = [
            ['label' =>__('Intel Core i7'), 'value' => 'i7'],
            ['label' =>__('Intel Core i5'), 'value' => 'i5'],
            ['label' =>__('Intel Core i3'), 'value' => 'i3'],
        ];

        return $this->_options;
    }

}