/*lazyloadmap*/

// document.addEventListener("DOMContentLoaded", function() {
//     var lazyImages = document.getElementById('partners');
//
//     if ("IntersectionObserver" in window) {
//         let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
//             entries.forEach(function(entry) {
//                 if (entry.isIntersecting) {
//                     lazyImages.style.display='block'
//                 }
//             });
//         });
//
//         lazyImages.forEach(function(lazyImage) {
//             lazyImageObserver.observe(lazyImage);
//         });
//     } else {
//         // Possibly fall back to a more compatible method here
//     }
// });
// document.onload = function() {
//     var lazyMap = document.getElementById('map');
//     var iframe = $('#map p').attr('data')
//     $('#map ').html(iframe);
//     console.log(lazyMap.html());
//    lazyMap.style.display='block'
// };
var intersectionObserver = new IntersectionObserver(function(entries) {
    // If intersectionRatio is 0, the target is out of view
    // and we do not need to do anything.
    if (entries[0].intersectionRatio <= 0) return;
    var lazyMap = document.getElementById('map');
    var iframe = $('#map p').attr('data')
    $('#map ').html(iframe);
    lazyMap.style.display='block'
    //loadItems(10);
    console.log('Loaded new items');
});
// start observing
intersectionObserver.observe(document.querySelector('#partners'));

/*endlazyloadmap*/

$("input[type=range]").mouseup(function (e) {
    var val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));
    var percent = val * 100;

    $(this).css('background-image',
        '-webkit-gradient(linear, left top, right top, ' +
        'color-stop(' + percent + '%, #B7B7B7), ' +
        'color-stop(' + percent + '%, #65CC2A)' +
        ')');

    $(this).css('background-image',
        '-moz-linear-gradient(left center, #B7B7B7 0%, #B7B7B7 ' + percent + '%, #65CC2A ' + percent + '%, #65CC2A 100%)');
});

/*top btn and social icons*/
$(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
        $('#top , #fixedSocial').addClass('show');
        $('#fixedSocial ul li').addClass('showSocial');
    }
    else
    {
        $('#top ,#fixedSocial').removeClass('show');
        $('#fixedSocial ul li').removeClass('showSocial');
    }
});
$('#top').on('click', function(e) {
    e.preventDefault();
    $('html, body').scrollTop(0, '100');
});

/*colored social icons*/
// $('.social ul li a').on('hover', function () {
//     $('.icofont-facebook').css('color, #17f !imporatnt');
//     $('.social ul li a .icofont-instagram').css('color, #E1306C !imporatnt');
//     $('.social ul li a .icofont-twitter').css('color, #1af !imporatnt');
//     $('.social ul li a .icofont-google-plus').css('color, #b5090a !imporatnt');
// })



// function data()
// {
//     $('.social').hide()
// }
// data();
// $('.socialBtn').on('click', function () {
//     $('.latest').hide(2000);
//     $('.social').show(2000);
// })
// $('.latestBtn').on('click', function () {
//     $('.latest').show(2000);
//     $('.social').hide(2000);
// })

/*button click active*/
// $(".productList").on('click','li', function(){
//   $(".productList li").removeClass('active');
//   $(this).addClass('active');
// })

// function init(){
//   $(".cars").show( );
//   $(".offers").hide();
//   $("li.nav-item:first-child").addClass("checked-radio");
// }
// init()
// /*data show and hide*/
// $(".allCars").on('click', function(){
//   $(".cars").show(500 );
//   $(".offers").hide(500);
// })
// $(".carOffers").on('click', function(){
//   $(".cars").hide(500 );
//   $(".offers").show(500);
// })



//
// $('li.nav-item:first-child').click(function(){
//   $('li.nav-item:last-child').removeClass("checked-radio");
//   $(this).addClass("checked-radio");
// });
//
// $('li.nav-item:last-child').click(function(){
//   $('li.nav-item:first-child').removeClass("checked-radio");
//   $(this).addClass("checked-radio");
// });


/*all projects page ul*/
// function allProjects()
// {
//   $(' .projects-data-select li:nth-child(1) a').addClass('active')
// }
// allProjects()

// $(' .projects-data-select li a').on('click', function() {
//      $(this).toggleClass('active');
// });




function openImg(imgName) {
  var i, x;
  x = document.getElementsByClassName("picture");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(imgName).style.display = "block";
}

// $("#companyCash-tab").click(function(){
//   if($("#companyCash-tab").find('active').length == 1)
//   {
//     console.log("test")
//   }
//   else
//   {
//     // $("#companyFinance-tab").removeAttr("checked");
//     $("#companyFinance-tab").removeClass("active");
//     // $("#companyCash-tab").attr("checked" , "checked");
//
//     console.log("test11")
//    // $("#companyCash-tab").removeClass("active");
//
//   }
// })

// /* Open */
// function openNav() {
//     document.getElementById("myNav").style.height = "100%";
// }
//
// /* Close */
// function closeNav() {
//     document.getElementById("myNav").style.height = "0%";
// }

/*animate navbar*/
function Nav(){
    // $('.navContent-overlay').hide();
    $('.navContent-overlay').css('height' , '0%');
    $('.navContent-overlay').css('transition' , 'all ease 0.5s')
}
Nav()

$(document).ready(function(){
    $('.navBtn').click(function () {
        $('.navContent-overlay').toggleClass("animatied");
        $('.dot').toggleClass("close-dot");
    })
});





$("#nav-Companies-tab , #nav-individual-tab").click(function(){

  $("#transitionText").show();
});


$("#nav-government-tab").click(function(){

  $("#transitionText").hide();
});


