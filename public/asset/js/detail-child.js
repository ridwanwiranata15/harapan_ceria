document.querySelector('.container').querySelector('.more').querySelector('.parent').querySelector('.title').querySelector('.button').querySelector('button').addEventListener('click', () => {
    document.querySelector('.modal-create-parent').style.display = "block";
});
document.querySelector('.modal-create-parent').querySelector('.action-create').children[1].addEventListener('click', () => {
    document.querySelector('.modal-create-parent').style.display = "none";
});

function OpenModalEditParent(id) {
    //tampilkan modal edit
    document.querySelector('.modal-edit-parent').style.display = 'block';
    //ambil form editnya
    document.querySelector('.modal-edit-parent').querySelector('table').querySelector('tbody').children[0].children[2].children[0].value = document.querySelector('.more').querySelector('.parent').querySelector('table').querySelector('tbody').querySelector('tr[data-id="' + id + '"]').children[1].textContent;
    document.querySelector('.modal-edit-parent').querySelector('table').querySelector('tbody').children[1].children[2].children[0].value = document.querySelector('.more').querySelector('.parent').querySelector('table').querySelector('tbody').querySelector('tr[data-id="' + id + '"]').children[2].textContent;
    document.querySelector('.modal-edit-parent').querySelector('table').querySelector('tbody').children[3].children[2].children[0].value = document.querySelector('.more').querySelector('.parent').querySelector('table').querySelector('tbody').querySelector('tr[data-id="' + id + '"]').children[4].textContent;

}
document.querySelector('.container').querySelector('.more').querySelector('.imunitation').querySelector('.title').querySelector('.button').querySelector('button').addEventListener('click', () => {
    document.querySelector('.modal-create-antibody').style.display = "block";
});
function OpenModalEditAntibody(id) {
    document.querySelector('.modal-create-antibody').style.display = "none";
    document.querySelector('.modal-edit-antibody').style.display = 'block';
    document.querySelector('.modal-edit-antibody').querySelector('table').querySelector('tbody').children[0].children[2].children[0].value = document.querySelector('.more').querySelector('.imunitation').querySelector('table').querySelector('tbody').querySelector('tr[data-id="' + id + '"]').children[1].textContent;
    document.querySelector('.modal-edit-antibody').querySelector('table').querySelector('tbody').children[2].children[2].children[0].value = document.querySelector('.more').querySelector('.imunitation').querySelector('table').querySelector('tbody').querySelector('tr[data-id="' + id + '"]').children[3].textContent;
}
document.querySelector('.modal-create-parent').querySelector('.content').querySelector('.action-create').children[1].addEventListener('click', () => {
    document.querySelector('.modal-create-parent').style.display = "none";
});
function Cancel() {
    document.querySelector('.modal-edit-parent').style.display = "none";
}
function CancelAntibodyCreate() {
    document.querySelector('.modal-create-antibody').style.display = "none";
}
function CancelEditAntibody() {
    document.querySelector('.modal-edit-antibody').style.display = "none";
}
document.querySelector('.container').querySelector('.more').querySelector('.history').querySelector('.title').querySelector('.button').querySelector('button').addEventListener('click', () => {
    document.querySelector('.modal-create-history').style.display = "block";
});
document.querySelector('.modal-create-history').querySelector('.content').querySelector('.action-create').children[1].addEventListener('click', () => {
    document.querySelector('.modal-create-history').style.display = "none";
});
function OpenEditHistory(id) {

    document.querySelector('.modal-edit-history').style.display = 'block';
    document.querySelector('.modal-edit-history').querySelector('.action-edit').children[1].addEventListener('click', () => {
        document.querySelector('.modal-edit-history').style.display = 'none';
    })
    document.querySelector('.modal-edit-history').querySelector('.content').querySelector('table').children[0].children[0].children[2].children[0].value = document.querySelector('.history').querySelector('table').querySelector('tbody').querySelector('tr[data-id="' + id + '"]').children[1].textContent;
    document.querySelector('.modal-edit-history').querySelector('.content').querySelector('table').children[0].children[2].children[2].children[0].value = document.querySelector('.history').querySelector('table').querySelector('tbody').querySelector('tr[data-id="' + id + '"]').children[3].textContent;;
    document.querySelector('.modal-edit-history').querySelector('.content').querySelector('table').children[0].children[3].children[2].children[0].value = document.querySelector('.history').querySelector('table').querySelector('tbody').querySelector('tr[data-id="' + id + '"]').children[4].textContent;;
    document.querySelector('.modal-edit-history').querySelector('.action-edit').children[0].addEventListener('click', () => {
        document.querySelector('.modal-edit-history').querySelector('.content').querySelector('form').submit();
        document.querySelector('.modal-edit-history').querySelector('.content').querySelector('form').action = 'edit/' + id
    })
}
document.querySelector('.nutrition').querySelector('.button').querySelector('button').addEventListener('click', () => {
    document.querySelector(".modal-create-nutrition").style.display = 'block';
    document.querySelector('.modal-create-nutrition').querySelector('.content').querySelector('.action-create').children[1].addEventListener('click', () => {
        document.querySelector(".modal-create-nutrition").style.display = 'none';
    });
})
function EditNutrition(id) {
    document.querySelector('.modal-edit-nutrition').style.display = 'block';
    document.querySelector('.modal-edit-nutrition').querySelector('.content').querySelector('.action-edit').children[1].addEventListener('click', () => {
        document.querySelector(".modal-edit-nutrition").style.display = 'none';
    });
    document.querySelector('.modal-edit-nutrition').querySelector('.content').querySelector('table').children[0].children[1].children[2].children[0].value = document.querySelector('.nutrition').querySelector('table').querySelector('tbody').querySelector('tr[data-id="' + id + '"]').children[2].textContent;
    document.querySelector('.modal-edit-nutrition').querySelector('.content').querySelector('table').children[0].children[2].children[2].children[0].value = document.querySelector('.nutrition').querySelector('table').querySelector('tbody').querySelector('tr[data-id="' + id + '"]').children[3].textContent;
    document.querySelector('.modal-edit-nutrition').querySelector('.content').querySelector('table').children[0].children[3].children[2].children[0].value = document.querySelector('.nutrition').querySelector('table').querySelector('tbody').querySelector('tr[data-id="' + id + '"]').children[4].textContent;
}
document.querySelector('.tumbuh').querySelector('.button').querySelector('button').addEventListener('click', () => {
    document.querySelector(".modal-create-tumbuh").style.display = 'block';
    document.querySelector('.modal-create-tumbuh').querySelector('.content').querySelector('.action-create').children[1].addEventListener('click', () => {
        document.querySelector(".modal-create-tumbuh").style.display = 'none';
    });
});
//cek jika umur anak lebih dari  18 tahun
var umurInput = document.querySelector('.modal-create-tumbuh').querySelector('.content').querySelector('table').children[0].children[0].children[2].children[0];
umurInput.addEventListener('change', function () {
    cekUmur();
})
umurInput.addEventListener('keyup', () => {
    cekUmur();
})
function cekUmur() {
    var umur = parseInt(umurInput.value);
    if (umur > 12) {
        alert('umur sudah melampaui batas');
        umurInput.value = 12;
    }
}

