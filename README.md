## Sistema Alcool+

Um sistema para gerenciar a criação, leitura, atualização e exclusão de estabelecimentos para oferta
e controle de vendas de álcool gel.



## Tecnologias

- **PHP 7**
- **HTML e CSS**
- **JavaScript**
- **Base de dados: PhpMyAdmin**
- **XAMPP**



## Execução

Para iniciar crie uma database com o nome sistema_alcoolmais
- SQL disponível dentro da pasta classes/config

Após, só iniciar o sistema no teu localhost/sistema_alcoolmais.index.php



## Utilizando o sistema

No sistema existe três categorias de usuários:
- ADMINISTRADOR
- Pessoa Física
- Pessoa Jurídica

Email: administrador@alcoolmais.com.br
Senha: adm@123

Os grupo de risco, tipo de pessoa e o cadastro do usuário Administrador já estão previamente cadastradas, recomendo não 
alterar o tipo de pessoa sem extrema necessidade.
O ADMINISTRADOR poderá gerenciar todas as sessões do sistema, podendo adicionar, excluir, alterar e/ou visualizar 
quaisquer cadastros feitos por ele, é altamente recomendável cadastrar o limite de preço máximo no sistema antes 
de cadastrar quaisquer produtos. Os fornecedores(Pessoa Jurídica) por sua vez só poderão ofertar seus produtos os cadastrando, editando
ou excluindo. E a Pessoa Física só tem acesso à lista de produtos e finalizar as compras dos mesmos.



## Algumas recomendações:

- Não poderão ser cadastrados dois CPF ou CNPJ iguais no sistema.
- Ao cadastrar ou editar um produto o preço dele não poderá ultrapassar o preço máximo definido pelo administrador.
- Só poderá ser finalizada uma compra caso a quantidade de produtos não ultrapasse a 2.
 
Caso algumas das recomendações acima não seja atendida, o sistema emitira um alerta, mostrando uma mensagem de erro.


