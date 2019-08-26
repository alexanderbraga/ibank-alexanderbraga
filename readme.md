## API iBank

Primeiramente criei um usuario, após isso execute:\
_First I created user, after that run:._

```
php artisan db:seed
```

Após instalar o Passport\
_After installing Passport_

```
php artisan passport:install
```

###### Routers URLS

Nesta API você deve definir dois Headers conforme listado abaixo:\
_In this api you have to set two header as listed below:_

```
Content-Type: application/json
X-Requested-With: XMLHttpRequest
```
<img src="https://i.ibb.co/7WVpv1x/Screenshot-33.png">


1. Singup
 - Method: POST
 - URL: http://localhost:8000/api/auth/signup

<img src="https://i.ibb.co/Zmgmt7M/Screenshot-34.png" alt="Screenshot-34" border="0">

</br>

2. Login
 - Method: POST
 - URL: http://localhost:8000/api/auth/login

<img src="https://i.ibb.co/WvyMktq/Screenshot-33.png" alt="Screenshot-33" border="0"></a><br /><br />


````
'headers' => [
    'Accept' => 'application/json',
    'Authorization' => 'Bearer '.$accessToken,
]
````

3. List: 
 - Method: GET 
 - URL: http://localhost:8000/api/products

4. Create:
 - Method: POST
 - URL: http://localhost:8000/api/products

5. Show: 
 - Method: GET
 - URL:http://localhost:8000/api/products/{id}

6. Update: 
 - Method: PUT
 - URL:http://localhost:8000/api/products/{id}

7. Delete:
 - Method: DELETE 
 - URL:http://localhost:8000/api/products/{id}

## Errors

Problema comum se executar **migrate:fresh**
\
_Common problem if you run **migrate:fresh**_
```
“message”: “Personal access client not found. Please create one.”,
“exception”: “RuntimeException”,
"file": "W:\\labs\\ibank\\vendor\\laravel\\passport\\src\\ClientRepository.php",
"line": 95,
``` 
Isso ocorre porque o cliente da API não existe, talvez você o tenha removido do banco de dados quando executou a 
atualização de migrações ou algo parecido. Você pode criar novamente os clientes da API manualmente ou simplesmente executar novamente o comando:
\
_It occurs because the client for the API doesn't exists, maybe you removed it from the database when you ran the 
migrations refresh or something like that.You can create again the API clients manually or simply re-run the command:_

````
php artisan passport:install
````