function OpenModalEditTumbuh(id) {
    document.querySelector('.modal-edit-tumbuh').style.display = 'block';
    document.querySelector('.modal-edit-tumbuh').querySelector('.action-edit').children[1].addEventListener('click', () => {
        document.querySelector('.modal-edit-tumbuh').style.display = 'none';
    })
    document.querySelector('.modal-edit-tumbuh').querySelector('.content').querySelector('table').children[0].children[0].children[2].children[0].value = document.querySelector('.tumbuh').querySelector('table').querySelector('tbody').querySelector('tr[data-id="' + id + '"]').children[1].textContent;;
    document.querySelector('.modal-edit-tumbuh').querySelector('.content').querySelector('table').children[0].children[1].children[2].children[0].value = document.querySelector('.tumbuh').querySelector('table').querySelector('tbody').querySelector('tr[data-id="' + id + '"]').children[2].textContent;;
    document.querySelector('.modal-edit-tumbuh').querySelector('.content').querySelector('table').children[0].children[2].children[2].children[0].value = document.querySelector('.tumbuh').querySelector('table').querySelector('tbody').querySelector('tr[data-id="' + id + '"]').children[3].textContent;;
    document.querySelector('.modal-edit-tumbuh').querySelector('.content').querySelector('table').children[0].children[3].children[2].children[0].value = document.querySelector('.tumbuh').querySelector('table').querySelector('tbody').querySelector('tr[data-id="' + id + '"]').children[4].textContent;;
    document.querySelector('.modal-edit-tumbuh').querySelector('.content').querySelector('table').children[0].children[4].children[2].children[0].value = document.querySelector('.tumbuh').querySelector('table').querySelector('tbody').querySelector('tr[data-id="' + id + '"]').children[5].textContent;;

    //cek jika umur nya lebih dari 12 tahun
    var umurInput = document.querySelector('.modal-edit-tumbuh').querySelector('.content').querySelector('table').children[0].children[0].children[2].children[0];
    umurInput.addEventListener('change', function () {
        cekUmur();
    })
    umurInput.addEventListener('keyup', () => {
        cekUmur();
    })
    function cekUmur() {
        var umur = parseInt(umurInput.value);
        if (umur > 10) {
            alert('umur sudah melampaui batas');
            umurInput.value = 10;
        }
    }
}
