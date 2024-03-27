document.getElementById("credit").addEventListener("click", ()=>{
    document.querySelector(".container-adult").style.display = "none";
    document.querySelector(".container-child").style.display = "block";
});
document.getElementById("cash").addEventListener("click", ()=>{
    document.querySelector(".container-adult").style.display = "block";
    document.querySelector(".container-child").style.display = "none";
});
// document.querySelector(".container-adult").querySelector("button").addEventListener("click", ()=>{
//     document.querySelector(".container-adult-create").style.display = "block";
// });
document.querySelector(".container-adult-create").querySelector(".container-adult-create-content").querySelector(".action-create").children[1].addEventListener("click", ()=>{
    document.querySelector(".container-adult-create").style.display = "none";
});
function Detail(id)
{
    document.querySelector(".modal-detail-patien").style.display = "block";
    //ambil data dari tabel pasien dewasa
    const ValueDetail = document.querySelector(".container-adult").querySelector('tr[data-id="'+id+'"]')
    //ambil modal pasiennya
    const ChangeValueDetail = document.querySelector('.modal-detail-patien').querySelector('table').querySelector('tbody');
    ChangeValueDetail.children[0].children[2].innerHTML = ValueDetail.children[1].textContent;
    ChangeValueDetail.children[1].children[2].innerHTML = ValueDetail.children[2].textContent;
    ChangeValueDetail.children[2].children[2].innerHTML = ValueDetail.children[3].textContent;
    ChangeValueDetail.children[3].children[2].innerHTML = ValueDetail.children[4].textContent;
    ChangeValueDetail.children[4].children[2].innerHTML = ValueDetail.children[5].textContent;
    ChangeValueDetail.children[5].children[2].innerHTML = ValueDetail.children[6].textContent;
    ChangeValueDetail.children[6].children[2].innerHTML = ValueDetail.children[7].textContent;
    ChangeValueDetail.children[7].children[2].innerHTML = ValueDetail.children[8].textContent;
    ChangeValueDetail.children[8].children[2].innerHTML = ValueDetail.children[9].textContent;
    ChangeValueDetail.children[9].children[2].innerHTML = ValueDetail.children[10].textContent;
    ChangeValueDetail.children[10].children[2].innerHTML = ValueDetail.children[11].textContent;
}
document.querySelector(".modal-detail-patien-content").querySelector("button").addEventListener("click", ()=>{
    document.querySelector(".modal-detail-patien").style.display = "none";
});
function OpenEditAdult(id)
{
    document.querySelector('.modal-edit-adult').style.display = "block";
    //ambil form edit
    const FormEdit = document.querySelector('.modal-edit-adult').querySelector('.modal-edit-adult-content').querySelector('table').querySelector('tbody');
    //ambil data pasien
    const valueEdit = document.querySelector(".container-adult").querySelector('tr[data-id="'+id+'"]');
    FormEdit.children[0].children[2].children[0].value = valueEdit.children[1].textContent;
    FormEdit.children[3].children[2].children[0].value = valueEdit.children[4].textContent;
    FormEdit.children[4].children[2].children[0].value = valueEdit.children[5].textContent;
    FormEdit.children[8].children[2].children[0].value = valueEdit.children[9].textContent;
    FormEdit.children[9].children[2].children[0].value = valueEdit.children[10].textContent;
    FormEdit.children[10].children[2].children[0].value = valueEdit.children[11].textContent;
    //fungsi tutup form edit
    document.querySelector('.modal-edit-adult').querySelector('.modal-edit-adult-content').querySelector('.action-edit').children[1].addEventListener("click", ()=>{
        document.querySelector('.modal-edit-adult').style.display = "none";
    });
    document.querySelector('.modal-edit-adult').querySelector('.modal-edit-adult-content').querySelector('.action-edit').children[0].addEventListener("click", ()=>{
        //ambil form editnya
        document.querySelector('.modal-edit-adult').querySelector('.modal-edit-adult-content').querySelector('form').action = 'edit-patien/'+id;
        document.querySelector('.modal-edit-adult').querySelector('.modal-edit-adult-content').querySelector('form').submit();
    })

}
function EditChild(id)
{
    document.querySelector('.modal-edit-child').style.display = 'block';
    document.querySelector('.modal-edit-child').querySelector('.action-edit').children[1].addEventListener('click', () => {
        document.querySelector('.modal-edit-child').style.display = 'none';
    })
    const FormEdit = document.querySelector('.modal-edit-child').querySelector('.content').querySelector('table').querySelector('tbody');
    const valueEdit = document.querySelector(".container-child").querySelector('tr[data-id="'+id+'"]');

    FormEdit.children[0].children[2].children[0].value = valueEdit.children[1].textContent;
    FormEdit.children[3].children[2].children[0].value = valueEdit.children[4].textContent;
    const buttonSubmit = document.querySelector('.modal-edit-child').querySelector('.action-edit').children[0];
    const ActionFormEdit =  document.querySelector('.modal-edit-child').querySelector('form');
    buttonSubmit.addEventListener('click', ()=>{
        ActionFormEdit.submit();
        ActionFormEdit.action = 'edit-patien/' + id;
    })


}
function DetailChild(id)
{
   document.location.href = 'detail-child/' + id;
}
document.getElementById('create').addEventListener("click", ()=>{
    document.querySelector('.container-adult-create').style.display = "block";

})

document.addEventListener("DOMContentLoaded", function() {
    var statusSelect = document.getElementById("status");
    var pekerjaanRow = document.getElementById("pekerjaan_row");
    var pekerjaanInput = document.getElementById("pekerjaan");

    // Simpan display awal dari baris pekerjaan
    var pekerjaanDisplay = getComputedStyle(pekerjaanRow).display;

    statusSelect.addEventListener("change", function() {
        var selectedValue = statusSelect.value;
        if(selectedValue === 'balita') {
            pekerjaanRow.style.display = "none";
            pekerjaanInput.value = "none"; // Set nilai default "none"
        } else {
            pekerjaanRow.style.display = pekerjaanDisplay; // Kembalikan ke display awal
        }
    });
});
