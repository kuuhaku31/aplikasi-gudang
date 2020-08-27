$(function() {
	/*===================================================*/

	/*
     function untuk menampilkan form tambah data
    */
	// $('.tambahData').on('click', function() {
	// 	$('#modalHeader').html('Tambah data siswa');
	// 	$('.modal-footer button[type=submit]').html('Tambah data');
	// });
	$('.tambahData').on('click', function() {
		$('#modalHeader').html('Tambah data siswa');
		$('.modal-footer button[type=submit]').html('Tambah Data');
		$('#nama').val('null');
		$('#tempatlahir').val('');
		$('#tanggallahir').val('');
		$('#alamat').val('');
		$('#jurusan').val('');
		$('#id').val('');
	});

	/*===================================================*/

	/*
     function untuk menampilkan form ubah data
    */
	$('.ubahData').on('click', function() {
		$('#modalHeader').html('Ubah data siswa');
		$('.modal-footer button[type=submit]').html('Ubah data');
		$('.modal-body form').attr('action', 'http://localhost/2020/kursus/wpu/phpmvc/public/siswa/ubah');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/2020/kursus/wpu/phpmvc/public/siswa/getubah',
			data: { id: id },
			method: 'post',
			dataType: 'json',
			success: function(data) {
				$('#nama').val(data.nama);
				$('#tempatlahir').val(data.tem_lahir);
				$('#tanggallahir').val(data.tan_lahir);
				$('#alamat').val(data.alamat);
				$('#jurusan').val(data.jurusan);
				$('#id').val(data.id);
			}
		});
	});
});
