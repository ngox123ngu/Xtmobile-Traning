$(document).ready(function(){
		$(".col-footer-1 .inner p:gt(4)").hide();
		$(".view-more-links").click(function(){
			$(".col-footer-1 .inner p:gt(4)").show();
			$(this).hide();
			return false;
		});
   
     
    $.ajax({
      url:ROOT+"modules/cart/ajax/cart.php",
      type:"POST",
      data:{act:'qty'},
      dataType:"json",
      success: function(data){
        
        
        if(data.qty){
          
          $(".qty-cart").html(data.qty);
        }
        else
        $(".qty-cart").html(0);
        
      }
    });
    if(!isMobile() && !$(".box-submenu").is(":visible"))
    {
        
        $(".menutop").hover(function(){
            $(this).addClass("active-menu");
        },function(){
          $(this).removeClass("active-menu");
        });
    }
});

function setCookie(cname, cvalue, exdays) {
              var d = new Date();
              d.setTime(d.getTime() + (exdays*24*60*60*1000));
              var expires = "expires="+ d.toUTCString();
              document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
            }
 function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function isMobile() {
  if ($(window).width() <= 849) return true; return false;
}