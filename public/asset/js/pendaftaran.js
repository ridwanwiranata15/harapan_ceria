document.getElementById('create').addEventListener('click', ()=>{
    document.querySelector('.modal-create-daftar').style.display = "block";
})
document.querySelector('.modal-create-daftar').querySelector('.action-create').children[1].addEventListener('click', ()=>{
    document.querySelector('.modal-create-daftar').style.display = "none";
})
document.querySelector('.modal-edit-daftar').querySelector('.action-edit').children[1].addEventListener('click', ()=>{
    document.querySelector('.modal-edit-daftar').style.display = "none";
})
function EditDaftar(id)
{
    document.querySelector('.modal-edit-daftar').style.display = "block";
    document.querySelector('.modal-edit-daftar').querySelector('.content').querySelector('table').children[0].children[5].children[2].children[0].value = document.querySelector('.content').querySelector('table').children[1].querySelector('tr[data-id="'+id+'"]').children[6].textContent;;
    document.querySelector('.modal-edit-daftar').querySelector('.content').querySelector('table').children[0].children[6].children[2].children[0].value = document.querySelector('.content').querySelector('table').children[1].querySelector('tr[data-id="'+id+'"]').children[7].textContent;
    document.querySelector('.modal-edit-daftar').querySelector('.content').querySelector('.action-edit').children[1].addEventListener('click', ()=>{
        document.querySelector('.modal-edit-daftar').style.display = "none";
    })
    document.querySelector('.modal-edit-daftar').querySelector('.content').querySelector('.action-edit').children[0].addEventListener('click', ()=>{
        const FormEdit = document.querySelector('.modal-edit-daftar').querySelector('.content').querySelector('form');
        FormEdit.submit();
        FormEdit.action = '/edit-daftar/' + id
    })

}
document.getElementById('tambah').addEventListener('click', ()=>{
    const FormTambah = document.getElementById('FormTambah');
    FormTambah.submit();
})
