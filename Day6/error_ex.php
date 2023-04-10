<?php

    try {
        // Check exception

    } catch (Exception $e) {
        // Do something when exception occurred

    } finally {
        // Always do something
    }

    class CustomException extends Exception {
        public function customMessage() {
            return "This is a custom message \n";
        }
    }

    function add($a, $b) {
        if (is_array($a)) {
            throw new Exception('Error occurred');
        } else {
            if (!is_numeric($a) || !is_numeric($b)) {
                throw new CustomException();
            }
        }
        return (int)$a + (int)$b;
    }

    try {
        add(5, 'k');
        add(['a' => 1], 'c');
    } catch ( CustomException $e) {
        error_log($e->customMessage(), 3, 'error_log');
    } catch (Exception $e) {
        error_log($e->getMessage(), 3, 'error_log');
    } finally {
         echo 'Completed';
    }


