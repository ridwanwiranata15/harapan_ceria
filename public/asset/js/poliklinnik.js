document.getElementById('create').addEventListener('click', ()=>{
    document.querySelector('.modal-create-poli').style.display = "block";
})
document.querySelector('.modal-create-poli').querySelector('.content').querySelector('.action-create').children[1].addEventListener('click', ()=>{
    document.querySelector('.modal-create-poli').style.display = "none";
});

function Edit(id)
{
    document.querySelector('.modal-edit-poli').style.display = "block";
    document.querySelector('.modal-edit-poli').querySelector('.content').querySelector('table').children[0].children[0].children[2].children[0].value = document.querySelector('.content').querySelector('table').children[1].querySelector('tr[data-id="'+id+'"]').children[1].textContent;
    document.querySelector('.modal-edit-poli').querySelector('.content').querySelector('table').children[0].children[1].children[2].children[0].value = document.querySelector('.content').querySelector('table').children[1].querySelector('tr[data-id="'+id+'"]').children[2].textContent;
    document.querySelector('.modal-edit-poli').querySelector('.content').querySelector('table').children[0].children[2].children[2].children[0].value = document.querySelector('.content').querySelector('table').children[1].querySelector('tr[data-id="'+id+'"]').children[3].textContent;

}
document.querySelector('.modal-edit-poli').querySelector('.content').querySelector('.action-edit').children[1].addEventListener('click', ()=>{
    document.querySelector('.modal-edit-poli').style.display = "none";   
   

});