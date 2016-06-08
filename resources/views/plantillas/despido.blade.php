@extends('editarplantilla')
@section('contenidoCarta')
    <style type="text/css">
        #editable {
          background-color: orange;
          border-radius: 2px;
          outline: none;
          border: 2px solid transparent;

        }
        #editable:focus{
            background-color: #FFF;
            border-color: black;
        }
        #contenido{
            display: block;
            width: 100%;            
            padding: 10px 15px;
            font-size: 15px;
            line-height: 1.42857143;
            color: #2c3e50;
            background-color: #ffffff;
            border: 1px solid #dce4ec;
            border-radius: 4px;
          -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
          box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
          -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
          -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
          transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            border-radius: 2px;
            padding: 20px;
        }
    </style>
    <div class="cabecera2" id="contenido">
        <p align="right"><span id ="editable" contenteditable="true">TRELEW, 07 DE JUNIO DE 2016</span></p>
    	  <p align="center"><span id ="editable" contenteditable="true">NOMBRE DE LA EMPRESA</span></p>
        <br><br>  
        <p align ="left">Sr/a.<span id="editable" contenteditable="true">NOMBRE Y APELLIDO</span>:</p>         
        <p style="padding-left: 310px;">Notificamos a partir de la fecha, cese de la relación laboral.</p>
        <p style="padding-left: 310px">Liquidación final, indemnización de ley, certificados de servicios y remuneraciones.</p>
        <p style="padding-left: 310px">A su disposición en los términos de la ley.</p>
        <br>
        <p align="center"> Atentamente, </p>
        <br>
        <p align="center"> FIRMA Y SELLO DE LA EMPRESA </p>
    </div>
 @endsection
