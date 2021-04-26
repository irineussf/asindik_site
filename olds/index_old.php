<doctype html>
<html lang="pt-br">

    <head>
    <meta charset="utf-8">
    <link rel="icon" href="img/001_logo_navbar_d.png" type="image/gif" sizes="16x16">

    <meta name="description=" content="Síndico Profissional Sindico Profissional Sindico Condominios Síndica Asindik" charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">  
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
    <link href="css/css.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap?v=<?php echo time(); ?>" rel="stylesheet">

    <!------ CARROUSSEL ---------->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>
    <!------ CARROUSSEL ---------->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124920581-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-124920581-1');
    </script>

        <script>

        $(function(){ 
            var navMain = $(".navbar-collapse");
            navMain.on("click", "a", null, function () {
                navMain.collapse('hide');
            });
        });
        $('#modal_login').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
        //remover zerando a opacidade

        // Para remover os botoes quando o site estiver em contato.
   
       </script>

       <style type="text/css">


             /*botao whataspp*/
            .float{
                position:fixed;
                width:60px;
                height:60px;
                bottom:40px;
                right:40px;
                background-color:#25d366;
                color:#FFF;
                border-radius:50px;
                text-align:center;
              font-size:30px;
                box-shadow: 0px 0px 10px #404040;
              z-index:100;
            }

              /*botao instagram*/
            .float2{
                position:fixed;
                width:60px;
                height:60px;
                bottom:120px;
                right:40px;
                background-color:#25d366;
                background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
                color:#FFF;
                border-radius:50px;
                text-align:center;
              font-size:30px;
                box-shadow: 0px 0px 10px #404040;
              z-index:100;
            }
  
            .my-float{
                margin-top:16px;
            }

            @media (max-width: 575.98px) {
                 .float{
                    position:fixed;
                    width:40px;
                    height:40px;
                    bottom:15px;
                    right:10px;
                    background-color:#25d366;
                    color:#FFF;
                    border-radius:50px;
                    text-align:center;
                    font-size:20px;
                    box-shadow: 0px 0px 10px #404040;
                    z-index:100;
                }
                
                 .float2{
                    position:fixed;
                    width:40px;
                    height:40px;
                    bottom:65px;
                    right:10px;
                    background: #d6249f;
                    background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
                    color:#FFF;
                    border-radius:50px;
                    text-align:center;
                    font-size:20px;
                    box-shadow: 0px 0px 10px #404040;
                     z-index:100;
                }

           
                .my-float{
                    margin-top:10px;
                }

            }
              
       </style>

    <title>AsindiK - Síndica Profissional - Campinas</title>
      
    </head>   

