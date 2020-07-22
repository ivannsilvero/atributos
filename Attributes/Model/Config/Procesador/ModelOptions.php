<?php

namespace Andromeda\Attributes\Model\Config\Procesador;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class ModelOptions extends AbstractSource
{

    public function getAllOptions()
    {
        $this->_options = [
            ['label' =>__('Core i7-10510U'), 'value' => 'i7_10510U'],
            ['label' =>__('Core i7-9700'), 'value' => 'i7_9700'],
            ['label' =>__('Core i5-9400'), 'value' => 'i5_9400'],
            ['label' =>__('Core i3-9100'), 'value' => 'i3_9100']
        ];

        return $this->_options;
    }

}