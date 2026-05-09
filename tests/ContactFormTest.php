<?php

require_once __DIR__ . '/../process-contact.php';

function assertTest($condition, $testName)
{
    if ($condition) {
        echo "[PASS] " . $testName . PHP_EOL;
        return true;
    }

    echo "[FAIL] " . $testName . PHP_EOL;
    return false;
}

$passed = 0;
$failed = 0;

function runTest($condition, $testName)
{
    global $passed, $failed;

    if (assertTest($condition, $testName)) {
        $passed++;
    } else {
        $failed++;
    }
}

/*
 Jira Ticket: SPMS-2
 Automated test cases for QuickPOS contact form validation
*/

// Test 1: Empty name field
$errors = validateContactForm('', 'user@example.com', 'Hello QuickPOS');
runTest(in_array('Name is required.', $errors), 'Empty name field validation');

// Test 2: Empty email field
$errors = validateContactForm('Ali', '', 'Hello QuickPOS');
runTest(in_array('Email is required.', $errors), 'Empty email field validation');

// Test 3: Invalid email format
$errors = validateContactForm('Ali', 'wrong-email', 'Hello QuickPOS');
runTest(in_array('Invalid email format.', $errors), 'Invalid email format validation');

// Test 4: Empty message field
$errors = validateContactForm('Ali', 'user@example.com', '');
runTest(in_array('Message is required.', $errors), 'Empty message field validation');

// Test 5: Successful form submission validation
$errors = validateContactForm('Ali', 'user@example.com', 'I want QuickPOS details.');
runTest(empty($errors), 'Valid form submission');

// Test 6: Multiple empty fields
$errors = validateContactForm('', '', '');
runTest(count($errors) === 3, 'Multiple empty fields validation');

echo PHP_EOL;
echo "Total Passed: " . $passed . PHP_EOL;
echo "Total Failed: " . $failed . PHP_EOL;

if ($failed > 0) {
    exit(1);
}

exit(0);