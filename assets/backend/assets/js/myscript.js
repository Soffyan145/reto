const flashData = $('.flash-data').data('flashdata');

console.log(flashData);
if (flashData) {
	Swal({
		title: 'Data Menu',
		text: 'Success' + flashData,
		type: 'success'
	});
}
