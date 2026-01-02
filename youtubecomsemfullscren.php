<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <style>
          body{
            background-color: orange;
            padding:20px;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            justify-content: center;
          }
          #video{
            width:90%;
            max-width:660px;
            margin-top:200px;
          }
          #video iframe{
            width:100%;
            height: 320px;
            border-radius: 12px;
            border:none;
          }
          @media(max-width:550px){
            #video{
                margin-top:120px;
            }
            #video iframe{
                height: 220px;
            }
          }
  </style>
</head>
<body>
    <div id="video">
       <iframe 
            src="https://www.youtube.com/embed/dBpXlOvjVx8"
            allowfullscreen>
        </iframe>
        <iframe src="https://www.youtube.com/embed/dBpXlOvjVx8">
        </iframe>
    </div>
</body>
</html>
