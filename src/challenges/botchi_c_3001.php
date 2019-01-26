<?php
/**
 * Created by IntelliJ IDEA.
 * User: ishiahirake
 * Date: 2019-01-26
 * Time: 13:57
 *
 * 荒れ果てたショップ [MISSION LEVEL: C].
 */

/**
 * @param string $text
 * @param int    $length
 *
 * @return string
 */
function paiza_pad($text, int $length): string
{
    return str_pad((string) $text, $length, '0', STR_PAD_LEFT);
}

list($n, $a, $b) = explode(' ', trim(fgets(STDIN)));
foreach (range($a, $b) as $num) {
    echo paiza_pad($num, $n) . PHP_EOL;
}