<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<title>Joinready Test</title>
      <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
      <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

			<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      <link type="text/css"  href="{{ asset('app.css') }}" rel="stylesheet">

			<style>
					body {
							font-family: 'Nunito', sans-serif;
					}
			</style>
	</head>
	<body class="antialiased">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container px-4">
        <img style="width: 3%" src="https://media-exp1.licdn.com/dms/image/C4E03AQGmrVOywAGtUg/profile-displayphoto-shrink_800_800/0/1628627751648?e=1673481600&v=beta&t=t9AHPrY2tKkhgzA-7_096CxQcWWkw-Ku8CFqU11rtTg"/>
          <a class="navbar-brand" href="/"> &nbsp; Joinready Test</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ms-auto">
                  <li class="nav-item"><a class="nav-link" href="/">Usuarios</a></li>
              </ul>
          </div>
      </div>
    </nav>
		<section id="users">
      <div class="p-4">
          <div class="row justify-content-center">
              <div class="col-12">
                  <h2>Transacciones del usuario Id {{$user->user_id}}</h2>
                  <table class="table table-bordered users-table">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Segmento</th>
                        <th>Programa</th>
                        <th>Usuario</th>
                        <th>Comercio</th>
                        <th>Tipo</th>
                        <th>Identificación</th>
                        <th>Creación</th>
                        <th>Actualización</th>
                      </tr>
                    </thead>
                </table>
          </div>
          <a href="/" class="btn btn-primary">Volver Atrás</a>
      </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
	</body>
  <footer class="py-5 bg-dark">
    <div class="container px-4"><p class="m-0 text-center text-white">@Daniel Grisales</p></div>
  </footer>
</html>
<script type="text/javascript">
  $(function () {

    var table = $('.users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('user.transactions', $user->user_id) }}",
        columns: [
          {data: 'id', name: 'id', orderable: true, searchable: true},
          {data: 'client_id', name: 'client_id'},
          {data: 'transaction_status_id', name: 'transaction_status_id'},
          {data: 'year', name: 'year'},
          {data: 'month', name: 'month'},
          {data: 'amount', name: 'amount'},
          {data: 'transaction_detail', name: 'transaction_detail'},
          {data: 'created_at', name: 'created_at'},
          {data: 'updated_at', name: 'updated_at'},
        ],
        "language": {
          "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        },
        "order": [[ 7, 'asc' ]]
    });

  });
</script>
