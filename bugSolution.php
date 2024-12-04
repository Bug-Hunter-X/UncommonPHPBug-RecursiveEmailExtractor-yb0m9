```php
function processData(array $data): array {
    $result = [];
    foreach ($data as $item) {
        if (is_array($item)) {
            $result = array_merge($result, processData($item));
        } elseif (is_string($item)) {
            // Improved regex for email validation
            if (filter_var($item, FILTER_VALIDATE_EMAIL)) {
                $result[] = $item;
            }
        } else {
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
    123,
    true,
];

$processedData = processData($data);
print_r($processedData);
```