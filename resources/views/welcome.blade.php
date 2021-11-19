<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    

        <title>Prueba de trabajo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
    </head>
    <body>

        <div class="container-fluid" style="width:60vw;">

            <div class="card text-center">
                <div class="card-header">
                    Formulario
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form  method="POST" action="{{route('form')}}">
                        @csrf

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" >        
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" >        
                        </div>
                        <div class="mb-3">
                            <label for="cedula" class="form-label">Cédula</label>
                            <input type="number" class="form-control" id="cedula" name="cedula">        
                        </div>
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo</label>
                            <input type="email" class="form-control" id="correo" name="correo" >        
                        </div>
                        <div class="mb-3">
                            <label for="lenguajes" class="form-label">Lenguajes</label>
                            <input type="text" class="form-control" id="lenguajes" name="lenguajes">        
                        </div>
                       
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    
                </div>          
                
            </div>


            
            <div class="card text-center mt-5">
                <div class="card-header">
                    Calculadora
                </div>
                <div class="card-body">           

                    <div>
                        <input type="number" id="dato1" placeholder="escriba el primer numero" value="0">
                        <input type="number" id="dato2" placeholder="escriba el  segundo numero" value="0">
                    </div>

                    <div class="row">
                        <button type="button" id="sumar">Sumar</button>
                        <button type="button" id="restar">Restar</button>
                        <button type="button" id="multiplicar">Multiplicar</button>
                        <button type="button" id="dividir">Dividir</button>
                        <button type="button" id="porcentaje">Porcentaje</button>
                        <button type="button" id="raiz">Raiz cuadrada</button>

                    </div>
                    <div>
                        <input type="number" id="resultado">
                    </div>
                </div>            

            </div>
            
            

                <div class="card mt-5">
                    <div class="card-body">
                        <h2>Ejercicio Lógico</h2>
                        <button id="matriz">
                            Calcular
                        </button>
                        <input type="number" id="resultado_matriz">
                    </div>
                </div>
            
        </div>
    


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        {{--Calculadora--}}
        <script>
            $('#sumar').click(function() { 
                dato1= parseFloat($('#dato1').val());  
                dato2= parseFloat($('#dato2').val()); 
                if(dato1 >= 0 && dato2 >= 0)
                {              
                    $('#resultado').val(dato1 + dato2);
                }
                else
                {
                    alert('Falta un valor ');
                }

            });
            $('#restar').click(function() { 
                dato1= parseFloat($('#dato1').val());  
                dato2= parseFloat($('#dato2').val()); 
                if(dato1 >= 0 && dato2 >= 0)
                {              
                    $('#resultado').val(dato1 - dato2);
                }
                else
                {
                    alert('Falta un valor ');
                }

            });
            $('#multiplicar').click(function() { 
                dato1= parseFloat($('#dato1').val());  
                dato2= parseFloat($('#dato2').val()); 
                if(dato1 >= 0 && dato2 >= 0)
                {              
                    $('#resultado').val(dato1 * dato2);
                }
                else
                {
                    alert('Falta un valor ');
                }

            });
            $('#dividir').click(function() { 
                dato1= parseFloat($('#dato1').val());  
                dato2= parseFloat($('#dato2').val()); 
                if(dato1 >= 0 && dato2 >= 0)
                {              
                    $('#resultado').val(dato1 / dato2);
                }
                else
                {
                    alert('Falta un valor ');
                }

            });
            $('#raiz').click(function() { 
               
                dato= parseFloat($('#resultado').val());  
              
                if(dato >= 0)
                {        
                    let result = Math.sqrt(dato);     
                    $('#resultado').val(result);
                }
                else
                {
                    alert('Falta un valor ');
                }

            });
            $('#porcentaje').click(function() { 
                dato1= parseFloat($('#dato1').val());  
                dato2= parseFloat($('#dato2').val());
             
              
                if(dato1 >= 0 && dato2 >= 0)
                {              
                    let resul= (dato1 * dato2) / 100; 
                    $('#resultado').val(resul);
                }
                else
                {
                    alert('Falta un valor ');
                }

            });



            {{--matriz--}}


            $('#matriz').click(function() { 
                let matriz_data = [
                   [3,2,1],[6,5,4],[1,8,7]
                ];

                


                function matriz(data){

                    let matriz_data_1_primer = data[0][0];
                    let matriz_data_2_primer = data[1][1];
                    let matriz_data_3_primer = data[2][2];

                    let matriz_data_1_segundo = data[0][2];
                    let matriz_data_2_segundo = data[1][1];
                    let matriz_data_3_segundo = data[2][0];

                    let data_primer = matriz_data_1_primer + matriz_data_2_primer + matriz_data_3_primer;

                    let data_segundo = matriz_data_1_segundo + matriz_data_2_segundo + matriz_data_3_segundo;

                    
                    return data_primer - data_segundo;
                }

                $('#resultado_matriz').val(matriz(matriz_data));

            });
        </script>

        
    </body>
</html>


