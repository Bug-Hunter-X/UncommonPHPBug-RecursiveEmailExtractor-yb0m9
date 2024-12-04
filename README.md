# Uncommon PHP Bug: Recursive Email Extraction with Error Handling

This repository demonstrates a PHP function designed to process an array containing various data types (strings, nested arrays, numbers, etc.). The primary goal is to extract email addresses from the input while handling nested arrays recursively and providing robust error handling for invalid data types.

## The Bug
The original function (found in `bug.php`) might encounter an edge case involving unexpected input formats or data types, leading to unexpected behavior. For example, improper use of regular expressions or incorrect handling of recursive calls could result in unexpected output or errors.

## The Solution
The solution (`bugSolution.php`) improves the robustness of the original function by implementing more precise regular expression patterns to ensure accuracy and error handling that gracefully manages situations with unexpected data types, logging errors instead of crashing the application.

## How to Reproduce
1. Clone this repository.
2. Run the `bug.php` script using a PHP interpreter. Note the output and any potential errors.
3. Compare the output to the output from running `bugSolution.php`. This demonstrates the difference and improvement of the solution.

## Additional Notes
This example highlights potential problems that developers may overlook. The focus is on demonstrating robust error handling and the importance of comprehensive testing when processing potentially unstructured or unreliable data.  This bug demonstrates how to handle an uncommon edge case rather than the obvious problems.