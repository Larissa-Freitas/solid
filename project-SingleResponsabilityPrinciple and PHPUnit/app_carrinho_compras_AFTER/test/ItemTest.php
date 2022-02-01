<?php
use PHPUnit\Framework\TestCase;
use src\Item;

class ItemTest extends TestCase{
    //Ex of same tests with PHPUnit
    public function testEstadoInicialItem(){

        $item = new Item();

        $this->assertEquals('', $item->getDescricao());
        $this->assertEquals(0, $item->getValor());
    }

    public function testGeteSetDescricao(){
        $descricao = 'cadeira de plástico';

        $item = new Item();
        $item->setDescricao($descricao);
        $this->assertEquals($descricao, $item->getDescricao());
    }

    /**
     * @dataProvider dataValores
     */

    public function testGeteSetValor($valor){
        
        $item = new Item();
        $item->setValor($valor);
        $this->assertEquals($valor, $item->getValor());
    }

    public function dataValores(){
        return [
            [100],
            [-2],
            [0  ]
        ];
    }

}