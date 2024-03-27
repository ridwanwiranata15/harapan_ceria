document.getElementById('create').addEventListener('click', ()=>{
    document.querySelector('.modal-create-schedule').style.display = "block";
})
document.querySelector('.modal-create-schedule').querySelector('.content').querySelector('.action-create').children[1].addEventListener('click', ()=>{
    document.querySelector('.modal-create-schedule').style.display = "none";
})
function OpenEditSchedule(id)
{
    document.querySelector('.modal-edit-schedule').style.display = 'block';
    
    document.querySelector('.modal-edit-schedule').querySelector('.content').querySelector('table').querySelector('tbody').children[0].children[2].innerText = document.querySelector('table').querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[1].textContent;
    document.querySelector('.modal-edit-schedule').querySelector('.content').querySelector('table').querySelector('tbody').children[1].children[2].innerText = document.querySelector('table').querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[2].textContent;
    document.querySelector('.modal-edit-schedule').querySelector('.content').querySelector('table').querySelector('tbody').children[2].children[2].innerText = document.querySelector('table').querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[3].textContent;
    document.querySelector('.modal-edit-schedule').querySelector('.content').querySelector('table').querySelector('tbody').children[3].children[2].innerText = document.querySelector('table').querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[4].textContent;
    document.querySelector('.modal-edit-schedule').querySelector('.content').querySelector('table').querySelector('tbody').children[4].children[2].innerText = document.querySelector('table').querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[5].textContent;
}
document.querySelector('.modal-edit-schedule').querySelector('.content').querySelector('.action-edit').children[1].addEventListener('click', ()=>{
    document.querySelector('.modal-edit-schedule').style.display = 'none';
})