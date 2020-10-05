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
     
     <div class = "container">
     	 <div class="input-group mb-2">
	 	<label for="basic-url" class="label-drone"><b>Drone ID</b></label>
         <input type="text" class="form-control-drone"aria-label="Recipient's username" aria-describedby="basic-addon2">
     </div>

     <div class="input-group mb-2">
     	<label for="basic-url" class="label-name"><b>Name</b></label>
         <input type="text" class="form-control-name"aria-label="Recipient's username" aria-describedby="basic-addon2">
     </div>

     <div class="dropdown-current">
     	 <label for="basic-url" class="label-current"><b>Current Fly</b></label>
         <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="background-color: #afeeee; width: 180px; border-radius: 30px;color: #0000cd;">
            Select
         </button>
     <div class="dropdown-menu-current" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
    </div>
</div>

     <div class="dropdown-status">
     	  <label for="basic-url" class="label-status"><b>Status</b></label>
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="background-color: #afeeee; width: 180px; border-radius: 30px;color: #0000cd;">
          Select
         </button>
          <div class="dropdown-menu-status" aria-labelledby="dropdownMenuButton">
               <a class="dropdown-item" href="#">Action</a>
               <a class="dropdown-item" href="#">Another action</a>
               <a class="dropdown-item" href="#">Something else here</a>
          </div>
     </div>

      <br>
      <br>
      <br>

   </div>

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
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

   </div>
 
</body>
</html>