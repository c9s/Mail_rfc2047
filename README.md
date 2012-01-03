# RFC2047

Since `Mail_mimeDecode` PEAR package decoding doesn't support encoding conversion, 
this module provides better encoding conversion and fallback solution.

extension decode/encode order:

- mbstring extension
- fallback solution


rfc2047 decode method

    <?php
    use Mail\rfc2047;

    $subject = '=?big-5?B?..........?=';
    echo rfc2047::decode( $subject ,  'utf-8' );
