$(function(){
	if(currentPage==='archive'){
		$('[id^=tag]').prop('checked', true);
		var cat = getParameterByName('cat');
		$('#cat_' + cat).prop('checked', true);
		
		if($('[id^=cat]').filter(function(){return $(this).prop('checked')}).length<=0) $('[id^=cat]').prop('checked', true);
		
		$('.filter').on('click', function(){
			
		})
	}
});

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}