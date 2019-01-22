<?php
/**
 * Created by IntelliJ IDEA.
 * User: ishiahirake
 * Date: 2019-01-22
 * Time: 23:03
 *
 * あなたは残高からお金を引き出すプログラムを作成しています。
 * 残高 n と引き出したい額 w が与えられます。
 * この時、引き出し額が残高を上回ってマイナスになる場合は "error" と出力し、
 * 引き出せる場合は残高を出力するプログラムを作成してください。
 */


/**
 * @param int $balance
 * @param int $amount
 *
 *@return int
*/
function paiza_withdrawal(int $balance, int $amount) {
    if ($balance >= $amount) {
        return $balance - $amount;
    }

    throw new InvalidArgumentException("残高が足りません");
}

try {
    echo paiza_withdrawal(fgets(STDIN), fgets(STDIN));
}
catch (InvalidArgumentException $e) {
    echo 'error';
}