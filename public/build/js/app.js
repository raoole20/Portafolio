document.addEventListener('DOMContentLoaded', () => {
    mostrarBarra();
    seleccionar();
    eventoClick();
    eventoVentana();
});

function mostrarBarra(){

    const barra = document.querySelector('.barra_navegacion');

    const observadoe = new IntersectionObserver(function(entries) {
        if(entries[0].isIntersecting) {
            barra.classList.remove('bloqueado');
            // barra.classList.add('desbloqueado');
        } else {
            barra.classList.add('bloqueado');
            // barra.classList.remove('desbloqueado');
        }
    })

    observadoe.observe(document.querySelector('.header'));

}

function seleccionar(){

    const pag_2 = document.querySelector('#pag-2');
    const boton1 = document.querySelector('#boton-1')
    const boton2 = document.querySelector('#boton-2')
    const boton3 = document.querySelector('#boton-3')

 
    
    const wacth = new IntersectionObserver(function name(object) {

        if(object[0].isIntersecting){
            boton1.classList.remove('selecionado');
            boton3.classList.remove('selecionado');
            boton2.classList.add('selecionado');
        }else{
            boton2.classList.remove('selecionado');
        }
    });
    
    const wacth2 = new IntersectionObserver(function name(object) {

        if(object[0].isIntersecting){
            boton1.classList.remove('selecionado');
            boton2.classList.remove('selecionado');
            boton3.classList.add('selecionado');
        }else{
            boton3.classList.remove('selecionado');
        }
 
    });
    const wacth3 = new IntersectionObserver(function name(object) {

        if(object[0].isIntersecting){
            boton3.classList.remove('selecionado');
            boton2.classList.remove('selecionado');
            boton1.classList.add('selecionado');
        }else{
            boton1.classList.remove('selecionado');
        }
    
    });
    
    wacth3.observe(document.querySelector('.navegacion'));
    wacth2.observe(document.querySelector('.contenedor_img'));
    wacth.observe(document.querySelector('.servicos'));

}

function eventoClick(){

    const botones = document.querySelectorAll('.navegacion_link');

    console.log(botones)

    botones.forEach(boton => {
        boton.addEventListener('click', e => {
            e.preventDefault();
            const seccion = document.querySelector(e.target.attributes.href.value);

            seccion.scrollIntoView({
                behavior: 'smooth'
            });
        });    
    });

}

function eventoVentana(){

    const boton = document.querySelector("#contacto");

    const contenedor = document.createElement("DIV");
    contenedor.classList.add('ventana')

    const header= document.createElement("H2");
    header.textContent = "Contacta Me"
    header.classList.add('ventana_header');

    const formulario = document.createElement("FORM");
    formulario.classList.add('venta_formulario');

    const inputNombre =document.createElement("INPUT");
    inputNombre.type = 'text';
    inputNombre.placeholder =  "Nombre";
    
    const inputApellido =document.createElement("INPUT");
    inputApellido.type = 'text';
    inputApellido.required;
    inputApellido.placeholder =  "Apellido";

    const inputCorreo = document.createElement("INPUT");
    inputCorreo.type = 'email';
    inputCorreo.placeholder =  "Ingresa Tú correo";
    
    const botonCerrar = document.createElement('button');
    botonCerrar.onclick = cerrarVentana;
    botonCerrar.textContent = 'Cerrar'



    const botonEnviar = document.createElement('button');
    botonEnviar.onclick = enviarMensaje;
    botonEnviar.textContent = 'Enviar'
 
    const mensaje = document.createElement('textarea');
    const label = document.createElement("label");
    label.textContent = 'Mensaje:';
    
    
    formulario.appendChild(inputNombre);
    formulario.appendChild(inputApellido);
    formulario.appendChild(inputCorreo);
    formulario.appendChild(label);
    formulario.appendChild(mensaje);
    formulario.appendChild(botonCerrar);
    formulario.appendChild(botonEnviar);
    
    inputNombre.classList.add('inputNombre');
    inputApellido.classList.add('inputApellido');
    inputCorreo.classList.add('inputCorreo');

    const contenedorVentana = document.createElement('DIV');
    contenedorVentana.classList.add('contenedor-ventana');


    contenedor.appendChild(header);
    contenedor.appendChild(formulario);

    contenedorVentana.appendChild(contenedor)

    document.querySelector('body').appendChild(contenedorVentana);


    console.log(contenedor);
    console.log(contenedorVentana);


    boton.addEventListener("click", (e)=> {
        e.preventDefault();
        console.log("Hizo click")
        contenedor.classList.add('visibleVentana');
        contenedorVentana.classList.add('visible');

    })
}

function enviarMensaje(e) {

    e.preventDefault();

    const contenedor = document.querySelector('.visibleVentana');
    const contenedorVentana = document.querySelector('.visible');

    console.log( contenedor, contenedorVentana )
    contenedor.classList.remove('visibleVentana')
    contenedorVentana.classList.remove('visible')


}

function cerrarVentana(e) {
    e.preventDefault();

    const contenedor = document.querySelector('.visibleVentana');
    const contenedorVentana = document.querySelector('.visible');

    console.log( contenedor, contenedorVentana )
    contenedor.classList.remove('visibleVentana')
    contenedorVentana.classList.remove('visible')
}