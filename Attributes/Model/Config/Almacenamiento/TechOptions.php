<?php

namespace Andromeda\Attributes\Model\Config\Almacenamiento;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class TechOptions extends AbstractSource
{

    public function getAllOptions()
    {
        $this->_options = [
            ['label' =>__('Puerto M.2 2280 SATA'), 'value' => 'puerto_m2_2280_sata'],
            ['label' =>__('Puerto SATA 3'), 'value' => 'puerto_sata_3']
        ];

        return $this->_options;
    }

}