$(function () {
  $(document).scroll(function () {
	  var $nav = $("#main-navbar");
	  $nav.toggleClass('fixed-top', $(this).scrollTop() > $nav.height());
	});
	$('body').scrollspy({ target: '#main-navbar' })

});