



function carregarConteudo(controle){
    fetch('controle.php',{
        method: 'POST',
        headers: {
            'content-type':'application/x-www-form-urlencoded',
        },
        body: 'controle=' + encodeURIComponent(controle),
    })
        .then(response =>response.text())
        .then(data=> {
            document.getElementById('conteudo').innerHTML = data;
        })
        .catch(error => console.error('Erro na requisiçao'))
}


// const servicoModal = document.getElementById('modalAddservico');
// const inservico = document.getElementById('idServico');
// const btnaddservico = document.getElementById('btnAddServico');



// if (servicoModal) {

//     const formServico = document.getElementById('frmCadServico');

//     servicoModal.addEventListener('shown.bs.modal', () => {
//         inservico.focus();
//         const submitHandler = function (event) {
//             event.preventDefault();
//             btnaddservico.disabled = true;
//             mostrarProcessando();

//             var form = event.target;
//             var formData = new FormData(form);
//             formData.append('controle', 'servicosAdd');

//             formServico.addEventListener('submit', submitHandler);

//             fetch('controle.php', {
//                 method: 'POST',
//                 body: formData,
//             })
//                 .then((response) => response.json())
//                 .then((data) => {
//                     console.log(data);
//                     if (data.success) {
//                         btnaddservico.disabled = false;
//                         servicoModalFechar.hide();
//                         setTimeout(function () {
//                             carregarConteudo('listarservicos');
//                             esconderProcessando();
//                         })
//                         form.removeEventListener('submit', submitHandler);
//                         alert('cadastrado com sucesso!');
//                     } else {
//                         alert('erro no cadastro!');
//                     }
//                 })
//                 .catch(error => {
//                     console.error('Erro na requisição:', error);
//                 });
//         };
//         formServico.addEventListener('submit', submitHandler);
//     })
// };


// function abrirModalEdicao(servico,idservico){
//     var inservicoedit = document.getElementById('servicoedit');
//     if (inservicoedit) {
//         inservicoedit.focus();
//     }
//     inservicoedit.value = servico
//     document.getElementById('idservicoedit').value = idservico

// };


// function abrirfecharmodaljs(nomemodal, abriroufechar){
//     var modalinstancia = new bootstrap.Modal(document.getElementById('nomeModal'));
//     if (abriroufechar == 'A') {
//         modalinstancia.show();
//     }else{modalinstancia.hide();
//     }
// };




// document.getElementById('frmeditservico').addEventListener('submit',function (event){
// event.preventDefault();
// alert('clicou no botão');
// var formData = new FormData(this);
//             formData.append('controle', 'servicosalt');

        

//             fetch('controle.php', {
//                 method: 'POST',
//                 body: formData,
//             })
//                 .then((response) => response.json())
//                 .then(data => {
//                     console.log(data);
//                     if (data.success) {
//                         carregarConteudo('listarservicos')
//                         servicoeditModalFechar.hide();
//                  }
                    
//                     else {
                      
//                     }
//                 })
//                 .catch(error => {
//                     console.error('Erro na requisição:', error);
//                 });
//             });








//             function deletargeral(controle,id){

//                 fetch('controle.php',{
//                     method: 'POST',
//                     headers: {
//                         'content-type':'application/x-www-form-urlencoded',
//                     },
//                     body: 'controle=' + encodeURIComponent(controle) + '&id=' + encodeURIComponent(id)
//                 })
//                     .then(response =>response.json())
//                     .then(data=> {
//                        if (data.success) {
//                         carregarConteudo('listargenero')
//                        }
//                     })
//                     .catch(error => console.error('Erro na requisiçao'))
//             };



//             function deletargeral2(controle,id){

//                 fetch('controle.php',{
//                     method: 'POST',
//                     headers: {
//                         'content-type':'application/x-www-form-urlencoded',
//                     },
//                     body: 'controle=' + encodeURIComponent(controle) + '&id=' + encodeURIComponent(id)
//                 })
//                     .then(response =>response.json())
//                     .then(data=> {
//                        if (data.success) {
//                         carregarConteudo('listarservicos')
//                        }
//                     })
//                     .catch(error => console.error('Erro na requisiçao'))
//             };



