<?php
/**
 * Live GitHub contribution graph for user dvdzrv
 * No caching — fetched fresh from GitHub each time.
 */

$username = 'dvdzrv';
$url = "https://github.com/users/{$username}/contributions";

$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_TIMEOUT => 10,
    CURLOPT_USERAGENT => 'dvdzrv-site/1.0 (+https://github.com/dvdzrv)',
]);
$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($http_code !== 200 || !$response) {
    echo "<p>Unable to load GitHub contribution graph for {$username}.</p>";
    exit;
}

// Extract the SVG element from the response
if (preg_match('/(<svg[^>]*>.*<\/svg>)/si', $response, $matches)) {
    $svg = $matches[1];
} else {
    echo "<p>GitHub contribution graph not found for {$username}.</p>";
    exit;
}

// Basic sanitization
$svg = preg_replace('/<script\b[^>]*>.*?<\/script>/is', '', $svg);
$svg = preg_replace('/\son\w+\s*=\s*("|\')[^"\']*\1/i', '', $svg);

// Make relative links absolute (e.g., /dvdzrv -> https://github.com/dvdzrv)
$svg = preg_replace_callback('/href="(\/[^"]*)"/i', function($m) {
    return 'href="https://github.com' . $m[1] . '"';
}, $svg);

// Output SVG
header('Content-Type: image/svg+xml');
echo $svg;