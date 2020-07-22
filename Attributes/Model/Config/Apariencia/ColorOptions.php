<?php

namespace Andromeda\Attributes\Model\Config\Apariencia;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class ColorOptions extends AbstractSource
{

    public function getAllOptions()
    {

        $this->_options = [
            ['label' =>__('Negro y Gris Plata'), 'value' => 'color_negro_y_grisplata'],
            ['label' =>__('Negro'), 'value' => 'color_negro']
        ];

        return $this->_options;
    }

}