<body onresize="navBar_altura()" onload="navBar_altura()">
    <!-- onresize="myFunction()" onload="myFunction()" COLOCAR NA TAG BODY PARA TAAMANHO DA NAVBAR-->

    <header><!-- inicio Cabecalho -->
      <!-- NavBar -->
      <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-transparente shadow" id="nav_altura">
        <div class="container">
          <a href="">
          <a href="index.php" class="navbar-brand" >
            <img src="img/001_logo_navbar4.svg">
          </a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <i class="fas fa-bars text-white"></i>
          </button>
          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto">
                <?php
                    //criação da navbar
                    $nav_itens = array(
                        '#inicio' => "Início" ,
                        '#sobre' => "Sobre" ,
                        '#servicos' => "Serviços" ,
                        '#clientes' => "Clientes" ,
                        '#contato' => "Contato" ,
                    );

                    $key = array_keys($nav_itens);
                    //echo"${nav_itens[$key[$n_desc]]}";
                    $i = 0;
                    $size = sizeof($key);
                    $size_p = $size - 1;
                    foreach ($nav_itens as $n => $n_desc) {
                        echo '<li class="nav-item">';
                            
                        
                            echo '<a href="'.$n.'" class="nav-link"';
                            
                            if ($n == "#contato"){
                                $con = 'onclick=tiraPoe("T")';   
                            }else{
                                $con = 'onclick=tiraPoe("P")';
                            }

                            echo "$con";
                            echo ' >'.$n_desc.'</a>';
                            if ($i <> $size_p) {
                                echo '<li class="nav-item divisor"></li>';
                            }
                            $i++;
                        } 
                    
                ?>
             
             </ful>
          </div>
        </div>
      </nav>
      <!-- NavBar FIM -->
    </header><!--/fim Cabecalho -->

    <script>
        function loadpage(page){

          $.ajax({
            url:page,
            beforeSend:function(){
              $('#page_loader').html("Please wait...");
            },
            success:function(data){
              $('#page_loader').html(""); // to empty previous page contents.
              $('#page_loader').html(data);
            },
          });

        }

    </script>>
    
        <div class="bg" id="inicio">
          <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 text-center ">
                            <img src="img/001_logo_home.svg">
                        </div>
                    </div>
                </div>  
        </div>
    <div>

    <div class="section" id="sobre" >
        <div class="container ">
            <h1 class="display-4 text-center p-2">AsindiK </h1>
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-6 col-xl-4 py-3">
                    <div>
                        <img src="img/001_perfil.jpg" class="img-fluid border rounded shadow mx-auto d-block" >
                    </div>
                </div>
                <div class="d-flex p-3">
                    <div class="card p-3 shadow border">
                        <h3 class="card-title">Keila Cristina Pinto da Silva</h3>
                        <ul class="list-group list-group-flush  ">
                            <li class="list-group-item">
                                <div class="d-inline mr-2">
                                    <i class="fas fa-book fa-lg" style="color:#590006"></i>
                                </div>
                                Formada em Administração de Empresas
                            </li>
                            <li class="list-group-item">
                                <div class="d-inline mr-2">
                                    <i class="fas fa-calendar-alt fa-lg" style="color:#590006"></i>
                                </div>
                                Inícios das Atividades Condominiais em 2010
                            </li>
                            <li class="list-group-item">
                                <div class="d-inline mr-2">
                                    <i class="fas fa-book-reader fa-lg" style="color:#590006"></i>
                                </div>Curso de Síndico Profissional – Sindiconet<br>
                                <div class="d-inline mr-2"><i class="fas fa-book-reader fa-lg" style="color:#590006"></i>
                                </div>
                                Academia Nacional do Síndico
                            </li>
                            <li class="list-group-item">
                                <strong>
                                    <div class="d-inline mr-2"><i class="fas fa-shield-alt fa-lg" style="color:#590006"></i>
                                    </div>
                                    Seguro de responsabilidade Civil Profissional
                                </strong>
                            </li>
                            <li class="list-group-item">
                                <div class="d-inline mr-2"><i class="fas fa-award fa-lg" style="color:#590006"></i>
                                </div>
                                Prêmio – Síndica Destaque na região de Campinas pela Pró Síndico
                            </li>
                        </ul>
                     </div>
                </div>
            </div> 
        </div>
   </div>     
<div class="section caixa-servicos" id="servicos">
    
  <!--  TAMANHO DA NAV
   <script type="text/javascript">
//
        function myFunction() {
            var elmnt = document.getElementById("nav_altura");
            var w =  elmnt.offsetHeight ;//window.outerWidth;
            var h = elmnt.offsetWidth;//window.outerHeight;
            var txt = "Window size: width=" + w + ", height=" + h;
            document.getElementById("demo").innerHTML = txt;
        }
   </script>
   <p id="demo">teste</p>
-->


    <h1 class="display-4 text-center p-2">Serviços</h1>
    <div class="container">
        <div class="row justify-content-center p-2">
                  
            <?php
                echo '<link rel=”stylesheet” type=”text/css” href=”css/css.css” />';
                $icons_desc = array(
                    "fas fa-user-plus"=>"Consultoria ao Síndico",
                    
                    
                    "fas fa-funnel-dollar"=>"Otimização de recursos",
                    "fas fa-hand-holding-usd"=>"Racionalização de despesas",
                    "fas fa-pen-nib"=>"Negociação de contratos",
                    "fas fa-balance-scale"=>"Implementação das  obrigações legais",
                    "fas fa-hands-helping"=>"Imparcialidade no trato das relações humanas e  gestão  de conflitos",
                    "fas fa-city"=>"Implantação de condomínios",
                    "fas fa-file-signature"=>"Habilidade na identificação e tratativa de problemas  estruturais/construtivos",
                );

                foreach($icons_desc as $i => $i_desc) {
                echo '<div class="d-flex justify-content-center col-10 col-sm-10 col-md-5 col-xl-3 text-center m-2 b_servicos">';
                echo '<div class="mt-5 mx-auto serv_icons">';
                echo '<i class="'.$i.'"></i>';
                echo '<h5 class="mb-3 p-3">'.$i_desc.'</h5></div></div>';
            }

            ?>

        </div>
    </div>
