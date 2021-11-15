# Projeto com boas praticas do framework laravel!

## 1- Mutators 

#### Com os mutators podemos trabalhar nos dados enviados antes de salvar no database
https://github.com/JosimarProjects/Boas_Praticas/blob/main/app/Models/Order.php
![screenshot_20211115_150924](https://user-images.githubusercontent.com/75262276/141832555-b8e6037f-b18a-44b8-8d71-5662e128b757.png)


## 2- Acessors 

#### Com os acessors podemos trabalhar no retorno do dado enviado pelo banco
https://github.com/JosimarProjects/Boas_Praticas/blob/main/app/Models/Order.php
![screenshot_20211115_152901](https://user-images.githubusercontent.com/75262276/141835098-4e8aad92-753e-492d-84d6-10c253177b77.png)
#### Chamando o acessor na view blade:
![screenshot_20211115_153059](https://user-images.githubusercontent.com/75262276/141835319-ba9c869b-97bb-4cb4-b2ef-065dc642f9b7.png)




## 3- Scopes 

#### Com o scpe  criamos uma query que será executada conforme chamamos nas regras de negócios, abstraindo o tamanho da query e deixando o código menos verboso
https://github.com/JosimarProjects/Boas_Praticas/blob/main/app/Models/Order.php
![screenshot_20211115_152344](https://user-images.githubusercontent.com/75262276/141834387-17ee55a9-1d8e-481e-8b26-ea1c22215083.png)

#### Após criarmos a query chamamos ela em um serviço 
https://github.com/JosimarProjects/Boas_Praticas/blob/main/app/Http/Controllers/OrderController.php
![screenshot_20211115_152524](https://user-images.githubusercontent.com/75262276/141834597-b8209749-9add-4f62-8950-e5685099e061.png)




## 4- Global scopes 

#### Com o scope global criamos uma query que será executada no projeto inteiro, nesse caso criamos uma que trará apenas os status diferentes de 'cancel'
https://github.com/JosimarProjects/Boas_Praticas/blob/main/app/Models/Order.php
![screenshot_20211115_151807](https://user-images.githubusercontent.com/75262276/141833660-c7137442-97bf-4f40-aa1f-e1ffae3bde03.png)

## 5- Request validate

#### Conforme padrões de boas práticas o projeto foi feito com um request validate separado das regras de negócio
https://github.com/JosimarProjects/Boas_Praticas/blob/main/app/Http/Requests/OrderRequest.php
![screenshot_20211115_153435](https://user-images.githubusercontent.com/75262276/141835733-62769c46-8487-467a-84b4-70b42d35dd6d.png)
<br>
![screenshot_20211115_153516](https://user-images.githubusercontent.com/75262276/141835821-53c14136-2360-4cf3-9179-7c56f1ea9ed4.png)

## 6- Repository Pattner 

#### Conforme padrões de boas práticas o projeto foi feito com reposiroty pattern 
https://github.com/JosimarProjects/Boas_Praticas/tree/main/app/Repositories
![screenshot_20211115_153749](https://user-images.githubusercontent.com/75262276/141836157-250477f6-13c9-4161-a483-dde5511cb08b.png)
![screenshot_20211115_153926](https://user-images.githubusercontent.com/75262276/141836380-4d4b34e3-6e23-4fa3-a86e-453a75d5c901.png)

## 7- Observe 

#### Foi criado um observe para observar as alterações no model e chamar uma ação determinada 
https://github.com/JosimarProjects/Boas_Praticas/tree/main/app/Observers
![screenshot_20211115_154110](https://user-images.githubusercontent.com/75262276/141836595-58fbdd79-8b08-43fd-8d78-d45eeff4286c.png)

## 7- Queue  

#### Foi criado uma lista que é acionada pelo observe sempre que um usuário novo faz o registro enviamos um email através de filas
https://github.com/JosimarProjects/Boas_Praticas/tree/main/app/Jobs
![screenshot_20211115_154338](https://user-images.githubusercontent.com/75262276/141836867-95553c3a-aa7d-4ba6-b63b-da089f173a71.png)



****




