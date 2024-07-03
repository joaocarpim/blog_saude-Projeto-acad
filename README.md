# Healthy Living
## Descrição do Projeto

O projeto "Healthy Living" visa fornecer informações e recursos sobre saúde, nutrição e psicologia, bem como oferecer uma plataforma para profissionais publicarem artigos relevantes.


**Fui convidado a implementar melhorias no projeto, aprimorando tanto a estética quanto a funcionalidade e acessibilidade.**

## Acessibilidade

### Botão de Acessibilidade com Voz do Google
Quando a navegação pelo site é feita usando a tecla Tab, a frase selecionada será lida em voz alta, ajudando usuários com deficiência visual a navegar pelo conteúdo do site.

### Plugin de Libras (Língua Brasileira de Sinais) - VLibras
Este plugin permite que usuários surdos ou com deficiência auditiva possam compreender o conteúdo através de um intérprete virtual de libras que traduz todo o texto do site.

## Funcionalidades Principais

- **Autenticação de Usuário**: Sistema de login para proteger o acesso aos conteúdos restritos.
- **Menu de Navegação**: Facilita o acesso a diferentes seções do site, incluindo artigos sobre nutrição e psicologia, uma ferramenta de cálculo de IMC, e uma seção para escrever novos artigos.
- **Pesquisa de Artigos**: Permite aos usuários pesquisar artigos por título ou profissional.
- **Publicação de Artigos**: Profissionais podem publicar e gerenciar seus artigos através de uma interface amigável.
- **Informações de Contato**: Detalhes de contato para suporte e perguntas.

## Estrutura do Projeto

O projeto está organizado da seguinte forma:

### Backend
- **PHP**: Gerenciamento de sessões e comunicação com o banco de dados para autenticação e recuperação de dados.
- **MySQL**: Banco de dados para armazenar informações dos usuários e artigos.

### Frontend
- **HTML**: Estrutura da página.
- **CSS**: Estilização utilizando Bootstrap e estilos personalizados.
- **JavaScript**: Funcionalidades dinâmicas, como pesquisa e interações do usuário.

## Requisitos

- **PHP 7.4+**
- **MySQL**
- **Bootstrap 5**

## Como Executar o Projeto

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/healthy-living.git


2. Importe o banco de dados MySQL a partir do arquivo database.sql incluído no repositório.
Configure a conexão com o banco de dados no arquivo config.php:

    ```php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "healthyliving";

3. Inicie um servidor local e abra o arquivo index.php no seu navegador.

## Navegação

- **Página Inicial**: Resumo de todos os artigos disponíveis.
- **Quem Somos**: Informações sobre o projeto e a equipe.
- **Cálculo IMC**: Ferramenta para calcular o Índice de Massa Corporal.
- **Lista de Profissionais**: Detalhes dos profissionais envolvidos no projeto.
- **Artigos de Nutrição**: Artigos específicos sobre nutrição.
- **Artigos de Psicologia**: Artigos específicos sobre psicologia.
- **Escrever Artigo**: Área restrita para profissionais publicarem novos artigos.

## Como Contribuir

Se você deseja contribuir para este projeto, siga os passos abaixo:

1. Faça um fork deste repositório.
2. Crie uma branch para sua feature (`git checkout -b feature/sua-feature`).
3. Commit suas mudanças (`git commit -am 'Adiciona nova feature'`).
4. Faça um push para a branch (`git push origin feature/sua-feature`).
5. Crie um Pull Request.

## Contribuidores

Agradecemos aos seguintes contribuidores e fundadores do projeto que ajudaram a desenvolver e melhorar este projeto:

- [Guilherme](https://github.com/iamGuilherme)
- [Iran Camargo]()
- [Kenui Engler](https://github.com/Kenui777)

Se você deseja se juntar a nós e contribuir para este projeto, siga as instruções na seção [Como Contribuir](#como-contribuir).



