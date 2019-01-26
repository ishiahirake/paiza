<?php
/**
 * Created by IntelliJ IDEA.
 * User: ishiahirake
 * Date: 2019-01-26
 * Time: 14:21
 *
 * 砂漠の公園 [MISSION LEVEL: B].
 */

/**
 * @param array $matches
 *
 * @return array
 */
function paiza_team_result(array $matches): array
{
    $result = [
        'ws' => 0,
        'wc' => 0,
        'dc' => 0,
        'lc' => 0,
    ];

    return array_reduce($matches, function ($result, $match) {
        switch ($match) {
            case 'W':
                $result['ws'] += 2;
                $result['wc'] += 1;
                break;
            case 'D':
                $result['ws'] += 1;
                $result['dc'] += 1;
                break;
            case 'L':
                $result['lc'] += 1;
                break;
            default:
                // noop
        }

        return $result;
    }, $result);
}

$n = (int) fgets(STDIN);

$champion = [];
foreach (range(1, $n) as $index) {
    $current = array_merge(
        compact('index'),
        paiza_team_result(str_split(trim(fgets(STDIN))))
    );

    if ($current['ws'] > ($champion['ws'] ?? 0)) {
        $champion = $current;
    }
}

echo implode(' ', $champion);