//             function deletargeraladm(controle,id){

//                 fetch('controle.php',{
//                     method: 'POST',
//                     headers: {
//                         'content-type':'application/x-www-form-urlencoded',
//                     },
//                     body: 'controle=' + encodeURIComponent(controle) + '&id=' + encodeURIComponent(id)
//                 })
//                     .then(response =>response.json())
//                     .then(data=> {
//                        if (data.success) {
//                         carregarConteudo('listaradm')
//                        }
//                     })
//                     .catch(error => console.error('Erro na requisiçao'))
//             };


//             function deletargeralpedido(controle,id){

//                 fetch('controle.php',{
//                     method: 'POST',
//                     headers: {
//                         'content-type':'application/x-www-form-urlencoded',
//                     },
//                     body: 'controle=' + encodeURIComponent(controle) + '&id=' + encodeURIComponent(id)
//                 })
//                     .then(response =>response.json())
//                     .then(data=> {
//                        if (data.success) {
//                         carregarConteudo('listarpedido')
//                        }
//                     })
//                     .catch(error => console.error('Erro na requisiçao'))
//             };


// const clienteModal = document.getElementById('modalAddcliente');
// const incliente = document.getElementById('idnomecliente');
// const incliente2 = document.getElementById('idemailcliente');
// const btnaddcliente = document.getElementById('btnAddcliente');


            
            
// if (clienteModal) {

//     const formCliente = document.getElementById('frmAddcliente');

//     clienteModal.addEventListener('shown.bs.modal', () => {
//         incliente.focus();
//         const submitHandler = function (event) {
//             event.preventDefault();
//             btnaddcliente.disabled = true;
//             mostrarProcessando();

//             var form = event.target;
//             var formData = new FormData(form);
//             formData.append('controle', 'clienteAdd');

//             formCliente.addEventListener('submit', submitHandler);

//             fetch('controle.php', {
//                 method: 'POST',
//                 body: formData,
//             })
//                 .then((response) => response.json())
//                 .then((data) => {
//                     console.log(data);
//                     if (data.success) {
//                         btnaddcliente.disabled = false;
//                         clienteModalFechar.hide();
//                         setTimeout(function () {
//                             carregarConteudo('listarcliente');
//                             esconderProcessando();
//                         })
//                         form.removeEventListener('submit', submitHandler);
//                         alert('cadastrado com sucesso!');
//                     } else {
//                         alert('erro no cadastro!');
//                     }
//                 })
//                 .catch(error => {
//                     console.error('Erro na requisição:', error);
//                 });
//         };
//         formCliente.addEventListener('submit', submitHandler);
//     })
// };
        

// function abrirModalEdicao2(cliente,cliente2,cliente3,idcliente){
//     var inclienteedit = document.getElementById('idnomedit');
//     var inclienteedit2 = document.getElementById('idemailedit');
//     var inclienteedit3 = document.getElementById('idcpfedit');
//     if (inclienteedit & inclienteedit2 & inclienteedit3 ) {
//         inclienteedit.focus();
//     }
//     inclienteedit.value = cliente
//     inclienteedit2.value = cliente2
//     inclienteedit3.value = cliente3
//     document.getElementById('idclienteedit').value = idcliente

// };



// document.getElementById('frmeditcliente').addEventListener('submit',function (event){
//     event.preventDefault();
//     alert('clicou no botão');
//     var formData = new FormData(this);
//                 formData.append('controle', 'clienteAlt');
    
            
    
//                 fetch('controle.php', {
//                     method: 'POST',
//                     body: formData,
//                 })
//                     .then((response) => response.json())
//                     .then(data => {
//                         console.log(data);
//                         if (data.success) {
//                             carregarConteudo('listarcliente')
//                      }
                        
//                         else {
                          
//                         }
//                     })
//                     .catch(error => {
//                         console.error('Erro na requisição:', error);
//                     });
//                 });
    

      
//                 function deletargeralcliente(controle,id){

