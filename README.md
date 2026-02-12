# devWeb - Estudos
"Dia 1 — lógica básica em JavaScript"
<br>
“Dia 2 — lógica com decisões e repetição”
<br>
“Dia 3 — estruturação de dados”
<br>
“Dia 4 — JS interagindo com HTML”
<br>
"Dia 5 - mini projeto JS"
 - O que o sistema faz?
Meu sistema recebe informações de cadastro do usuario, armazena as informações do usuario, avalia se o usuario esta ativo ou não no sistema, lista os usuarios ativos no sistema e permite remover algum usuario caso seja desejado.

"Dia 6 - refatoração e limpeza de código"
- Hoje aprendi que código ruim é prejudicial para a reutilização e manutenção do meu código, o tornando, um código feio visualmente e ruim de ser lido/compreendido.

"Dia 7 - separação de lógica e interface"
- Separar lógica do DOM me obrigou a pensar no processamento e manipulação dos dados antes de recebe-lo.
<br>
"Dia 8 - manipulação avançada de arrays"
- Hoje entendi que controlar dados significa preservar seu código.
<br>
"Dia 9 - regras de negócio e validações"
- Hoje percebi que sem regras, um sistema está completamente vulnerável a qualquer ação ou código que o usuário tentar realizar dentro do sistema.
<br>
<br>
"Semana 2 - finalizada (organização, lógica, regras e dados)"

1. O que é o projeto?
- Um sistema para cadastro de usuários em lista
2. O que o projeto executa?
 Salvamento de nome, idade, profissão e status de determinada pessoa e exibição dessas informações em uma lista de acordo com o status (online/offline)
3. Quais regras de negócio existem?
 - Nome não pode estar vázio
 - 2 cadastro não podem conter o mesmo nome
 - Idade não pode estar vázio
 - Idade não deve conter mais de 2 digitos
4. O que você aprendeu tecnicamente?
 - Desenvolver regras de negócio, para que meu sistema não quebre.
 - Desenvolver o código em funções que manipulam dados, validam regras e mexem com a interface separadamente.
 - Distribuir ou diminuir em funções, ação e/ou código que repetem a mesma tarefa.
5. Próximo passo (o que ainda falta?)
- Organizar a lista visualmente melhor, talvez ordenando por ordem de cadastro.
Criar um filtro para a ordem da lista.

Semana 3 - sistema backend completo e auditado
- O que o sistema faz?
O sistema realiza o cadastro de usuários dentro de seu sistema que, de acordo com tipo da conta que o usuário foi cadastrado (user ou admin), ele lista as informções do próprio usuário logado no momento, caso seja admin (administrador), ele exibe as informções dos outros usuários cadastrados.

- Tecnologias usadas
HTML, CSS, JavaScript, PHP e MySQL

- Funcionalidades implementadas
1. Controle de acesso as informções de acordo com o tipo de conta
2. Registro de erros
3. Autênticação de acesso
4. Controle de Sessão
5. Validação de Cadastro e Login

- Conceitos técnicos aplicados
1. Proteção da Sessão
2. Prepare/bind para evitar SQL Injections
3. Pastas separadas
4. Arquivos de Controle para controle do sistema
5. Arquivos de Views, para manipulação de vizualização do site
6. Salvamento de senhas Hash no banco de dados
7. Separação de ambientes (Produção/Desenvolvimento)
8. Funções de responsabilidades únicas
9. Registro de erros em logs no sistema
10. Arquivo de iniciação

- O que você aprendeu construindo?
Desenvolver ambientes separados, para tratar erros e resolve-los de forma mais facil, acertiva e eficiente.
Desenvolver um arquivo de inicialização, que facilita para que meu sistema tenha como definir como se comportar dependendo do ambinete, o que o transforma em um sistema mais robusto.

- Próximos passos planejados
1. Mensagens de erros mais estilizadas
2. Listagem com informações mais claras
3. Edição das informações
