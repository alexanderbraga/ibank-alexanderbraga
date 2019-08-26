## API iBank

###Routers URLS


1) Singup
 - Method: POST
 - URL: http://localhost:8000/api/auth/signup

2. List: 
 - Method: GET 
 - URL: http://localhost:8000/api/products

4) Create:
 - Method: POST
 - URL: http://localhost:8000/api/products

5) Show: 
 - Method: GET
 - URL:http://localhost:8000/api/products/{id}

6) Update: 
 - Method: PUT
 - URL:http://localhost:8000/api/products/{id}

7) Delete:
 - Method: DELETE 
 - URL:http://localhost:8000/api/products/{id}

##Errors

I have this same problem:

>“message”: “Personal access client not found. Please create one.”,
>“exception”: “RuntimeException”,
>"file": "W:\\labs\\ibank\\vendor\\laravel\\passport\\src\\ClientRepository.php",
>"line": 95,
    
It occurs because the client for the API doesn't exists, maybe you removed it from the database when you ran the migrations refresh or something like that.
You can create again the API clients manually or simply re-run the command:

php artisan passport:install
