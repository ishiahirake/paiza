<?php
/**
 * Created by IntelliJ IDEA.
 * User: ishiahirake
 * Date: 2019-01-26
 * Time: 13:39
 *
 * 機械の総合病院 [MISSION LEVEL: C].
 */

/**
 * @param string $password
 *
 * @return bool
 */
function paiza_check_password(string $password): bool
{
    if (strlen($password) < 6) {
        return false;
    }

    list($incEng, $incNum, $lc, $cc) = [false, false, 0, 0];
    foreach (str_split($password) as $c) {
        if (('a' <= $c && $c <= 'z') || ('A' <= $c && $c <= 'Z')) {
            $incEng = true;
        }
        if (('0' <= $c && $c <= '9')) {
            $incNum = true;
        }

        if ($lc === $c) {
            if (++$cc >= 3) {
                break;
            }
        }
        else {
            $lc = $c;
            $cc = 1;
        }
    }

    return $incEng && $incNum && ($cc < 3);
}

$valid = paiza_check_password(trim(fgets(STDIN)));
echo $valid ? 'Valid' : 'Invalid';