//                     fetch('controle.php',{
//                         method: 'POST',
//                         headers: {
//                             'content-type':'application/x-www-form-urlencoded',
//                         },
//                         body: 'controle=' + encodeURIComponent(controle) + '&id=' + encodeURIComponent(id)
//                     })
//                         .then(response =>response.json())
//                         .then(data=> {
//                            if (data.success) {
//                             carregarConteudo('listarcliente')
//                            }
//                         })
//                         .catch(error => console.error('Erro na requisiçao'))
//                 };

//                 function vermaisgenero(genero,idgenero){
//                     var ingenerovermais = document.getElementById('generovermais');
//                     if (ingenerovermais) {
//                         ingenerovermais.focus();
//                     }
//                     ingenerovermais.value = genero
   
//                     document.getElementById('idgenerovermais').value = idgenero
                
//                 };

//                 function vermaiscliente(cliente,idcliente){
//                     var clientevermais = document.getElementById('clientevermais');
//                     if (clientevermais && idclientevermais == idclientevermais ) {
//                         clientevermais.focus();
//                     }
//                     clientevermais.value = cliente
   
//                    var idclientevermais = document.getElementById('idclientevermais').value = idcliente
                
//                 };
                
                
//                 document.addEventListener("DOMContentLoaded", function() {
//                     const bordahover = document.querySelectorAll(".bordahover");
                  
//                     bordahover.forEach(item => {
//                       item.addEventListener("click", function() {
             
//                         bordahover.forEach(item => {
//                           item.classList.remove("selected");
//                         });
                  
                
//                         this.classList.add("selected");
                  
                 
//                         this.closest('.nav').classList.add('item-selected');
//                       });
//                     });
//                   });


// const admModal = document.getElementById('modalAddadm');
// const innomeadm = document.getElementById('idnomeadm');
// const inadmemail = document.getElementById('idemailadm');
// const btnaddadm = document.getElementById('btnAddadm');


            
            
// if (admModal) {

//     const formAdm = document.getElementById('frmAddadm');

//     admModal.addEventListener('shown.bs.modal', () => {
//         incliente.focus();
//         const submitHandler = function (event) {
//             event.preventDefault();
//             btnaddadm.disabled = true;
//             mostrarProcessando();

//             var form = event.target;
//             var formData = new FormData(form);
//             formData.append('controle', 'admadd');

//             formAdm.addEventListener('submit', submitHandler);

//             fetch('controle.php', {
//                 method: 'POST',
//                 body: formData,
//             })
//                 .then((response) => response.json())
//                 .then((data) => {
//                     console.log(data);
//                     if (data.success) {
//                         btnaddadm.disabled = false;
//                         admModalFechar.hide();
//                         setTimeout(function () {
//                             carregarConteudo('listaradm');
//                             esconderProcessando();
//                         })
//                         form.removeEventListener('submit', submitHandler);
//                         alert('cadastrado com sucesso!');
//                     } else {
//                         alert('erro no cadastro!');
//                     }
//                 })
//                 .catch(error => {
//                     console.error('Erro na requisição:', error);
//                 });
//         };
//         formAdm.addEventListener('submit', submitHandler);
//     })
// };



// document.getElementById('frmeditadm').addEventListener('submit',function (event){
//     event.preventDefault();
//     alert('clicou no botão');
//     var formData = new FormData(this);
//                 formData.append('controle', 'admAlt');
    
            
    
//                 fetch('controle.php', {
//                     method: 'POST',
//                     body: formData,
//                 })
//                     .then((response) => response.json())
//                     .then(data => {
//                         console.log(data);
//                         if (data.success) {
//                             carregarConteudo('listaradm')
//                             admeditModalFechar.hide();
//                         }   
                        
//                         else {
                          
//                         }
//                     })
//                     .catch(error => {
//                         console.error('Erro na requisição:', error);
//                     });
//                 });


// function abrirModalEdicaoadm(nomeadm,emailadm,senhaadm3,idadm){
//     var inadmnomeedit = document.getElementById('idnomeadmedit');
//     var inadmemailedit = document.getElementById('idemailadmedit');
//     var inadmsenhaedit = document.getElementById('idadmsenhaedit');
//     if (inadmnomeedit & inadmemailedit & inadmsenhaedit ) {
//         inadmnomeedit.focus();
//     }
//     inadmnomeedit.value = nomeadm
//     inadmemailedit.value = emailadm
//     inadmsenhaedit.value = senhaadm3
//     document.getElementById('idadmedit').value = idadm

