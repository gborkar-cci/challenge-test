<?php
require_once("Classes\class.helper.php");

use PHPUnit\Framework\TestCase;

class ChallengeTest extends TestCase
{
    private $helper;
 
    protected function setUp()
    {
        $this->helper = new Helper();
    }

    protected function tearDown()
    {
        $this->helper = NULL;
    }

    public function addDataProvider() {
        return array(
            array(3,"3 - Kadeaa."),
            array(5,"5 - IT."),
            array(6,"6 - Kadeaa."),
            array(15,"15 - Kadeeans."),
            array(25,"25 - IT."),
            array(45,"45 - Kadeeans."),
            array(100,"100 - IT."),
        );
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testFindMultiples($param, $expected)
    {
        $result = $this->helper->getStringForNumber($param);
        $this->assertEquals($expected, $result);
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testFindMultiplesSingleIf($param, $expected)
    {
        $result = $this->helper->getStringForNumberSingleIF($param);
        $this->assertEquals($expected, $result);
    }
}
?>