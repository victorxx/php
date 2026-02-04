<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <style>
      body{
        background-color:black;
        top:20%;
        display:flex;
        height: 100vh;
        justify-content: center;
        align-items: center;
      }
      button{
        position:fixed;
        top:30%;
        cursor:pointer;
        background-color: lime;
        width:330px;
        border-radius: 12px;
        font-size: 30px;
      }
    </style>
  </head>
  <body>
  <button id="conteudo">+conteúdo</button>
  <script>
  let link=[
    'https://www.espiritosanto-es.com.br/',
    'https://www.google.com/',
    'https://www.github.com/',
    'https://www.wikipedia.org/'
  ];
  let botao=document.getElementById('conteudo');
  botao.addEventListener('click',()=>{
  const indice=Math.floor(Math.random()*link.length);
  let links_escolhido=link[indice];
  window.location.href=links_escolhido;
  });
  </script>
  </body>
</html>
