<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Drones Serv</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="css/styles.css" rel="stylesheet"/>
	<script src="scripts/seu-script.js"></script>
</head>
<body>

    @if(count($drones) == 0)
            <div class="alert alert-danger mt-2">Nenhum produto encontrado com essa descrição!
               <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Busque o drone" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <div class="input-group-append">
          <span class="input-group-text" id="basic-addon2">Buscar Drone</span>
       </div>
         </div>
            </div>
        @else  
     @endif


      @if(!empty($mensagem))
            <div class="alert alert-success">Drone inserido com sucesso!</div>
        @endif
     <form action="{{route('drones.insert')}}" method="post">
      @csrf
  <div class="row alert alert-success">
    <div class="col-md-2">
       <label for="inputState"><b>Drone ID</b></label>
      <input type="text" class="form-control" placeholder="Id Drone" name="drone" required>
    </div>
    <div class="col-md-2">
       <label for="inputState"><b>Name</b></label>
      <input type="text" class="form-control" placeholder="Name" name="name" required>
    </div>
    <div class="form-group col-md-3">
      <label for="inputState"><b>Current Fly</b></label>
      <select id="inputState" class="form-control">
        <option selected>Select...</option>
        <option>100km</option>
         <option>200km</option>
          <option>300km</option>
            <option>400km</option>
           <option>500km</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="inputState"><b>Status</b></label>
      <select id="inputState" class="form-control">
        <option selected>Select...</option>
        <option>ativo</option>
        <option>parado</option>
        <option>manuntenção</option>
      </select>
    </div>
  </div>
  <input class="btn btn-primary" type="submit" value="Submit">
</form>


   <div class = tabela>

      <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"><b>DRONE</b></th>
      <th scope="col"><b>CUSTOMER</b></th>
      <th scope="col"><b>BATTERIES</b></th>
      <th scope="col"><b>MAX SPEED</b></th>
      <th scope="col"><b>AVERAGE SPEED</b></th>
      <th scope="col"><b>CURRENT FLY</b></th>
      <th scope="col"><b>STATUS</b></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($drones as $drone)
       <td scope="row">{{$drone->id}}</td>
      <td>{{$drone->name}}</td>
      <td>{{$drone->image}}</td>
      <td>{{$drone->address}}</td>
      <td>{{$drone->battery}}</td>
      <td>{{$drone->max_speed}}</td>
      <td>{{$drone->average_speed}}</td>
      <td>{{$drone->status}}</td>
     @endforeach
    </tr>
  </tbody>
</table>

   </div>


 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 
</body>
</html>