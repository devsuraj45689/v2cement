// start js codin 

// mobile menu

function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

$(document).ready(function () {
	
});

   
// end mobile menu

// contac form 
$(document).ready(function () {
	$("#contact_form").on("submit",function (e) {
      e.preventDefault();
      $.ajax({
      	type:"POST",
      	url:"php/mailsent.php",
      	cache:false,
      	processData:false,
      	contentType:false,
      	data:new FormData(this),
        beforeSend:function () {
         $("#contact_form button[type=submit]").html("submiting...");
        },
      	success:function (response) {
          $("#contact_form button[type=submit]").html("Message Sent");
          setTimeout(function () {
            $("#contact_form button[type=submit]").html("Submit");
            $("#contact_form").trigger("reset");
          },2000);
      		console.log(response);
      	},
      	error:function (error) {
      		console.log(error);
      	}
      });
	});
});

// scroll effet
$(document).ready(function () {
  $(".mobileNavLink").click(function () {
    $(".closebtn").click();
  });

  $(".web-nav").each(function () {
     $(this).click(function () {
      $(".web-nav").each(function () {
         $(this).removeClass("active");
      });
       $(this).addClass("active");
       var navId = $(this).attr("data-id");
       $("#"+navId).addClass("active"); 
     });
  });

  $(".hero_icon").click(function () {
     $(".web-nav").each(function () {
       $(this).removeClass("active");
     });

     $("#services-nav").addClass("active");
     $("#services-nav_mb").addClass("active");
  });

   $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},50);
        return false;
    });


});