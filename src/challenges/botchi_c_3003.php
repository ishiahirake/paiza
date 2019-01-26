<?php
/**
 * Created by IntelliJ IDEA.
 * User: ishiahirake
 * Date: 2019-01-26
 * Time: 12:37
 *
 * 学べない学校 [MISSION LEVEL: C]
 */

/**
 * @param $first
 * @param $second
 *
 * @return int
 */
function paiza_rps(string $first, string $second): int
{
    if (($first === 'g' && $second === 'c')
        || ($first === 'c' && $second === 'p')
        || ($first === 'p' && $second === 'g')) {
        return 1;
    }

    if (($first === 'g' && $second === 'p')
        || ($first === 'c' && $second === 'g')
        || ($first === 'p' && $second === 'c')) {
        return 2;
    }

    return 0;
}

$n = fgets(STDIN);

$rounds = array_map(function () {
    return explode(' ', trim(fgets(STDIN)));
}, range(1, $n));

$result = [0, 0, 0];
foreach ($rounds as $round) {
    $winner          = paiza_rps(...$round);
    $result[$winner] += 1;
}

echo "{$result[1]}\n{$result[2]}";
