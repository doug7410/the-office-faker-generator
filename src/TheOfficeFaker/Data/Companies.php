<?php

namespace TheOfficeFaker\Data;

class Companies implements DataInterface
{
    public static function get(): array
    {
        return [
            'Dunder Mifflin',
            'Sabre',
            'Michael Scott Paper Company',
            'Prince Family Paper',
            'Saticoy Steel',
            'Shoe-La-La',
            'Steamtown Mall',
            'Here Comes Treble',
            'Dunmore High School',
            'WUPHF.com',
            'Schrute Farms',
            'Serenity by Jan',
        ];
    }

}