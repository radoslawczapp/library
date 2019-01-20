<?php

require_once 'core/init.php';

if(Session::exists('success')){
    echo '<p>';
    echo Session::flash('success');
}
