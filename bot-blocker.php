<?php
$blocked_bots = [
    'Googlebot',
    'Bingbot',
    'Slurp',
    'DuckDuckBot',
    'Baiduspider',
    'Yandex',
    'Sogou',
    'Exabot',
    'facebot',
    'facebookexternalhit',
    'GPTBot',
    'ChatGPT-User',
    'ClaudeBot',
    'anthropic-ai',
    'CCBot',
    'omgili',
    'Bytespider'
];

$user_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';

foreach ($blocked_bots as $bot) {
    if (stripos($user_agent, $bot) !== false) {
        header('HTTP/1.1 403 Forbidden');
        exit;
    }
}
?>
