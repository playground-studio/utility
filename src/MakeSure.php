<?php
namespace PlaygroundStudio\Utility;

class MakeSure
{
    public static function thisBarcodeIsNumber($barcode) : string
    {
        $barcode = \str_replace('ๅ', '1', $barcode);
        $barcode = \str_replace('/', '2', $barcode);
        $barcode = \str_replace('-', '3', $barcode);
        $barcode = \str_replace('ภ', '4', $barcode);
        $barcode = \str_replace('ถ', '5', $barcode);
        $barcode = \str_replace('ุ', '6', $barcode);
        $barcode = \str_replace('ึ', '7', $barcode);
        $barcode = \str_replace('ค', '8', $barcode);
        $barcode = \str_replace('ต', '9', $barcode);
        $barcode = \str_replace('จ', '0', $barcode);
        return $barcode;
    }
}