"use strict";
jQuery('document').ready(function ($) {

    $('#quem-somos a').hover(function (e) {
        e.preventDefault()
        $(this).tab('show')
      }); 
});