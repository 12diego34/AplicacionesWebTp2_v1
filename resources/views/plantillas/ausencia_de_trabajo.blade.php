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
        <br>     
        <p align="center"><span id ="editable" contenteditable="true">NOMBRE DE LA EMPRESA</span></p>
         <br>   
        <p align ="left">Sr/a.<span id="editable" contenteditable="true">NOMBRE Y APELLIDO</span>:</p>
        <br>         
        <p style="padding-left: 210px;">Ante ausencias sin aviso, ni justificativos desde el día (<span id="editable"contenteditable="true">DIA</span>)/(<span id="editable"contenteditable="true">MES</span>)/ (<span id="editable"contenteditable="true">AÑO</span>)</p>
        <p style="padding-left: 210px">quedando extinguida la relación laboral por su exclusiva culpa.</p>
        <p style="padding-left: 210px">Liquidación final y certificaciones de servicios a su disposición en término de ley.</p>
        <p style="padding-left: 210px">Intimamos 24 hs. Retomar tareas bajo apercibimiento de considerarlo incluso en abandono de trabajo.</p>
        <p style="padding-left: 210px"> Queda usted, debidamente noficado</p>
        <br>
        <p align="center"> FIRMA Y SELLO DE LA EMPRESA </p>
    </div>
 @endsection
