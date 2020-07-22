<?php

namespace Andromeda\Attributes\Model\Config\Alimentacion;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class ExternalSourceOptions extends AbstractSource
{

    public function getAllOptions()
    {

        $this->_options = [
            ['label' =>__('Cargador 220V-65W. 19Volt. 3.42A.'), 'value' => 'cargador_220v_65w_19volt_3_42a']
        ];

        return $this->_options;
    }

}