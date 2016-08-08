;(function( undefined ) {
    'use strict';
    
    require.config({
      paths: {
        jquery: ['vendor/jquery-1.11.1.min'],
        bootstrap:['vendor/bootstrap'],
        moveTop:['move-top'],
        easing:['easing'],
        classie:['classie'],
        scripts:['scripts']
      },
      shim: {
             'alert': ['jquery']
         }
    });
  
   define(['jquery'],function($){
      require(['bootstrap','moveTop','easing','classie','scripts']);
   });
  

})();