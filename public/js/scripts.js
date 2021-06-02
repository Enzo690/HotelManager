
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