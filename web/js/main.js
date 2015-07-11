/**
 * Created by favery on 7/10/15.
 */

$(function() {

	// causes bootstrap style selector to bind to hidden standard select
	$('#operator_buttons label').on('click', function(e) {
		$("#hidden_ipt").val($(this).children('input').val());
		console.log($(this).children('input').val());
	});

	// clear button bindings
	$('#clear').on('click', function(e) {
		// clear form fields
		$("#n1").val('');
		$("#n2").val('');

		// hide error messages
		$('#errors').hide();

		// hide result
		$('.calcresult').hide();
	});
});

$('.input').keypress(function (e) {
	if (e.which == 13) {
		$('form#login').submit();
		return false;
	}
});