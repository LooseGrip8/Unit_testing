<?php

//pemanggilan framework TestCase phpunit untuk dipakai pada line 9
use PHPUnit\Framework\TestCase;

//Berfungsi untuk memanggil class yang ingin di test, require_once berarti hanya dilakukan sekali
require_once "WordCount.php";

//Class yang dibuat untuk menjalankan testing
class SimpleTest extends TestCase
{
    public function testCountWords()
    {   
        //Panggil class yang akan di test
        $Wc = new WordCount();

        //Masukkan parameter kata, saya memakai 8 kata, ketika ditest harus keluar 8 kata juga
        $TestSentence = "My name is thoriq and i like music";
        $WordCount = $Wc->countWords($TestSentence);

        //Assert equal berarti parameter dan ekspektasinya harus sama, apabila terdapat 8 kata maka ekspektasinya juga harus 8 juga, apabila kurang maka program tidak berjalan
        $this->assertEquals(8, $WordCount);
    }
}
