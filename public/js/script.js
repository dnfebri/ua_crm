// ==================================================>
// Nav SideBar ======================================>

let item = document.querySelectorAll('.nav-sidebar li a');
item.forEach(link => {
    if (link.querySelector('p').innerHTML === link.getAttribute('data-nav')) {
        link.classList.toggle('active');
    }
});

// Nav SideBar Akhir ================================>
// ==================================================>

// ==================================================>
// action view gambar Ubah ==========================>
function priviewImg() {
    const img = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-previuw');
    const imgLabel = document.querySelector('.img-label');

    if (imgLabel) {
        imgLabel.textContent = img.files[0].name;
    }

    const fileImg = new FileReader();
    fileImg.readAsDataURL(img.files[0]);

    // console.log(fileImg.target.result);

    fileImg.onload = function (e) {
        imgPreview.src = e.target.result;
    }
}
// action view gambar Ubah Akhir ====================>
// ==================================================>

// ==================================================>
// Form Disabled ====================================>

const btnUbah = document.getElementById('btn-ubah');
const btnSubmit = document.getElementById('submit');
if (btnUbah) {
    btnUbah.onclick = function () {
        let formInput = document.querySelectorAll('.form-control');
        formInput.forEach(input => {
            input.removeAttribute('disabled');
        });
        btnUbah.setAttribute('hidden', '');
        btnSubmit.toggleAttribute('hidden');
    };
};

// Akhir Form Disabled ==============================>
// ==================================================>
