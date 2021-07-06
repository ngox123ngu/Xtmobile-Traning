$(document).ready(function(){
	$(".clock-deal").each(function(){
		 


		$(this).countdown($(this).data("date"))
		.on('update.countdown', function(event) {
		  var format = '%H:%M:%S';
		  if(event.offset.totalDays > 0) {
		    format = '%-d ngĂ y ' + format;
		  }
		  if(event.offset.weeks > 0) {
		    format = '%-w tuáº§n %!w ' + format;
		  }
		  $(this).html(event.strftime(format));
		});



	});
});