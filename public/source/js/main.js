$(document).ready(function(){
    //menu-reponsive
    // $(".menu-toggle").click(function(){
    //     $("nav").toggleClass('active'); 
    //     $(this).find("i").addClass("fa-spin");
    //     $(this).find("i").removeClass("fa-spin fas fa-bars").addClass("fas fa-times"); 

    // });
    $(".close").hide()
    $(".menu-toggle").click(function () {
        $("nav").toggleClass('active');
        $(".close").show();
        $(".menu-toggle").hide();

    });
      $(".close").click(function () {
        $("nav").toggleClass('active');
        
          $(".close").hide();
          $(".menu-toggle").show();
    });

 });
// ===== Scroll to Top ==== 
$(window).scroll(function() {
  if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
      $('#return-to-top').fadeIn(200);    // Fade in the arrow
  } else {
      $('#return-to-top').fadeOut(200);   // Else fade out the arrow
  }
});
$('#return-to-top').click(function() {      // When arrow is clicked
  $('body,html').animate({
      scrollTop : 0                       // Scroll to top of body
  }, 500);
});
//datepicker
// $(function() {
//   $('[data-toggle="datepicker"]').datepicker({
//     autoHide: true,
//     zIndex: 2048,
//   });
// });
//active menu
// $(document).on('click', 'ul li', function () {
//     $(this).addClass('active-li').siblings().removeClass('active-li');
//   });
$(document).ready(function(){
	$('.header-sticky ul li').click(function(){
	  $('li').removeClass("active-li");
	  $(this).addClass("active-li");
  });
  });