// owl carousal fire function
$(document).ready(function(){
    $('.owl-theme').owlCarousel();
    inputType =$("input[type=range]");
    $("#changeNumber").text('1')
  });


$(' #features .owl-theme , #partners .owl-theme').owlCarousel({
  loop:true,
  margin:10,
    nav:true,
  autoplay:true,
  autoplayTimeout:2500,
  responsiveClass:true,
  responsive:{
    0:{
      items:1,
    },
    600:{
      items:3,
    },
    1000:{
      items:3,
    }
  }
})

$('#services  .owl-theme').owlCarousel({
    loop:true,
    nav:true,
    autoplay:true,
    autoplayTimeout:2500,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1,
        },
        1000:{
            items:2,
        }
    }
})

$('#singleService  .owl-theme').owlCarousel({
    loop:true,
    nav:false,
   // navText: [$('.owl-prev'),$('.owl-next')],
    autoplay:true,
    autoplayTimeout:2500,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1,
        },
        1000:{
            items:1,
        }
    }
})

$('#singleService .owl-next').click(function() {
    owl.trigger('next.owl.carousel');
})
// Go to the previous item
$('#singleService .owl-prev').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
})

$('#featuredProjects .owl-theme').owlCarousel({
    loop:true,
    nav:false,
    autoplay:false,
    autoplayTimeout:2500,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:3,
        }
    }
})

var owl = $('.owl-carousel');
owl.owlCarousel();
// Listen to owl events:
// owl.on('changed.owl.carousel', function(event) {
// ...
// })

owl.owlCarousel({
    onChange: send
});
function send(event) {
  console.log('ss')
}
// function callback(event) {
//     var items     = event.item.count;
// }

$("input").on("change", function(e) {
    e.preventDefault();
    console.log(inputType.val());
    $("#changeNumber").text(inputType.val());
    // console.log(e.item.index);
    // FIGURE OUT HOW TO GET CAROUSEL INDEX

    $('.owl-carousel').trigger('to.owl.carousel', [inputType.val(),1,true]);
});

//all featuredProjects item number (fixed)
// var itemData = document.getElementById("featuredProjects").getElementsByClassName("item").length+1;
// console.log(itemData);
// $("#sliderNumber").text(itemData);
//all featuredProjects item number (changing)


////$(document).ready(function(){
// $("#featuredProjects input[type=range]").change(function(){
//     var changeVal=itemData;
//     console.log(inputType)
//   //  $("#changeNumber").text(inputType);
//
// });
//});



/*scrolled navbar*/
        $(function () {
        $(document).scroll(function () {
        var $nav = $(".nav-fixed-top");
      //  var $logo = $("img.img-fluid.logo1");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        //$logo.attr("src", "public/images/AC.png");
   });
});








// var $logoMain = $("#lego .logo  img.img-fluid.logo1");
// $logoMain.attr("src", "public/images/AC.png");
//
// $(function () {
//     var $logo = $(" #log .logo img.img-fluid.logo1");
//     if($('#logo2').length==0){
//             }else{
//                 console.log('singel page')
//                 $logoMain.attr("src", "public/images/AC-white(logo).png");
//                  console.log( $('#lego img').attr("src"))
//             }
//     $(document).scroll(function () {
//         var $nav = $(".nav-fixed-top");
//
//
//         $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
//
//         if($(this).scrollTop() > $nav.height() ){
//
//            $logoMain.attr("src", "public/images/AC.png");
//         }else{
//              if($('#logo2').length==0){
//                 console.log('homepage')
//             }else{
//                 console.log('singel page')
//                  $logoMain.attr("src", "public/images/AC-white(logo).png");
//                  console.log( $('#lego img').attr("src"))
//             }
//             //logo no 1
//         }
//
//     });
//
// });







/**/
// $('.challenges .card-header button').on('click', function() {
//     $('#min').text('+');
// });


// if($(".texk").find('.show') == true)
// {
//     console.log($(".texk").find('.show'));
//     $('.challenges .card-header button').on('click', function() {
//         $('#min').text('-');
//     });
// }
// else
// {
//
//
// }
/*creative */

function init(){
  $(".col-md-3:nth-child(1) .creative-services-data").addClass('testclr1');
 // $(' .creative-services .row .col-md-3 .creative-services-data .creative-services-box').hide();
 // $(' .creative-services .row .col-md-3:first-child .creative-services-data .creative-services-box').show(1000);
    $(' .creative-services .row .col-md-3 .creative-services-data .creative-services-box').removeClass('boxx');
  $(' .creative-services .row .col-md-3:first-child .creative-services-data .creative-services-box').addClass('boxx');



}
init()
//console.log($('.creative-services-data'))
$('.creative-services-data').hover( function()
{
  //  console.log($(this).html())
    $( this ).addClass( "testclr" );
    $( ".col-md-3:nth-child(1) .creative-services-data" ).removeClass( "testclr1" );
    $(' .col-md-3:first-child .creative-services-data .creative-services-box').removeClass('boxx');
    //$(' .col-md-3 .creative-services-data .creative-services-box').addClass('boxx');
     $(this).find('.creative-services-box').addClass('boxx');

    }, function() {
    $( ".col-md-3:nth-child(1) .creative-services-data" ).addClass( "testclr1" );
    $( this ).removeClass( "testclr" );
    $(' .col-md-3 .creative-services-data .creative-services-box').removeClass('boxx');
    $(' .col-md-3:first-child .creative-services-data .creative-services-box').addClass('boxx');
    }
);



$("#challenges .card-header button").click(function(){
    $('#min1').text('+');
    console.log('tet')
});