// };



// const radioA_vista = document.querySelector('input[value="a_vista"]');
// const radioA_prazo = document.querySelector('input[value="a_prazo"]');
// const prazoInput = document.getElementById('prazoInput');

// function ajustarCampoDeEntrada() {
//   if (radioA_vista.checked) {
//     prazoInput.classList.add('hidden');
//   } else {
//     prazoInput.classList.remove('hidden');
//   }
// }

// radioA_vista.addEventListener('change', ajustarCampoDeEntrada);
// radioA_prazo.addEventListener('change', ajustarCampoDeEntrada);

// ajustarCampoDeEntrada();

// const pedidomodal = document.getElementById('modalAddpedido');
// const inclientep = document.getElementById('sclientep');
// const sservicop = document.getElementById('sservicop');
// const dataini = document.getElementById('iddatainicio');
// const datafim = document.getElementById('iddatafim');
// const idvista = document.getElementById('idvista');
// const idprazo = document.getElementById('idprazo');
// const btnaddpedido = document.getElementById('btnAddpedido');

// if (pedidomodal) {
//     const formpedido = document.getElementById('frmAddpedido');

//     pedidomodal.addEventListener('shown.bs.modal', () => {
//         inclientep.focus();
//         const submitHandler = function (event) {
//             event.preventDefault();
//             btnaddpedido.disabled = true;
//             mostrarProcessando();

//             var form = event.target;
//             var formData = new FormData(form);
//             formData.append('controle', 'pedidoadd');

//             formpedido.addEventListener('submit', submitHandler);

//             fetch('controle.php', {
//                 method: 'POST',
//                 body: formData,
//             })
//                 .then((response) => response.json())
//                 .then((data) => {
//                     console.log(data);
//                     if (data.success) {
//                         btnaddpedido.disabled = false;
//                         pedidoModalFechar.hide();
//                         setTimeout(function () {
//                             carregarConteudo('listarpedido');
//                             esconderProcessando();
//                         })
//                         form.removeEventListener('submit', submitHandler);
//                         alert('cadastrado com sucesso!');
//                     } else {
//                         alert('erro no cadastro!');
//                     }
//                 })
//                 .catch(error => {
//                     console.error('Erro na requisição:', error);
//                 });
//         };
//         formpedido.addEventListener('submit', submitHandler);
//     })
// };



// const clienteModalFechar = new bootstrap.Modal(
//     document.getElementById('modalAddcliente')
// );

// const admModalFechar = new bootstrap.Modal(
//     document.getElementById('modalAddadm')
// );

// const servicoModalFechar = new bootstrap.Modal(
//     document.getElementById('modalAddservico')
// );

// const pedidoModalFechar = new bootstrap.Modal(
//     document.getElementById('modalAddpedido')
// );


// const admeditModalFechar = new bootstrap.Modal(
//     document.getElementById('modaleditadm')
// );

// const servicoeditModalFechar = new bootstrap.Modal(
//     document.getElementById('modaleditservico')
// );


const servicoModal = document.getElementById('modalAddservico');
const inservico = document.getElementById('idServico');
const btnaddservico = document.getElementById('btnAddServico');



if (servicoModal) {

    const formServico = document.getElementById('frmCadServico');

    servicoModal.addEventListener('shown.bs.modal', () => {
        inservico.focus();
        const submitHandler = function (event) {
            event.preventDefault();
            btnaddservico.disabled = true;
            mostrarProcessando();

            var form = event.target;
            var formData = new FormData(form);
            formData.append('controle', 'servicosAdd');

            formServico.addEventListener('submit', submitHandler);

            fetch('controle.php', {
                method: 'POST',
                body: formData,
            })
                .then((response) => response.json())
                .then((data) => {
                    console.log(data);
                    if (data.success) {
                        btnaddservico.disabled = false;
                        servicoModalFechar.hide();
                        setTimeout(function () {
                            carregarConteudo('listarservicos');
                            esconderProcessando();
                        })
                        form.removeEventListener('submit', submitHandler);
                        alert('cadastrado com sucesso!');
                    } else {
                        alert('erro no cadastro!');
                    }
                })
                .catch(error => {
                    console.error('Erro na requisição:', error);
                });
        };
        formServico.addEventListener('submit', submitHandler);
    })
};


