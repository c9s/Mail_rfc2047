# RFC2047

rfc2047 decode method

    <?php
    use Mail\rfc2047;

    $subject = '=?big-5?B?..........?=';
    echo rfc2047::decode( $subject ,  'utf-8' );
