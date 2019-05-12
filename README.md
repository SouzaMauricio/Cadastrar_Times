# Cadastrar Times

Sistema Web que permite cadastrar, listar, deletar e atualizar times e jogadores.

<h3>Informações Técnicas:</h3>
<p>&nbsp&nbsp&nbsp&nbspLinguagem: PHP;<p>
<p>&nbsp&nbsp&nbsp&nbspSGBD: MySql;</p>
<p>&nbsp&nbsp&nbsp&nbspProjeto estruturado em MVC;</p>
<p>&nbsp&nbsp&nbsp&nbspOrientado a objetos.</p>
<h3>Requisitos:</h3>
<p>&nbsp&nbsp&nbsp&nbsp-Ter o XAMPP instalado na máquina.</p>
<h3>Opcional:</h3>
<p>&nbsp&nbsp&nbsp&nbsp-Ter o Workbench instalado na máquina.</p>
<h3>Como rodar a aplicação:</h3>
<p>&nbsp&nbsp&nbsp&nbspPara rodar a aplicação, primeiramente faça download do projeto, que será baixado como um arquivo zipado; é necessário que você exporte o projeto desse arquivo zipado. Após a extração, vamos primeiro à criação do banco.</p>
<h4>Criando o banco de dados:</h4>
<p>&nbsp&nbsp&nbsp&nbspPara criar o banco de dados no seu servidor local: identifique o script do bando de dados na pasta do projeto. O nome está como "SCRIPT.sql".</p>
<p>&nbsp&nbsp&nbsp&nbspPara criar o banco a partir do script, você pode utilizar o phpMyAdmin ou o Worckbench. Segue abaixo um passo a passo de como subir em cada caso.</p>
<h4>phpMyAdmin:</h4>
<p>&nbsp&nbsp&nbsp&nbsp-Com o XAMPP instalado no computador, abra-o e clique em "Start" nas opções de "Apache" e "MySql";<br>
&nbsp&nbsp&nbsp&nbsp-Acesse seu navegador e na barra de pesquisa digite "localhost" e clique em "Enter";<br>
&nbsp&nbsp&nbsp&nbsp-Você será direcionado para o Dashboard do XAMPP. Nele, no canto superior direito, haverá a opção "phpMyAdmin". Clique nela;<br>
&nbsp&nbsp&nbsp&nbsp-Agora, no phpMyAdmin, você vai localizar a opção "Importar", que fica na parte superior da tela. Assim que localizar, clique nela;<br>
&nbsp&nbsp&nbsp&nbsp-Através desse formulário você consegue criar o banco. Clique na opção "Escolher arquivo"; nela, você vai localizar o script do banco que está na pasta do projeto. Assim que localizar e selecionar o arquivo, desça a página e clique em "Executar" para rodar o script.<br>
&nbsp&nbsp&nbsp&nbspPronto!<br>
&nbsp&nbsp&nbsp&nbspO banco já está criado.</p>
<h4>Worckbench:</h4>
<p>&nbsp&nbsp&nbsp&nbsp-Com o workbench já instalado, abra-o e, caso ainda não tenha, crie uma nova conexão;<br>
&nbsp&nbsp&nbsp&nbsp-Clique na conexão criada para abri-la. No menu do topo, clique na opção "File" e em seguida clique em "Open SQL Script...". Assim que o explorador de arquivos for aberto, localize o script na pasta do projeto e selecione-o;<br>
&nbsp&nbsp&nbsp&nbsp-O arquivo será aberto em uma aba. Agora clique no ícone de "raio" para executar o script.<br>
&nbsp&nbsp&nbsp&nbspPronto!<br>
&nbsp&nbsp&nbsp&nbspO banco já está criado.</p>
<h4>Rodando a aplicação:</h4>
<p>&nbsp&nbsp&nbsp&nbsp-Com o projeto baixado e exportado do zip, vá até o local do download e recorte/copie a pasta toda;<br>
&nbsp&nbsp&nbsp&nbsp-Com o XAMPP instalado na máquina, localize e entre onde está a pasta. Ao localizá-la, busque e entre na pasta "htdocs". Estando nela, cole a pasta do projeto.<br>
&nbsp&nbsp&nbsp&nbsp-Agora, com o banco criado e o projeto na pasta "htdocs" do XAMPP, já podemos rodar a aplicação. Para isso entre no seu navegador e na barra de pesquisa digite "localhost/mobly/index.php".<br>
&nbsp&nbsp&nbsp&nbspPronto!<br>
&nbsp&nbsp&nbsp&nbspO sistema já esta pronto para uso.</p>
<h3>Como utilizar:</h3>
<p>&nbsp&nbsp&nbsp&nbspNa página Index do sistema, você pode selecionar qual o tipo de cadastro fará, lembrando que para cadastrar um jogador é necessário que haja times cadastrados. Vamos então começar com o cadastro de times. Clique na opção "Cadastrar Time".</p>
<p>&nbsp&nbsp&nbsp&nbspNa tela de cadastro de times, basta preencher o formulário, selecionar a data de fundação do time e clicar em "Cadastrar".<br>
&nbsp&nbsp&nbsp&nbspApós o primeiro cadastro, enquanto houver times cadastrados, o sistema irá exibir uma lista abaixo do formulário de cadastro, permitindo a você que visualize os dados dos times, atualize e delete o time.<br>
&nbsp&nbsp&nbsp&nbspPara editar um time, basta ir na listagem de todos os times e no canto direito clicar no ícone de "Editar". Assim os dados serão carregados no formulário e você deverá clicar em "Atualizar" para salvar a atualização feita.<br>
&nbsp&nbsp&nbsp&nbspPara deletar, basta ir na listagem de times e clicar no ícone "Deletar" no canto direito. O sistema só permite a você que exclua times que não tenham jogadores vinculados; caso contrário, será necessário que você exclua ou edite o jogador vinculado.</p>
<p>&nbsp&nbsp&nbsp&nbspPara cadastrar jogadores, basta voltar para a Index. Para isso, clique em "Home" no topo da página, e em seguida clique em "Cadastrar Jogador". Você pode fazer isso no próprio formulário de cadastro de times clicando na opção "Cadastro de Jogador".<br>
&nbsp&nbsp&nbsp&nbspPreencha o fomulário, selecione o time a que o jogador pertence e clique em "Cadastrar".<br>
&nbsp&nbsp&nbsp&nbspApós o primeiro cadastro, enquanto houver jogadores cadastrados, o sistema irá exibir uma lista logo abaixo do formulário de cadastro, permitindo a você que visualize os dados dos jogadores, atualize e delete o jogador.<br>
&nbsp&nbsp&nbsp&nbspPara editar um jogador, é só ir na listagem de todos os jogadores, e no canto direito clicar no ícone de "Editar". Assim os dados serão carregados no formulário, bastando que você clique em "Atualizar" para salvar a atualização feita.<br>
Para deletar, basta ir na listagem de jogadores e clicar no ícone "Deletar" no canto direito.</p>
