<?php

namespace Andromeda\Attributes\Model\Config\Accesorios;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class KeyboardMouseKitOptions extends AbstractSource
{

    public function getAllOptions()
    {

        $this->_options = [
            ['label' =>__('Cableado'), 'value' => 'kit_mouse_teclado_cableados']
        ];

        return $this->_options;
    }

}