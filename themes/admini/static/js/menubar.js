/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
   $('.menubar dd > a').bind({
       click : function(){
           $('.menubar dd > a').removeClass('click');
           $('.menubar dd ul').hide();
           $(this).addClass('click');
           $(this).next().show('fast');
       }
   });
   
   $('.menubar dd > a.active').next().show();
});
