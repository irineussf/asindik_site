<doctype html>
<html lang="pt-br">
    <head>
    <link rel="icon" href="img/001_logo_navbar_d.png" type="image/gif" sizes="16x16">
    <meta name="description=" content="Síndico Profissional Sindico Profissional Sindico Condominios Síndica Asindik" charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">  
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
          
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

   
    <link href="css/css.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap?v=<?php echo time(); ?>" rel="stylesheet">

    <!------ CARROUSSEL ---------->

<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>
<!------ CARROUSSEL ---------->
    <title>AsindiK - Síndica Profissional - Campinas</title>
      
    </head>   

<body>

    <header><!-- inicio Cabecalho -->
     
    </header><!--/fim Cabecalho -->
 
 
  
    <div class="section" id="clientes" style="color= #590006;">

    <h1 class="display-4 text-center p-2">Clientes</h1>
    
      <div class="carousel-wrapper">
        <div class="carousel " data-flickity>
        
          
  
              <?php
                //iniciando conexaão com DB
                //PUBLICADO
                // $cx = mysqli_connect("50.62.209.5:3306", "root_asindik", "2mr70Hg~");
                //LOCAL
                $cx = mysqli_connect("127.0.0.1", "root", "");
                //selecioando o DB
                $db = mysqli_select_db($cx, "db_asindik");
                //criando a query de consulta à tabela criada 

                $sql = mysqli_query($cx, "SELECT * FROM tb_clientes") or die( 
                mysqli_error($cx) //caso haja um erro na consulta 
                );
      
                  //pecorrendo os registros da consulta. 
                  while($aux = mysqli_fetch_assoc($sql)) { 
                  
                        //card open
                        echo '<div class="card shadow border-1 bg-white carousel-cell   mb-3">';
                          echo '<img class="card-img-top img-fluid" src="img/portfolio/'.$aux["url_img"].'">';
                          echo '<div class="card-body bg-light">'/*card body open*/;
                            echo '<h4 class="card-title">'.$aux["nome"].'</h4>';
                            echo '<h6 class="card-subtitle text-muted">'.$aux["cidade"].'</h6>';
                            echo '</div>'/*card body close*/;
                          echo '<ul class="list-group list-group-flush">'/*lista open*/;
                            if ($aux["n_conjunto"] <> 0){
                            echo '<li class="list-group-item "><h5><span class="badge badge-dark">'.$aux["n_conjunto"].'</span> - '.$aux["t_conjunto"].'</h5></li>';   
                            }
                            echo '<li class="list-group-item"><h5><span class="badge badge-dark">'.$aux["n_unidades"].'</span> - '.$aux["t_unidades"].'</h5></li>';
                          echo '</ul>' /*lista close*/;
                          echo '<div class="card-footer">'.$aux["p_adm"].'</div>';
                        echo '</div>';

                

                  }
                ?>
                <!-- CARROUSSEL CLIENTES -->
               
        </div>
      </div>

    </div>

    

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
    
</body>
</html>