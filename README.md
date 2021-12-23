<h5>Olá mundo! Bem vindos ao projeto AffiliateProgram, uma plataforma EAD com filiações usando as melhores práticas de programação (design pattern, MVC e rotas, Chain of Responsibility).</h5>
<p>
Tem apenas 2 classes que são responsáveis por fazer o roteamento, uma delas é o Router que está instânciada na index, esse Router leva 3 parâmetros que são: nome do arquivo, classe controladora, e função. O nome do arquivo servirá para a condicional da rota, que verifica que a URI atual é igual a passada na rota do index, e para que esses arquivos sejam incluídos dinâmicamente eu formato a URI tirando seus caracters especiais, converto para minúsculas e uso o strripos para verificar se a url tem algum índice compátivel. E para passar as váriaveis dos meus controladores para as páginas eu crio uma interface (para garantir que todos os controladores assinem essa responsabilidade) de implementar um método estático chamado params() que pode ser chamado dentro de qualquer função que a implemente, ele retorna um array com as propriedades passada para ele, e como convertemos suas chaves para uma váriavel? A resposta é muito simples, mesmo que eu tenha demorado para achá-la. Uso o extract que é uma função nativa do PHP que converte chaves de arrays para váriaveis, e como eu as extraio dentro do meu render, logo as páginas tem acesso a essas váriaveis.
<br />
Há 3 níveis de acesso, de forma hierarquia são: Administrador, Afiliado e Estudante. O Administrador tem total acesso a todas as páginas, podem criar cursos, modulos, aulas e gerenciar pagamentos, o afiliado tem acesso apenas a suas próprias informações e acesso a páginas especifícas, assim como o estudante. Em caso do usuário acessar uma página proibída, o script é morto na hora.
<br />
O Administrador pode acessar dados báncarios de outros usuários, criar cursos, módulos, aulas e etc...
</br >
Logo que um usuário é registrado com a função de "affiliate", é automáticamente criado um token único (utilizei o md5 para gerar um hash do id desse usuário). O usuário não teria que se afiliar a um produto (o código pode ser fácilmente adaptado para apenas produtos especifícos), ele teria apenas que passar url do checkout com os parâmetros id e token (id é para referenciar o curso, o token é o código hash gerado no registro). 
<br />
O mais interessante é o dashboard do estudante, que tem como recurso views, progress e quiz. O quiz pode ter diversas perguntas mas apenas uma pode ser a correta, caso o usuário erre a resposta logo será mostrado um alerta com a mensagem de erro, e após isso o usuário não poderá mais responder novamente, pois já apareça imediatamente a resposta correta daquele questionário. As views servem para melhorar a experiência do usuário na plataforma, quando ele marca como "visto" será criado um registro na database indicando o id do usuário, o id da aula e do módulo, colocamos o id do módulo para poder contar quantas aulas estão marcadas como vista em tal módulo, e dessa forma para criar a função de progresso terá que usar a mais simples e entediante matemática.
<br />
Para o pagamento eu utilizo a API do pagar.me (fui nas cegas pois não tenho uma conta registrada nessa plataforma, mas como tenho bastante familiaridade com integração de apis não tenho medo do resultado). 
</p>

<ul>
<li>
  <strong>Languages: <br /></strong>
  <i>PHP e Javascript.</i>
 </li>
 
 <li>
  <strong>Dependency Manager</strong>
  <i>Composer</i>
 </li>

<li>
  <strong>Database: </br /></strong>
  <i>PostgreeSQL.</i>
</li>

<li>
  <strong>Style: <br /></strong>
  <i>Cascading Style Sheets.</i>
</li>

<li>
  <strong>Markup Language: <br /></strong>
  <i>HTML.</i>
</li>
</ul>






