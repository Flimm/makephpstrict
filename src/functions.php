<?php

function intZ( $arg ) {
    if ( is_int( $arg ) ) {
        return $arg;
    } else {
        throw new TypeError( "Expected int" );
    }
}

