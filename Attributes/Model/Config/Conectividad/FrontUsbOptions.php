<?php

namespace Andromeda\Attributes\Model\Config\Conectividad;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class FrontUsbOptions extends AbstractSource
{

    public function getAllOptions()
    {

        $this->_options = [
            ['label' =>__('USB 2.0 x 2'), 'value' => 'front_usb2_x2']
        ];

        return $this->_options;
    }

}