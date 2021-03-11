var formToggle = $('.visibility');
var plusIcon = $('span');
var icon = $('.plus');

plusIcon.click(() => {
	formToggle.slideToggle();
	icon.toggleClass('fa-plus-circle');
	icon.toggleClass('fa-minus-circle');
});
