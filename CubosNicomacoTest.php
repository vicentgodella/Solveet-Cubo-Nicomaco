<?php
require_once('CubosNicomaco.php');

class CubosNicomacoTest extends PHPUnit_Framework_TestCase
{
    private $cubosNicomaco;

    protected function setUp()
    {
        $this->cubosNicomaco = new CubosNicomaco();
    }

    public function testCalculaCuboDevuelve1SiNumeroEs1()
    {
        $this->assertEquals(1, $this->cubosNicomaco->calculaCubo(1));
    }

    public function testCalculaCuboDevuelve8SiNumeroEs2()
    {
        $this->assertEquals(8, $this->cubosNicomaco->calculaCubo(2));
    }

    public function testCalculaCuboDevuelve27SiNumeroEs3()
    {
        $this->assertEquals(27, $this->cubosNicomaco->calculaCubo(3));
    }

    public function testCalculaCuboDevuelve64SiNumeroEs4()
    {
        $this->assertEquals(64, $this->cubosNicomaco->calculaCubo(4));
    }

    public function testCalculaCuboDevuelve3375SiNumeroEs15()
    {
        $this->assertEquals(3375, $this->cubosNicomaco->calculaCubo(15));
    }
}
?>