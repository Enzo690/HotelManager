import Info from './Info.js';
// Wait for document loaded (in jQuery)

function readUrl(input) {
    if (input.files && input.files[0]) {
      let reader = new FileReader();

      reader.addEventListener('load', () => {
        let imgName = input.files[0].name;
        document.querySelector('.text-upload').classList.add("text-success");
        input.setAttribute("data-title", imgName);
      });

      reader.readAsDataURL(input.files[0]);
    }  
}

let selectInputs = document.querySelectorAll('.selectInput');
let buttonClose = document.querySelectorAll('.buttonClose');

buttonClose.forEach(function(e) {
    e.addEventListener('click', close);
});

selectInputs.forEach(function(e) {
    e.addEventListener('click', selector);
})

function selector(e) {
    let permissionDisplay = e.target.classList.add('d-none');
    let selector = e.target.nextSibling.nextSibling.classList.remove('d-none');
}

function close(e) {
    let displayPermission = e.target.parentNode.parentNode.parentNode.parentNode.parentNode.childNodes[1];
    let removeSelectOptions = e.target.parentNode.parentNode.parentNode.parentNode;  

    displayPermission.classList.remove('d-none');
    removeSelectOptions.classList.add('d-none');  
}

async function apiPost (url, form, sucess = () => console.log('success')) {
    $.ajax({
        url: url,
        type: 'post',
        data: form.serialize(),
        success: () => {
            sucess();
        }
    });
}

function getUrl(){
    // Supprimons l'éventuel dernier slash de l'URL
    let urlcourante = document.location.href.replace(/\/$/, "");
    // Gardons dans la variable queue_url uniquement la portion derrière le dernier slash de urlcourante
    let queue_url = urlcourante.substring (urlcourante.lastIndexOf( "/" )+1 );
    return queue_url;
}

let dataSet = [];
let info = new Info(dataSet);
// generation de tableau en fonction de la page
switch (getUrl()){
    case 'client' :
        info.getClient();

        $('formAdd').submit( (e) => {
            e.preventDefault();
           let formAddClient =  new FormData(document.getElementById('formAdd'))
            console.log(formAddClient);
           apiPost('/api/newmember', $("#formAdd"), info.getClient());

        })


        break;
}



