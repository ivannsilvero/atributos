<?php

namespace Andromeda\Attributes\Model\Config\Conectividad;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class BackUsbOptions extends AbstractSource
{

    public function getAllOptions()
    {

        $this->_options = [
            ['label' =>__('USB 2.0 x 4, USB 3.0 x 2'), 'value' => 'back_4x_usb2_2x_usb3']
        ];

        return $this->_options;
    }

}