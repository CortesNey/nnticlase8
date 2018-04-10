<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>MySQL Accion Insert</title>
			<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	</head>
	<body>
	<?php

	$s="localhost";
	$bd="bd_formulario";
	$u="root";
	$pwd="";
		$conexion= new mysqli($s,$u,$pwd,$bd);
				if ($conexion->errno)
					 {
						echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
					}
					else{
						echo "Conexion a Base de Datos bd_formulario Exitosa"."<br>";
					}

					$consulta="insert into cotizante (ape1_cot,ape2_cot,nomb1_cot,nomb2_cot,tipdoc_cot,numdoc_cot,fnac_cot,sex_cot,ecivil_cot,disc_cot,nomips_cot,codips_cot,dir_cot,barrio_cot,zona_cot,ciu_cot,codciu_cot,depto_cot,tel_cot,cel_cot,correo_cot,epsant_cot,codepsant_cot,mesap_cot) values ('$_REQUEST[nombrea]','$_REQUEST[nombre]','$_REQUEST[apellido1]','$_REQUEST[apellido2]','$_REQUEST[TD]','$_REQUEST[identi]','$_REQUEST[nacimi]','$_REQUEST[sexocot]','$_REQUEST[EstadoCivil]','$_REQUEST[dcotA]','$_REQUEST[namecotips]',$_REQUEST[codigocotips],'$_REQUEST[dircotresidencia]','$_REQUEST[Barriocot]','$_REQUEST[Zonacot]','$_REQUEST[Ciudadcot]',$_REQUEST[CodCiudadcot],'$_REQUEST[Deptocot]','$_REQUEST[Telefonocot]','$_REQUEST[Celfonocot]','$_REQUEST[Correocot]','$_REQUEST[EpsAntcot]',$_REQUEST[CodEpsAntcot],'$_REQUEST[MesAporcot]')";
					$consultab="insert into beneficiario (tipdoc_ben,numdoc_ben,nomb1_ben,nomb2_ben,ape1_ben,ape2_ben,sex_ben,parent_ben,fnac_ben,nivedu_ben,epsant_ben,disc_ben,upc_ben,codnov_ben,dir_ben,barrio_ben,zona_ben,tel_ben,ciu_ben,depto_ben,nomips_ben,codips_ben,tipafiliacion_ben) values ('$_REQUEST[TDBuno]','$_REQUEST[identib1]','$_REQUEST[nombre1b1]','$_REQUEST[nombre2b1]','$_REQUEST[apellido1b1]','$_REQUEST[apellido2b1]','$_REQUEST[sexobuno]','$_REQUEST[PRB1]','$_REQUEST[nacimiB1]','$_REQUEST[NEB1]','$_REQUEST[Epsb1]','$_REQUEST[db1]','$_REQUEST[upcb1]','$_REQUEST[CodNovb1]','$_REQUEST[Dirb1]','$_REQUEST[Barriob1]','$_REQUEST[Zonab1]','$_REQUEST[Telb1]','$_REQUEST[Ciudadb1]','$_REQUEST[Deptob1]','$_REQUEST[NomIpsb1]','$_REQUEST[CodIpsb1]','$_REQUEST[TipAfiliacionb1]')";
					$consultac="insert into trab_independiente (tipvivienda_trab,nivedu_trab,posocup_trab,actecon_trab) values ('$_REQUEST[Vivienda]','$_REQUEST[NEINDEPa]','$_REQUEST[PosOcup]','$_REQUEST[ActEcon]')";			
					//,prodagro_trab,afp_trab,arp_trab,basecot_trab,cotiz_trab,infocontra_trab,finicontrato_trab
					//,'$_REQUEST[ProdAgro]','$_REQUEST[AFP]','$_REQUEST[ARP1]','$_REQUEST[IBCOT]','$_REQUEST[InfoCont]','$_REQUEST[FInicio]'
		//,codepsant_ben,,reintegro_ben,
					//,'$_REQUEST[db1]' ,'$_REQUEST[Reintregob1]'
		$resultado=mysqli_query($conexion,$consulta);
		$resultado=mysqli_query($conexion,$consultab);
		$resultado=mysqli_query($conexion,$consultac);
		
		
		if ($resultado) {
			echo "perfil almacenado"."<br>";
		}
		else {
			echo "error en la ejecución de la consulta"."<br/>";
		}
		
		if (mysqli_close($conexion)){ 
			echo "desconexion realizada"."<br/>";
		} 
		else {
			echo "error en la desconexión";
		}



		//mysqli_query($conexion,"Insert into cotizante('ape1_cot') VALUES ('$nombre')") or die ("Problemas en el select".mysqli_error());
		////mysqli_close($conexion);
	//	echo "!!REGISTRO EXITOSO!!<br>";
	?>

	<a href="index.html"><em>Pagina Principal</em></a>
	</body>
</html>


					
					