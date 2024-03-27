document.getElementById('create').addEventListener('click', ()=>{
    document.querySelector('.modal-create-daftar').style.display = "block";
})
document.querySelector('.modal-create-daftar').querySelector('.action-create').children[1].addEventListener('click', ()=>{
    document.querySelector('.modal-create-daftar').style.display = "none";
})
document.querySelector('.modal-edit-daftar').querySelector('.action-edit').children[1].addEventListener('click', ()=>{
    document.querySelector('.modal-edit-daftar').style.display = "none";
})
function Edit(id)
{
    document.querySelector('.modal-edit-daftar').style.display = "block";
    document.querySelector('.modal-edit-daftar').querySelector('.content').querySelector('table').children[0].children[5].children[2].children[0].value = document.querySelector('.content').querySelector('table').children[1].querySelector('tr[data-id="'+id+'"]').children[6].textContent;
    document.querySelector('.modal-edit-daftar').querySelector('.content').querySelector('table').children[0].children[6].children[2].children[0].value = document.querySelector('.content').querySelector('table').children[1].querySelector('tr[data-id="'+id+'"]').children[7].textContent;

}