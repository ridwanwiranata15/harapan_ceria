document.getElementById('create').addEventListener('click', ()=>{
    document.querySelector('.modal-create-rawat').style.display = "block";
})
document.querySelector('.modal-create-rawat').querySelector('.content').querySelector('.action-create').children[1].addEventListener('click', ()=>{
    document.querySelector('.modal-create-rawat').style.display = "none";
})
function EditRawat(id)
{
    document.querySelector('.modal-edit-rawat').style.display = "block";
    document.querySelector('.modal-edit-rawat').querySelector('.content').querySelector('.action-edit').children[1].addEventListener('click', ()=>{
        document.querySelector('.modal-edit-rawat').style.display = 'none';
    })
    document.querySelector('.modal-edit-rawat').querySelector('.content').querySelector('.action-edit').children[0].addEventListener("click", ()=>{
        const FormEditrawat = document.querySelector('.modal-edit-rawat').querySelector('.content').querySelector('form');
        FormEditrawat.submit();
        FormEditrawat.action = '/edit-rawat/' + id
    })

    document.querySelector('.modal-edit-rawat').querySelector('.content').querySelector('table').children[0].children[0].children[2].innerHTML =  document.querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[1].textContent;
    document.querySelector('.modal-edit-rawat').querySelector('.content').querySelector('table').children[0].children[1].children[2].innerHTML =  document.querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[2].textContent;
    document.querySelector('.modal-edit-rawat').querySelector('.content').querySelector('table').children[0].children[2].children[2].innerHTML =  document.querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[3].textContent;
    document.querySelector('.modal-edit-rawat').querySelector('.content').querySelector('table').children[0].children[3].children[2].innerHTML =  document.querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[4].textContent;
    document.querySelector('.modal-edit-rawat').querySelector('.content').querySelector('table').children[0].children[4].children[2].innerHTML =  document.querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[5].textContent;
    document.querySelector('.modal-edit-rawat').querySelector('.content').querySelector('table').children[0].children[5].children[2].innerHTML =  document.querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[6].textContent;
    document.querySelector('.modal-edit-rawat').querySelector('.content').querySelector('table').children[0].children[6].children[2].innerHTML =  document.querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[7].textContent;
    document.querySelector('.modal-edit-rawat').querySelector('.content').querySelector('table').children[0].children[7].children[2].innerHTML =  document.querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[8 ].textContent;
    document.querySelector('.modal-edit-rawat').querySelector('.content').querySelector('table').children[0].children[8].children[2].innerHTML =  document.querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[9].textContent;

}
document.querySelector('.modal-create-rawat').querySelector('.content').querySelector('.action-create').addEventListener('click', ()=>{
    const FormCreate = document.querySelector('.modal-create-rawat').querySelector('form');
    FormCreate.submit();
    FormCreate.action = '/create-rawat';
})
