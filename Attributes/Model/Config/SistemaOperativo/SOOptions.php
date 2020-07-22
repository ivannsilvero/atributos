<?php

namespace Andromeda\Attributes\Model\Config\SistemaOperativo;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class SOOptions extends AbstractSource
{

    public function getAllOptions()
    {
        $this->_options = [
            ['label' =>__('Ubuntu'), 'value' => 'ubuntu'],
            ['label' =>__('Windows 10'), 'value' => 'windows10'],
            ['label' =>__('Kali Linux'), 'value' => 'kalilinux'],
            ['label' =>__('Sin SO'), 'value' => 'noso'],
        ];

        return $this->_options;
    }

}
