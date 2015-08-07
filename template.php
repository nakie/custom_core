<?php

/**
 * @file
 * template.php
 */


/**
 * Function custom_core_bootstrap_search_form_wrapper
 * overrides Bootstrap styling of search form submit button
 * to use FontAWsome search icon rather than Bootstrap's
 * Gylificon.  the class "search-icon" is defined in less/base.less
**/
 function custom_core_bootstrap_search_form_wrapper( &$variables) {
   $output = '<div class="input-group">';
   $output .= $variables['element']['#children'];
   $output .= '<span class="input-group-btn">';
   $output .= '<button type="submit" class="btn btn-default">';

   $output .= t('<i class="search-icon"></i>');

   $output .= '</button>';
   $output .= '</span>';
   $output .= '</div>';
   return $output;


 }
