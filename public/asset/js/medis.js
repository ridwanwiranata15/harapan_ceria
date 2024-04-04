document.getElementById('create').addEventListener('click', ()=>{
    document.querySelector('.modal-create-medis').style.display = "block";
})
document.querySelector('.modal-create-medis').querySelector('.content').querySelector('.action-create').children[1].addEventListener('click', ()=>{
    document.querySelector('.modal-create-medis').style.display = "none";
})

function EditMedis(id)
{
    document.querySelector('.modal-edit-medis').style.display = 'block';
    document.querySelector('.modal-edit-medis').querySelector('.content').querySelector('.action-edit').children[1].addEventListener('click', ()=>{
        document.querySelector('.modal-edit-medis').style.display = 'none';
    })
    const MedisNomor = document.querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[2].textContent;
    const Anamesis = document.querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[3].textContent;
    const Fisik = document.querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[4].textContent;
    const Diagnosis = document.querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[5].textContent;
    const Tindakan = document.querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[6].textContent;
    const ResepObat = document.querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[7].textContent;
    const Pronogsis = document.querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[8].textContent;
    document.querySelector('.modal-edit-medis').querySelector('.content').querySelector('table').children[0].children[1].children[2].children[0].value = MedisNomor;
    document.querySelector('.modal-edit-medis').querySelector('.content').querySelector('table').children[0].children[2].children[2].children[0].value = Anamesis;
    document.querySelector('.modal-edit-medis').querySelector('.content').querySelector('table').children[0].children[3].children[2].children[0].value = Fisik;
    document.querySelector('.modal-edit-medis').querySelector('.content').querySelector('table').children[0].children[4].children[2].children[0].value = Diagnosis;
    document.querySelector('.modal-edit-medis').querySelector('.content').querySelector('table').children[0].children[5].children[2].children[0].value = Tindakan;
    document.querySelector('.modal-edit-medis').querySelector('.content').querySelector('table').children[0].children[6].children[2].children[0].value = ResepObat;
    document.querySelector('.modal-edit-medis').querySelector('.content').querySelector('.action-edit').children[0].addEventListener('click', ()=>{
       const FormEdit =  document.querySelector('.modal-edit-medis').querySelector('.content').querySelector('form');
       FormEdit.submit();
       FormEdit.action = '/edit-medis/' + id;
    })

    function EditChange()
    {
        const FormEdit =  document.querySelector('.modal-edit-medis').querySelector('.content').querySelector('form');
        FormEdit.submit();
        FormEdit.action = '/edit-medis/' + id;
    }
}

const CreateMedis = document.getElementById('CreateMedis');
function Create()
{
    CreateMedis.submit();
    CreateMedis.action = '/create-medis';
}
