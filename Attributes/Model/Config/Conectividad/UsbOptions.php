<?php

namespace Andromeda\Attributes\Model\Config\Conectividad;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class UsbOptions extends AbstractSource
{

    public function getAllOptions()
    {

        // 2_usb31A_1_usb31C_1_usb20
        // ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
        // 2 x usb 3.1 A, 1 x usb 3.1 C, 1 x usb 2.0

        $this->_options = [
            ['label' =>__('2 USB 3.1 Type A + 1 USB 3.1 Type C, USB 2.0 x 1'), 'value' => '2_usb31A_1_usb31C_1_usb2'],
            ['label' =>__('USB 2.0 x 2, USB 3.0 x 4'), 'value' => '2_usb2_4_usb3']
        ];

        return $this->_options;
    }

}