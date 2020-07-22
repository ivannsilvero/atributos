<?php

namespace Andromeda\Attributes\Model\Config\Multimedia;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class KeyboardOptions extends AbstractSource
{

    public function getAllOptions()
    {

        $this->_options = [
            ['label' =>__('Sí'), 'value' => 'si_teclado'],
            ['label' =>__('No'), 'value' => 'no_teclado']
        ];

        return $this->_options;
    }

}