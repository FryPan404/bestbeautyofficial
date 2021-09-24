$(document).ready(function(){
	if(window.location.hash) {
	      ExecuteHash();

	} else {
	      ExecuteHash();
	}
});



$( window ).on( 'hashchange', function( e ) {
	ExecuteHash();
} );

function ExecuteHash() {
	var hash = window.location.hash.substring(1);
	if (hash=='home' || hash=='dashboard' || hash=='Home' || hash=='' || hash==undefined) {
		hash = 'app/dashboard';
	}
	var class_link = hash.replaceAll('/','-');
	$('#loading_indicator').css('display','block');
	if (hash!='') {
		$("#tw_main_content").hide().load(base_url+hash, {limit: 25}, 
		    function (responseText, textStatus, req) {
		        if (textStatus == "error") {
		          $('#tw_main_content').hide().load(base_url+'app/custom_not_found').fadeIn('500');
		        }
		        $('#loading_indicator').css('display','none');
		}).fadeIn(0);

		//remove all active class
		$('#side-menu li.mm-active').removeClass('mm-active');
		$('#side-menu a.active').removeClass('active');
		$('#side-menu ul.mm-show').removeClass('mm-show');

		var url_class = class_link.replaceAll('%20','-');
		$('li.'+url_class).addClass('mm-active');
		$('a.'+url_class).addClass('active');
		$('ul.'+url_class).addClass('mm-show');

	}else{
		$("#tw_main_content").hide().load(base_url+'app/dashboard', {limit: 25}, 
		    function (responseText, textStatus, req) {
		        if (textStatus == "error") {
		          $('#tw_main_content').hide().load(base_url+'app/custom_not_found').fadeIn('500');
		        }
		        $('#loading_indicator').css('display','none');
		}).fadeIn(0);
		//remove all active class
		$('#side-menu li.').removeClass('mm-active');
		$('#side-menu a.').removeClass('active');
		$('#side-menu ul.').removeClass('mm-show');

		$('.app-dashboard').addClass('mm-active');
		$('a.app-dashboard').attr('active');
	}
	
}

String.prototype.replaceAll = function (find, replace) {
    var str = this;
    return str.replace(new RegExp(find.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&'), 'g'), replace);
};