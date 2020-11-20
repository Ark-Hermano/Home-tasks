
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Platafroma</title>

    <link rel="stylesheet" href="../../css/estilo.css">
    <link rel="stylesheet" type="text/css" href="../../projeto/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 


  </head>

  <body class="bg-dark">
    <nav class="navbar navbar-light bg-dark">
      <div class="container">
        <a class="navbar-brand text-info "  href="#">
          Plataforma
        </a>
      </div>
    </nav>

    <div class="container app">
      <div class="row">
        

        <div class="col-md-12">
          <div class="container pagina">
            <div class="row">
              <div class="col">

                <h4>Minhas Coisas</h4>
                  <hr />

                  <div class="row-mb-12 d-flex align-items-center tarefa">
                     <div class="card-columns">
                        <form method="POST" >
                          <label for="nome">Text</label>
                          <input type="text" name="nome" id="nome" value="<?php if(isset($res)){echo $res['nome'];}?>">       
                          <input type="submit" value="<?php if(isset($res)){echo "Atualizar";} else{echo "Inserir";} ?>">
                        </form>
                     </div>
                  </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>



  