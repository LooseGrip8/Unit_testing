<?php

class WordCount
{
    public function countWords($sentence)
    {
        return count(explode(" ", $sentence));

        //return berfungsi untuk mengembalikan hasil perhitungan jumlah kata dari function "countWords"
        //explode pada line 7 berfungsi untuk memecah String menjadi Array
        //contohnya pada kalimat yang saya buat 'My name is thoriq and i like music' fungsi explode akan memecah String menjadi array per kata dengan pemisah (Delimiter) spasi (" ", $sentence)
    }
}
