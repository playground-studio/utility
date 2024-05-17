<?php
namespace PlaygroundStudio\Utility;

class Uncategories
{
    /**
     * updateFileContent
     *
     * 2023-12-22 ปรับปรุงฟังก์ชันนี้กับบอม เพื่อให้การแก้ไขไฟล์ต้นฉบับของ Laravel ทำได้ง่ายและประยุกต์ใช้กับไฟล์อื่น ๆ ได้
     *
     * @author Napadon Kaengkanna <napadon@playground.in.th>
     * @author Manuschanok Kalapukdee <manuschanok.k@nsru.ac.th>
     *
     * @param string        $path           ไฟล์ต้นฉบับที่ต้องการแก้ไขข้อความ
     * @param string|null   $needle         ข้อความที่ต้องการแทนที่ (หากระบุเป็น null จะเขียนไว้ที่ส่วนท้ายสุดของไฟล์แทน)
     * @param string        $replace        ข้อความที่จะนำไปแทนที่ข้อความเดิม
     * @param string|null   $condition      เงื่อนไขในการตัดสินใจเขียน หากมีข้อความนี้อยู่แล้วระบบจะไม่เขียนไฟล์ หากไม่ระบุจะใช้ข้อความใน $replace มาตรวจสอบ
     * @return bool
     */
    public static function updateFileContent(string $path, string|null $needle, string $replace, string|null $condition = null){
        $condition  = $condition ?? $replace;
        $content    = file_get_contents($path);
        $result     = false;
        if( ! str_contains($content, $condition) ) {
            if( ! empty($needle) ) {
                $content = str_replace($needle, $replace, $content);
            } else {
                $content .= "\n" . $replace;
            }
            $result = file_put_contents($path, $content);
        }
        return $result;
    }
}