

# Teste Infornet Laravel

    Criar uma tela onde o usuário irá cadastrar um atendimento.
     - Os atendimentos deverão ter o registro da data em que foram cadastrados;
     - Um atendimento deverá possuir UM VEÍCULO;
     - No atendimento, o usuário deverá indicar o endereço de origem onde o veículo se encontra e o
       endereço de destino para onde será levado;
     - No atendimento deverá constar o telefone e o nome de quem está solicitando o atendimento;
     - O usuário deverá escolher o PRESTADOR DE SERVIÇOS que irá realizar o atendimento;
     - O usuário deverá selecionar qual o SERVIÇO a ser prestado no atendimento.

    Criar uma tela onde o usuário poderá consultar os atendimentos
     - O usuário poderá filtrar os atendimentos por placa do veículo, cpf do beneficiário e data de cadastro.

## Aplicação
    



## Setting Up a Project 

Clone este repositório

```
git clone git clone https://bitbucket.org/infornetequipe/webassist.git testeLaravel
```
Acesse a pasta do projeto no terminal/cmd

```
cd testeLaravel
```

Instalando dependência 

```
composer install
```

Gerando chave do projeto

```
php artisan key:generate 
```

Populando banco de dados

```
php artisan migrate

php artisan db:seed 
```

Iniciando servidor projeto

```
php artisan serve --port=2021
```
O servidor inciará na porta informada :2021 - acesse com o navegador ``` http://localhost:2021```
