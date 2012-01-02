<?php 
namespace Mail;

class rfc2047 
{

    static function decode($subject)
    {
        $decoded = '';
        if( preg_match_all('/=\?([^?]+)\?([bq])\?(.*?)\?=)/i', $subject, $regs ) ) {
            $size = count($regs[1]);
            for( $i = 0 ; $i < $size ; $i++ ) {
                $encoding = $regs[1][ $i ];
                $type = strtolower($regs[2][ $i ]);
                $text = $regs[3][ $i ];

                if( $type == 'q' ) {
                    $text = str_replace('_', ' ', $text);
                    preg_match_all('/=([a-f0-9]{2})/i', $text, $matches);
                    foreach($matches[1] as $value)
                        $text = str_replace('='.$value, chr(hexdec($value)), $text);
                    $decoded .= $text;
                }
                elseif( $type == 'b' ) {
                    $decode = base64_decode( $text );
                    $text = mb_convert_encoding( $decode , 'utf-8', $encoding );
                    $decoded .= $text;
                }
            }
        }
        return $decoded;
    }

}
