Exemplo de validação de CPF E CNPJ com Zend Framework 2
=======================

Sobre este exemplo
------------
Sabemos o quão importante é validação de dados em uma aplicação, para manter as informações concisas e garantir a confiabilidade do sistema. 
Não basta apenas validar os dados no cliente, porque, um usuário bem informado ou avançado, pode desativar o javascript e 
passar os dados na requisição do modo que ele bem entender, prejudicando a aplicação. Portanto, tão importante 
é a validação dos dados no cliente, mais ainda no servidor.

Podemos ver em muitos sistemas por aí, de comerciais a bancários, em que há somente a validação no front-end abrindo brechas para ataques na aplicação. 
Aí, entraríamos em uma discussão no porque de não ter uma validação no servidor: Custos? Prazo? Desconhecimento? 
Não entrarei nestes detalhes, até mesmo porque não é o foco deste artigo, mas sabemos que é 
uma tarefa um tanto maçante estruturar uma validação no back-end e de modo ainda que possamos fazer um código padronizado e 
pronto para o reuso em outras partes ou outras aplicações.

O Zend Framework 2 disponibiliza um incrível sistema de validações de dados e que na minha opinião é
 um dos mais maduros componentes encontrados no mercado de frameworks PHP. Vou chamá-lo de Zend\Validator, 
 referindo-se ao pacote/namespace que ele se encontra. Ele é apenas um componente do Zend Framework 2 
 de outros tantos e é desacoplado, ou seja, não é preciso ficar preso ao framework inteiro para 
 se usar apenas um "pedaço" dele, além disso, é uma característica marcante do Zend Framework 2, 
 ser desacoplado, podemos usar seus componentes separadamente sem vínculo nenhum com a estrutura do framework e isto será ainda mais enfático no Zend Framework 3.

O Zend\Validator já traz uma estrutura pré-definida para montagem de qualquer validação. 
Quando queremos montar um validador específico, temos que herdar da classe AbstractValidator, 
que obriga a implementarmos um método isValid para fazer a validação e retornar verdadeiro ou falso (true ou false),
 também, ele nós dá uma estrutura de mensagens de erros de validação além de administrar variáveis internas que podemos criar para auxiliar na validação.
 [Veja o link do tutorial](http://www.schoolofnet.com/2015/04/como-validar-cpf-e-cnpj-usando-zend-framework-2/)
