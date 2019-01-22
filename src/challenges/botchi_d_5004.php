<?php
/**
 * Created by IntelliJ IDEA.
 * User: ishiahirake
 * Date: 2019-01-22
 * Time: 22:30
 *
 *
 *電波でデータ通信するプログラムが壊れてしまっており、あなたはそれを直そうとしています。
 * n 回の通信をしたとき、受信した各データ各電波強度 d_i が与えられます。
 *   各電波強度 d_i は 1 から 9 の整数で表され、 5 以下では通信に失敗します。
 * n 回の通信のうち通信に成功した回数を出力してください。
 */

// 自分の得意な言語で
// Let's チャレンジ！！

$input_lines = fgets(STDIN);
$radio_waves = fgets(STDIN);

$validate_radio_waves_count = count(
    array_filter(explode(' ', $radio_waves), function ($radio_wave) {
        return $radio_wave > 5;
    })
);

echo $validate_radio_waves_count;

