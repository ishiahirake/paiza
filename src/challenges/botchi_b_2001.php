<?php
/**
 * Created by IntelliJ IDEA.
 * User: ishiahirake
 * Date: 2019-01-26
 * Time: 17:26
 *
 * 高層タワー [MISSION LEVEL: B].
 */

/**
 * @param string $first
 * @param string $second
 *
 * @return string
 */
function paiza_make_word(string $first, string $second): string
{
    $len = min(strlen($first), strlen($second));

    for ($i = $len; $i > 0; $i--) {
        if (substr($first, -$i) === substr($second, 0, $i)) {
            return $first . substr($second, $i);
        }
    }

    return $first . $second;
}

$n = (int) fgets(STDIN);

$result = '';
foreach (range(1, $n) as $_) {
    $result = paiza_make_word($result, trim(fgets(STDIN)));
}

echo $result;
