    <div class="logo">
        <a href="{{URL::to('/')}}" ><img alt="logotipo" src="images/logo.png" width="260"/></a>
    </div>

    <nav class="navbar menu">

    <ul>
        <li style="padding-bottom: 22px;"><a href="{{URL::to('products')}}" > Produtos </a>

            <ul>
                <div class="menu-produto">
                    <div class="menu-produtos">
                        <img src="images/ciencias_analiticas.jpg" width="220px" class="produto-analiticas"/><br>
                        <div>
                            <a href="{{URL::to('products')}}">Ciências do Ambiente</a>
                        </div>
                    </div>
                    <div class="menu-produtos">
                        <img src="images/Fotolia_69987645_M.jpg" width="220px" class="produto-analiticas"/><br>
                        <div>
                            <span>
                                <a href="{{URL::to('products')}}">Ciências da Vida e Diagnóstico</a>
                            </span>
                        </div>
                    </div>
                    <div class="menu-produtos">
                        <img src="images/Fotolia_80112830_S.jpg" width="220px" class="produto-analiticas"/><br>
                        <div>

                            <a href="{{URL::to('products')}}">Equipamento Industrial</a>
                        </div>
                    </div>
                </div>
            </ul>
        </li>

        <li><a href="{{URL::to('services')}}" > <span>Serviços</span> </a></li>
        <li><a href="{{URL::to('ogrupo')}}" > <span>O Grupo</span> </a></li>
        <li><a href="{{URL::to('marcas')}}" > <span>Marcas</span> </a></li>
        <li><a href="{{URL::to('contactos')}}" > <span>Contactos</span> </a></li>
    </ul>

    </nav>