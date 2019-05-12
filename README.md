# Cadastrar Times

Sistema Web que permite cadastrar, listar, deletar e atualizar times e jogadores.

<h3>Informações Técnicas:</h3>
<p>&nbsp&nbsp&nbsp&nbspLinguagem: PHP;<p>
<p>&nbsp&nbsp&nbsp&nbspSGBD: MySql </p>
<p>&nbsp&nbsp&nbsp&nbspProjeto estruturado em MVC </p>
<p>&nbsp&nbsp&nbsp&nbspOrientado a objetos.</p>
<h3>Requisitos:</h3>
<p>&nbsp&nbsp&nbsp&nbsp-Ter o XAMPP instalado na máquina.</p>
<h3>Opcional:</h3>
<p>&nbsp&nbsp&nbsp&nbsp-Ter o Workbench instalado na máquina.</p>
<h3>Como rodar a aplicação:</h3>
<p>&nbsp&nbsp&nbsp&nbspPara rodar a aplicação, primeiramente faça download do projeto, ele bai baixar como um arquivo zipado, é necessário que você exporte o projeto desse arquivo zipado. Após a extração, vamos primeiro a criação do banco.</p>
<h4>Criar o banco de dados:</h4>
<p>&nbsp&nbsp&nbsp&nbspPara criar o banco de dados no seu servidor local. Identifique o script do bando de dados na pasta do projeto, o nome esta como "SCRIPT.sql".</p>
<p>&nbsp&nbsp&nbsp&nbspPara criar o banco a partir do scrip você pode utilizar o phpMyAdmin ou o Worckbench por exemplo, segue a baixo um passo a passo de como subir em cada caso.</p>
<h4>phpMyAdmin:</h4>
<p>&nbsp&nbsp&nbsp&nbsp-Com o XAMPP intalado no computador, abra-o e clique em "Start" nas opções de "Apache" e "MySql";<br>
<p>&nbsp&nbsp&nbsp&nbsp-Acesse seu navegador e na barra de pesquisa digite "localhost" e clique em "Enter";<br>
&nbsp&nbsp&nbsp&nbsp-Você será direcionado para o Dashboard do xamp, nele, no canto superior direito, terá a opção "phpMyAdmin", clique nela;<br>
&nbsp&nbsp&nbsp&nbsp-Agora, no phpMyAdmin, você vai localizar a opção "Importar", que fica na parte superior da tela, assim que localizar clique nela;<br>
&nbsp&nbsp&nbsp&nbsp-Através desse formulário você consegue criar o banco, clique na opção "Escolher arquivo", nela, você vai localizar o script do banco que esta na pasta do projeto, assim que localizar e selecionar o arquivo, desça a página e clique em "Executar" para rodar o script.<br>
&nbsp&nbsp&nbsp&nbspPronto!!<br>
&nbsp&nbsp&nbsp&nbspO banco já está criado!</p>
<h4>Worckbench:</h4>
<p>&nbsp&nbsp&nbsp&nbsp-Com o workbench já instalado, abra-o e, caso ainda não tenha, crie uma noca conexão;<br>
&nbsp&nbsp&nbsp&nbsp-Com a conexão criada, clique na mesma para abri-la. Com isso, no menu do topo, clique na opção "File", em seguida clique em "Open SQL Script...", assim abrirá o explorador de arquivos, localize o script na pasta do projeto e o selecione;<br>
&nbsp&nbsp&nbsp&nbsp-Abrirá o arquivo em uma aba, agora clique no ícone de "raio" para executar o script.
&nbsp&nbsp&nbsp&nbspPronto!!<br>
&nbsp&nbsp&nbsp&nbspO banco já está criado!</p>
<h4>Rodar a Aplicação:</h4>
<p>&nbsp&nbsp&nbsp&nbsp-Com o projeto baixado e exportado do zip, vá até o local do download e recorte/copie a pasta toda;<br>
&nbsp&nbsp&nbsp&nbsp-Como o XAMPP esta instalado na máquina, localize onde esta a pasta dele. Ao localiza-lo, entre na pasta e busque e entre na pasta "htdocs", estando nela, cole a pasta do projeto.<br>
&nbsp&nbsp&nbsp&nbsp-Agora, com o banco criado e o projeto já na pasta "htdocs" do XAMPP, já podemos rodar a aplicação, para isso entre no seu navegador e na barra de pesquisa digite "localhost/mobly/index.php".<br>
&nbsp&nbsp&nbsp&nbspPronto!!<br>
&nbsp&nbsp&nbsp&nbspO sistema já esta pronto para uso!</p>
<h3>Como utilizar:</h3>
<p>&nbsp&nbsp&nbsp&nbspEstando na página Index do sistema, você pode selecionar qual o tipo de cadastro fará, lembrando que para cadastrar um jogador, é necessário que tenham times cadastrados, então, vamos começar com o cadastro de times. Clique na opção "Cadastrar Time".</p>
<p>&nbsp&nbsp&nbsp&nbspNa tela de cadastro de times, basta preencher o formulário, selecionar uma data de fundação do time e clicar em "Cadastrar".<br>
&nbsp&nbsp&nbsp&nbspApós o primeiro cadastro, enquanto houver times cadastrados, o sistema irá exibir uma lista, a baixo do formulário de cadastro, permitindo que você visualize os dados dos times, atualize e delete o time.<br>
&nbsp&nbsp&nbsp&nbspPara editar um time, é só ir na listagem de todos os times, e no canto direito você clique no ícone de "Editar", assim os dados serão carregados no formulário e você clica em "Atualizar" para salvar a atualização feita.<br>
&nbsp&nbsp&nbsp&nbspPara deletar basta ir na listagem de times e clicar no ícone "Deletar" no canto direito. O sistema só permite que você exclua times que não tenham jogadores vinculado, caso contrári, é necessário que você exclua ou edite o jogador vinculado.</p>
<p>&nbsp&nbsp&nbsp&nbspPara cadastrar jogadores, basta voltar para a index, para isso clique em "Home", no topo da página, e em seguida clique em "Cadastrar Jogador" ou no formulário de cadastro de times mesmo você clica na opção "Cadastro de Jogador".<br>
&nbsp&nbsp&nbsp&nbspPreencha o fomulário, selecione o time que o jogador pertence e clique em "Cadastrar".<br>
&nbsp&nbsp&nbsp&nbspApós o primeiro cadastro, enquanto houver jogadores cadastrados, o sistema irá exibir uma lista, logo a baixo do formulário de cadastro, permitindo que você visualize os dados dos jogadores, atualize e delete o jogador.<br>
&nbsp&nbsp&nbsp&nbspPara editar um jogador, é só ir na listagem de todos os jogadores, e no canto direito você clique no ícone de "Editar", assim os dados serão carregados no formulário e você clica em "Atualizar" para salvar a atualização feita.<br>
Para deletar basta ir na listagem de jogadores e clicar no ícone "Deletar" no canto direito.</p>
