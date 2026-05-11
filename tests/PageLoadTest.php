<?php

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
 Jira Ticket: SPMS-3 (Example)
 Automated test case for QuickPOS page load response
*/

echo "Running Page Load Test..." . PHP_EOL;

// Test 1: Basic Availability Test (Page Load Response)
// We include index.php and check if it generates HTML content without fatal errors.
ob_start();
include __DIR__ . '/../index.php';
$output = ob_get_clean();

// If output is not empty and contains standard HTML tags, we assume the page loaded successfully
$pageLoaded = !empty($output) && strpos($output, '<html') !== false;

runTest($pageLoaded, 'Page load response (basic availability test) for index.php');

echo PHP_EOL;
echo "Total Passed: " . $passed . PHP_EOL;
echo "Total Failed: " . $failed . PHP_EOL;

if ($failed > 0) {
    exit(1);
}

exit(0);
