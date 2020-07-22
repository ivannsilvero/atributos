<?php

namespace Andromeda\Attributes\Model\Config\Accesorios;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class VesaSupportOptions extends AbstractSource
{

    public function getAllOptions()
    {   

        // Sin usar !!!

        $this->_options = [
            ['label' =>__('Sí'), 'value' => 'soporta_vesa_si']
        ];

        return $this->_options;
    }

}