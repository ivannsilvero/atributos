<?php

namespace Andromeda\Attributes\Model\Config\SistemaOperativo;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class SOOptions extends AbstractSource
{

    public function getAllOptions()
    {
        $this->_options = [
            ['label' =>__('Windows 10'), 'value' => 'windows10']
        ];

        return $this->_options;
    }

}
