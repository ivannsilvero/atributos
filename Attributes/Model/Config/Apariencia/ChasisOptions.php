<?php

namespace Andromeda\Attributes\Model\Config\Apariencia;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class ChasisOptions extends AbstractSource
{

    public function getAllOptions()
    {

        $this->_options = [
            ['label' =>__('Aluminio y Plástico'), 'value' => 'chasis_aluminio_y_plastico']
        ];

        return $this->_options;
    }

}