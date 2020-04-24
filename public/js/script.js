let dot = document.querySelectorAll('.dot');
let nightToggler = document.querySelector('.night-toggler-img');
let titleBtn = document.getElementById('title-btn');
let contactContainer = document.querySelector('.contact');
let contact = [document.querySelector('.contact-title'), document.querySelector('.contact-form')];
let contactBtn = document.querySelector('.submit-btn');
let displayBtn = document.querySelector('.display-btn');
let form = document.querySelector('form');
let dataLeft = document.getElementById('data-left');
let dataRight = document.getElementById('data-right');
let displayImg = document.querySelectorAll('.display-img');
let displayLeft = document.querySelector('.display-left');
let displayRight = document.querySelector('.display-right');
let formElements = Array.from(form);
let errors = 0;
let windowScroll = 0;
let token = formElements[0].value;
formElements.splice(0,1);
formElements.splice(3,1);

let appear = (item) => {
    if (item.classList.contains('disappear')){
        item.classList.remove('disappear');
    }
}

let post = () =>{
    let data = new FormData(form);
    fetch('/contact', {
        method: 'post',
        headers: {
            'X-CSRF-TOKEN': token
        },
        body: data
    })
    .then(response => {
        return response.json();
    })
    .then(data => {
        if(data == 'success'){
            contactBtn.innerText = 'Gracias!';
            contactBtn.classList.add('success');
        }
    })
    .catch(e => {
        return e;                                                                                                                                                                                       
    })
}
formElements.forEach(element => {
    element.addEventListener('focus', () => {
        element.labels[0].innerHTML = element.labels[0].innerHTML.replace('<span class="alert"> Falta completar esto.</span>', '');

        if(contactBtn.classList.contains('success')){  
            contactBtn.classList.remove('success')
        };
        contactBtn.innerText = 'ENVIAR';
    });

});

window.onscroll = () => {
    windowScroll = window.scrollY;
    if (windowScroll > (displayLeft.offsetTop - (displayLeft.offsetHeight / 2 ))){

        appear(dataLeft);

        setTimeout(() => {
            appear(displayImg[0]);
        }, 200);
    }
    if (windowScroll > (displayRight.offsetTop - (displayRight.offsetHeight / 2 ))){
        appear(dataRight);
        setTimeout(() => {
            appear(displayImg[1]);
        }, 200)
    }
    if (windowScroll > (contactContainer.offsetTop - (contactContainer.offsetHeight / 2))){
        appear(contact[0]);
        setTimeout(() => {
            appear(contact[1]);
        }, 200)
    }
};                                                                                                                                                                                                                                                                     

displayBtn.onclick = () => {
    window.scrollTo({
        top: document.querySelector('footer').offsetTop,
        behavior: 'smooth'
    });
}

contactBtn.onclick = (e) => {
    e.preventDefault();
    errors = 0;
    formElements.forEach((element) => {
        if(element.value.length == 0 || (element.value.charCodeAt(0) == 32 && element.value.length < 2)){
            if(element.labels[0].innerHTML.indexOf('<span class="alert"> Falta completar esto.</span>') == -1){
                element.labels[0].innerHTML += '<span class="alert"> Falta completar esto.</span>';
            }
            errors++;
        }
    })
    if(errors === 0){
        post();
    }
}

titleBtn.onclick = () => {
    window.scrollTo({
        top: document.querySelector('.contact').offsetTop,
        behavior: "smooth"
    });
}

nightToggler.onclick = () => {
    let imgSrc = nightToggler.src;
    if(imgSrc.indexOf('sun') !== -1){
         imgSrc = imgSrc.replace('sun', 'moon');
    } else {
       imgSrc = imgSrc.replace('moon', 'sun');
    }
    nightToggler.setAttribute('src', imgSrc);
    
    document.body.classList.toggle('nightmode');
}

let randomizer = () => {
    let result = Math.floor(Math.random() * (100 - 1)) + 1;
    return result;
};

let movement = () => {
    dot.forEach((element) => {
        element.style.transform = 'translate('+ randomizer() + '%, '+ randomizer() +'% )';
    });
};
movement();
setInterval(() => {
    movement();
}, 5000)

