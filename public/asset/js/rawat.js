document.getElementById('create').addEventListener('click', ()=>{
    document.querySelector('.modal-create-rawat').style.display = "block";
})
document.querySelector('.modal-create-rawat').querySelector('.content').querySelector('.action-create').children[1].addEventListener('click', ()=>{
    document.querySelector('.modal-create-rawat').style.display = "none";
})
function Edit(id)
{
    document.querySelector('.modal-edit-rawat').style.display = "block";
    document.querySelector('.modal-edit-rawat').querySelector('.content').querySelector('.action-edit').children[1].addEventListener('click', ()=>{
        document.querySelector('.modal-edit-rawat').style.display = 'none';

    })
    document.querySelector('.modal-edit-rawat').querySelector('.content').querySelector('table').children[0].children[6].children[2].children[0].value =  document.querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[8].textContent;
}