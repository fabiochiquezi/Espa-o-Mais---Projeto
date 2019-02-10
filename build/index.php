<?php include '/header.php'; ?>

  <div class="banner-slideshow">
    <img src="./img/banner-home.jpg" alt="">
  </div>

  <div class="sec-01-home">
    <div class="container">
      <div class="row">

        <div class="d-flex flex-column align-items-center w-100 flex-lg-row justify-content-lg-between align-items-lg-start">

          <div class="left order-2 order-lg-1">
            <div class="buttons-principais d-none d-lg-flex">
              <a href="" class="button1">
                <h3>PILATES</h3>
                <p>Ganhe força muscular e flexibilidade</p>
              </a>
              <a href="" class="button2">
                  <h3>RPG</h3>
                  <p>Reeducação Postural Global</p>
              </a>
            </div>
            <div class="title-pad">
              <h2>Nossos Serviços</h2>
            </div>
            
            <ul class="categorias-pad d-flex flex-column align-items-center flex-md-row justify-content-center">
    
              <li>
                <a href="">
                  <div class="wrap">
                    <img src="./img/cat-1.png" alt="">
                  </div>
                  <p>PILATES</p>
                </a>
              </li>
    
              <li>
                <a href="">
                  <div class="wrap">
                    <img src="./img/cat-2.png" alt="">
                  </div>
                  <p>RPG</p>
                </a>
              </li>
    
              <li>
                <a href="">
                  <div class="wrap">
                    <img src="./img/cat-3.png" alt="">
                  </div>
                  <p>MASSOTERAPIA</p>
                </a>
              </li>
    
              <li>
                <a href="">
                  <div class="wrap">
                    <img src="./img/cat-4.png" alt="">
                  </div>
                  <p>MANICURE / PEDICURE</p>
                </a>
              </li>
            </ul>
          </div>

          <div class="right order-1 order-lg-2">
            <form action="" method="post" class="form-email form-pad" accept-charset="utf-8">
              <header class="">
                <h3>Entre em contato</h3>
              </header><!-- /header -->
              <div class="content d-flex flex-column align-items-center">
                <input type="text" name="" placeholder="Nome" class="valid">	
                <input type="text" name="local-origem" placeholder="Local de origem" class="valid">	
                <input type="text" name="assunto" placeholder="Assunto" class="valid">	
                <input type="email" name="" placeholder="E-mail" class="valid">	
                <textarea name="mensagem" id="" placeholder="(Sua mensagem"></textarea>

                <a href="" class="btn btn-enviar" title="">ENVIAR E-MAIL</a>	

                <input type="submit" name="enviar" value="enviar" class="env-form enviar-hidden">

                <img src="./img/loader1.gif" alt="" class="load">

                <div class="erro-form">
                  <p></p>
                </div>

              </div>
            </form>	
          </div>
        </div>

        <div class="aulas-individuais">
          <div class="post-pad-02 d-lg-flex">
            <div class="wrap">
              <img src="./img/ban-aulas-individ.png" alt="">
            </div>
            <div class="content">
              <h3>Aulas Individuais</h3>
              <span class="sub">Ou no máximo dois alunos</span>
              <p>No <span> espaço mais </span> o foco principal é o aluno e atenção é mais que especial, com limite máximo de dois alunos a dedicação é total você.</p>
              <a href="" class="button3">SAIBA MAIS</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="blog-home">
    <div class="container">
      <div class="row">
        <div class="title-pad w-100">
          <span>Nosso Blog</span>
          <h2>Posts Recentes</h2>
        </div>
    
        <ul class="post-home w-100 d-lg-flex justify-content-between flex-lg-wrap">
          <li class="post-pad-01">
            <a href="" class="d-md-flex align-items-center">
              <div class="image">

              </div>
              <div class="content">
                <h3>Melhore a bronquite e a asma</h3>
                <p>O RPG alonga os músculos repiratórios, facilitando os movimentos da caixa...</p>
              </div>
            </a>
          </li>
          <li class="post-pad-01">
            <a href="" class="d-md-flex align-items-center">
              <div class="image">

              </div>
              <div class="content">
                <h3>5 benefícios que o pilates pode trazer para a sua vida</h3>
                <p>1 - Foco e Concentração. O aluno precisa estar muito atento as instruções do...</p>
              </div>
            </a>
          </li>
          <li class="post-pad-01">
            <a href="" class="d-md-flex align-items-center">
              <div class="image">

              </div>
              <div class="content">
                <h3>Melhore seu desempenho esportivo</h3>
                <p>Alonga os musculos e promove o alinhamento postural, evitando lesões em...</p>
              </div>
            </a>
          </li>
          <li class="post-pad-01 ">
            <a href="" class="d-md-flex align-items-center">
              <div class="image">

              </div>
              <div class="content">
                <h3>5 benefícios que o RPG pode trazer para a sua vida</h3>
                <p>Reeducação Postural Global, mais conhecida como RPG, é uma técnica utilizada por...</p>
              </div>
            </a>
          </li>
        </ul>
    
        <a href="" class="button4">VER MAIS</a>
      </div>
    </div>

  </div>

<?php include('footer.php'); ?>
