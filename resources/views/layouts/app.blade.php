<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">
    {{-- postする際に必要な値 --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>4 Answers Quiz クイズ</title>
  </head>
  <body>
    <body>
      <div id="app">
        <App />
      </div>
      <script src="/js/app.js"></script>
  </body>
</html>