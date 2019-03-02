          $(document).ready(function(){

            if ($(window).width()<1024) {
                    $(".logo-wrapper").addClass("logoP2");
                    $(".logo-wrapper").removeClass("logoP");
                };
                if ($(window).width()>1025) {
                    $(".logo-wrapper").addClass("logoP");
                    $(".logo-wrapper").removeClass("logoP2");
                };
            
            $(window).resize(function(){
                if ($(window).width()<1024) {
                    $(".logo-wrapper").addClass("logoP2");
                    $(".logo-wrapper").removeClass("logoP");
                };
                if ($(window).width()>1025) {
                    $(".logo-wrapper").addClass("logoP");
                    $(".logo-wrapper").removeClass("logoP2");
                };
            });
            
          });