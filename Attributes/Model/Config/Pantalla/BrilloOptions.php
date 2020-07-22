<?php

namespace Andromeda\Attributes\Model\Config\Pantalla;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class BrilloOptions extends AbstractSource
{

    public function getAllOptions()
    {
        $this->_options = [
            ['label' =>__('250 cd/m²'), 'value' => '250cdm'],
            ['label' =>__('Bright Display'), 'value' => 'bright'],
        ];

        return $this->_options;
    }

}