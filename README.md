# **CSI477-2018-01 - Proposta de Trabalho Final**
## *Grupo: Caio César de Almeida Freitas & Matheus Teixeira Lemos*

--------------

<!-- Descrever um resumo sobre o trabalho. -->

### Resumo
O objetivo deste documento é apresentar uma proposta para o trabalho a ser desenvolvido na disciplina Sistemas WEB I. O documento contém os tópicos: tema, escopo, restrições, protótipo e referências. Cada tópico apresenta uma especificidade do trabalho a ser desenvolvido.
<!-- Apresentar o tema. -->
### 1. Tema

  O trabalho final tem como tema o desenvolvimento de uma aplicação para a votação secreta para o DECSI. Com objetivo de proporcionar que um participante da assembleia vote de qualquer lugar, secretamente. Além de proporcionar para um participante da assembleia a apresentação do resultado de uma votação e demais especificidades apresentadas abaixo. 

<!-- Descrever e limitar o escopo da aplicação. -->
### 2. Escopo

As funcionalidades dessa aplicação serão:
* Login para usuários e administradores do sistema;
* Cadastro, busca, remoção e alteração de um tema para votação;
* Para cada tema podem existir diferentes tipos de opção de voto;
* Votação em temas cadastrados;
* Apresentação de resultados ao fim de uma votação.

<!-- Apresentar restrições de funcionalidades e de escopo. -->
### 3. Restrições

* A plataforma terá objetivos de votação e não de reuniões;
* Não será possível se comunicar com outros membros a partir da plataforma;
* A opção de voto não será registrada, apenas contabilizada, sem vínculo com o votante;
* Para cada tema não será apresentado qual a opção de voto escolhida pelo usuário, apenas se este votou ou não votou;
* Não será permitida a re-opção de voto.


<!-- Construir alguns protótipos para a aplicação, disponibilizá-los no Github e descrever o que foi considerado. //-->
### 4. Protótipo
  * Menu
  ![Menu](https://raw.githubusercontent.com/UFOP-CSI477/2018-01-trabalho-final-votacao-secreta-para-o-decsi/master/Prototipos/Prototipos%20de%20Tela/menu.png)
  
  * Login 
  ![Login](https://raw.githubusercontent.com/UFOP-CSI477/2018-01-trabalho-final-votacao-secreta-para-o-decsi/master/Prototipos/Prototipos%20de%20Tela/main.png)
  
  * Página de Votação
    ![Votação](https://raw.githubusercontent.com/UFOP-CSI477/2018-01-trabalho-final-votacao-secreta-para-o-decsi/master/Prototipos/Prototipos%20de%20Tela/openthemes.png)
    
  * Resultado da votação
     ![Resultado](https://raw.githubusercontent.com/UFOP-CSI477/2018-01-trabalho-final-votacao-secreta-para-o-decsi/master/Prototipos/Prototipos%20de%20Tela/results.png)
    
  * Adicionar Tema
    ![Adição](https://raw.githubusercontent.com/UFOP-CSI477/2018-01-trabalho-final-votacao-secreta-para-o-decsi/master/Prototipos/Prototipos%20de%20Tela/addtheme.png)
    
  * Excluir Tema
    ![Exclusão](https://raw.githubusercontent.com/UFOP-CSI477/2018-01-trabalho-final-votacao-secreta-para-o-decsi/master/Prototipos/Prototipos%20de%20Tela/removetheme.png)
    
   * Alterar Tema
    ![Seleção](https://raw.githubusercontent.com/UFOP-CSI477/2018-01-trabalho-final-votacao-secreta-para-o-decsi/master/Prototipos/Prototipos%20de%20Tela/alterartheme.png)   
    ![Alterar](https://raw.githubusercontent.com/UFOP-CSI477/2018-01-trabalho-final-votacao-secreta-para-o-decsi/master/Prototipos/Prototipos%20de%20Tela/alterartheme2.png)
    
 ### 5. Telas desenvolvidas
 
  * Área Comum
    
  * Área Administrativa
      * Administrador 
      
      * Professores e Alunos
    
    
 ### 6. Desenvolvimento
 
  O back-end do projeto foi desenvolvido em laravel e o front-end trás junções dos templates adminLTE e bootstrap. Como foi utilizado  laravel no projeto, todas as tabelas foram criadas utilizando os migrates e povoadas utilizando seeds. O projeto trás com sigo 3 tipos gerais de usuarios, sendo eles: 
  
  * Secretario/Administrador;
  * Alunos/Professores;
  * Usuarios não registrados.
 
Para os usuarios vinculados com faculdade, logo, registrados, foi utilizado o template adminLTE, como pode ser visto nas telas acima. Todas as apresentações de temas/topicos são feitas em tabelas para facilitar o gerenciamento.
Enquanto para os usuarios não vinculados com a faculdade(guests), foi utilizado um template bootstrap, como pode ser visto nas telas acima. As apresentações de temas/topicos são feitas em "posts/cards" de forma descritiva.
Vale ressaltar, que as demais áreas são totalmente reponsivas e áreas não acessiveis foram separadas em grupos de middleware de forma que apenas usuarios permitidos acessem suas areas.

 #### 6.1 Funcionalidades
 ##### Secretario/Administrador
 Os administradores possuem as seguintes funcionalidades:
   * Adicionar, alterar, remover, visualizar e buscar temas.
   * Adicionar, remover e visualizar opções para temas.
   * Adicionar, remover e visualizar usuarios para votar em temas.
   * Abrir e fechar votações.
   * Visualizar numero de votos em cada opções.
   * Visualizar usuarios que votaram em um tema.
   
 ##### Alunos/Professores
   * Visualizar e buscar temas.
   * Votar em uma votação de um tema.
   
##### Usuarios não registrados
   * Visualizar e buscar temas.

### 7. Algoritmo para construção do projeto
1. Crie um projeto no banco de dados com o nome "votacaosecreta" com usuario(root) e sem senha com todos privilegios desse projeto.
2. Execute o comando "php artisan migrate", para criar as tabelas do projeto.
3. Execute o comando "php artisan db:seed", para povoar essas tabelas.
4. Execute o comando "php artisan serve", para iniciar o projeto e pronto.

Obs: todos usuarios cadastrados tem senha '123456' com o CPF 000.000.000-0X, onde X é um numero de 0 a 5.
### 8. Referências
Prototipos de telas foram criados com a ferramenta [Pencil](https://pencil.evolus.vn/).
