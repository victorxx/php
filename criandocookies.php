<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <style>
        body {
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: black;
            color: white;
            display: flex;
            height: 100vh;
        }
        button {
            width: 330px;
            height: 100px;
            border-radius: 12px;
        }
    </style>
</head>
<body>
    <div id="resposta"></div>  
    <button onclick="comeca()">COMECAR</button>

    <script>
     function verificar()
     {
        let cookies=document.cookie.split(';');
        for(let i=0;i<cookies.length;i++)
            {
                 let cookie=cookies[i].trim();
                 if(cookie.startsWith('user=ri'))
                 {
                    alert('cookie ok');
                    return;
                 }
            }
     }
     verificar();
     function comeca()
     {
        let entrada=prompt('Digite algo');
        if(entrada==="")
            {
                alert('vazio');
                return;
            }
        

            document.cookie=`user=${entrada};path=/;max-age=`+24*60*60;
            alert('cookie criado'+entrada);
       
     }
    </script>
</body>
</html>
