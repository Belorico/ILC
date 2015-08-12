@extends('layout')

@section('content')

    @include('pages.slider')

    <div class="container">
    <h3>Produtos</h3>

    <a class="btn btn-default botao" href="{{URL::to('ogrupo')}}" role="button">Todos os Produtos</a>

    <div class="row">

        <div class="col-md-4">
            <div class="product">
                <h5>Plataforma DelfiaXPress</h5>
                <img src="images/product1.png"/>
                <div class="brand-title"><h6>PERKIN ELMER</h6></div>
                <p>
                    Plataforma automática de acesso aleatório, para o Rastreio Pré-Natal,
                    1º e 2º Trimestre, reconhecido e recomendado pela Fetal Medecine Foundation
                </p>
                <div class="saber-mais"> <a href="#" class="saber-mais-style"><h6>SABER MAIS</h6></a></div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="product">
                <h5>Plataforma DelfiaXPress</h5>
                <img src="images/product1.png"/>
                <div class="brand-title"><h6>PERKIN ELMER</h6></div>
                <p>
                    Plataforma automática de acesso aleatório, para o Rastreio Pré-Natal,
                    1º e 2º Trimestre, reconhecido e recomendado pela Fetal Medecine Foundation
                </p>
                <div class="saber-mais"> <a href="#" class="saber-mais-style"><h6>SABER MAIS</h6></a></div>
            </div>
        </div>

        <div class="col-md-4" >
            <div class="product">
                <h5>Plataforma DelfiaXPress</h5>
                <img src="images/product1.png"/>
                <div class="brand-title"><h6>PERKIN ELMER</h6></div>
                <p>
                    Plataforma automática de acesso aleatório, para o Rastreio Pré-Natal,
                    1º e 2º Trimestre, reconhecido e recomendado pela Fetal Medecine Foundation
                </p>
                <div class="saber-mais"> <a href="#" class="saber-mais-style"><h6>SABER MAIS</h6></a></div>
            </div>
        </div>

    </div>

    <div class="row">
            <div class="col-md-4">
                <div class="product">
                    <h5>Plataforma DelfiaXPress</h5>
                    <img src="images/product1.png"/>
                    <div class="brand-title"><h6>PERKIN ELMER</h6></div>
                    <p>
                        Plataforma automática de acesso aleatório, para o Rastreio Pré-Natal,
                        1º e 2º Trimestre, reconhecido e recomendado pela Fetal Medecine Foundation
                    </p>
                    <div class="saber-mais"> <a href="#" class="saber-mais-style"><h6>SABER MAIS</h6></a></div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="product">
                    <h5>Plataforma DelfiaXPress</h5>
                    <img src="images/product1.png"/>
                    <div class="brand-title"><h6>PERKIN ELMER</h6></div>
                    <p>
                        Plataforma automática de acesso aleatório, para o Rastreio Pré-Natal,
                        1º e 2º Trimestre, reconhecido e recomendado pela Fetal Medecine Foundation
                    </p>
                    <div class="saber-mais"> <a href="#" class="saber-mais-style"><h6>SABER MAIS</h6></a></div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="product">
                    <h5>Plataforma DelfiaXPress</h5>
                    <img src="images/product1.png"/>
                    <div class="brand-title"><h6>PERKIN ELMER</h6></div>
                    <p>
                        Plataforma automática de acesso aleatório, para o Rastreio Pré-Natal,
                        1º e 2º Trimestre, reconhecido e recomendado pela Fetal Medecine Foundation
                    </p>
                    <div class="saber-mais"> <a href="#" class="saber-mais-style"><h6>SABER MAIS</h6></a></div>
                </div>
            </div>
        </div>


    <h3>Aplicações</h3>

    <div class="row no-pad spacing">

        <div class="col-md-6 aplications">

                <img class="img-applications" src="images/ciencias_analiticas.jpg" alt="ciencias analíticas"/>

        </div>
        <div class="col-md-6 aplications">

           <div class="col-sm-6 col-md-8" style="margin-top: 50px; padding-left:50px;">
               <span style="font-weight:600;font-size:18px">
						Ciências do Ambiente
               </span>
               <br><br>Lorem ipsum dolor sit amet, ut virtute laoreet vituperatoribus his, putent philosophia qui et.
               Vim etiam nostro ut, ei usu veritus gubergren instructior, et ius sint sanctus assentior.
                  <br><br>
           </div>
            <div class="col-sm-6 col-md-4">
               <div id="round1">
                    <span id="icon_round1"><i class="fa fa-gears fa-3x" ></i></span>
                    <span id="icon_text1">Analíticas</span>
                </div>
            </div>
        </div>

    </div>
    <div class="row no-pad">
        <div class="col-md-6 aplications2" >

            <div class="col-sm-6 col-md-4" >
                <div id="round2">
                    <span id="icon_round1"><i class="fa fa-gears fa-3x" ></i></span>
                    <span id="icon_text2">Diagnóstico</span>
                </div>
            </div>

            <div class="col-sm-6 col-md-8" style="margin-top: 50px; padding-right:50px;">
               <span style="font-weight:600;font-size:18px">
						Ciências da Vida e Diagnóstico
               </span>
                <br><br>Lorem ipsum dolor sit amet, ut virtute laoreet vituperatoribus his, putent philosophia qui et.
                Vim etiam nostro ut, ei usu veritus gubergren instructior, et ius sint sanctus assentior.
                <br><br>
            </div>

        </div>

        <div class="col-md-6  aplications">
            <img class="img-applications" src="images/Fotolia_69987645_M.jpg" alt="ciencias analíticas"/>
        </div>

    </div>
    <div class="row no-pad">
        <div class="col-md-6  aplications image">
            <img class="img-applications" src="images/Fotolia_80112830_S.jpg" alt="ciencias analíticas"/>
        </div>

        <div class="col-md-6  aplications">
            <div class="col-sm-6 col-md-8" style="margin-top: 50px; padding-left:50px;">
               <span style="font-weight:600;font-size:18px">
						Equipamento Indústrial
               </span>
                <br><br>Lorem ipsum dolor sit amet, ut virtute laoreet vituperatoribus his, putent philosophia qui et.
                Vim etiam nostro ut, ei usu veritus gubergren instructior, et ius sint sanctus assentior.
                <br><br>
            </div>
            <div class="col-sm-6 col-md-4">
                <div id="round1">
                    <span id="icon_round1"><i class="fa fa-gears fa-3x" ></i></span>
                    <span id="icon_text1">Indústria</span>
                </div>
            </div>

        </div>

    </div>

        <h3 style="padding-top: 20px;">O Grupo</h3>

        <div class="row spacing">

            <div class="col-md-4">
                <div class="grupo">

                        <img src="images/ilc.jpg"/>

                    <p>
                        Plataforma automática de acesso aleatório, para o Rastreio Pré-Natal,
                        1º e 2º Trimestre, reconhecido e recomendado pela Fetal Medecine Foundation
                    </p>
                    <div class="saber-mais"> <a href="#" class="saber-mais-style"><h6>SABER MAIS</h6></a></div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="grupo">
                    <img src="images/servicos.jpg"/>
                    <p>
                        Plataforma automática de acesso aleatório, para o Rastreio Pré-Natal,
                        1º e 2º Trimestre, reconhecido e recomendado pela Fetal Medecine Foundation
                    </p>
                    <div class="saber-mais"> <a href="#" class="saber-mais-style"><h6>SABER MAIS</h6></a></div>
                </div>
            </div>

            <div class="col-md-4" >
                <div class="grupo">
                    <img src="images/Stec.jpg" style="padding-bottom: 46px;"/>
                    <p>
                        Plataforma automática de acesso aleatório, para o Rastreio Pré-Natal,
                        1º e 2º Trimestre, reconhecido e recomendado pela Fetal Medecine Foundation
                    </p>
                    <div class="saber-mais"> <a href="#" class="saber-mais-style"><h6>SABER MAIS</h6></a></div>
                </div>
            </div>

        </div>
    </div>

@stop