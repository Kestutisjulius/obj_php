<?php
namespace Meska\Lokys;
use Old\Super\Senelis;
class Tevas extends Senelis
{
    public function tvarka(){
        echo '<h3>Sutvarkyta</h3>';
    }
    public function __construct()
    {   parent::__construct();
        echo 'Tevo konstruktorius';
    }

}