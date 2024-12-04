```php
function processData(array $data): array {
    $result = [];
    foreach ($data as $item) {
        if (is_array($item)) {
            // Handle nested arrays recursively
            $result[] = processData($item);
        } elseif (is_string($item) && strpos($item, '@') !== false) {
            // Extract email address
            preg_match('/\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Z|a-z]{2,}\b/i', $item, $matches);
            if (isset($matches[0])) {
                $result[] = $matches[0];
            }
        } else {
            // Handle other data types or invalid data
            // Log error or handle as needed
            error_log("Invalid data type encountered: " . gettype($item));
        }
    }
    return $result;
}

$data = [
    "John Doe",
    "jane.doe@example.com",
    ["Peter Jones", "peter@domain.net", 123],
    "invalid data",
    "another@email.org",
];

$processedData = processData($data);
print_r($processedData);
```