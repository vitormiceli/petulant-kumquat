# petulant-kumquat


Cara, estou querendo fazer uma request no Yahoo do Fantasy Football.
É muito tranquilo pegar umas tabelas abertas pelo YQL - https://developer.yahoo.com/yql/console/
Porém, tem outra tabelas que não consigo acessar pelo YQL, mas apenas fazendo requições que precisam da autenticação OAuth.
Um exemplo é se eu tentar acessar esse endereço - http://fantasysports.yahooapis.com/fantasy/v2/team/348.l.13912.t.5, você vai ver que o problema está exatamente na autenticação.

A ideia é que eu consiga colocar o endereço que eu queira acessar para pegar os dados, fazer a autenticação, e pegar o output, que assumo eu que seja um arquivo em formato XML ou JSON com os dados que eu quero.

O Yahoo já disponibiliza um código exemplo em PHP (arquivo Yahoo_OAuth_request.php) que faz apenas a primeira parte (o consumer_key e consumer_secret que estão nesse código já são os referentes à minha conta de developer do Yahoo), ou seja, o teste da autenticação, mas não chega a acessar e me retornar o banco de volta.
Além disso, esse código do Yahoo usa a função OAuth, mas ela não tá definida e quando você tenta rodar vai retornar o erro e instalar o "pacote" do OAuth para PHP é um inferno.

Um cara postou um código em python que faz isso (arquivo YHandler_code.py), mas eu não acredito ter rodado da maneira certa usando as instruções que ele disponibiliza (arquivo YHandler_readme.txt).

