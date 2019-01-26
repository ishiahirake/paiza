<?php
/**
 * Created by IntelliJ IDEA.
 * User: ishiahirake
 * Date: 2019-01-26
 * Time: 14:49
 *
 * 隔離された街のゲート [MISSION LEVEL: B].
 */


/**
 * @param int   $w
 * @param int   $h
 * @param array $moves
 *
 * @return bool
 */
function paiza_check_move(int $w, int $h, array $moves): bool
{
    $cord = ['x' => 0, 'y' => 0];

    foreach ($moves as $move) {
        $key    = in_array($move, ['U', 'D']) ? 'y' : 'x';
        $amount = in_array($move, ['U', 'R']) ? 1 : -1;

        $cord[$key] += $amount;

        if (!(0 <= $cord['x'] && $cord['x'] < $w) ||
            !(0 <= $cord['y'] && $cord['y'] < $h)) {
            return false;
        }
    }

    return true;
}

list($h, $w, $n) = explode(' ', trim(fgets(STDIN)));

$valid = paiza_check_move($w, $h, array_map(
    function () {
        return trim(fgets(STDIN));
    },
    range(1, $n)
));

echo $valid ? 'valid' : 'invalid';
