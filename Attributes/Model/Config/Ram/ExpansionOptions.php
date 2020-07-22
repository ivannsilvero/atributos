<?php

namespace Andromeda\Attributes\Model\Config\Ram;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class ExpansionOptions extends AbstractSource
{

    public function getAllOptions()
    {
        $this->_options = [
            ['label' =>__('Sí, hasta 32GB'), 'value' => 'hasta_32gb']
        ];

        return $this->_options;
    }

}