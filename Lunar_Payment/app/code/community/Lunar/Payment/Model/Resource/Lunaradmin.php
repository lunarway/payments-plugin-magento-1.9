<?php

class Lunar_Payment_Model_Resource_Lunaradmin extends Mage_Core_Model_Resource_Db_Abstract {

    /**
     * Initialize resource model
     *
     * @return void
     */
    public function _construct() {
        $this->_init('lunar_payment/lunaradmin', 'id');
    }

}
