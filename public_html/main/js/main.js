/*
    Project Name : Cryptarea
    Author Company : SpecThemes
    Project Date: 1 Feb, 2017
    Template Developer: vsafaryan50@gmail.com
*/


/*
==============================================
TABLE OF CONTENT
==============================================

1. Owl Carousels
2. CountUp
3. Bitcoin Charts
4. Hover Drop Down
5. Swiper Slider
6. Video Modal
7. Preloader
8. Scroll To Top
9. Isotop
10. WOW
11. Serach
12. Slider
13. Tabs, Shop Rating
14. Input Number 

==============================================
[END] TABLE OF CONTENT
==============================================
*/

"use strict";



$(document).ready(function() {

/*------------------------------------
    1. Owl Carousel
--------------------------------------*/  


/*---------------------
Testmonials carousel
-----------------------*/

  $('#testmonials-carousel').owlCarousel({
    loop: false,
    nav: false,    
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        margin: 15,
      },
      600: {
        items: 1,
        margin: 0,
      },
      1000: {
        items: 3,
        margin: 0,
      }
    }
  })



/*---------------------
Testmonials carousel
-----------------------*/


  $('#testmonials-carousel-2').owlCarousel({
    loop: false,
    nav: false,
    responsiveClass: true,
    nav:true,
    navText: ["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"],    
    responsive: {
      0: {
        items: 1,
        nav: false,
        dots: true,
        margin: 10,
      },
      600: {
        items: 1,
        nav: false,
        dots: true,        
        margin: 15,
      },
      1000: {
        items: 2,
        dots: false,
        margin: 10,
      }
    }
  })






/*---------------------
Clients carousel
-----------------------*/

  $('#our-clients').owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,  
    responsiveClass: true,
    autoplayHoverPause:false,
    responsive: {
      0: {
        items: 2,
        margin: 50,
      },
      600: {
        items: 3,
        margin: 30,
      },
      1000: {
        items: 4,
        margin: 110,
      }
    }
  })


/*------------------------------------
    2. CountUp
--------------------------------------*/  

    $('.countup').counterUp({
        delay: 5,
        time: 500
    });




/*------------------------------------
    3. Bitcoin Charts
--------------------------------------*/  
  (function(b,i,t,C,O,I,N) {
    window.addEventListener('load',function() {
      if(b.getElementById(C))return;
      I=b.createElement(i),N=b.getElementsByTagName(i)[0];
      I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
    },false)
  })(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt');




/*------------------------------------
    4. Navbar
--------------------------------------*/    

  if ($(window).width() > 1200) {
    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(300);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(300);
    });
  }


/*------------------------------------
    5. Swiper Slider
--------------------------------------*/ 
  if($(".swiper-container").length !== 0) {
  var swiper = new Swiper('.swiper-container', {
    speed: 600,
    parallax: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay: 5000,
    },  
  });
  }  




/*------------------------------------
    6. Video Modal
--------------------------------------*/ 

  $('.modal').on('hidden.bs.modal', function() {
    var $this = $(this).find('iframe'),
      tempSrc = $this.attr('src');
    $this.attr('src', "");
    $this.attr('src', tempSrc);
  });


/*------------------------------------
    7. Preloader
--------------------------------------*/ 

  $('#preloader').fadeOut('normall', function() {
      $(this).remove();
  });


/*------------------------------------
    8. Scroll To Top
--------------------------------------*/ 

    $(window).scroll(function(){
        if($(this).scrollTop() > 500) {
            $(".scroll-to-top").fadeIn(400);
            
        } else {
            $(".scroll-to-top").fadeOut(400);
        }
    });
 
    $(".scroll-to-top").on('click', function(event){
        event.preventDefault();
        $("html, body").animate({scrollTop: 0},600);
    });






/*------------------------------------
    9. Isotop
--------------------------------------*/  

// external js: isotope.pkgd.js
// init Isotope
var $grid = $('.isotope-grid').isotope({
  itemSelector: '.isotope-item',
  layoutMode: 'fitRows',
  getSortData: {
    name: '.name',
    symbol: '.symbol',
    number: '.number parseInt',
    category: '[data-category]',
    weight: function( itemElem ) {
      var weight = $( itemElem ).find('.weight').text();
      return parseFloat( weight.replace( /[\(\)]/g, '') );
    }
  }
});

// filter functions
var filterFns = {
  // show if name ends with -ium
  ium: function() {
    var name = $(this).find('.name').text();
    return name.match( /ium$/ );
  }
};

// bind filter button click
$('#filters').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});


// change is-checked class on buttons
$('.parent-isotope').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});




/*------------------------------------
    10. WOW
--------------------------------------*/ 
new WOW().init();


});



/*------------------------------------
    11. Seacrh
--------------------------------------*/ 
function openNav() {
    document.getElementById("search_nav").style.width = "100%";
}

function closeNav() {
    document.getElementById("search_nav").style.width = "0%";
}





/*------------------------------------
    12. Slider
--------------------------------------*/ 




/*------------------------------------
    13. Tabs, Shop Rating
--------------------------------------*/   

  $('.tabs_animate').tabslet({
    mouseevent: 'click',
    attribute: 'href',
    animation: true
  });

  $(':radio').change(function() {
    console.log('New star rating: ' + this.value);
  });



/*------------------------------------
    14. Input Number
--------------------------------------*/ 
jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
jQuery('.quantity').each(function() {
  var spinner = jQuery(this),
    input = spinner.find('input[type="number"]'),
    btnUp = spinner.find('.quantity-up'),
    btnDown = spinner.find('.quantity-down'),
    min = input.attr('min'),
    max = input.attr('max');

  btnUp.click(function() {
    var oldValue = parseFloat(input.val());
    if (oldValue >= max) {
      var newVal = oldValue;
    } else {
      var newVal = oldValue + 1;
    }
    spinner.find("input").val(newVal);
    spinner.find("input").trigger("change");
  });

  btnDown.click(function() {
    var oldValue = parseFloat(input.val());
    if (oldValue <= min) {
      var newVal = oldValue;
    } else {
      var newVal = oldValue - 1;
    }
    spinner.find("input").val(newVal);
    spinner.find("input").trigger("change");
  });

});



