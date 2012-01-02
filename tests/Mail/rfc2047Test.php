<?php

namespace Mail;
use PHPUnit_Framework_TestCase;
use Exception;

class Rfc2047Test extends PHPUnit_Framework_TestCase
{
    function testFunc()
    {
        $subjects[] = '=?UTF-8?b?Qmx1ZVQgLSBNYXR0aGV3IExpZW4gKEJsdWVU5rKS5pyJ6KaB6K6K5b6u?= =?UTF-8?q?=E5=8F=88=E8=BB=9F=29_has_added_you_as_a_friend_on_Plurk?=';
        $subjects[] = '=?UTF-8?Q?View_=E2=80=9CAntenna_Sports_UI=E2=80=9D_on_iWork.com_Beta?=';
        $subjects[] = '=?UTF-8?Q?View_=E2=80=9CAntenna_Sports_UI=E2=80=9D_on_iWork.com_Beta?=';
        $subjects[] = '=?Big5?B?UmU6IERyb3Bib3ggq9ymbqXOs+GhQaRqrmGn5MDJrte3fKvcpOg=?= =?Big5?B?rbGhQbPCt9Cq4a3TpECkwMTBrN2kQKRVoUGkQKTAxMG0TrjLpm6kRg==?=';
        $subjects[] = '=?Big5?B?UmU6IHN0b3J5IG9ubGluZaZwqke8dqT5qrqw3cNE?=';
        $subjects[] = '=?Big5?B?pWikV678rXGnQLCqr8Wm56pBKEwp?=';
        $subjects[] = '=?big5?B?qESnVahEsc9DKysgqrqkQKjHpHCw3cNE?=';

        foreach( $subjects as $subject ) {
            ok( rfc2047::decode( $subject ) );
        }
    }
}


