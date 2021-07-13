# Inicie o Sistema

- git clone https://github.com/WelderOliveira/GerenciamentoAlunos.git

* cd GerenciamentoAlunos

* composer install

* npm install

* cp .env.example .env

* php artisan key:generate

* Adicione as configurações da sua base de dados, no arquivo .env

* php artisan migrate

* php artisan serve


# API
- [X] Cadastrar Usuário
	```
	GET - http://127.0.0.1:8000/api/aluno/
		{
			"nome": NOMEDOALUNO
		}
	
- [X] Cadastrar Nota Para Usuário
	```
	POST - http://127.0.0.1:8000/api/nota
		{
    			"aluno": "3", //id do aluno desejado
    			"nota": 10 //Nota do Aluno.
		}
	
- [X] Listar Usuários
	```
		GET - http://127.0.0.1:8000/api/alunos/
	
- [X] Listar Notas de um Usuário
	```
		GET - http://127.0.0.1:8000/api/nota/{id}
	
- [X] Listar todas as Notas
	```
		GET - http://127.0.0.1:8000/api/notas
	


>Para solicitar o Cadastro, utilize Key = Content-Type | Value = application/json
