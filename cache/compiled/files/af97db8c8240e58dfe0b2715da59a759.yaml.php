<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/plugins/reading_time/reading_time.yaml',
    'modified' => 1431114975,
    'data' => [
        'enabled' => true,
        'word_per_minute' => 200,
        'minute_label' => 'minute',
        'minutes_label' => 'minutes',
        'second_label' => 'second',
        'seconds_label' => 'seconds',
        'format' => '{minutes_short_count} {minutes_text}, {seconds_short_count} {seconds_text}',
        'round' => 'seconds'
    ]
];
