<?php


 function set_active($path, $active='active')
 {
    // return Request::is($path) || Request::is($path . '/*') ? $active: '';
    return Request::is($path) || Request::is($path . '/*') ? $active: '';
 }

   //Admin helper function
 function set_active_admin($path, $active = 'active')
{
    return Request::is($path) ? $active : '';
}
  //Errors helper function
function errors_for($attribute, $errors)
 {
    return $errors->first($attribute, '<p class="text-danger">:message</p>');
 }