<?php

function set_active($path) {
    return request()->is($path) ? 'active' : '';
}