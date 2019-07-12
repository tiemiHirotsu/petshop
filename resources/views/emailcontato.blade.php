<h2>Contato de envio de agendamento de serviço do Petshop</h2>
<br>
<p>Serviço desejado: {{$dados->servico}}</p>
<br>
<p>Seus dados informados ao site do Petshop</p>
<p>Nome: {{$dados->nome}}</p>
<p>Email: {{$dados->email}}</p>
<p>telefone: {{$dados->telefone}}</p>
<p>Data: {{ date( "m-d-Y", strtotime($dados->data))}}</p>
<p>Horário: {{$dados->horario}}:00 até {{($dados->horario)+1}}:00</p>