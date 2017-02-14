;(function($, window, document, undefined){
    'use strict';

    var $qaQuestions, $qaAnswers, $qaIcons, 
        $teaserMessages, $teaserHidddenContents, $teaserIcons; 
 
    var init = function(){
        $qaQuestions = $('.qa--question');
        $qaAnswers = $qaQuestions.next();
        $qaIcons =  $qaQuestions.find('.qa-icons');

        $qaQuestions.on('click', {contentType: 'qa'}, clickHandler);

        $teaserMessages = $('.teaser--visible-message');
        $teaserHidddenContents = $teaserMessages.next();
        $teaserIcons =  $teaserMessages.find('.teaser-icons');

        $teaserMessages.on('click', {contentType: 'teaser'}, clickHandler);        

    }

    /**
     * Click Event Handler
     */

    var clickHandler = function(event){
        console.log(event);
    }

    /*********************
     * Helpers  
     *******************/

    /*
    * Change Icon Handler
    */

    function changeIcon(){


    }

    /*
    * Get Element Index Numver
    */

    function getIndex() { 

    }

    

    function getHiddenContent(){

    }

    function getIcon(){

    }

    function getIconClasses(){

    }

    $(document).ready( function(){
    init();
    });
   

})(jQuery, window, document);