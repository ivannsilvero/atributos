<?php

namespace Andromeda\Attributes\Model\Config\Pantalla;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class ROptions extends AbstractSource
{

    public function getAllOptions()
    {
        $this->_options = [
            ['label' =>__('1920 x 1080 FULL HD'), 'value' => '1920'],
            ['label' =>__('1600 x 900 FULL HD'), 'value' => '1600'],
        ];

        return $this->_options;
    }

}