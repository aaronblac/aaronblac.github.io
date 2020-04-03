$('.drop').on('click', function() {
	$parent_box = $(this).closest('.box');
	$parent_box.siblings().find('.sect').hide();
	$parent_box.find('.sect').toggle();
});
