<?php

namespace Andromeda\Attributes\Model\Config\Accesorios;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class DesktopSpeakersOptions extends AbstractSource
{

    public function getAllOptions()
    {

        $this->_options = [
            ['label' =>__('Sí'), 'value' => 'parlantes_de_escritorio_si']
        ];

        return $this->_options;
    }

}