## API iBank

###Routers URLS

>In this api you have to set two header as listed below:

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

##Errors

I have this same problem:
```
“message”: “Personal access client not found. Please create one.”,
“exception”: “RuntimeException”,
"file": "W:\\labs\\ibank\\vendor\\laravel\\passport\\src\\ClientRepository.php",
"line": 95,
``` 
It occurs because the client for the API doesn't exists, maybe you removed it from the database when you ran the migrations refresh or something like that.
You can create again the API clients manually or simply re-run the command:

php artisan passport:install
