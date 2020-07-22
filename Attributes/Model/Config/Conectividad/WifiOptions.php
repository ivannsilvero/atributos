<?php

namespace Andromeda\Attributes\Model\Config\Conectividad;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class WifiOptions extends AbstractSource
{

    public function getAllOptions()
    {
        $this->_options = [
            ['label' =>__('WiFi 6 - Intel® Wireless-AX 201'), 'value' => 'wifi_6_intel_wireless_ax_201'],
            ['label' =>__('802.11 b/g/n'), 'value' => '802_11_bgn']
        ];

        return $this->_options;
    }

}