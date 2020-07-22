<?php

namespace Andromeda\Attributes\Model\Config\Apariencia;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class WeightOptions extends AbstractSource
{

    public function getAllOptions()
    {

        $this->_options = [
            ['label' =>__('1.6 kg'), 'value' => 'peso_1_6kg'],
            ['label' =>__('6.5 Kg'), 'value' => 'peso_6_5kg'],
        ];

        return $this->_options;
    }

}