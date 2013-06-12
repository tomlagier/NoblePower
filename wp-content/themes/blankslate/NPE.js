/*
*  Noble Power Equipment Quasi-Responsive Patch
*  By Thomas Lagier
*/

//Create HTML to be added to the homepage in the "responsive" view.

function ResponsiveHTML() {
  this.rawHTML = $('<div id="responsive-container"><div class="row-fluid"><div id="resp-logo"><img/></div><div id="resp-top-menu"><a href="./sales">Sales</a><a href="./parts">Parts</a><a href="./service">Service</a></div></div><div class="resp-main-menu"><ul><li><div class="resp-menu-item-wrapper"><h1 class="resp-menu-header">Locations / Contact</h1><div class="resp-menu-slide-wrapper">Locations/Contact responsive copy goes here.</div></div></li><li><div class="resp-menu-item-wrapper"><h1 class="resp-menu-header">Promo</h1><div class="resp-menu-slide-wrapper">Promo responsive copy goes here.</div></div></li><li><div class="resp-menu-item-wrapper"><h1 class="resp-menu-header">Mowers</h1><div class="resp-menu-slide-wrapper">Mowers responsive copy goes here.</div></div></li><li><div class="resp-menu-item-wrapper"><h1 class="resp-menu-header">Trimmers</h1><div class="resp-menu-slide-wrapper">Trimmers responsive copy goes here.</div></div></li><li><div class="resp-menu-item-wrapper"><h1 class="resp-menu-header">Saws</h1><div class="resp-menu-slide-wrapper">Saws responsive copy goes here.</div></div></li><li><div class="resp-menu-item-wrapper"><h1 class="resp-menu-header">Chippers / Splitters</h1><div class="resp-menu-slide-wrapper">Chippers/splitters responsive copy goes here.</div></div></li><li><div class="resp-menu-item-wrapper"><h1 class="resp-menu-header">Misc</h1><div class="resp-menu-slide-wrapper">Misc responsive copy goes here.</div></div></li><li><div class="resp-menu-item-wrapper"><h1 class="resp-menu-header">Our Brands</h1><div class="resp-menu-slide-wrapper">Our brands responsive copy goes here.</div></div></li></ul></div></div>');
}
 
//Add a screen width check to our HTML object. Only add mobile HTML to the homepage, all other pages are truly responsive.

ResponsiveHTML.prototype.isMobile = function() {
    if($('body').width() <= 797 && $('body').hasClass("home")){
        return true;
    }
    return false;
};

//Check if there is already mobile content. If not, add our HTML after the container div, then toggle off all non-mobile areas. Set the src of the img to prevent 404s from jQuery preloading the logo when rawHTML is created.

ResponsiveHTML.prototype.makeResponsive = function() {
    if ($('#responsive-container').length === 0){
        $('#container').after(this.rawHTML);
        $('#resp-logo img').attr('src', 'images/cornerlogo.gif');
        $('header, footer, #container').toggleClass("hidden");
        (this).addClickHandler();
    }
}

//If there is mobile content, remove it, and re-enable all hidden areas.

ResponsiveHTML.prototype.removeResponsive = function() {
    if($('#responsive-container').length != 0){
        $('#responsive-container').remove();
        $('header, footer, #container').toggleClass("hidden");
    }
}

//Add our click handler to enable content sliding

ResponsiveHTML.prototype.addClickHandler = function(){
    $('.resp-menu-header').click(function(){
        $(this)
        .parent()
        .find(".resp-menu-slide-wrapper")
        .stop(true, true)
        .delay(50)
        .animate({ "height": "toggle" }, 200, 'swing');
    });
}

//Check if our window is small enough for mobile HTML on page load

$(document).ready(function() {
    var MobileContent = new ResponsiveHTML();
    if (MobileContent.isMobile()){
        MobileContent.makeResponsive();   
    }
});

//Check if the window is being resized to a width where we need the mobile HTML. If it is, add the mobile HTML. Otherwise, remove the mobile HTML.

$(window).resize(function() {
    var MobileContent = new ResponsiveHTML();
    if(MobileContent.isMobile()){
        MobileContent.makeResponsive();   
    } else {
        MobileContent.removeResponsive();   
    }
});

/*Main menu sliding*/

$(document).ready(function(){
    $("#menu-main-menu > li").hover(function(){
        $(this)
            .find('.sub-menu ')
            .stop(true, true)
            .delay(50)
            .animate({ "height": "show", "opacity": "show" }, 200, 'swing' );
    }, function(){
        $(this)
            .find('.sub-menu')
            .stop(true, true)
            .delay(50)
            .animate({ "height": "hide", "opacity": "hide" }, 200, 'swing' );
        });
});

/* Noble Power Equipment Doodads */

//Call now popup opening and closing. Bind on ready.

$(document).ready(function(){
    $("#call-button").click(function(){
        $("#openCallDialog").toggleClass("opened");
    });
    
    $(".close").click(function(){
        $("#openCallDialog").toggleClass("opened");
    });
});

//Hover actions for locations over slider

$(document).ready(function(){
   $("#sm-loc").hover(function(){
       $(".homepage-slider").toggle();
       $("#sm-address-overlay").toggle();
   });
    
   $("#slo-loc").hover(function(){
       $(".homepage-slider").toggle();
       $("#slo-address-overlay").toggle();
   });
});

//Click actions for locations over slider

$(document).ready(function(){  
    $("#sm-loc").click(function(){
        $(".homepage-slider").toggleClass("shown");
        $("#sm-address-overlay").toggleClass("hidden");
    });
});