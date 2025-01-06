@extends('layouts.app')

@section('content')
<div class="relative">
    <!-- Hero Section -->
    <div class="relative bg-white">
        <div class="absolute inset-0">
            <div class="relative w-full h-full flex justify-end items-end">
                <img 
                    src="{{ asset('images/hero_image.png') }}" 
                    alt="Background" 
                    class="w-[70%] h-[85%] object-cover object-right-bottom translate-y-10"
                >
            </div>
        </div>
        <div class="relative">
            <div class="container mx-auto px-6 py-20">
                <div class="max-w-2xl translate-y-[15%]">
                    <h1 class="text-5xl font-bold text-teal-600 mb-8">
                        QUEM SOMOS
                    </h1>
                    <p class="text-lg text-teal-600 leading-relaxed mb-12">
                        BOREAL Lda é uma empresa moçambicana privada, fundada em 2015 e sediada em Maputo. Especializada em consultoria e gestão de negócios, atua em diversos setores, contribuindo para o desenvolvimento econômico e o bem-estar das comunidades locais. Com uma equipa experiente, a empresa foca-se em projetos alinhados com os desafios atuais do país.
                    </p>
                    <img 
                        src="{{ asset('images/logo_grey.png') }}" 
                        alt="Logo" 
                        class="w-32 opacity-60"
                    >
                </div>
            </div>
        </div>
    </div>

    <!-- After the hero section -->
    

    <!-- Projeções Futuras Section -->
    <div class="py-20 bg-white">
        <div class="container mx-auto px-6 max-w-5xl">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">
                PROJEÇÕES FUTURAS
            </h2>

            <!-- Project 1 - Text Left, Image Right -->
            <div class="grid md:grid-cols-2 gap-8 items-center mb-16">
                <div class="order-2 md:order-1 max-w-sm mx-auto md:mx-0 text-center md:text-left">
                    <h3 class="text-2xl font-bold mb-4">Expansão Regional</h3>
                    <p class="text-gray-600 mb-6">
                        Desenvolvimento de novos projetos e parcerias 
                        estratégicas para expansão dos nossos serviços em 
                        Moçambique e na região.
                    </p>
                    <a href="#" class="inline-block px-6 py-2 bg-teal-400 rounded-full text-white hover:bg-teal-500 transition-colors">
                        Leia Mais
                    </a>
                </div>
                <div class="order-1 md:order-2 flex justify-center md:justify-end">
                    <img 
                        src="{{ asset('images/proj_01.png') }}" 
                        alt="Projeto 1" 
                        class="w-4/5 rounded-lg shadow-lg"
                    >
                </div>
            </div>

            <!-- Project 2 - Image Left, Text Right -->
            <div class="grid md:grid-cols-2 gap-8 items-center mb-16">
                <div class="flex justify-center md:justify-start">
                    <img 
                        src="{{ asset('images/proj_02.png') }}" 
                        alt="Projeto 2" 
                        class="w-4/5 rounded-lg shadow-lg"
                    >
                </div>
                <div class="max-w-sm mx-auto md:mx-0 text-center md:text-right">
                    <h3 class="text-2xl font-bold mb-4">Inovação Tecnológica</h3>
                    <p class="text-gray-600 mb-6">
                        Investimento em tecnologias avançadas para 
                        otimização de processos e melhoria contínua dos serviços.
                    </p>
                    <a href="#" class="inline-block px-6 py-2 bg-teal-400 rounded-full text-white hover:bg-teal-500 transition-colors">
                        Leia Mais
                    </a>
                </div>
            </div>

            <!-- Project 3 - Text Left, Image Right -->
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div class="order-2 md:order-1 max-w-sm mx-auto md:mx-0 text-center md:text-left">
                    <h3 class="text-2xl font-bold mb-4">Sustentabilidade</h3>
                    <p class="text-gray-600 mb-6">
                        Desenvolvimento de projetos com foco em sustentabilidade 
                        e responsabilidade social, contribuindo para o crescimento 
                        das comunidades locais.
                    </p>
                    <a href="#" class="inline-block px-6 py-2 bg-teal-400 rounded-full text-white hover:bg-teal-500 transition-colors">
                        Leia Mais
                    </a>
                </div>
                <div class="order-1 md:order-2 flex justify-center md:justify-end">
                    <img 
                        src="{{ asset('images/proj_03.png') }}" 
                        alt="Projeto 3" 
                        class="w-4/5 rounded-lg shadow-lg"
                    >
                </div>
            </div>
        </div>
    </div>

    <!-- Principais Áreas de Atuação Section -->
    <div class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">
                PRINCIPAIS ÁREAS DE ATUAÇÃO
            </h2>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- First Row -->
                <div class="bg-teal-100 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 rounded-full bg-teal-400 flex items-center justify-center">
                                <img src="{{ asset('images/icons/consultoria.png') }}" alt="Consultoria" class="w-6 h-6">
                            </div>
                        </div>
                        <h3 class="text-xl font-bold">Consultoria em diversas áreas</h3>
                    </div>
                    <p class="text-gray-600">
                        Oferecemos serviços especializados de consultoria empresarial em múltiplos setores, auxiliando empresas a otimizar suas operações e alcançar seus objetivos estratégicos no mercado moçambicano.
                    </p>
                </div>

                <!-- Second Row -->
                <div class="bg-teal-100 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 rounded-full bg-teal-400 flex items-center justify-center">
                                <img src="{{ asset('images/icons/imobiliaria.png') }}" alt="Imobiliária" class="w-6 h-6">
                            </div>
                        </div>
                        <h3 class="text-xl font-bold">Imobiliária e Gestão de condomínios</h3>
                    </div>
                    <p class="text-gray-600">
                        Gestão profissional de propriedades e condomínios, garantindo eficiência operacional e satisfação dos moradores através de serviços integrados e soluções personalizadas.
                    </p>
                </div>

                <!-- Third Row -->
                <div class="bg-teal-100 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 rounded-full bg-teal-400 flex items-center justify-center">
                                <img src="{{ asset('images/icons/privatizacao.png') }}" alt="Privatização" class="w-6 h-6">
                            </div>
                        </div>
                        <h3 class="text-xl font-bold">Assistência em processos de privatização</h3>
                    </div>
                    <p class="text-gray-600">
                        Suporte especializado em processos de privatização, oferecendo orientação estratégica e assistência técnica para garantir transições eficientes e bem-sucedidas.
                    </p>
                </div>

                <!-- Fourth Row -->
                <div class="bg-teal-100 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 rounded-full bg-teal-400 flex items-center justify-center">
                                <img src="{{ asset('images/icons/agro.png') }}" alt="Agro" class="w-6 h-6">
                            </div>
                        </div>
                        <h3 class="text-xl font-bold">Compra e venda de produtos alimentares e agro comerciais</h3>
                    </div>
                    <p class="text-gray-600">
                        Intermediação e facilitação de transações comerciais no setor alimentício e agrícola, conectando produtores e compradores com soluções eficientes de comercialização.
                    </p>
                </div>

                <!-- Fifth Row -->
                <div class="bg-teal-100 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 rounded-full bg-teal-400 flex items-center justify-center">
                                <img src="{{ asset('images/icons/export.png') }}" alt="Export" class="w-6 h-6">
                            </div>
                        </div>
                        <h3 class="text-xl font-bold">Exportação & importação de diversos artigos e produtos</h3>
                    </div>
                    <p class="text-gray-600">
                        Serviços completos de comércio internacional, facilitando processos de importação e exportação com expertise em documentação, logística e regulamentações.
                    </p>
                </div>

                <!-- Sixth Row -->
                <div class="bg-teal-100 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 rounded-full bg-teal-400 flex items-center justify-center">
                                <img src="{{ asset('images/icons/logistics.png') }}" alt="Logistics" class="w-6 h-6">
                            </div>
                        </div>
                        <h3 class="text-xl font-bold">Logística & transporte de mercadorias</h3>
                    </div>
                    <p class="text-gray-600">
                        Soluções integradas de logística e transporte, garantindo eficiência na movimentação de mercadorias com segurança e pontualidade em todo território nacional e internacional.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Valores da Instituição Section -->
    <div class="py-20 bg-gradient-to-br from-teal-400 to-teal-50">
        <div class="container mx-auto px-6">
            <h2 class="text-5xl font-bold text-white mb-16 text-center">
                Valores
            </h2>

            <div class="space-y-6 max-w-3xl mx-auto text-center">
                <!-- Value 1 -->
                <div class="flex items-center justify-center space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 rounded-full bg-teal-400 flex items-center justify-center">
                            <div class="w-4 h-4 rounded-full bg-white"></div>
                        </div>
                    </div>
                    <h3 class="text-2xl font-medium">Pontualidade e Respeito pelo proximo</h3>
                </div>

                <!-- Value 2 -->
                <div class="flex items-center justify-center space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 rounded-full bg-teal-400 flex items-center justify-center">
                            <div class="w-4 h-4 rounded-full bg-white"></div>
                        </div>
                    </div>
                    <h3 class="text-2xl font-medium">Trabalho em equipe</h3>
                </div>

                <!-- Value 3 -->
                <div class="flex items-center justify-center space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 rounded-full bg-teal-400 flex items-center justify-center">
                            <div class="w-4 h-4 rounded-full bg-white"></div>
                        </div>
                    </div>
                    <h3 class="text-2xl font-medium">Organização das Areas de servico</h3>
                </div>

                <!-- Value 4 -->
                <div class="flex items-center justify-center space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 rounded-full bg-teal-400 flex items-center justify-center">
                            <div class="w-4 h-4 rounded-full bg-white"></div>
                        </div>
                    </div>
                    <h3 class="text-2xl font-medium">Comprometimento com os clientes</h3>
                </div>

                <!-- Value 5 -->
                <div class="flex items-center justify-center space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 rounded-full bg-teal-400 flex items-center justify-center">
                            <div class="w-4 h-4 rounded-full bg-white"></div>
                        </div>
                    </div>
                    <h3 class="text-2xl font-medium">Produtividade na execucao das actividades</h3>
                </div>

                <!-- Value 6 -->
                <div class="flex items-center justify-center space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 rounded-full bg-teal-400 flex items-center justify-center">
                            <div class="w-4 h-4 rounded-full bg-white"></div>
                        </div>
                    </div>
                    <h3 class="text-2xl font-medium">Melhoria constante de Serviços</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Section -->
    <div class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">
                BLOG DE PROJECTOS RECENTES
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <!-- Card 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img 
                        src="{{ asset('images/blog/image_blog_01.jpg') }}" 
                        alt="Construção de edifícios" 
                        class="w-full h-64 object-cover"
                    >
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">Construção de edifícios com soluções para condomínios em Maputo</h3>
                        <p class="text-gray-600 mb-6">Bairro da Costa do Sol & Katembe numa área de desenvolvimento estratégico.</p>
                        <a href="#" class="inline-block text-teal-400 hover:text-teal-500 font-medium">
                            Leia Mais
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img 
                        src="{{ asset('images/blog/image_blog_02.jpg') }}" 
                        alt="Gestão de condomínios" 
                        class="w-full h-64 object-cover"
                    >
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">Gestão de condomínios como módulos verticais</h3>
                        <p class="text-gray-600 mb-6">Num de 18 apartamentos T2, T3 e lojas de serviços, restaurantes e outros.</p>
                        <a href="#" class="inline-block text-teal-400 hover:text-teal-500 font-medium">
                            Leia Mais
                        </a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img 
                        src="{{ asset('images/blog/image_blog_03.jpg') }}" 
                        alt="Postos de abastecimento" 
                        class="w-full h-64 object-cover"
                    >
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">Criação de postos de abastecimento</h3>
                        <p class="text-gray-600 mb-6">Com fornecimento na perspectiva distribuição de Gás doméstico com marca própria e registada.</p>
                        <a href="#" class="inline-block text-teal-400 hover:text-teal-500 font-medium">
                            Leia Mais
                        </a>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img 
                        src="{{ asset('images/blog/image_blog_04.jpg') }}" 
                        alt="Frota de transporte" 
                        class="w-full h-64 object-cover"
                    >
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">Montagem de uma frota de transporte</h3>
                        <p class="text-gray-600 mb-6">De carga e entrega de mercadoria, materiais, produtos e serviços administrativo.</p>
                        <a href="#" class="inline-block text-teal-400 hover:text-teal-500 font-medium">
                            Leia Mais
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="bg-teal-100 py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-12">
                <!-- Company Info -->
                <div class="flex flex-col items-start gap-4">
                    <img 
                        src="{{ asset('images/logo_footer.png') }}" 
                        alt="Boreal Logo" 
                        class="h-16 w-auto"
                    >
                    <p class="text-grey-100 max-w-md">
                        Desde 2015, a Boreal tem se destacado em consultoria e gestão de negócios em Moçambique. Nossa experiência e dedicação impulsionam o desenvolvimento econômico local.
                    </p>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Contactos</h3>
                    <div class="text-gray-600">
                        <p class="flex items-center mb-2">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 0C6.13 0 3 3.13 3 7c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                            Av. Samora Machel, Bairro Central No. 11, Andar 3, Maputo Cidade
                        </p>
                        <p class="flex items-center mb-2">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M17.924 2.617a.997.997 0 00-.215-.322l-.004-.004A.997.997 0 0017 2h-4a1 1 0 100 2h1.586l-3.293 3.293a1 1 0 001.414 1.414L16 5.414V7a1 1 0 102 0V3a.997.997 0 00-.076-.383z"/>
                            </svg>
                            +258 82 859 1706 / +258 84 032 7461
                        </p>
                        <p class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                            norbertocouto2000@yahoo.com.br
                        </p>
                    </div>
                </div>

                <!-- Links -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Técnica</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Agencia</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Proposta tecnica</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Aspectos legais</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Cookies</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Contactos</a></li>
                    </ul>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="border-t border-gray-200 mt-12 pt-8 flex justify-between items-center">
                <p class="text-gray-600 text-sm">
                    © 2015 Todos direitos reservados <a href="#" class="text-yellow-400">Boreal Lda</a>
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection




 
 
 
 
 
 
 
 
 
 
 
 

 