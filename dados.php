<?php

    include 'init.php';
    require("{$_GLOBAL_ROOT_PATH}/classes/experienciaProfissional.php");
    require("{$_GLOBAL_ROOT_PATH}/classes/qualificacaoProfissional.php");
    require("{$_GLOBAL_ROOT_PATH}/classes/curriculo.php");

    $idioma = $_GET['idioma'];
    $action = isset($_GET['action']) ? $_GET['action'] : "none";
    $dados = new Curriculo();

    $dados->nome = "Willian Pereira dos Santos";    
    $dados->idade = 30;
    $titulos = null;

    switch($idioma) {
        case "pt-BR":
            $titulos = array(
                'dados-pessoais'           => 'Dados Pessoais',
                'resumo-profissional'      => 'Resumo Profissional',
                'competencias'             => 'Competências',
                'experiencia-profissional' => 'Experiência Profissional',
                'qualificacoes'            => 'Qualificações',
                'telefones'                => 'Telefones',
                'principais-atividades'    => 'Principais Atividades na Empresa',
                'anos'                     => 'anos',
                'site-empresa'             => 'Ir para o site da empresa',
                'linkedin'                 => 'Perfil Público - Willian Pereira dos Santos',
                'carga-horaria'            => 'Carga horária de',
                'horas'                    => 'horas'
            );

            $dados->subtitulo = "Analista de Sistemas | Desenvolvedor Web / Windows Forms | Desenvolvedor Mobile";
            $dados->nacionalidade = "Brasileiro";
            $dados->estadoCivil = "Solteiro";
            $dados->endereco = "Rua 08, Quadra 8B, Casa 11";
            $dados->bairro = "Residencial Claudio Marchetti";
            $dados->cidade = "Cuiabá";
            $dados->uf = "MT";
            $dados->pais = "Brasil";
    
            $dados->telefones = array(
                0 => "(65) 99288-9669",
                1 => "(65) 98467-6252"
            );

            $dados->email = "wsantos.delphi@gmail.com";
            $dados->linkedIn = "http://www.linkedin.com/pub/willian-santos/25/241/921";

            $dados->formacoes = array(
                0 => "Ensino Médio Completo, Centro Federal de Educação Tecnológica de Mato Grosso–CEFETMT.",
                1 => "Formação acadêmica em Ciência da Computação pela UNIRONDON."
            );

            $dados->resumoProfissional = "&nbsp; &nbsp; &nbsp; &nbsp;   Sou desenvolvedor de softwares há mais de 8 (oito) anos, trabalhando com soluções para Desktop, Web e Mobile. Tenho experiência nas linguagens e frameworks mais utilizados pelo mercado para desenvolvimento de software: Delphi, ASP.NET, ASP.NET MVC, C#, VB.Net, PHP, HTML, CSS, Javascript, jQuery e desenvolvimento de aplicativos para dispositivos móveis híbridos multi-plataforma com a tecnologia Apache Cordova.";

            $dados->competencias = array(
                0  => ".NET 3.0, 3.5, 4.0, 4.5, 5.0",
                1  => "C#",
                2  => "VB.Net",
                3  => "PHP",
                4  => "HTML, CSS e Javascript",
                5  => "jQuery",
                6  => "ASP.NET WebForms 4.0 e 4.5",
                7  => "ASP.NET MVC 3 e 4",
                8  => "Razor Engine",
                9  => "Visual Studio 2005, 2008, 2010, 2012 e 2015",
                10 => "Apache Cordova",
                11 => "Tools For Apache Cordova For Visual Studio 2015",
                12 => "Desenvolvimento Web e Windows Forms",
                13 => "Delphi 7 e Delphi XE2",
                14 => "Entity Framework",
                15 => "NHibernate",
                16 => "Fluent NHibernate",
                17 => "Oracle 9i, 10g e 11g",
                18 => "SQL SERVER 2005, 2008 e 2012",
                19 => "Firebird",
                20 => "MySQL",
                21 => "TortoiseSVN",
                22 => "Team Foundation Server",
                23 => "Microsoft Visual SourceSafe",
                24 => "IIS",
                25 => "Adobe Flex",
                26 => "Web API",
                27 => "Kendo UI",
                28 => "Kendo UI Mobile",
                29 => "jQuery UI",
                30 => "Windows Services" ,
                31 => "SCRUM",
                32 => "ITIL",
                33 => "Crystal Reports",
                34 => "Stimulsoft Reports"               
            );

            $experiencia1 = new ExperienciaProfissional();

            $experiencia1->anoInicio = 2016;
            $experiencia1->anoFim = 2016;
            $experiencia1->empresa = "NBS INFORMÁTICA";
            $experiencia1->imagemEmpresa = "img/nbs.png";
            $experiencia1->siteEmpresa = "http://www.nbsi.com.br";
            $experiencia1->cargo = "Analista de Sistemas Sênior";
            $experiencia1->cidade = "Cuiabá - MT";
            $experiencia1->principaisAtividades = "&nbsp; &nbsp; &nbsp; &nbsp; Participei do projeto NBSWeb, realizando manutenções corretivas e desenvolvendo novas funcionalidades no sistema. Desenvolvi no projeto NBSWeb o GIA-ST, que consiste em um programa de geração de arquivos de texto obedecendo a um layout específico criado pelo governo brasileiro para a determinação das taxas das empresas que utilizam o sistema. O NBSWeb é um sistema baseado na web desenvolvido usando as tecnologias ASP.NET WebForms, HTML, CSS, avascript, jQuery para aplicação front-end e VB.Net para aplicação back-end. <br>
&nbsp; &nbsp; &nbsp; &nbsp; Participei do Projeto de Integração Rodobens, um novo sistema baseado em desktop desenvolvido pelo usig Delphi XE2. O projeto consiste na realização de integração de dados entre NBS e Rodobens, um novo cliente da empresa que adquiriu os sistemas NBS e                     precisava integrar os sistemas NBS com seus sistemas. Parte da lógica de negócios do projeto foi desenvolvida no banco de dados, que é o Oracle 11g.";

            $experiencia2 = new ExperienciaProfissional();

            $experiencia2->anoInicio = 2014;
            $experiencia2->anoFim = 2016;
            $experiencia2->empresa = "EFIKASE TECNOLOGIA";
            $experiencia2->siteEmpresa = "http://www.cnpjbrasil.com/e/cnpj/efikase-tecnologia/12223716000137";
            $experiencia2->imagemEmpresa = "img/efikase.png";
            $experiencia2->cargo = "Analista de Sistemas Sênior";
            $experiencia2->cidade = "Cuiabá - MT";
            $experiencia2->principaisAtividades = "&nbsp; &nbsp; &nbsp; &nbsp; Participei do projeto ENSINC, desenvolvendo novas funcionalidades (formulários, procedimentos e componentes) e realizando manutenção corretiva quando necessário. O ENSINC é um ERP baseado na web que usa serviços em nuvem (todos esses serviços estão hospedados na Amazon) e foi desenvolvido usando as tecnologias ASP.NET MVC, HTML, CSS, Javascript, jQuery e Kendo UI para o aplicativo front-end, Seguindo os conceitos SPA (aplicação de página única). O aplicativo front-end consome os serviços em nuvem via AJAX. Os serviços em nuvem são os serviços REST que foram desenvolvidos com o C # ea framework Microsoft WebAPI. O projeto é construído na arquitetura MVVM. <br>
&nbsp; &nbsp; &nbsp; &nbsp; Participei do Portal do Universitário, um site acessível aos professores e alunos, com o objetivo de facilitar o dia-a-dia. O portal traz as funcionalidades mais utilizadas por professores e alunas totalmente on-line e acessível em qualquer lugar. Os                      conceitos e tecnologias utilizados para o desenvolvimento do Portal do Universitário são os mesmos utilizados para o desenvolvimento do ENSINC. <br>
&nbsp; &nbsp; &nbsp; &nbsp;Participei de mais dois projetos em Efikase, ambos projetos legados: OLIMPO eo Portal Universitário Legado. O primeiro, OLIMPO, é um ERP baseado em desktop legado desenvolvido com Delphi 7, usado pelos clientes mais antigos da Efikase. O Portal Universitário               Legado é a versão mais antiga do novo Portal Universitário e foi desenvolvido com PHP 4, HTML, CSS e Javascript. Nesses dois projetos, eu fiz manutenções corretivas.";

            $experiencia3 = new ExperienciaProfissional();

            $experiencia3->anoInicio = 2013;
            $experiencia3->anoFim = 2014;
            $experiencia3->empresa = "KROTON EDUCACIONAL";
            $experiencia3->imagemEmpresa = "img/kroton.png";
            $experiencia3->cargo = "Analista de Sistemas Sênior";
            $experiencia3->siteEmpresa = "http://www.kroton.com.br/";
            $experiencia3->cidade = "Cuiabá - MT";
            $experiencia3->principaisAtividades = "&nbsp; &nbsp; &nbsp; &nbsp; Participei do projeto OLIMPO, desenvolvendo novas funcionalidades e realizando manutenção corretiva nos módulos do sistema, principalmente Módulos Acadêmicos e Financeiros. O OLIMPO é um ERP baseado em desktop desenvolvido com Delphi 7 e é usado em todas as universidades que fazem parte do grupo Kroton. Ele é dividido em módulos, que são Acadêmico, Financeiro, Contabilidade, Biblioteca e Cadastro. <br>
&nbsp; &nbsp; &nbsp; &nbsp; Participei no projeto Portal Universitário, que é um site desenvolvido com PHP. HTML, CSS e Javascript utilizados pelos professores e alunos das universidades que fazem parte do grupo Kroton. Neste portal, tem as principais funcionalidades utilizadas pelos professores e alunos para facilitar o dia-a-dia. <br>
&nbsp; &nbsp; &nbsp; &nbsp; Participei no projeto de Formação de Classe Painel. O Kroton tem um processo chamado Formação de Classe, que consiste em colocar todos os alunos inscritos nas classes oferecidas pelas universidades pertencentes ao grupo Kroton. Através deste painel, o Departamento Acadêmico pode ver em tempo real o que está acontecendo neste processo e tomar a ação correta de acordo com os resultados apresentados no painel. O Painel de Formação de Classe foi desenvolvido com ASP.NET MVC, HTML, CSS, Javascript, jquery, C #, Entity Framework. <br>
&nbsp; &nbsp; &nbsp; &nbsp; Participei do Portal Universitário, um site disponível para professores e alunos, com o objetivo de facilitar o dia-a-dia. O portal traz as funcionalidades mais utilizadas por professores e alunos totalmente on-line e acessível em qualquer lugar. As tecnologias usadas para desenvolver o Portal Universitário são PHP, HTML, CSS, Javascript e jQuery.";

            $experiencia4 = new ExperienciaProfissional();

            $experiencia4->anoInicio = 2010;
            $experiencia4->anoFim = 2013;
            $experiencia4->empresa = "UNIMED CUIABÁ";
            $experiencia4->imagemEmpresa = "img/unimed.png";
            $experiencia4->cargo = "Analista de Sistemas Pleno";
            $experiencia4->siteEmpresa = "http://www.unimed.coop.br/pct/index.jsp?cd_canal=65936";
            $experiencia4->cidade = "Cuiabá - MT";
            $experiencia4->principaisAtividades = "&nbsp; &nbsp; &nbsp; &nbsp; Realizei diversas atividades de manutenção e melhorias nos mais diversos sistemas da Unimed Cuiabá. A empresa possui uma gama de sistemas para as mais diversas áreas da empresa, tais como Sistema para o Setor de Ouvidoria, NSO (Núcleo de Saúde Ocupacional), Contabilidade e Patrimônio e Clinicas Unimed (clinica própria da Unimed que possui as especialidades de Psicologia, Nutrição e Fonoaudiologia). Todos estes sistemas são sistemas Web desenvolvidos com ASP.NET C#, HTML, CSS e Javascript. 
            O SisClin, que é sistema utilizado pelas Clinicas Unimed para agendamentos e  controles de consultas e atendimentos foi desenvolvido utilizando a tecnologia Adobe Flex 3.5, para aplicações RIA (Reach Internet Application) integrando com WebServices desenvolvidos em C#. Realizei manutenção e melhorias também no SisUni, ERP principal da Unimed Cuiabá utilizado por toda a empresa e abrangia todos os setores da empresa. O SisUni foi desenvolvido com Delphi 7. Todos os sistemas da Unimed Cuiabá utilizavam os banco de dados Oracle e SQL Server. ";

            $experiencia5 = new ExperienciaProfissional();

            $experiencia5->anoInicio = 2009;
            $experiencia5->anoFim = 2010;
            $experiencia5->empresa = "TECNOMAPAS";
            $experiencia5->imagemEmpresa = "img/tecnomapas.png";
            $experiencia5->siteEmpresa = "http://www.tecnomapas.com.br/";
            $experiencia5->cargo = "Programador Júnior II";
            $experiencia5->cidade = "Cuiabá - MT";
            $experiencia5->principaisAtividades = "&nbsp;&nbsp;&nbsp;&nbsp; Na Tecnomapas, participei do projeto SINLAN HIDRICO, um sistema de gerenciamento de recursos hídricos baseado na web usado pelo IBAMA, um departamento governamental responsável pela proteção e gestão ambiental e que é um cliente da empresa. Neste projeto, realizei corretivas e manutenções evolutivas. O projeto foi desenvolvido com ASP.NET WebForms, HTML, CSS e Javascript.";

            $experiencia6 = new ExperienciaProfissional();

            $experiencia6->anoInicio = 2008;
            $experiencia6->anoFim = 2009;
            $experiencia6->empresa = "MARKET HOME AUTOMAÇÃO COMERCIAL";
            $experiencia6->cargo = "Programador Júnior";
            $experiencia6->cidade = "Cuiabá - MT";
            $experiencia6->principaisAtividades = "&nbsp; &nbsp; &nbsp; &nbsp;  Participei do projeto MarketMobile, sistema de automação comercial que utilizada as tecnologias Delphi 7 e SQL Server. ";

            $dados->experienciaProfissional = array($experiencia1, $experiencia2, $experiencia3, $experiencia4, $experiencia5, $experiencia6);

            $qualificacao1 = new QualificacaoProfissional();

            $qualificacao1->nome = "Formação Oracle 11 g: Módulo I – Introdução ao Oracle, Módulo II – Programação em PL/SQL.";
            $qualificacao1->cargaHoraria = 80;
            $qualificacao1->local = "TDS Cursos e Treinamentos";

            $qualificacao2 = new QualificacaoProfissional();

            $qualificacao2->nome = "Formação Java: Módulo I – Java e Orientação a Objetos, Módulo II – Programação Web com Java, Adendos: WebServices com Java, Hibernate.";
            $qualificacao2->cargaHoraria = 80;
            $qualificacao2->local = "Caelum";

            $qualificacao3 = new QualificacaoProfissional();

            $qualificacao3->nome = "10265 – Developing Data Access Solutions with Microsoft Visual Studio 2010. ";
            $qualificacao3->cargaHoraria = 40;
            $qualificacao3->local = "TDS Cursos e Treinamentos";

            $qualificacao4 = new QualificacaoProfissional();

            $qualificacao4->nome = "10267 – Introduction to Web Development with Microsoft Visual Studio 2010. ";
            $qualificacao4->cargaHoraria = 40;
            $qualificacao4->local = "TDS Cursos e Treinamentos";

            $qualificacao5 = new QualificacaoProfissional();

            $qualificacao5->nome = "Desenvolvimento Web com HTML, CSS e JavaScript";
            $qualificacao5->cargaHoraria = 32;
            $qualificacao5->local = "Caelum";

            $qualificacao6 = new QualificacaoProfissional();

            $qualificacao6->nome = "Programação front-end com JavaScript e jQuery";
            $qualificacao6->cargaHoraria = 32;
            $qualificacao6->local = "Caelum";

            $dados->qualificacaoProfissional = array($qualificacao1, $qualificacao2, $qualificacao3, $qualificacao4, $qualificacao5, $qualificacao6); 
            break;

        case "en-US":
            $titulos = array(
                'dados-pessoais'           => 'Personal Data',
                'resumo-profissional'      => 'Professional Summary',
                'competencias'             => 'Skills',
                'experiencia-profissional' => 'Professional Experience',
                'qualificacoes'            => 'Qualifications',
                'telefones'                => 'Phones',
                'principais-atividades'    => 'Main Activities in Company',
                'anos'                     => 'years old',
                'site-empresa'             => 'Go to the company website',
                'linkedin'                 => 'Public Profile - Willian Pereira dos Santos',
                'carga-horaria'            => 'Course load',
                'horas'                    => 'hours'
            );

            $dados->subtitulo = "System Analist | Web / Windows Forms Developer | Mobile Developer";
            $dados->nacionalidade = "Brazilian";
            $dados->estadoCivil = "Single";
            $dados->endereco = "Rua 08, Quadra 8B, Casa 11";
            $dados->bairro = "Residencial Claudio Marchetti";
            $dados->cidade = "Cuiabá";
            $dados->uf = "MT";
            $dados->pais = "Brazil";
    
            $dados->telefones = array(
                0 => "(65) 99288-9669",
                1 => "(65) 98467-6252"
            );

            $dados->email = "wsantos.delphi@gmail.com";
            $dados->linkedIn = "http://www.linkedin.com/pub/willian-santos/25/241/921";

            $dados->formacoes = array(
                0 => "High School, Federal Technologic Education Center of Mato Grosso-CEFETMT.",
                1 => "Academic Degree in Computing Science at UNIRONDON."
            );

            $dados->resumoProfissional = "&nbsp; &nbsp; &nbsp; &nbsp;  I am software developer there are more than 8 years, working with Desktop, Web and Mobile solutions. I have experience in the most relevant technologies used by the develepment market such as: Delphi, ASP.NET, ASP.NET MVC, C#, VB.Net, PHP, HTML, CSS, Javascript, jQuery and development of mobile applications hybrids using Apache Cordova.";

            $dados->competencias = array(
                0  => ".NET 3.0, 3.5, 4.0, 4.5, 5.0",
                1  => "C#",
                2  => "VB.Net",
                3  => "PHP",
                4  => "HTML, CSS and Javascript",
                5  => "jQuery",
                6  => "ASP.NET WebForms 4.0 and 4.5",
                7  => "ASP.NET MVC 3 and 4",
                8  => "Razor Engine",
                9  => "Visual Studio 2005, 2008, 2010, 2012 and 2015",
                10 => "Apache Cordova",
                11 => "Tools For Apache Cordova For Visual Studio 2015",
                12 => "Web, Windows Forms and Mobile Development",
                13 => "Delphi 7 and Delphi XE2",
                14 => "Entity Framework",
                15 => "NHibernate",
                16 => "Fluent NHibernate",
                17 => "Oracle 9i, 10g and 11g",
                18 => "SQL SERVER 2005, 2008 e 2012",
                19 => "Firebird",
                20 => "MySQL",
                21 => "TortoiseSVN",
                22 => "Team Foundation Server",
                23 => "Microsoft Visual SourceSafe",
                24 => "IIS",
                25 => "Adobe Flex",
                26 => "Web API",
                27 => "Kendo UI",
                28 => "Kendo UI Mobile",
                29 => "jQuery UI",
                30 => "Windows Services",
                31 => "SCRUM",
                32 => "ITIL",
                33 => "Crystal Reports",
                34 => "Stimulsoft Reports"                              
            );

            $experiencia1 = new ExperienciaProfissional();

            $experiencia1->anoInicio = 2016;
            $experiencia1->anoFim = 2016;
            $experiencia1->empresa = "NBS INFORMÁTICA";
            $experiencia1->imagemEmpresa = "img/nbs.png";
            $experiencia1->siteEmpresa = "http://www.nbsi.com.br";
            $experiencia1->cargo = "Senior System Analist";
            $experiencia1->cidade = "Cuiabá - MT, Brazil";
            $experiencia1->principaisAtividades = "&nbsp; &nbsp; &nbsp; &nbsp; I participated of the project NBSWeb, realizing correctives maintenances and developing new funcionalities in the system. I developed, in the project NBSWeb, the GIA-ST (ICMS Substitution National Information and Ascertainment Guide), which consists in a textfile generation program obeying a specific layout created by brazilian government to taxas ascertainment from the companies that uses the system. The NBSWeb is a web-based system developed using the technologies ASP.NET WebForms, HTML, CSS, Javascript, jQuery to application front-end and VB.Net to application back-end. <br> 
            &nbsp; &nbsp; &nbsp; &nbsp; I participated of the Rodobens Integration Project, a entire new desktop-based system developed using Delphi XE2. The project consists in realizing data integration between then NBS and Rodobens, a new company costumer that acquired the NBS systems and he needed to integrate the NBS systems with your systems. Part of the project business logic was developed in the database, which is Oracle 11g. ";            
           
            $experiencia2 = new ExperienciaProfissional();

            $experiencia2->anoInicio = 2014;
            $experiencia2->anoFim = 2016;
            $experiencia2->empresa = "EFIKASE TECNOLOGIA";
            $experiencia2->siteEmpresa = "http://www.cnpjbrasil.com/e/cnpj/efikase-tecnologia/12223716000137";
            $experiencia2->imagemEmpresa = "img/efikase.png";
            $experiencia2->cargo = "Senior System Analist";
            $experiencia2->cidade = "Cuiabá - MT, Brazil";
            $experiencia2->principaisAtividades = "&nbsp; &nbsp; &nbsp; &nbsp; I participated of the ENSINC project, developing new funcionalities (forms, procedures and components) and realizing correctives maintanances when necessary. The ENSINC is a web-based ERP that uses cloud services (all this services are hosted on Amazon) e it was developed using the technologias ASP.NET MVC, HTML, CSS, Javascript, jQuery e Kendo UI to the application front-end, following the SPA (Single Page Application) concepts. The application front-end consumes the cloud services via AJAX. The cloud services are REST Services that was developed with C# and the framework Microsoft WebAPI. The project are built in the MVVM architecture. <br>
            &nbsp; &nbsp; &nbsp; &nbsp; I participated of the Universitary Portal, a website available to the professors and students, with the goal to easy the day-by-day. The portal brings the most-used functionalities by professors and students totally online and accessible at any place. The concepts and technologies used to develop the Universitary Portal are the same used to develop the ENSINC. <br>
            &nbsp; &nbsp; &nbsp; &nbsp; I participated of two more projects in Efikase, both legacy projects: OLIMPO and the Legacy Universitary Portal. The first, OLIMPO, is a legacy desktop-based ERP developed with Delphi 7, used by the oldest costumers of the Efikase. The Legacy Universitary Portal is a oldest version of the new Universitary Portal and it was developed with PHP 4, HTML, CSS e Javascript. In this two projects, I did correctives maintanances.";
         
            $experiencia3 = new ExperienciaProfissional();

            $experiencia3->anoInicio = 2013;
            $experiencia3->anoFim = 2014;
            $experiencia3->empresa = "KROTON EDUCACIONAL";
            $experiencia3->imagemEmpresa = "img/kroton.png";
            $experiencia3->cargo = "Senior System Analist";
            $experiencia3->siteEmpresa = "http://www.kroton.com.br/";
            $experiencia3->cidade = "Cuiabá - MT, Brazil";
            $experiencia3->principaisAtividades = "&nbsp; &nbsp; &nbsp; &nbsp; I participated of the project OLIMPO, developing new functionalities e realizing corrective maintanance in the system modules, mostly Academic and Financials modules. The OLIMPO is a desktop-based ERP developed with Delphi 7 and it's used in all the universities that are part of the Kroton group. He is particionated in modules, which are Academic, Financial, Accounting, Library and Cadaster. <br>
            &nbsp; &nbsp; &nbsp; &nbsp; I participed of the project Portal Universitario (Universitary Portal), that is a website developed with PHP. HTML, CSS and Javascript used by the professors and aluns of the universities that are part of the Kroton group. In this portal, it has the main functionalities used by professors and aluns to easy the day-by-day. <br>
            &nbsp; &nbsp; &nbsp; &nbsp; I participated of the project Class Formation Panel. The Kroton has a process called Class Formation, which consists to put all the registered students in the classes offered by the universities belonging to Kroton group. Throught this panel, the Academic Department can see at real time what is happen in this process and take the correct action according the results presented in the panel. The Class Formation Panel was developed with ASP.NET MVC, HTML, CSS, Javascript, jquery, C#, Entity Framework. <br>
            &nbsp; &nbsp; &nbsp; &nbsp; I participated of the Universitary Portal, a website available to the professors and students, with the goal to easy the day-by-day. The portal brings the most-used functionalities by professors and students totally online and accessible at any place. The technologies used to develop the Universitary Portal are PHP, HTML, CSS, Javascript and jQuery.";            
           
            $experiencia4 = new ExperienciaProfissional();

            $experiencia4->anoInicio = 2010;
            $experiencia4->anoFim = 2013;
            $experiencia4->empresa = "UNIMED CUIABÁ";
            $experiencia4->imagemEmpresa = "img/unimed.png";
            $experiencia4->cargo = "Full System Analist";
            $experiencia4->siteEmpresa = "http://www.unimed.coop.br/pct/index.jsp?cd_canal=65936";
            $experiencia4->cidade = "Cuiabá - MT, Brazil";
            $experiencia4->principaisAtividades = "&nbsp; &nbsp; &nbsp; &nbsp; I performed several maintenance and improvement activities in the most diverse systems of Unimed Cuiabá. The company has a range of systems for the most diverse areas of the company, such as System for the Ombudsman Sector, NSO (Occupational Health Center), Accounting and Patrimony and Unimed Clinics (Unimed's own Clinic that specializes in Psychology, Nutrition and Speech Therapy). All these systems are Web systems developed with ASP.NET C #, HTML, CSS and Javascript. SisClin is a system used by Unimed clinics to control and query queries and queries for developers using Adobe Flex 3.5, for RIA applications integrating with WebServices developed in C #. I also performed maintenance and improvements on SisUni, the main ERP of Unimed Cuiabá used by every company and covering all sectors of the company. SisUni was developed with Delphi 7. All Unimed Cuiabá systems uses the Oracle database and SQL Server.";

            $experiencia5 = new ExperienciaProfissional();

            $experiencia5->anoInicio = 2009;
            $experiencia5->anoFim = 2010;
            $experiencia5->empresa = "TECNOMAPAS";
            $experiencia5->imagemEmpresa = "img/tecnomapas.png";
            $experiencia5->siteEmpresa = "http://www.tecnomapas.com.br/";
            $experiencia5->cargo = "Junior Programmer II";
            $experiencia5->cidade = "Cuiabá - MT, Brazil";
            $experiencia5->principaisAtividades = "&nbsp; &nbsp; &nbsp; &nbsp; In Tecnomapas, I participated of the project SINLAN HIDRICO, a web-based hydrical resources management system used by the IBAMA, a governamental department that is responsible by the enviroment protection and management and which is a costumer of the company. In this project, I realized correctives and evolutives maintanances. The project was developed with ASP.NET WebForms, HTML, CSS and Javascript.";

            $experiencia6 = new ExperienciaProfissional();

            $experiencia6->anoInicio = 2008;
            $experiencia6->anoFim = 2009;
            $experiencia6->empresa = "MARKET HOME AUTOMAÇÃO COMERCIAL";
            $experiencia6->cargo = "Junior Programmer";
            $experiencia6->cidade = "Cuiabá - MT, Brazil";  
            $experiencia6->principaisAtividades = "&nbsp; &nbsp; &nbsp; &nbsp; I participated in the MarketMobile project, a commercial automation system that is used as Delphi 7 and SQL Server technologies.";

            $dados->experienciaProfissional = array($experiencia1, $experiencia2, $experiencia3, $experiencia4, $experiencia5, $experiencia6);

            $qualificacao1 = new QualificacaoProfissional();

            $qualificacao1->nome = "Oracle 11 g: Module I – Introduce to Oracle, Module II – PL/SQL Programming.";
            $qualificacao1->cargaHoraria = 80;
            $qualificacao1->local = "TDS Courses and Training";

            $qualificacao2 = new QualificacaoProfissional();

            $qualificacao2->nome = "Java: Module I – Java e Object-Oriented Programming, Module II – Web Development with Java, Add: WebServices with Java, Hibernate.";
            $qualificacao2->cargaHoraria = 80;
            $qualificacao2->local = "Caelum";

            $qualificacao3 = new QualificacaoProfissional();

            $qualificacao3->nome = "10265 – Developing Data Access Solutions with Microsoft Visual Studio 2010. ";
            $qualificacao3->cargaHoraria = 40;
            $qualificacao3->local = "TDS Courses and Training";

            $qualificacao4 = new QualificacaoProfissional();

            $qualificacao4->nome = "10267 – Introduction to Web Development with Microsoft Visual Studio 2010. ";
            $qualificacao4->cargaHoraria = 40;
            $qualificacao4->local = "TDS Courses and Training";

            $qualificacao5 = new QualificacaoProfissional();

            $qualificacao5->nome = "Web Development with HTML, CSS and JavaScript";
            $qualificacao5->cargaHoraria = 32;
            $qualificacao5->local = "Caelum";

            $qualificacao6 = new QualificacaoProfissional();

            $qualificacao6->nome = "Front-end Programming with JavaScript and jQuery";
            $qualificacao6->cargaHoraria = 32;
            $qualificacao6->local = "Caelum";

            $dados->qualificacaoProfissional = array($qualificacao1, $qualificacao2, $qualificacao3, $qualificacao4, $qualificacao5, $qualificacao6); 
            break;
    }
?>