document.getElementById('create').addEventListener('click', ()=>{
    document.querySelector('.modal-create-obat').style.display = "block";
})
document.querySelector('.modal-create-obat').querySelector('.content').querySelector('.action-create').children[1].addEventListener('click', ()=>{
    document.querySelector('.modal-create-obat').style.display = "none";
})
function Edit(id)
{
    document.querySelector('.modal-edit-obat').style.display = "block";
    document.querySelector('.modal-edit-obat').querySelector('.content').querySelector('.action-edit').children[1].addEventListener('click', ()=>{
        document.querySelector('.modal-edit-obat').style.display = 'none';
    })
    const Nama = document.querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[1].textContent;
    const Dosis = document.querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[2].textContent;
    const Aturan = document.querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[3].textContent;
    const Kategori = document.querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[4].textContent;
    const Stok = document.querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[5].textContent;
    const Harga = document.querySelector('tbody').querySelector('tr[data-id="'+id+'"]').children[6].textContent;
    document.querySelector('.modal-edit-obat').querySelector('.content').querySelector('table').children[0].children[0].children[2].children[0].value = Nama;
    document.querySelector('.modal-edit-obat').querySelector('.content').querySelector('table').children[0].children[1].children[2].children[0].value = Dosis;
    document.querySelector('.modal-edit-obat').querySelector('.content').querySelector('table').children[0].children[2].children[2].children[0].value = Aturan;
    document.querySelector('.modal-edit-obat').querySelector('.content').querySelector('table').children[0].children[3].children[2].children[0].value = Kategori;
    document.querySelector('.modal-edit-obat').querySelector('.content').querySelector('table').children[0].children[4].children[2].children[0].value = Stok;
    document.querySelector('.modal-edit-obat').querySelector('.content').querySelector('table').children[0].children[5].children[2].children[0].value = Harga;

    console.log('data obat', {Nama, Dosis, Aturan, Kategori, Stok, Harga});
}
