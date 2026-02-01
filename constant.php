<?php
define('NAMA', 'Zulkifli Sabili Rosad'); // tidak bisa di masukan kedalam kelas

echo NAMA;
echo '<br>';

const UMUR = 32; // bisa dimasukan kedalam kelas
echo UMUR;


class Coba 
{
    const NAMA = 'Zulkifli';
}
echo '<br>';
echo Coba::NAMA;
echo '<br>';


// magic constant
// 1. __LINE__
// 2. __FILE__
// 3. __DIR__
// 4. __FUNCTION__
// 5. __CLASS__
// 6. __TRAIT__
// 7. __METHOD__
// 8. __NAMESPACE__

function coba()
{
    return __FUNCTION__;
}
echo coba();

echo '<br>';

class Udel
{
    public $a = __CLASS__;
}

$udl = new Udel;
echo $udl->a;

?>