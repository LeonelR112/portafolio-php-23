let buttons_more_details_lang = null;
let modal_title_lang = null;
let img_icon_lang = null;
let content_descrip_lang = null;
let content_certificate = null;

function moreDetailsLang(id_lang){
    let lang_info = JSON_LANGUAGES.find( element => element.id_lang == id_lang);
    if(!lang_info) throw new Error("Lenguaje de programación no encontrada. id_lang = " + id_lang);
    modal_title_lang.innerHTML = lang_info.name
    content_descrip_lang.innerHTML = `<p class="text-center">${lang_info.description}</p>`;
    renderIconLang(lang_info);
    renderCertificate(lang_info);
    $("#modalInfoLenguajes").modal('show');
}

function moreDetailsComDev(id_comdev){
    let complemento_dev = JSON_COMPLEMENTOS_DEV.find( element => element.id_comdev == id_comdev);
    if(!complemento_dev) throw new Error("No se ha encontrado el complemento con id " + id_comdev);
    modal_title_lang.innerHTML = complemento_dev.titulo
    content_descrip_lang.innerHTML = `<p class="text-center">${complemento_dev.descripcion}</p><p class="text-center small text-muted">${complemento_dev.info_footer}</p>`;
    renderIconLang(complemento_dev);
    renderCertificate(complemento_dev);
    $("#modalInfoLenguajes").modal('show');
}

function renderIconLang(lang_info){
    img_icon_lang.src = URL_ASSETS_ICONS + (lang_info.icon_img ? lang_info.icon_img : lang_info.imagen);
    img_icon_lang.title = lang_info.name ? lang_info.name.toUpperCase() : lang_info.titulo.toUpperCase();
}

function renderCertificate(lang_info){
    let output_html = ``;
    content_certificate.innerHTML = ``;
    if(lang_info.certificate == 'S'){
        output_html = `
            <article class="d-flex justify-content-start align-items-center flex-column">
                <a href="${URL_ASSETS_IMG + 'certs/' + (lang_info.img_cert ? lang_info.img_cert : lang_info.imagen_cert)}" data-lightbox="image-${lang_info.id_lang || lang_info.id_comdev}" data-title="Certificado de cursada ${lang_info.name ? lang_info.name : lang_info.titulo}"><img src="${URL_ASSETS_IMG + 'certs/' + (lang_info.img_cert ? lang_info.img_cert : lang_info.imagen_cert)}" alt="img_not_found" class="img-fluid shadow-sm" /></a>
                <p class="text-center fs-5 text-light">Certificado de cursada</p>
                <p>
                    <a href="${lang_info.url_cert}" class="button-lr" target="_blank" title="Click para ver credencial online">Ver credencial</a>
                </p>
            </article>
        `;
    }
    else{
        output_html = `
        <article class="d-flex justify-content-start align-items-center flex-column">
            <p class="text-center">
                <i class="bi bi-image display-3 text-light"></i>
            </p>
            <p>
                Este lenguaje no fue estudiado en algún instituto
            </p>
        </article>
        `;
    }
    $(content_certificate).append(output_html);
}

document.addEventListener('DOMContentLoaded', e => {
    let buttons_more_details_lang = document.getElementsByClassName('button_more_details_lang');
    let buttons_more_details_comdev = document.getElementsByClassName('button_more_details_comdev');
    modal_title_lang = document.getElementById('modal_title_lang');
    img_icon_lang = document.getElementById('img_icon_lang');
    content_descrip_lang = document.getElementById('content_descrip_lang');
    content_certificate = document.getElementById('content_certificate');
    for(let button of buttons_more_details_lang){
        let id_lang = button.getAttribute('data-id-lang');
        button.addEventListener('click', e => moreDetailsLang(id_lang));
    }
    for(let button of buttons_more_details_comdev){
        let id_comdev = button.getAttribute('data-id-comdev');
        button.addEventListener('click', e => moreDetailsComDev(id_comdev));
    }
})