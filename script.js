registrar.addEventListener('click', () => {
	fetch('registrar.php', {
		method: 'POST',
		body: new FormData(frm),
	})
		.then((response) => response.text())
		.then((response) => {
			if (response == 'ok') {
				Swal.fire({
					icon: 'success',
					title: '¡Registro exitoso!',
					showConfirmButton: false,
					timer: 1500,
				});
				frm.reset();
			}
		});
});
