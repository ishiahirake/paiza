<?php
/**
 * Created by IntelliJ IDEA.
 * User: ishiahirake
 * Date: 2019-01-26
 * Time: 14:09
 *
 * 荒れ果てたオフィス [MISSION LEVEL: D].
 */

/**
 * @param string $file
 * @param int    $importance
 *
 * @return bool
 */
function paiza_is_important(string $file, int $importance = 3): bool
{
    return $importance === 3;
}

$n = fgets(STDIN);

foreach (range(1, $n) as $_) {
    $item = explode(' ', trim(fgets(STDIN)));
    if (paiza_is_important(...$item)) {
        echo "{$item[0]}" . PHP_EOL;
    }
}

