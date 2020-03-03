<?php
// Simple page reditrect
function redirect($page = ''){
 header('Location: '.URLROOT.'/'.$page);
}