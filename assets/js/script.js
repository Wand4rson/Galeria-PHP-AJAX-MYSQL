bsCustomFileInput.init();

function trocaFoto(id){
   
     // 1º Cria o Form Data
     var dados = new FormData();

     //2º Recupera o campo e Verifica se tem arquivos selecionados usando ID           
     var arquivos = $('#arquivo'+id)[0].files; 
      
     //2º Pega a URL Base informada no campo hidden do form//
     urlBase = $('#urlBase').val();
     
     //4º Adiciona o Controller/Action na UrlBaseAction
     urlBaseAction = urlBase +'foto/editImage_action';
     
     // 5º Encontrou Arquivo Envia para o Controller e Salva//
    if (arquivos.length > 0){

        //1º - Adicionando os campos recuperados dentro do FormData//             
        dados.append('arquivo',arquivos[0]); 
        dados.append('inputID', id);


        //3º Executa o Ajax
        $.ajax({
            type:'POST',
            url:urlBaseAction,
            data:dados,
            contentType:false,
            processData:false,
            success:function(msg){        
                //alert(msg);        
                
                //Atualiza IMG//
                $('#img'+id).attr({
                    src:urlBase + 'images/'+msg
                });

                //window.location.href = urlBase;
            }
    
        });


    }

}
