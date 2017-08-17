<?php
/**
 * Forkel CustomShipping
 *
 * @category    Forkel
 * @package     Forkel_CustomShipping
 * @copyright   Copyright (c) 2017 Tobias Forkel (http://www.tobiasforkel.de)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

class Forkel_CustomShipping_Model_Adminhtml_System_Config_Source_Availability
{
    public function toOptionArray()
    {

        return [
            ['value' => 'both', 'label' => 'Backend / Frontend'],
            ['value' => 'backend', 'label' => 'Backend only'],
            ['value' => 'frontend', 'label' => 'Frontend only']
        ];
    }
}