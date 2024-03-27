function OpenDetail(id)
{
    document.querySelector('.modal-detail').style.display = "block";
    const button = document.querySelector(".modal-detail").querySelector(".modal-detail-main").querySelector("button");
    button.addEventListener("click", ()=>{
        document.querySelector('.modal-detail').style.display = "none";
    })

    const ModalDetail = document.querySelector(".modal-detail");
    const Main = ModalDetail.querySelector('.modal-detail-main');
    const ModalDetailContent = Main.querySelector(".content");
    const Data = ModalDetailContent.querySelector(".data").querySelector("table").querySelector('tbody');

    const table = document.querySelector("table").querySelector("tbody").querySelector('tr[data-id="'+ id +'"] ');
    console.log(table.children[1].textContent);
    Data.children[0].children[2].innerHTML = table.children[1].textContent;
    Data.children[1].children[2].innerHTML = table.children[2].textContent;
    Data.children[2].children[2].innerHTML = table.children[3].textContent;
    Data.children[3].children[2].innerHTML = table.children[4].textContent;
    Data.children[4].children[2].innerHTML = table.children[5].textContent;
    Data.children[5].children[2].innerHTML = table.children[6].textContent;
    Data.children[6].children[2].innerHTML = table.children[7].textContent;
    Data.children[7].children[2].innerHTML = table.children[8].textContent;
    //ambil foto yang di detainya
    const FotoDetail = document.querySelector(".modal-detail").querySelector('img');
    //ambil foto yang ada di data table
    const ValueImage = document.querySelector('table').children[1].querySelector('tr[data-id="'+id+'"]').children[9].children[0].src;
    FotoDetail.src = ValueImage;
}
function OpenEdit(id)
{
    //tampilakan form editnya
    document.querySelector(".show-edit").style.display = "block";
    //tombol untuk tutup form edit nya
    document.querySelector(".show-edit").querySelector(".show-edit-content").querySelector(".table-doctor").querySelector(".button-action").children[1].addEventListener("click", ()=>{
        document.querySelector(".show-edit").style.display = "none";
    });
    //ambil form isi nya
    document.querySelector(".show-edit").querySelector(".show-edit-content").querySelector(".table-doctor").querySelector("table").querySelector("tbody").children[0].children[2].children[0];
    //ambil data table dokternya
    const table = document.querySelector("table").querySelector("tbody").querySelector('tr[data-id="'+ id +'"] ');
    //isi form dengan data table
    document.querySelector(".show-edit").querySelector(".show-edit-content").querySelector(".table-doctor").querySelector("table").querySelector("tbody").children[0].children[2].children[0].value =  table.children[1].textContent;
    document.querySelector(".show-edit").querySelector(".show-edit-content").querySelector(".table-doctor").querySelector("table").querySelector("tbody").children[2].children[2].children[0].value =  table.children[3].textContent;
    document.querySelector(".show-edit").querySelector(".show-edit-content").querySelector(".table-doctor").querySelector("table").querySelector("tbody").children[5].children[2].children[0].value =  table.children[6].textContent;
    document.querySelector(".show-edit").querySelector(".show-edit-content").querySelector(".table-doctor").querySelector("table").querySelector("tbody").children[6].children[2].children[0].value =  table.children[7].textContent;
    document.querySelector(".show-edit").querySelector(".show-edit-content").querySelector(".table-doctor").querySelector("table").querySelector("tbody").children[7].children[2].children[0].value =  table.children[8].textContent;
    //kirim ke function updata pada laravel / CodeIgniter
    document.querySelector(".show-edit").querySelector(".show-edit-content").querySelector(".table-doctor").querySelector(".button-action").children[0].addEventListener("click", ()=>{
        //ambil tag form
        document.querySelector(".show-edit").querySelector(".show-edit-content").querySelector("form").submit();
        document.querySelector(".show-edit").querySelector(".show-edit-content").querySelector("form").action = "edit-doctor/" + id;
    })
    const FotoEDit = document.querySelector('.show-edit').querySelector('.image-upload').querySelector('ul').children[0].children[0];
    const FotoAsli = document.querySelector('table').children[1].querySelector('tr[data-id="'+id+'"]').children[9].children[0].src;
    FotoEDit.src = FotoAsli;
}
function DeleteDoctor(id)
{
    document.location.href = "delete/1";
}
document.getElementById("create").addEventListener("click", ()=>{
    document.querySelector(".modal-create").style.display = "block";
})
document.getElementById("batal").addEventListener("click", ()=>{
    document.querySelector(".modal-create").style.display = "none";
})
