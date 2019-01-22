<?php
/**
 * Created by IntelliJ IDEA.
 * User: ishiahirake
 * Date: 2019-01-22
 * Time: 22:43
 *
 * アンドロイドの生産工場 [MISSION LEVEL: D]
 *
 * ある暗号化された文字列 S が与えられます。
 * 文字列 S のうち奇数文字目を取り出せば解読できることがわかりました。
 *
 * 文字列 S が与えられるので奇数文字目の文字を取り出して解読した文字列を出力してください。
 */


/**
 * @param string $s
 *
 * @return string
 */
function paiza_decode($s) {
    $chars = [];

    foreach (range(0, strlen($s) - 1) as $index) {
        if ($index % 2 === 0) {
            $chars[] = $s[$index];
        }
    }

    return implode('', $chars);
}

echo paiza_decode(fgets(STDIN));