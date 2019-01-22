<?php
/**
 * Created by IntelliJ IDEA.
 * User: ishiahirake
 * Date: 2019-01-22
 * Time: 23:47
 *
 * 荒れ果てた警察署 [MISSION LEVEL: D]
 *
 * あなたは 0 から 9 の数字を 3 つ入力すると開く扉を開こうとしています。
 * 鍵の番号は左から 2 つまで判明しています。 3 つ目に関しては以下の法則で決まることがわかりました。
 *
 * ・2 つ目までをすべて足す
 * ・足したものを 10 で割ったときの余り
 *
 * 2 つ目までの数字が与えられるので 3 つ目を計算し出力してください。
 */

/**
 * @param int $n1
 * @param int $n2
 *
 * @return int
 */
function paiza_secret(int $n1, int $n2): int {
    return ($n1 + $n2) % 10;
}

// Or

//function paiza_secret(int $n1, int $n2): int {
//    if (($sum = $n1 + $n2) >= 10) {
//        return $sum - 10;
//    }
//
//    return $sum;
//}

echo paiza_secret(...explode(' ', fgets(STDIN)));