function abrirModalEdicao(servico,idservico){
    var inservicoedit = document.getElementById('servicoedit');
    if (inservicoedit) {
        inservicoedit.focus();
    }
    inservicoedit.value = servico
    document.getElementById('idservicoedit').value = idservico

};


function abrirfecharmodaljs(nomemodal, abriroufechar){
    var modalinstancia = new bootstrap.Modal(document.getElementById('nomeModal'));
    if (abriroufechar == 'A') {
        modalinstancia.show();
    }else{modalinstancia.hide();
    }
};




document.getElementById('frmeditservico').addEventListener('submit',function (event){
event.preventDefault();
alert('clicou no botão');
var formData = new FormData(this);
            formData.append('controle', 'servicosalt');

        

            fetch('controle.php', {
                method: 'POST',
                body: formData,
            })
                .then((response) => response.json())
                .then(data => {
                    console.log(data);
                    if (data.success) {
                        carregarConteudo('listarservicos')
                        servicoeditModalFechar.hide();
                 }
                    
                    else {
                      
                    }
                })
                .catch(error => {
                    console.error('Erro na requisição:', error);
                });
            });








            function deletargeral(controle,id){

                fetch('controle.php',{
                    method: 'POST',
                    headers: {
                        'content-type':'application/x-www-form-urlencoded',
                    },
                    body: 'controle=' + encodeURIComponent(controle) + '&id=' + encodeURIComponent(id)
                })
                    .then(response =>response.json())
                    .then(data=> {
                       if (data.success) {
                        carregarConteudo('listargenero')
                       }
                    })
                    .catch(error => console.error('Erro na requisiçao'))
            };



            function deletargeral2(controle,id){

                fetch('controle.php',{
                    method: 'POST',
                    headers: {
                        'content-type':'application/x-www-form-urlencoded',
                    },
                    body: 'controle=' + encodeURIComponent(controle) + '&id=' + encodeURIComponent(id)
                })
                    .then(response =>response.json())
                    .then(data=> {
                       if (data.success) {
                        carregarConteudo('listarservicos')
                       }
                    })
                    .catch(error => console.error('Erro na requisiçao'))
            };



            function deletargeraladm(controle,id){

                fetch('controle.php',{
                    method: 'POST',
                    headers: {
                        'content-type':'application/x-www-form-urlencoded',
                    },
                    body: 'controle=' + encodeURIComponent(controle) + '&id=' + encodeURIComponent(id)
                })
                    .then(response =>response.json())
                    .then(data=> {
                       if (data.success) {
                        carregarConteudo('listaradm')
                       }
                    })
                    .catch(error => console.error('Erro na requisiçao'))
            };


            function deletargeralpedido(controle,id){

                fetch('controle.php',{
                    method: 'POST',
                    headers: {
                        'content-type':'application/x-www-form-urlencoded',
                    },
                    body: 'controle=' + encodeURIComponent(controle) + '&id=' + encodeURIComponent(id)
                })
                    .then(response =>response.json())
                    .then(data=> {
                       if (data.success) {
                        carregarConteudo('listarpedido')
                       }
                    })
                    .catch(error => console.error('Erro na requisiçao'))
            };


const clienteModal = document.getElementById('modalAddcliente');
const incliente = document.getElementById('idnomecliente');
const incliente2 = document.getElementById('idemailcliente');
const btnaddcliente = document.getElementById('btnAddcliente');


            
            
