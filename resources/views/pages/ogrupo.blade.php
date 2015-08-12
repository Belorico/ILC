@extends('layout')

@section('content')

    <div class="container">
        <h2 style="padding:20px 0;">O Grupo I.L.C</h2>

        <p>Ajudamos cientistas, clínicos e profissionais de laboratório a desenvolver todas as suas competências através das nossas soluções.
            Representamos e somos parceiros das principais marcas mundiais, a nossa oferta de produtos é ampla e representa a tecnologia de ponta.
            O nosso conhecimento e experiência contribui para oferecermos a melhor solução, o nosso foco está nas pessoas. </p>

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

        <h3 class="colorir">História</h3><br>

        <p>Decorria o ano de 1977 e Portugal ainda estava a tentar despertar para as grandes alterações que tinham ocorrido três anos antes.
            Eram tempos difíceis, em que se tentava encontrar um rumo para todas as transformações que estavam a suceder, num clima de grande instabilidade
            económica em que o futuro era ainda uma incerteza. Era precisa audácia e ter uma visão de futuro que pudesse prevalecer.
            Foi neste ano, que um pequeno grupo de amigos, já com uma vasta experiência no mercado laboratorial, se uniu para criar a ILC,
            uma empresa diferente, embora de carácter familiar, com os valores e tradições que o seu carácter lhe conferem, mas também com uma visão
            que lhe permitiu afirmar-se e crescer a nível do mercado nacional ao longo dos últimos 30 anos. Actualmente somos uma empresa sólida,
            em constante crescimento e que têm o reconhecimento do mercado nacional. Foi necessário criar as parcerias certas,
            para ter um leque de soluções tecnológicas inovadoras em continuidade e evolução que nos permitissem contribuir para uma melhoria contínua
            da investigação e da qualidade em Portugal.</p>

        <br><h3 class="colorir">Missão</h3><br>

        <p>Contribuir para que Portugal seja uma referência Internacional de elevado valor, nos domínios da Investigação Científica e do Controlo de Qualidade,
            garantindo a sustentabilidade da ILC, promovendo evalorizando as parcerias com os nossos Fornecedores e apostando na constante formação e evolução
            da nossa equipa e na melhoria contínua dos processos.</p>

        <br><h3 class="colorir">Visão</h3><br>

        <p>Assegurar a modernização e liderança da ILC no mercado nacional, com o contributo de uma equipa coesa dinâmica e especializada.
            Oferecer aos nossos Clientes a confiança de soluções tecnologicamente inovadoras, que lhes permitam reforçar o crescimento,
            a produtividade, a rentabilidade do seu o investimento e o sucesso do seu negócio.
            <br><br>

            A ILC assume o compromisso de cumprir os requisitos da Norma da Qualidade NP EN ISO 9001:2008, assim como os regulamentares e legais aplicáveis à sua actividade.</p>


        <br><h3 class="colorir">Princípios e Valores</h3><br>

        <p>Desde a sua criação, a ILC rege-se por uma conduta de princípios e valores que consideramos essenciais e que são a chave do sucesso contínuo da Organização, dos seus Clientes, Sócios e Equipa de trabalho.</p>
        <br>
        <ul>
            <li>As pessoas são importantes para nós.</li>
            <li>Ouvir as necessidades dos clientes e desenvolver soluções em consonância com os seus requisitos.</li>
            <li>Fornecer os melhores e mais inovadores produtos e serviços no presente para manter a liderança do mercado no futuro.</li>
            <li>Excelência  na melhoria continua da qualidade e serviços ao cliente.</li>
            <li>Contratar profissionais com elevado estatuto humano, que se enquadrem nos objectivos da nossa equipa e proporcionar-lhes um ambiente de trabalho positivo e estimulante.</li>
            <li>Promover a protecção das condições de trabalho e sociais das pessoas, nomeadamente no direito,segurança, higiene e saúde no trabalho.</li>
            <li>Gerir os recursos do negócio tendo em consideração a qualidade e preservação do meio ambiente.</li>
            <li>Conduzir a gestão dos negócios e a organização da Organização segundo os mais elevadospadrões de ética e rigor</li>
        </ul>
        <br>
        <br>

        <div class="row">

            <div class="col-md-6">
                <div class="grupo">
                    <a href="{{URL::to('organograma')}}" >
                        <i class="fa fa-sitemap fa-2x colorir"></i><h3 class="colorir" style="display:inline;margin-left:20px;">Organograma</h3>
                    </a>
                </div>

            </div>

            <div class="col-md-6">
                <div class="grupo">
                    <a href="assets/pdf/manual_qualidade.pdf" target="_blank">
                        <i class="fa fa-book fa-2x colorir"></i><h3 class="colorir" style="display:inline;margin-left:20px;">Manual de Qualidade</h3>
                    </a>
                </div>
            </div>

        </div>



    </div>
@stop
