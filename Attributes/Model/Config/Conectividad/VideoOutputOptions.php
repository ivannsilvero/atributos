<?php

namespace Andromeda\Attributes\Model\Config\Conectividad;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class VideoOutputOptions extends AbstractSource
{

    public function getAllOptions()
    {

        $this->_options = [
            ['label' =>__('HDMI x 1, Mini Display Port. Ver 1.3'), 'value' => '1x_hdmi_minidisplayport_ver1_3'],
            ['label' =>__('HDMI x 1'), 'value' => '1x_hdmi'],
            ['label' =>__('HDMI x 1, VGA x 1'), 'value' => '1x_hdmi_1x_vga']
        ];

        return $this->_options;
    }

}