if (clienteModal) {

    const formCliente = document.getElementById('frmAddcliente');

    clienteModal.addEventListener('shown.bs.modal', () => {
        incliente.focus();
        const submitHandler = function (event) {
            event.preventDefault();
            btnaddcliente.disabled = true;
            mostrarProcessando();

            var form = event.target;
            var formData = new FormData(form);
            formData.append('controle', 'clienteAdd');

            formCliente.addEventListener('submit', submitHandler);

            fetch('controle.php', {
                method: 'POST',
                body: formData,
            })
                .then((response) => response.json())
                .then((data) => {
                    console.log(data);
                    if (data.success) {
                        btnaddcliente.disabled = false;
                        clienteModalFechar.hide();
                        setTimeout(function () {
                            carregarConteudo('listarcliente');
                            esconderProcessando();
                        })
                        form.removeEventListener('submit', submitHandler);
                        alert('cadastrado com sucesso!');
                    } else {
                        alert('erro no cadastro!');
                    }
                })
                .catch(error => {
                    console.error('Erro na requisição:', error);
                });
        };
        formCliente.addEventListener('submit', submitHandler);
    })
};
        

function abrirModalEdicao2(cliente,cliente2,cliente3,idcliente){
    var inclienteedit = document.getElementById('idnomedit');
    var inclienteedit2 = document.getElementById('idemailedit');
    var inclienteedit3 = document.getElementById('idcpfedit');
    if (inclienteedit & inclienteedit2 & inclienteedit3 ) {
        inclienteedit.focus();
    }
    inclienteedit.value = cliente
    inclienteedit2.value = cliente2
    inclienteedit3.value = cliente3
    document.getElementById('idclienteedit').value = idcliente

};



document.getElementById('frmeditcliente').addEventListener('submit',function (event){
    event.preventDefault();
    alert('clicou no botão');
    var formData = new FormData(this);
                formData.append('controle', 'clienteAlt');
    
            
    
                fetch('controle.php', {
                    method: 'POST',
                    body: formData,
                })
                    .then((response) => response.json())
                    .then(data => {
                        console.log(data);
                        if (data.success) {
                            carregarConteudo('listarcliente')
                     }
                        
                        else {
                          
                        }
                    })
                    .catch(error => {
                        console.error('Erro na requisição:', error);
                    });
                });
    

      
                function deletargeralcliente(controle,id){

                    fetch('controle.php',{
                        method: 'POST',
                        headers: {
                            'content-type':'application/x-www-form-urlencoded',
                        },
                        body: 'controle=' + encodeURIComponent(controle) + '&id=' + encodeURIComponent(id)
                    })
                        .then(response =>response.json())
                        .then(data=> {
                           if (data.success) {
                            carregarConteudo('listarcliente')
                           }
                        })
                        .catch(error => console.error('Erro na requisiçao'))
                };

                function vermaisgenero(genero,idgenero){
                    var ingenerovermais = document.getElementById('generovermais');
                    if (ingenerovermais) {
                        ingenerovermais.focus();
                    }
                    ingenerovermais.value = genero
   
                    document.getElementById('idgenerovermais').value = idgenero
                
                };

                function vermaiscliente(cliente,idcliente){
                    var clientevermais = document.getElementById('clientevermais');
                    if (clientevermais && idclientevermais == idclientevermais ) {
                        clientevermais.focus();
                    }
                    clientevermais.value = cliente
   
                   var idclientevermais = document.getElementById('idclientevermais').value = idcliente
                
                };
                
                
                document.addEventListener("DOMContentLoaded", function() {
                    const bordahover = document.querySelectorAll(".bordahover");
                  
                    bordahover.forEach(item => {
                      item.addEventListener("click", function() {
             
                        bordahover.forEach(item => {
                          item.classList.remove("selected");
                        });
                  
                
                        this.classList.add("selected");
                  
                 
                        this.closest('.nav').classList.add('item-selected');
                      });
                    });
                  });


const admModal = document.getElementById('modalAddadm');
const innomeadm = document.getElementById('idnomeadm');
const inadmemail = document.getElementById('idemailadm');
const btnaddadm = document.getElementById('btnAddadm');


            
            