</div>




    
<div class="section" id="clientes" style="color= #590006;">

<h1 class="display-4 text-center p-2">Clientes</h1>

  <div class="carousel-wrapper">
    <div class="carousel" data-flickity>
              
            <?php
              //iniciando conexaão com DB
                //PUBLICADO
               $cx = mysqli_connect("50.62.209.5:3306", "root_asindik", "2mr70Hg~");
                //LOCAL
              //  $cx = mysqli_connect("127.0.0.1", "root", "");
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
                        if ($aux["n_unidades"] <> 0){
                        echo '<li class="list-group-item"><h5><span class="badge badge-dark">'.$aux["n_unidades"].'</span> - '.$aux["t_unidades"].'</h5></li>';
                        }
                      echo '</ul>' /*lista close*/;
                      echo '<div class="card-footer">'.$aux["p_adm"].'</div>';
                    echo '</div>';

            

              }

            ?>
        
       
            </div>
        </div>

    </div>


    

    <footer>
            
        <div class="section" id="contato">
            <div class="container">
                <div class="row justify-content-center">
                    <h1 class="display-4"  style="text-decoration-color: #590006">Contato</h1>
                    
                </div>
            <!-- Material form contact -->
              <!-- <div class="row">
                    <div class="col-sm flex card shadow-lg p-2 m-3 " style="background: transparent; background: rgba(89,0,6,0.92); color: white;">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                -->
                <!-- Material form contact  -->
                <div class="vl"></div>

                        
                        <div class="d-flex col-sm-12 text-center align-self-center card  m-0 linkss" style="background: transparent;">
                        <div class="row "> 
                        
                            <?php
                                
                                $arr_footer = array(
                                    "whats" => array(
                                        "link" => 'http://api.whatsapp.com/send?1=pt_BR&phone=5519999012285&text=Olá!',
                                        "img_src" => 'fab fa-whatsapp',
                                        "desc" => '+5519994092595',
                                    ),
                                    "mail" => array(
                                        "link" => 'mailto:contato@asindik.com.br',
                                        "img_src" => 'far fa-envelope',
                                        "desc" => 'contato@asindik.com.br',
                                    ),
                                    "face" => array(
                                        "link" => 'https://www.facebook.com/asindika/',
                                        "img_src" => 'fab fa-facebook-f',
                                        "desc" => '/KeilaSíndica/',
                                    ),
                                    "insta" => array(
                                        "link" => 'https://www.instagram.com/keilasindica/',
                                        "img_src" => 'fab fa-instagram',
                                        "desc" => '/keilasindica/',
                                    ),
                                );
                                $whats_link = $arr_footer["whats"]["link"];
                                $whats_num = $arr_footer["whats"]["desc"];
                            
                                foreach ($arr_footer as $arr_footer_desc) {
                                    echo '<div class="col-3 ">';
                                        echo '<ul class="list-group">';
                                            echo '<li>';
                                                echo '<a href="'.$arr_footer_desc['link'].'" "target="_blank">';
                                                    echo '<i class="'.$arr_footer_desc['img_src'].' con_icons"></i>';
                                                echo '<br><div class="desc_cont">'.$arr_footer_desc['desc'].'</div></a>';
                                            echo '</li>';
                                        echo '</ul>';
                                    echo '</div>';
                                }
                            ?>
                        <div class="contact_deck" id="contact_deck">
                            <a href="https://api.whatsapp.com/send?phone=<?php echo $whats_num;?>&text=Olá!" class="float" target="_blank" id="float_zap">
                                <i class="fab fa-whatsapp my-float"></i>
                            </a>

                            <a href="https://www.instagram.com/keilasindica/" class="float2" target="_blank" id="float_insta">
                                <i class="fab fa-instagram my-float"></i>
                            </a>
                        </div>


                        
                      
                        
                        </div>
                        </div>
                    </div>
</div>
                </div>
            </div>
        </div>
    
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/contact_buttons.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  

    
</body>
</html>