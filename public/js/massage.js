let massage = document.querySelector('#massage');
if (massage) {
    Swal.fire(
        massage.getAttribute("data-massage"),
        '',
        'success'
    )
}

// ==================================================>
// Konfirm Delete ====================================>

function archiveFunction() {
    event.preventDefault(); // prevent form submit
    var form = event.target.form; // storing the form
    Swal.fire({
        title: 'Apakah Anda Yakin?',
        // text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit(); // submitting the form when user press yes
        }
    })
}

// Akhir Konfirm Delete ==============================>
// ==================================================>
