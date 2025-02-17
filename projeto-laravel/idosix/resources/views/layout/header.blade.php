

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="./css/estilo.css" rel="stylesheet">
  <title>!Dosix</title>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <header class="container-fluid">
    <div class="row" id="header">
      <div class="col-2">
        <img id="logo_img" src="./assets/images/logo.png">
        <p id="logo_texto">!Dosix</p>
      </div>
      <div class="col-2">
        <div><span class="btn_menu "><a href="{{ route('inicial') }}">HOME</a></span></div>
      </div>
      <div class="col-2">
        <div><span class="btn_menu "><a href="{{ route('servicos') }}">SERVIÇOS</a></span></div>
      </div>
      <div class="col-2">
        <div><span class="btn_menu "><a href="{{ route('agendamento') }}">agendamento</span></div>
      </div>
    </div>
  </header>
