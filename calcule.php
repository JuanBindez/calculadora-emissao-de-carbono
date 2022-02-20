<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>CARBONO</title>
    <style>
	  .site-footer{
		  background-image: url("images/fundo.jpg");
	  }
    body{
		  background: url("images/fundo34.png")
	  }

    .container{
      content: "";
      background-color: rgba(61, 61, 61, 0.555);
    }

    </style>
    <script type="text/javascript" src="jquery.js">
    </script>
    <script type="text/javascript">
  $('document').ready(function(){
                      $('#motodiv').hide();
                      $('#autodiv').hide();
                      $('#busdiv').hide();
              $('#el_qtd').keyup(function(){
                      $.post('calculator.php',
                      {num: $('#el_qtd').val()},
                      function(data){
                                      $('#el_ton').show();
                                      $('#el_ton').empty().html(data);
                      }
                      );
          });
                      $('#gas_qtd').keyup(function(){
                      $.post('calculator.php',
                      {gas: $('#gas_qtd').val(), tipo: $('input[name=gas_t]:checked').val()},
                      function(data){
                                      $('#gas_ton').show();
                                      $('#gas_ton').empty().html(data);
                      }
                      );
              });
                      $('#gas_t1').click(function(){
                      $.post('calculator.php',
                      {gas: $('#gas_qtd').val(), tipo: $('input[name=gas_t]:checked').val()},
                      function(data){
                                      $('#gas_ton').show();
                                      $('#gas_ton').empty().html(data);
                      }
                      );
              });
                      $('#gas_t2').click(function(){
                      $.post('calculator.php',
                      {gas: $('#gas_qtd').val(), tipo: $('input[name=gas_t]:checked').val()},
                      function(data){
                                      $('#gas_ton').show();
                                      $('#gas_ton').empty().html(data);
                      }
                      );
              });
                      $('#lixo_qtd').keyup(function(){
                      $.post('calculator.php',
                      {lixo: $('#lixo_qtd').val()},
                      function(data){
                                      $('#lixo_ton').show();
                                      $('#lixo_ton').empty().html(data);
                      }
                      );
              });
                      $('#popa_tmp').keyup(function(){
                      $.post('calculator.php',
                      {popa_tmp: $('#popa_tmp').val(), popa_hp: $('#popa_hp').val(), popa_t: $('input[name=popa_t]:checked').val()},
                      function(data){
                                      $('#popa_ton').show();
                                      $('#popa_ton').empty().html(data);
                      }
                      );
              });
                      $('#popa_hp').keyup(function(){
                      $.post('calculator.php',
                      {popa_tmp: $('#popa_tmp').val(), popa_hp: $('#popa_hp').val(), popa_t: $('input[name=popa_t]:checked').val()},
                      function(data){
                                      $('#popa_ton').show();
                                      $('#popa_ton').empty().html(data);
                      }
                      );
              });
                      $('#popa_t1').click(function(){
                      $.post('calculator.php',
                      {popa_tmp: $('#popa_tmp').val(), popa_hp: $('#popa_hp').val(), popa_t: $('input[name=popa_t]:checked').val()},
                      function(data){
                                      $('#popa_ton').show();
                                      $('#popa_ton').empty().html(data);
                      }
                      );
              });
                      $('#popa_t2').click(function(){
                      $.post('calculator.php',
                      {popa_tmp: $('#popa_tmp').val(), popa_hp: $('#popa_hp').val(), popa_t: $('input[name=popa_t]:checked').val()},
                      function(data){
                                      $('#popa_ton').show();
                                      $('#popa_ton').empty().html(data);
                      }
                      );
              });
                      $('#popa_t3').click(function(){
                      $.post('calculator.php',
                      {popa_tmp: $('#popa_tmp').val(), popa_hp: $('#popa_hp').val(), popa_t: $('input[name=popa_t]:checked').val()},
                      function(data){
                                      $('#popa_ton').show();
                                      $('#popa_ton').empty().html(data);
                      }
                      );
              });
                      $('#roca_tmp').keyup(function(){
                      $.post('calculator.php',
                      {roca_tmp: $('#roca_tmp').val(), roca_hp: $('#roca_hp').val()},
                      function(data){
                                      $('#roca_ton').show();
                                      $('#roca_ton').empty().html(data);
                      }
                      );
              });
                      $('#roca_hp').keyup(function(){
                      $.post('calculator.php',
                      {roca_tmp: $('#roca_tmp').val(), roca_hp: $('#roca_hp').val()},
                      function(data){
                                      $('#roca_ton').show();
                                      $('#roca_ton').empty().html(data);
                      }
                      );
              });
                      $('#moto_cil').keyup(function(){
                      $.post('calculator.php',
                      {moto_t: $('select[name=moto_t]').find(':selected').val(), moto_cil: $('#moto_cil').val(), moto_qtd: $('#moto_qtd').val(), moto_tp: $('input[name=moto_tp]:checked').val(), motoap:'0'},
                      function(data){
                                      $('#moto_ton').show();
                                      $('#moto_ton').empty().html(data);
                      }
                      );
              });
                      $('#moto_t').change(function(){
                      $.post('calculator.php',
                      {moto_t: $('select[name=moto_t]').find(':selected').val(), moto_cil: $('#moto_cil').val(), moto_qtd: $('#moto_qtd').val(), moto_tp: $('input[name=moto_tp]:checked').val(), motoap:'0'},
                      function(data){
                                      $('#moto_ton').show();
                                      $('#moto_ton').empty().html(data);
                      }
                      );
              });
                      $('#moto_qtd').keyup(function(){
                      $.post('calculator.php',
                      {moto_t: $('select[name=moto_t]').find(':selected').val(), moto_cil: $('#moto_cil').val(), moto_qtd: $('#moto_qtd').val(), moto_tp: $('input[name=moto_tp]:checked').val(), motoap:'0'},
                      function(data){
                                      $('#moto_ton').show();
                                      $('#moto_ton').empty().html(data);
                      }
                      );
              });
                       $('#moto_tp1').click(function(){
                      $.post('calculator.php',
                      {moto_t: $('select[name=moto_t]').find(':selected').val(), moto_cil: $('#moto_cil').val(), moto_qtd: $('#moto_qtd').val(), moto_tp: $('input[name=moto_tp]:checked').val(), motoap:'0'},
                      function(data){
                                      $('#moto_ton').show();
                                      $('#moto_ton').empty().html(data);
                      }
                      );
              });
                      $('#moto_tp2').click(function(){
                      $.post('calculator.php',
                      {moto_t: $('select[name=moto_t]').find(':selected').val(), moto_cil: $('#moto_cil').val(), moto_qtd: $('#moto_qtd').val(), moto_tp: $('input[name=moto_tp]:checked').val(), motoap:'0'},
                      function(data){
                                      $('#moto_ton').show();
                                      $('#moto_ton').empty().html(data);
                      }
                      );
              });
                      $('#motoap1').click(function(){
                      $.post('calculator.php',
                      {moto_t: $('select[name=moto_t]').find(':selected').val(), moto_cil: $('#moto_cil').val(), moto_qtd: $('#moto_qtd').val(), moto_tp: $('input[name=moto_tp]:checked').val(), motoap:'1', mototonacc: $('#moto_tonacc').text(), motoarvacc: $('#moto_arvacc').text()},
                      function(data){
                                      $('#motodiv').show();
                                      $('#motodiv').empty().html(data);
                      }
                      );
                      $('#moto_cil').val('0');
                      $('#moto_qtd').val('0');
                      $.post('calculator.php',
                      {moto_t: $('select[name=moto_t]').find(':selected').val(), moto_cil: $('#moto_cil').val(), moto_qtd: $('#moto_qtd').val(), moto_tp: $('input[name=moto_tp]:checked').val(), motoap:'0'},
                      function(data){
                                      $('#moto_ton').show();
                                      $('#moto_ton').empty().html(data);
                      }
                      );
              });
                      $('#auto_pot').keyup(function(){
                      $.post('calculator.php',
                      {auto_t: $('select[name=auto_t]').find(':selected').val(), auto_u: $('select[name=auto_u]').find(':selected').val(), auto_pot: $('#auto_pot').val(), auto_qtd: $('#auto_qtd').val(), auto_tp: $('input[name=auto_tp]:checked').val(), autoap:'0'},
                      function(data){
                                      $('#auto_ton').show();
                                      $('#auto_ton').empty().html(data);
                      }
                      );
              });
                      $('#auto_t').change(function(){
                      $.post('calculator.php',
                      {auto_t: $('select[name=auto_t]').find(':selected').val(), auto_u: $('select[name=auto_u]').find(':selected').val(), auto_pot: $('#auto_pot').val(), auto_qtd: $('#auto_qtd').val(), auto_tp: $('input[name=auto_tp]:checked').val(), autoap:'0'},
                      function(data){
                                      $('#auto_ton').show();
                                      $('#auto_ton').empty().html(data);
                      }
                      );
              });
                      $('#auto_u').change(function(){
                      $.post('calculator.php',
                      {auto_t: $('select[name=auto_t]').find(':selected').val(), auto_u: $('select[name=auto_u]').find(':selected').val(), auto_pot: $('#auto_pot').val(), auto_qtd: $('#auto_qtd').val(), auto_tp: $('input[name=auto_tp]:checked').val(), autoap:'0'},
                      function(data){
                                      $('#auto_ton').show();
                                      $('#auto_ton').empty().html(data);
                      }
                      );
              });
                      $('#auto_qtd').keyup(function(){
                      $.post('calculator.php',
                      {auto_t: $('select[name=auto_t]').find(':selected').val(), auto_u: $('select[name=auto_u]').find(':selected').val(), auto_pot: $('#auto_pot').val(), auto_qtd: $('#auto_qtd').val(), auto_tp: $('input[name=auto_tp]:checked').val(), autoap:'0'},
                      function(data){
                                      $('#auto_ton').show();
                                      $('#auto_ton').empty().html(data);
                      }
                      );
              });
                      $('#auto_tp1').click(function(){
                      $.post('calculator.php',
                      {auto_t: $('select[name=auto_t]').find(':selected').val(), auto_u: $('select[name=auto_u]').find(':selected').val(), auto_pot: $('#auto_pot').val(), auto_qtd: $('#auto_qtd').val(), auto_tp: $('input[name=auto_tp]:checked').val(), autoap:'0'},
                      function(data){
                                      $('#auto_ton').show();
                                      $('#auto_ton').empty().html(data);
                      }
                      );
              });
                      $('#auto_tp2').click(function(){
                      $.post('calculator.php',
                      {auto_t: $('select[name=auto_t]').find(':selected').val(), auto_u: $('select[name=auto_u]').find(':selected').val(), auto_pot: $('#auto_pot').val(), auto_qtd: $('#auto_qtd').val(), auto_tp: $('input[name=auto_tp]:checked').val(), autoap:'0'},
                      function(data){
                                      $('#auto_ton').show();
                                      $('#auto_ton').empty().html(data);
                      }
                      );
              });
                      $('#autoap1').click(function(){
                      $.post('calculator.php',
                      {auto_t: $('select[name=auto_t]').find(':selected').val(), auto_u: $('select[name=auto_u]').find(':selected').val(), auto_pot: $('#auto_pot').val(), auto_qtd: $('#auto_qtd').val(), auto_tp: $('input[name=auto_tp]:checked').val(), autoap:'1', autotonacc: $('#auto_tonacc').text(), autoarvacc: $('#auto_arvacc').text()},
                      function(data){
                                      $('#autodiv').show();
                                      $('#autodiv').empty().html(data);
                      }
                      );
                      $('#auto_pot').val('0');
                      $('#auto_qtd').val('0');
                      $.post('calculator.php',
                      {auto_t: $('select[name=auto_t]').find(':selected').val(), auto_u: $('select[name=auto_u]').find(':selected').val(), auto_pot: $('#auto_pot').val(), auto_qtd: $('#auto_qtd').val(), auto_tp: $('input[name=auto_tp]:checked').val(), autoap:'0'},
                      function(data){
                                      $('#auto_ton').show();
                                      $('#auto_ton').empty().html(data);
                      }
                      );
              });
                      $('#bus_t').change(function(){
                      $.post('calculator.php',
                      {bus_t: $('select[name=bus_t]').find(':selected').val(), bus_qtd: $('#bus_qtd').val(), bus_tp: $('input[name=bus_tp]:checked').val(), busap:'0'},
                      function(data){
                                      $('#bus_ton').show();
                                      $('#bus_ton').empty().html(data);
                      }
                      );
              });
                      $('#bus_qtd').keyup(function(){
                      $.post('calculator.php',
                      {bus_t: $('select[name=bus_t]').find(':selected').val(), bus_qtd: $('#bus_qtd').val(), bus_tp: $('input[name=bus_tp]:checked').val(), busap:'0'},
                      function(data){
                                      $('#bus_ton').show();
                                      $('#bus_ton').empty().html(data);
                      }
                      );
              });
                      $('#bus_tp1').click(function(){
                      $.post('calculator.php',
                      {bus_t: $('select[name=bus_t]').find(':selected').val(), bus_qtd: $('#bus_qtd').val(), bus_tp: $('input[name=bus_tp]:checked').val(), busap:'0'},
                      function(data){
                                      $('#bus_ton').show();
                                      $('#bus_ton').empty().html(data);
                      }
                      );
              });
                      $('#bus_tp2').click(function(){
                      $.post('calculator.php',
                      {bus_t: $('select[name=bus_t]').find(':selected').val(), bus_qtd: $('#bus_qtd').val(), bus_tp: $('input[name=bus_tp]:checked').val(), busap:'0'},
                      function(data){
                                      $('#bus_ton').show();
                                      $('#bus_ton').empty().html(data);
                      }
                      );
              });
                      $('#busap1').click(function(){
                      $.post('calculator.php',
                      {bus_t: $('select[name=bus_t]').find(':selected').val(), bus_qtd: $('#bus_qtd').val(), bus_tp: $('input[name=bus_tp]:checked').val(), busap:'1', bustonacc: $('#bus_tonacc').text(), busarvacc: $('#bus_arvacc').text()},
                      function(data){
                                      $('#busdiv').show();
                                      $('#busdiv').empty().html(data);
                      }
                      );
                      $('#bus_pot').val('0');
                      $('#bus_qtd').val('0');
                      $.post('calculator.php',
                      {bus_t: $('select[name=bus_t]').find(':selected').val(), bus_qtd: $('#bus_qtd').val(), bus_tp: $('input[name=bus_tp]:checked').val(), busap:'0'},
                      function(data){
                                      $('#bus_ton').show();
                                      $('#bus_ton').empty().html(data);
                      }
                      );
              });
                      $('#finalizar').click(function(){
                      $.post('calculator.php',
                      {tot_ee: $('#tot_ee').text(), tot_gas: $('#tot_gas').text(), tot_lixo: $('#tot_lixo').text(), tot_popa: $('#tot_popa').text(), tot_roca: $('#tot_roca').text(), tot_moto: $('#tot_moto').text(), moto_tonacc: $('#moto_tonacc').text(), tot_auto: $('#tot_auto').text(), auto_tonacc: $('#auto_tonacc').text(), tot_bus: $('#tot_bus').text(), bus_tonacc: $('#bus_tonacc').text()},
                      function(data){
                                      $('#final').show();
                                      $('#final').empty().html(data);
                      }
                      );
              });
          
      });
