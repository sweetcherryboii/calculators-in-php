<?php

$method = readline("what operation would you like to perform? (+ , -, *, /, %)");

if ($method == "+") {
    $first = readline("first number?");
    if (!is_numeric($first)) {
        echo "invalid input, the first number isn't a number!";
    } else {
        $last = readline("second number?");
        if (!is_numeric($last)) {
            echo "invalid input, the second number isn't a number!";
        } else {
            $equals = (intval($first) + intval($last));
            echo "" . $equals . "";
        }
    }
} elseif ($method == "-") {
    $first = readline("first number?");
    if (!is_numeric($first)) {
        echo "invalid input, the first number isn't a number!";
    } else {
        $last = readline("second number?");
        if (!is_numeric($last)) {
            echo "invalid input, the second number isn't a number!";
        } else {
            $equals = (intval($first) - intval($last));
            echo "" . $equals . "";
        }
    }
} elseif ($method == "*") {
    $first = readline("first number?");
    if (!is_numeric($first)) {
        echo "invalid input, the first number isn't a number!";
    } else {
        $last = readline("second number?");
        if (!is_numeric($last)) {
            echo "invalid input, the second number isn't a number!";
        } else {
            $equals = (intval($first) * intval($last));
            echo "" . $equals . "";
        }
    }
} elseif ($method == "/") {
    $first = readline("first number?");
    if (!is_numeric($first)) {
        echo "invalid input, the first number isn't a number!";
    } else {
        $last = readline("second number?");
        if (!is_numeric($last)) {
            echo "invalid input, the second number isn't a number!";
        } else {
            if (intval($last) == 0) {
                echo "dividing by zero is impossible... sorry!";
            } else {
                $equals = (intval($first) / intval($last));
                echo "" . $equals . "";
            }
        }
    }
} elseif ($method == "%") {
    $first = readline("first number?");
    if (!is_numeric($first)) {
        echo "invalid input, the first number isn't a number!";
    } else {
        $last = readline("second number?");
        if (!is_numeric($last)) {
            echo "invalid input, the second number isn't a number!";
        } else {
            $equals = (intval($first) % intval($last));
            echo "" . $equals . "";
        }
    }
} else {
    echo "invalid operation! ";
}

?>