//slider
$(document).ready(function(){
$('.hotel-image-large').each(function(){
  var $this = $(this);
  var $thumb = $this.siblings('.hotel-image-thumbs');
  $this.slick({
      arrows: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 5000,
      dots: false,
      infinite: true,
      centerMode: false,
      centerPadding: 0,
      asNavFor: $thumb,
  });
});
$('.hotel-image-thumbs').each(function(){
  var $this = $(this);
  var $details = $this.siblings('.hotel-image-large');
  $this.slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 5000,
      dots: false,
      infinite: true,
      focusOnSelect: true,
      centerMode: true,
      centerPadding: 0,
      arrows: false,
      prevArrow: '<span class="slick-prev"><i class="fa fa-angle-left"></i></span>',
      nextArrow: '<span class="slick-next"><i class="fa fa-angle-right"></i></span>',
      asNavFor: $details,
      responsive: [
      {
        breakpoint: 1024,
        settings: {
        }
      },
      {
        breakpoint: 600,
        settings: {
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
        }
      }
    ]
      
  });
});
});
function sweetalert2() {
  Swal.fire({
    width: 900,
    padding: "30px",
    html:
      '<div id="swal2-content" style="display: block;">' +
      '<div class="feedback-erea">'+
        '<div class="container">'+
            '<div class="row">'+
                '<div class="col-12">'+
                    '<div class="section-title title-2 text-center">'+
                        '<h3>We value your feedback.</h3>'+
                        '<p>Please complete the following form and help us improve.</p>'+
                    '</div>'+
                '</div>'+
            '</div>'+
            '<div class="row">'+
                '<div class="col-md-12">'+
                    '<table class="table table-bordered">'+
                        '<thead>'+
                            '<tr>'+
                                '<th scope="col"></th>'+
                                '<th scope="col">Very Satisfied</th>'+
                                '<th scope="col">Satisfied</th>'+
                                '<th scope="col">Neutral</th>'+
                                '<th scope="col">Unsatisfied</th>'+
                                '<th scope="col">Very Unsatisfied</th>'+
                            '</tr>'+
                        '</thead>'+
                        "<tbody>"+
                            '<tr>'+
                                '<th scope="row">How satisfied are<br>'+
                                   ' you with our product? </th>'+
                                '<td><input name="exampleRadios" type="radio"></td>'+
                                '<td><input name="exampleRadios" type="radio"></td>'+
                                '<td><input name="exampleRadios" type="radio"></td>'+
                                    '<td><input name="exampleRadios" type="radio"></td>'+
                                    '<td><input name="exampleRadios" type="radio"></td>'+
                            '</tr>'+
                            '<tr>'+
                                '<th scope="row">How satisfied are <br>'+
                                    'you with our service?</th>'+
                                '<td><input name="inlineRadioOptions" type="radio"></td>'+
                                '<td><input name="inlineRadioOptions" type="radio"></td>'+
                                '<td><input name="inlineRadioOptions" type="radio"></td>'+
                                    '<td><input name="inlineRadioOptions" type="radio"></td>'+
                                    '<td><input name="inlineRadioOptions" type="radio"></td>'+
                            '</tr>'+
                            '<tr>'+
                                '<th scope="row">How satisfied are <br>'+
                                    'you overall?</th>'+
                                '<td><input name="blankRadio" type="radio"></td>'+
                                '<td><input name="blankRadio" type="radio"></td>'+
                                '<td><input name="blankRadio" type="radio"></td>'+
                                    '<td><input name="blankRadio" type="radio"></td>'+
                                    '<td><input name="blankRadio" type="radio"></td>'+
                            '</tr>'+
                        '</tbody>'+
                    '</table>'+
                '</div>'+
            '</div>'+
            '<div class="row">'+
                '<div class="col-md-12">'+
                    '<h4>Tell us how we can improve.</h4>'+
                '</div>'+
                '<div class="col-md-12">'+
                    '<div class="single-input">'+
                        '<textarea name="message" cols="10" rows="4"></textarea>'+
                    '</div>'+
                '</div>'+
            '</div>'+
            '<div class="row">'+
                '<div class="col-md-6">'+
                    '<div class="single-input">'+
                        '<input name="name" placeholder="Name" type="text">'+
                    '</div>'+
                '</div>'+
                '<div class="col-md-6">'+
                    '<div class="single-input">'+
                        '<input name="name" placeholder="Name" type="text">'+
                    '</div>'+
                '</div>'+
                '<div class="col-md-12">'+
                    '<div class="single-input">'+
                        '<input name="email" placeholder="E-mail" type="email" style="width: 100%">'+
                    '</div>'+
                '</div>'+
                '<div class="col-md-12">'+
                    '<div class="single-input">'+
                        '<button class="sent-btn" type="submit">Submit</button>'+
                    '</div>'+
                '</div>'+
            '</div>'+
        '</div>'+
    '</div>'+
      "</div>",
showConfirmButton: false,
    // confirmButtonText: " Send Email",
    // confirmButtonClass: "btn-sendemail"
  });
};
//tab home

$(document).ready(function(){
	
	$('ul.nav-tabs li').click(function(){
		var tab_id = $(this).attr('href');

		$('ul.nav-tabs li').removeClass('active');
		$('.tab-pane').removeClass('active');

		$(this).addClass('active');
		$("#"+tab_id).addClass('active');
    })
    //anamite
    AOS.init({
        duration: 1700,
      })

})
$(function () {
  'use strict';
  var nowTemp = new Date();
  var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

  var checkin = $('#timeCheckIn').datepicker({
      onRender: function (date) {
          return date.valueOf() < now.valueOf() ? 'disabled' : '';
      }
  }).on('changeDate', function (ev) {
      if (ev.date.valueOf() > checkout.date.valueOf()) {
          var newDate = new Date(ev.date)
          newDate.setDate(newDate.getDate() + 1);
          checkout.setValue(newDate);
      }
      checkin.hide();
      $('#timeCheckOut')[0].focus();
  }).data('datepicker');
  var checkout = $('#timeCheckOut').datepicker({
      onRender: function (date) {
          return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
      }
  }).on('changeDate', function (ev) {
      checkout.hide();
  }).data('datepicker');
});