</script>
</head>
  <body data-spy="scroll" data-target="#myScrollspy" data-offset="20">


        <!-- HEADER -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
     <a class="navbar-brand" href="http://10.0.0.102">
			<img src="images/Logo.png" alt="Italian Trulli">
     </a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
			<ul class="navbar-nav">
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				  MAIS
				</a>
				<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
				  <li><a class="dropdown-item" href="http://10.0.0.102/#sobre">SOBRE</a></li>
				  <li><a class="dropdown-item" href="http://10.0.0.102/#comofunciona">COMO FUNCIONA O PROJETO?</a></li>
				  <li><a class="dropdown-item" href="#">CONTATO</a></li>
				</ul>
			  </li>
			</ul>
		  </div>
		  <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
			<ul class="navbar-nav">
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				  CALCULADORA
				</a>
				<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
        <li><a class="dropdown-item" href="#energia">Energia</a></li>
        <li><a class="dropdown-item" href="#gas">Gas</a></li>
        <li><a class="dropdown-item" href="#lixo">Lixo</a></li>
        <li><a class="dropdown-item" href="#motor">Motor De Popa</a></li>
        <li><a class="dropdown-item" href="#roçadeira">Roçadeira</a></li>
        <li><a class="dropdown-item" href="#combustivel">Combustível</a></li>
        <li><a class="dropdown-item" href="#onibuscaminhao">Onibus/Caminhão</a></li>
        <li><a class="dropdown-item" href="#resultado">Resultado</a></li>
				</ul>
			  </li>
			</ul>
		  </div>
		</div>
	  </nav>
        <!-- END HEADER -->
       
    
                
      
      <div id="energia">
        <div id="topup">
          <div class="container">
           <button type="button" class="btn btn-warning">ENERGIA</button>
            <h3>o consumo médio mensal em kWh:</h3>
            <form name="elet">
              <input type="text" class="form-control" id="el_qtd"> <h3>kWh</h3>
            </form>
            <small></small>
            <div id="el_ton">
               <table><tr>
                <td><b><h3>0</h3></b><br /><h3>ton de CO2</h3><sub></sub></td>
                <td><b><h3>0</h3></b><br /><h3>árvores</h3></td>
               </table>
               <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Observação</h5>
                  <h6 class="card-subtitle mb-2 text-muted"></h6>
                  <p class="card-text">*Esse dado pode ser encontrado na fatura de energia elétrica.</p>
                </div>
               </div>
            </div>
          </div>
        </div>
      

      <div id="gas">
        <div id="topup">
          <div class="container">
          <button type="button" class="btn btn-warning">GÁS</button>
            <h3>Insira o consumo médio e selecione o tipo de gás utilizado:</h3>
            <form name="gas">
              <input type="text" class="form-control" id="gas_qtd">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <div id="radio">
                <br><input id="gas_t1" name="gas_t" type="radio" value="gn" /><h3>Gás Natural (m3/mês)</h3> <sup></sup>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br>
                <br><input id="gas_t2" name="gas_t" type="radio" value="glp" /><h3>GLP (kg/ano)</h3></br>
              </div>
            </form>
            <div id="gas_ton">
              <table><tr>
              <td><b><h3>0</h3></b><br /><h3>ton de CO2</h3><sub><h3></h3></sub></td>
              <td><b><h3>0</h3></b><br /><h3> árvores</h3></td>
              </table>
            </div>
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Observação</h5>
                <h6 class="card-subtitle mb-2 text-muted"></h6>
                <p class="card-text">*Para o gás natural, esse dado pode ser encontrado na sua fatura de gás.**Para o GLP, um botijão doméstico tem 13kg e um botijão industrial 45kg.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


      <div id="lixo">
        <div id="topup">
          <div class="container">
           <button type="button" class="btn btn-warning">LIXO</button>
            <h3> insira a quantidade de lixo produzida:</h3>
            <form name="lixo">
            <input type="text" class="form-control" id="lixo_qtd"><h3> kg/semana</h3>
            </form>
            <td>
              <div id="lixo_ton">
                <table><tr>
                  <td><b><h3>0</h3></b><br /><h3>ton de CO2</h3><sub><h3></h3></sub></td>
                  <td><b><h3>0</h3></b><br /><h3>árvores</h3></td>
                </table>
                <div class="card" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">Observação</h5>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <p class="card-text">*Desconsidere o lixo encaminhado para reciclagem.</p>
                  </div>
                </div>
              </div>
            </td>
          </div>
        </div>
      </div>





      <div id="motor">
        <div id="topup">
          <div class="container">
          <button type="button" class="btn btn-warning">MOTOR DE POPA</button>
            <h3>Insira o tempo de uso, cavalagem e tipo de motor de popa:</h3>
            <form name="popa">
              <input type="text" class="form-control" id="popa_tmp"><h3> h/mês</h3>&nbsp;&nbsp;&nbsp;&nbsp
              <input type="text" class="form-control" id="popa_hp"><h3> hp</h3>&nbsp;&nbsp;&nbsp
              <div id="radio">
                <input id="popa_t1" name="popa_t" type="radio" value="g2" /><h3>Gasolina 2T</h3>&nbsp;&nbsp;&nbsp;
                <input id="popa_t2" name="popa_t" type="radio" value="g4" /><h3>Gasolina 4T</h3>&nbsp;&nbsp;&nbsp;
                <input id="popa_t3" name="popa_t" type="radio" value="di" /><h3>Diesel</h3>
              </div>
            </form>
            <td align="center" class="texto" width="210">
              <div id="popa_ton">
                <table><tr>
                  <td><b><h3>0</h3></b><br /><h3>ton de CO2</h3><sub><h3></h3></sub></td>
                  <td><b><h3>0</h3></b><br /><h3>árvores</h3></td>
                </table>
              </div>
            </td>
          </div>
        </div>
      </div>
       
     

        




      <div id="roçadeira">
        <div id="topup">
          <div class="container">
           <button type="button" class="btn btn-warning">ROÇADEIRA</button>
            <h3>Insira o tempo de uso e cavalagem da roçadeira:</h3>
            <form name="roca">
              <input type="text" class="form-control" id="roca_tmp"><h3> h/mês</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" class="form-control" id="roca_hp"><h3> hp</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </form>
            <td>
              <div id="roca_ton">
                <table><tr>
                  <td><b><h3>0</h3></b><br /><h3>ton de CO2</h3><sub><h3></h3></sub></td>
                  <td><b><h3>0</h3></b><br /><h3>árvores</h3></td>
                </table>
              </div>
            </td>
          </div>
          <div class="container"> 
            <div id="motoap1" align="left"><button class="button" id="motoap1">+ 1 moto</button></div>
              <table>
                <tr>
                  <td align="left" class="texto">
                    <div class="card" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title">Observação</h5>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                        <p class="card-text">*Caso possua mais de uma moto,clique no botão "+ 1 moto".
        **Caso possua duas ou mais motos de mesma cilindrada, o uso pode ser acumulado em apenas um formulário.</p>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
        </div>



      <div id="combustivel">
        <div id="topup">
          <div class="container">
           <button type="button" class="btn btn-warning">COMBUSTÍVEL</button>
            <h3>Insira os dados sobre o combustível usado, as cilindradas e a quilometragem ou quantidade de litros utilizado por mês:</h3>
            <form name="moto">
              <select name="moto_t" id="moto_t">
                <option selected="selected">Combustível</option>
                <option value="g">Gasolina</option>
                <option value="a">Álcool</option>
                <option value="d">Diesel</option>
              </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<h3>Cilindradas:</h3><input type="text" class="form-control" id="moto_cil"> <h3>cc</h3><br/>
