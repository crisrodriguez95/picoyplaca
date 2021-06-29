<?php

/**
 * Description of picoyplacaControllerTest
 *
 * @author danyl
 */
use PHPUnit\Framework\TestCase;

class picoyplacaControllerTest extends TestCase {

    public function test_getParameters() {
        require('../Controller/picoyplacaController.php');

        $input = new picoyplacaController;
        $this->assertEquals($input->getParameters('PBC-9521;28-06-2021;08:00'), 'La placa: PBC-9521 no puede circular en esa hora a las 08:00');
    }

}
