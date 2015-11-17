<?php
return array(
    'Account\\V1\\Rest\\Ping\\Controller' => array(
        'description' => 'API para teste de RPC com retorno de act',
        'collection' => array(
            'GET' => array(
                'response' => '{
  "_links": {
    "self": {
      "href": "http://localhost:8888/ping"
    }
  },
  "_embedded": {
    "ping": [
      {
        "ping": "pong"
      },
      {
        "ping": "pong"
      },
      {
        "ping": "pong"
      }
    ]
  },
  "total_items": 3
}',
                'description' => 'Retorno de todos os pings',
            ),
            'description' => 'Retorna collecao de pings',
        ),
        'entity' => array(
            'description' => 'Retorna apenas um recurso',
            'GET' => array(
                'description' => '',
                'response' => '',
            ),
        ),
    ),
    'Account\\V1\\Rest\\Book\\Controller' => array(
        'description' => 'API para crud de livros',
        'collection' => array(
            'description' => 'Retorna uma collection de livros',
            'GET' => array(
                'description' => 'Retorna uma collection de livros',
                'response' => '{
  "_links": {
    "self": {
      "href": "http://localhost:8888/book"
    }
  },
  "_embedded": {
    "book": [
      {
        "id": "59f28a96-8ce0-11e5-8065-0242ac110005",
        "name": "asdadadads",
        "resume": "Resumo do Livro 2",
        "_links": {
          "self": {
            "href": "http://localhost:8888/book/59f28a96-8ce0-11e5-8065-0242ac110005"
          }
        }
      },
      {
        "id": "f465e83c-8ce6-11e5-8065-0242ac110005",
        "name": "Diego Pimentel",
        "resume": "dieaaaaaaago",
        "_links": {
          "self": {
            "href": "http://localhost:8888/book/f465e83c-8ce6-11e5-8065-0242ac110005"
          }
        }
      }
    ]
  },
  "total_items": 2',
            ),
            'POST' => array(
                'description' => 'Cria uma entity de livro',
                'request' => '{
  "name": "Nome do livro",
  "resume": "Resumo do livro"
}',
                'response' => '{
  "id": "f465e83c-8ce6-11e5-8065-0242ac110005",
  "name": "Nome do livro",
  "resume": "Resumo do livro",
  "_links": {
    "self": {
      "href": "http://localhost:8888/book/f465e83c-8ce6-11e5-8065-0242ac110005"
    }
  }
}',
            ),
        ),
        'entity' => array(
            'description' => 'Retorna uma entity de livros',
            'GET' => array(
                'description' => 'Retorna um unico registro de livro',
                'response' => '{
   "_links": {
       "self": {
           "href": "/book[/:book_id]"
       }
   }
   "name": "Nome do livro",
   "resume": "Resumo do livro"
}',
            ),
            'PATCH' => array(
                'description' => 'Atualiza parte do conteudo do livro apenas',
                'request' => '{
   "name": "Nome do livro"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/book[/:book_id]"
       }
   }
   "name": "Nome do livro",
   "resume": "Resumo do livro"
}',
            ),
            'PUT' => array(
                'description' => 'Atualiza a entity de livro inteira',
                'request' => '{
   "name": "Nome do livro",
   "resume": "Resumo do livro"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/book[/:book_id]"
       }
   }
   "name": "Nome do livro",
   "resume": "Resumo do livro"
}',
            ),
            'DELETE' => array(
                'description' => 'Exclui a entity de livro',
                'response' => '',
            ),
        ),
    ),
);