<h3>Uso:</h3><input type="text" class="form-control" id="moto_qtd">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div id="radio">
                  <input id="moto_tp1" name="moto_tp" type="radio" value="km" /><h3>km/mês</h3>&nbsp;&nbsp;&nbsp;&nbsp;
                  <input id="moto_tp2" name="moto_tp" type="radio" value="l" /><h3>litros/mês</h3>
                </div>
            </form>
            <td>
              <div id="moto_ton">
              <table><tr>
                <td><b><h3>0</h3></b><br /><h3>ton de CO2</h3><sub><h3></h3></sub></td>
                <td><b><h3>0</h3></b><br /><h3>árvores</h3></td>
              </table>
            </div>
            </td>
            <div id="autoap1" align="left"><button class="button" id="autoap1">+ 1 carro/pickup</button></div>
              <table>
              <tr>
                <td align="left" class="texto">
                <div class="card" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">observação</h5>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <p class="card-text">*Combustível: Se o motor é flex, mas é abastecido apenas com gasolina ou apenas com álcool, selecione um dos dois. Somente selecione "flex" se abastecer tanto com álcool quanto com gasolina.
      **Motor do carro/pickup: 1.0, 1.8, 2.0, etc...
      ***Caso possua mais de um carro ou pickup, clique no botão "+ 1 carro/pickup".
      ****Caso possua dois ou mais carros/pickups de mesmo motor, o uso pode ser acumulado em apenas um formulário.</p>
                  </div>
                </div>
                </td>
              </tr>
              </table>
         </div>
        </div>
    </div>
        
      
     <div id="onibuscaminhao">
        <div id="topup">
          <div class="container">
          <button type="button" class="btn btn-warning">ONIBUS/CAMINHÃO</button>
            <h3>Insira os dados sobre o tipo de ônibus/caminhão e a quilometragem ou quantidade de litros utilizado por mês:</h3>
            <form name="bus">
              <select name="bus_t" id="bus_t">
                <option selected="selected">Tipo*</option>
                <option value="cp">Caminhão Pequeno</option>
                <option value="cm">Caminhão Médio</option>
                <option value="cr">Carreta</option>
                <option value="mo">Micro-ônibus</option>
                <option value="ou">Ônibus Urbano</option>
                <option value="or">Ônibus Rodoviário</option>
              </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <h3>Uso:</h3><input type="text" class="form-control" id="bus_qtd">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div id="radio">
                  <input id="bus_tp1" name="bus_tp" type="radio" value="km" /><h3>km/mês</h3>&nbsp;&nbsp;&nbsp;&nbsp;
                  <input id="bus_tp2" name="bus_tp" type="radio" value="l" /><h3>litros/mês</h3>
                </div>
            </form>
            <td>
              <div id="bus_ton">
              <table><tr>
                <td><b><h3>0</h3></b><br /><h3>ton de CO2</h3><sub><h3></h3></sub></td>
                <td><b><h3>0</h3></b><br /><h3>árvores</h3></td>
              </table>
            </td>
            <div id="busap1" align="left"><button class="button" id="busap1">+ 1 ônibus/caminhão</button></div>
              <table>
                <tr>
                <td align="left" class="texto">
                <div class="card" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">observação</h5>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <p class="card-text">*Ônibus Urbano é caracterizado por ônibus com motor de baixa potência normalmente utilizado para percursos urbanos. Ônibus Rodoviário é caracterizado por ônibus com motor de alta potência normalmente utilizado para percursos rodoviários.
      **Caso possua mais de um ônibus ou caminhão, clique no botão "+ 1 ônibus/caminhão".
      ***Caso possua dois ou mais ônibus/caminhões de mesmo tipo, o uso pode ser acumulado em apenas um formulário.</p>
                  </div>
                </div>
                </tr>
              </table>
          </div>
         </div>
        </div>
     </div>

   

     <div id="resultado">
        <div id="topup2">
          <div class="container">
              <img src="images/Logo.png" alt="Italian Trulli">
              <table>
                <tr>
                  <td>
                    <div id="final">
                    </div>
                        <button class="button2" id="finalizar"><h2>RESULTADO</h2></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="calcule.php"><button class="button2" id="limpar"><h4>NOVO CÁLCULO</h4></button></a>
                    </td>
                  </tr>
              </table>
          </div>
        </div>
    </div>
        <!-- FOOTER -->
        <!-- Site footer -->
     <div id="topup">
        <footer class="bg-dark text-center text-white">
            <!-- Grid container -->
            <div class="container">
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              Ilustrações:
             <a class="text-white" href="https://www.instagram.com/arte_alonso/">EinarAlonso</a>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              Desenvolvimento:
              <a class="text-white" href="https://www.github.com/JuanBindez">JuanBindez</a>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              © 2022 Carbonovivo
              <a class="text-white" href="https://"></a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>
        <!-- END FOOTER -->
        
      

        
        <script src=“js/jquery.js”></script>
        <script src=“js/app.js”></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
        <script src="js/bootstrap.min.js"></script>
  </body>
</html>
