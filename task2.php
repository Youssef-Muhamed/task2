<?php

function replaceChar($char1,$char2 = null){
    if($char2 == null) {
        $newChar = str_replace('a','b',$char1);
        return str_replace('z','a',$newChar);
    } else {
        return str_replace('a','b',$char1) . str_replace('z','a',$char2) ;
    }
}
echo replaceChar('az');