if (admModal) {

    const formAdm = document.getElementById('frmAddadm');

    admModal.addEventListener('shown.bs.modal', () => {
        incliente.focus();
        const submitHandler = function (event) {
            event.preventDefault();
            btnaddadm.disabled = true;
            mostrarProcessando();

            var form = event.target;
            var formData = new FormData(form);
            formData.append('controle', 'admadd');

            formAdm.addEventListener('submit', submitHandler);

            fetch('controle.php', {
                method: 'POST',
                body: formData,
            })
                .then((response) => response.json())
                .then((data) => {
                    console.log(data);
                    if (data.success) {
                        btnaddadm.disabled = false;
                        admModalFechar.hide();
                        setTimeout(function () {
                            carregarConteudo('listaradm');
                            esconderProcessando();
                        })
                        form.removeEventListener('submit', submitHandler);
                        alert('cadastrado com sucesso!');
                    } else {
                        alert('erro no cadastro!');
                    }
                })
                .catch(error => {
                    console.error('Erro na requisição:', error);
                });
        };
        formAdm.addEventListener('submit', submitHandler);
    })
};



document.getElementById('frmeditadm').addEventListener('submit',function (event){
    event.preventDefault();
    alert('clicou no botão');
    var formData = new FormData(this);
                formData.append('controle', 'admAlt');
    
            
    
                fetch('controle.php', {
                    method: 'POST',
                    body: formData,
                })
                    .then((response) => response.json())
                    .then(data => {
                        console.log(data);
                        if (data.success) {
                            carregarConteudo('listaradm')
                            admeditModalFechar.hide();
                        }   
                        
                        else {
                          
                        }
                    })
                    .catch(error => {
                        console.error('Erro na requisição:', error);
                    });
                });


function abrirModalEdicaoadm(nomeadm,emailadm,senhaadm3,idadm){
    var inadmnomeedit = document.getElementById('idnomeadmedit');
    var inadmemailedit = document.getElementById('idemailadmedit');
    var inadmsenhaedit = document.getElementById('idadmsenhaedit');
    if (inadmnomeedit & inadmemailedit & inadmsenhaedit ) {
        inadmnomeedit.focus();
    }
    inadmnomeedit.value = nomeadm
    inadmemailedit.value = emailadm
    inadmsenhaedit.value = senhaadm3
    document.getElementById('idadmedit').value = idadm

};



const radioA_vista = document.querySelector('input[value="a_vista"]');
const radioA_prazo = document.querySelector('input[value="a_prazo"]');
const prazoInput = document.getElementById('prazoInput');

function ajustarCampoDeEntrada() {
  if (radioA_vista.checked) {
    prazoInput.classList.add('hidden');
  } else {
    prazoInput.classList.remove('hidden');
  }
}

radioA_vista.addEventListener('change', ajustarCampoDeEntrada);
radioA_prazo.addEventListener('change', ajustarCampoDeEntrada);

ajustarCampoDeEntrada();

const pedidomodal = document.getElementById('modalAddpedido');
const inclientep = document.getElementById('sclientep');
const sservicop = document.getElementById('sservicop');
const dataini = document.getElementById('iddatainicio');
const datafim = document.getElementById('iddatafim');
const idvista = document.getElementById('idvista');
const idprazo = document.getElementById('idprazo');
const btnaddpedido = document.getElementById('btnAddpedido');

if (pedidomodal) {
    const formpedido = document.getElementById('frmAddpedido');

    pedidomodal.addEventListener('shown.bs.modal', () => {
        inclientep.focus();
        const submitHandler = function (event) {
            event.preventDefault();
            btnaddpedido.disabled = true;
            mostrarProcessando();

            var form = event.target;
            var formData = new FormData(form);
            formData.append('controle', 'pedidoadd');

            formpedido.addEventListener('submit', submitHandler);

            fetch('controle.php', {
                method: 'POST',
                body: formData,
            })
                .then((response) => response.json())
                .then((data) => {
                    console.log(data);
                    if (data.success) {
                        btnaddpedido.disabled = false;
                        pedidoModalFechar.hide();
                        setTimeout(function () {
                            carregarConteudo('listarpedido');
                            esconderProcessando();
                        })
                        form.removeEventListener('submit', submitHandler);
                        alert('cadastrado com sucesso!');
                    } else {
                        alert('erro no cadastro!');
                    }
                })
                .catch(error => {
                    console.error('Erro na requisição:', error);
                });
        };
        formpedido.addEventListener('submit', submitHandler);
    })
};