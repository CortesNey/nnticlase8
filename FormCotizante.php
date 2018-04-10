<!DOCTYPEhtml>
<meta charset="utf-8">
<html>


	<head>
		<title>Formulario de entrada del dato</title>
	</head>
	<body>
		
		
			<form action="InsertarDatos.php" method="post">
			<table border=\"4\" width=100%>
					<td   COLSPAN=9 BGCOLOR="GRAY"><center><h1> Formulario Cotizantes<h1></center></td>
				<tr>
					<td COLSPAN=9><center><b><strong>II.datos Cotizantes</b></strong></center></td>
				</tr>
				<tr>
				 	<td>4. Apellido 1<br><input type="text" name="nombrea"></td>	
				    <td>Apellid 2<br><input type="text" name="nombre"></td>
					<td>Nombre 1<br><input type="text" name="apellido1"></td>
					<td>Nombre 2<br><input type="text" name="apellido2"></td> 
			
				    <td>
						 5. TD 
							<select name="TD">
							<option value="CC">CC</option>."<br>"
							<option value="NIT">NIT</option>."<br>"
							<option value="TI">TI</option>."<br>"
							<option value="CE">CE</option>."<br>"
							<option value="PS">PS</option>."<br>"
							<option value="CD">CD</option>."<br>"
							<option value="RG">RG</option>."<br>"
							<option value="NUIP">NUIP </option>."<br>"
							<option value="MSI">MSI </option>."<br>"
							<br>
					</td>
					<td>6. No.identificacion<br><input type="text" name="identi"></td>
					<td>7. F.Nacimiento<br><input type="text" name="nacimi"></td>
					<td COLSPAN=2>8. Sexo<br>
						<input type="radio" name="sexocot" value="Femenino">Femenino
						<input type="radio" name="sexocot" value="Masculino">Masculino
					</td>
				
					
				<tr>
					<td>9. Estado Civil
						<select name="EstadoCivil">
						<option value="Soltero"> soltero </option>."<br>"
						<option value="Casado"> Casado </option>."<br>"
						<option value="U.libre"> U.Libre </option>."<br>"
						<option value="Separado"> Separado </option>."<br>"
						<br>
					</td>
					<td COLSPAN=2>
						<center>10. Tipo de Discapacidad</center>
						Fisica:<input type="checkbox" name="dcotA" value="fisica">
						Neuro:<input type="checkbox" name="dcotA" value="neuro">
						Mental:<input type="checkbox" name="dcotA" value="Mental">
						Ninguna:<input type="checkbox" name="dcotA" value="Ninguna">
						<br>
					</td>
					<td>11. Nombres De IPS<br><input type="text" name="namecotips"></td>
					<td>12. Codigo IPS<br><input type="text" name="codigocotips"></td>	
					
					<td>13. Direccion Residencia<br><input type="text" name="dircotresidencia"></td>	
					<td>14. Barrio<br><input type="text" name="Barriocot"></td>	
					<td>15. Zona<br>
						<input type="radio" name="Zonacot" value="Urbana">Urbana
						<input type="radio" name="Zonacot" value="Rural">Rural
					</td>
					<td>16. ciudad<br><input type="text" name="Ciudadcot"></td>	
				</tr>
				<tr>
					<td>17. Cod ciudad<br><input type="text" name="CodCiudadcot"></td>	
					<td>18. departamento<br><input type="text" name="Deptocot"></td>
					<td>19. Telefono<br><input type="text" name="Telefonocot"></td>
					<td>20. Celular<br><input type="text" name="Celfonocot"></td>
					<td COLSPAN=2>21. C. Electronico<br><input type="text" name="Correocot"></td>
					<td>22. Eps Anterior<br><input type="text" name="EpsAntcot"></td>
					<td>23. Cod Eps Anterior<br><input type="text" name="CodEpsAntcot"></td>
					<td>24. Mes Aporte<br>
					<select name="MesAporcot">
						<option value="-"> - </option>."<br>"
						<option value="Enero"> Enero </option>."<br>"
						<option value="Febrero"> Febrero </option>."<br>"
						<option value="Marzo"> Marzo</option>."<br>"
						<option value="Abril"> Abril </option>."<br>"
						<option value="Mayo"> Mayo </option>."<br>"
						<option value="Junio"> Junio </option>."<br>"
						<option value="Julio"> Julio </option>."<br>"
						<option value="Agosto"> Agosto </option>."<br>"
						<option value="Septiembre"> Septiembre </option>."<br>"
						<option value="Octubre"> Octubre </option>."<br>"
						<option value="Noviembre"> Noviembre </option>."<br>"
						<option value="Diciembre"> Diciembre </option>."<br>"
						
						<br>
				</tr>
							
				<tr>
					<td COLSPAN=9 BGCOLOR="GRAY"><center><h1> Informacion Beneficiario<h1></center></td>
				</tr>
				<tr>
					<td COLSPAN=9><center><b><strong>III.Informacion Beneficiarios</b></strong></center></td>
				</tr>
				<tr>
					<TH ROWSPAN=2>Beneficiario</TH>
					<TH ROWSPAN=2>25.TD</TH>
					<TH ROWSPAN=2>26.No.Identificacion</TH>
					<TH COLSPAN=4>27.Nombres y Apellidos Completos</TH>
					<TH ROWSPAN=2>28.Sexo</TH>	
					<TH ROWSPAN=2>29. Parentesco</TH>
				</tr>
				<tr>
					<TH>Nombre 1</TH>
					<TH>Nombre 2</TH>
					<TH>Apellido 1</TH>
					<TH>apellido 2</TH>
				</tr>
				<tr>
					<td>Beneficiario No 1</td>
					<td>5. TD 
						<select name="TDBuno">
						<option value="CC">CC </option>."<br>"
						<option value="NIT">NIT </option>."<br>"
						<option value="TI">TI</option>."<br>"
						<option value="CE">CE </option>."<br>"
						<option value="PS">PS </option>."<br>"
						<option value="CD">CD </option>."<br>"
						<option value="RG">RG </option>."<br>"
						<option value="NUIP">NUIP </option>."<br>"
						<option value="MSI">MSI </option>."<br>"
						<br>
					</td>
					<td><input type="text" name="identib1"></td>
					<td><input type="text" name="nombre1b1"></td>
					<td><input type="text" name="nombre2b1"></td>
					<td><input type="text" name="apellido1b1"></td>
					<td><input type="text" name="apellido2b1"></td>
					<td>
						Femenino<input type="radio" name="sexobuno" value="Femenino"><br>
						Masculino<input type="radio" name="sexobuno" value="Masculino">
					</td>
					<td>
						<select name="PRB1">
						<option value="CY"> CY </option>."<br>"
						<option value="HI"> HI </option>."<br>"
						<option value="PA"> PA </option>."<br>"
						<option value="SU"> SU </option>."<br>"
						<option value="HN"> HN </option>."<br>"
						<option value="NI"> NI </option>."<br>"
						<option value="AB"> AB </option>."<br>"
						<option value="TI"> TI </option>."<br>"
						<option value="SO"> SO </option>."<br>"
						<option value="BI"> BI </option>."<br>"
						<option value="BS"> BS </option>."<br>"
						<option value="BV"> BV </option>."<br>"
						<br>
					</td>
					
				<tr>
					<td>Beneficiario No 2</td>
					<td>
						5. TD 
						<select name="TDb2">
						<option value="CC">CC</option>."<br>"
						<option value="NIT">NIT</option>."<br>"
						<option value="TI">TI</option>."<br>"
						<option value="CE">CE</option>."<br>"
						<option value="PS">PS</option>."<br>"
						<option value="CD">CD</option>."<br>"
						<option value="RG">RG</option>."<br>"
						<option value="NUIP">NUIP</option>."<br>"
						<option value="MSI">MSI</option>."<br>"
						<br>
					</td>
					<td><input type="text" name="identib2"></td>
					<td><input type="text" name="nombre1b2"></td>
					<td><input type="text" name="nombre2b2"></td>
					<td><input type="text" name="apellido1b2"></td>
					<td><input type="text" name="apellido2b2"></td>
					<td>
						Femenino<input type="radio" name="sexob2" value="Femenino"><br>
						Masculino<input type="radio" name="sexob2" value="Masculino">
					</td>
					<td>
						<select name="PRB2">
						<option value="CY"> CY </option>."<br>"
						<option value="HI"> HI </option>."<br>"
						<option value="PA"> PA </option>."<br>"
						<option value="SU"> SU </option>."<br>"
						<option value="HN"> HN </option>."<br>"
						<option value="NI"> NI </option>."<br>"
						<option value="AB"> AB </option>."<br>"
						<option value="TI"> TI </option>."<br>"
						<option value="SO"> SO </option>."<br>"
						<option value="BI"> BI </option>."<br>"
						<option value="BS"> BS </option>."<br>"
						<option value="BV"> BV </option>."<br>"
						<br>
					</td>
				<tr>
					<TH ROWSPAN=2>Beneficiario</th>
					<TH ROWSPAN=2>30.F. Nacimiento</TH>
					<TH ROWSPAN=2>31.Nivel Eduativo</TH>
					<TH ROWSPAN=2>32.Eps Ant</TH>
					<TH ROWSPAN=2>33.Cod Eps Ant</TH>
					<TH ROWSPAN=2>34.UPC</TH>
					<TH ROWSPAN=2>35.Discapacidad</TH>
					<TH ROWSPAN=2>Cod Novedad</TH>
					<th ROWSPAN=2>36.Dir Residencia</th>
				</tr>
				<tr>
				</tr>
				<tr>
					<td>Beneficiario No 1</td>
					<td><input type="text" name="nacimiB1"></td>
					<td>
						<select name="NEB1">
						<option value="SN"> Sin Estudio</option>."<br>"
						<option value="PR"> Primaria</option>."<br>"
						<option value="SE">Secundaria</option>."<br>"
						<option value="TYT">TyTecnologia</option>."<br>"
						<option value="SU">Superior</option>."<br>"
						<option value="ESP">Especializacion</option>."<br>"
						<br>
					</td>
					<td><input type="text" name="Epsb1"></td>
					<td><input type="text" name="Codb1"></td>
					<td><input type="text" name="upcb1"></td>
					<td>
						
						Fisica:<input type="checkbox" name="db1" value="fisica">
						Neuro:<input type="checkbox" name="db2" value="neuro"><br>
     					Mental:<input type="checkbox" name="db3" value="Mental">
     					Ninguna:<input type="checkbox" name="db4" value="Ninguna">
						<br>
					</td>
					<td><input type="text" name="CodNovb1"></td>
					<td><input type="text" name="Dirb1"></td>
				</tr>
				<tr>
					<td>Beneficiario No 2</td>
					<td><input type="text" name="nacimiB2"></td>
					<td>
						<select name="NEB2">
						<option value="SN"> Sin Estudio</option>."<br>"
						<option value="PR"> Primaria</option>."<br>"
						<option value="SE">Secundaria</option>."<br>"
						<option value="TYT">TyTecnologia</option>."<br>"
						<option value="SU">Superior</option>."<br>"
						<option value="ESP">Especializacion</option>."<br>"
						<br>
					</td>
					<td><input type="text" name="Epsb2"></td>
					<td><input type="text" name="Codb2"></td>
					<td><input type="text" name="upcb2"></td>
					<td>						
						Fisica:<input type="checkbox" name="bbd1" value="fisica">
						Neuro:<input type="checkbox" name="bbd2" value="neuro"><br>
						Mental:<input type="checkbox" name="bbd3" value="Mental">
						Ninguna:<input type="checkbox" name="bbd4" value="Ninguna">
						<br>
					</td>
					<td><input type="text" name="CodNovbDos1"></td>
					<td><input type="text" name="Dirb2"></td>
							
				</tr>
				<tr>
					<th ROWSPAN=2>Beneficiario</th>
					<th ROWSPAN=2>37.Barrio</th>
					<th ROWSPAN=2>38.Zona</th>	
					<th ROWSPAN=2>39.Telefono</th>
					<th ROWSPAN=2>40.Ciudad</th>
					<th ROWSPAN=2>41.DepartamentoZona</th>
					<th ROWSPAN=2>42.Nombre IPS</th>
					<th ROWSPAN=2>43.Cod IPS</th>
					
				</tr>
				<tr>
				</tr>
					<td>Beneficiario No 1</td>
					
					<td><input type="text" name="Barriob1"></td>
					<td>
						<input type="radio" name="Zonab1" value="Urbana">Urbana
						<input type="radio" name="Zonab1" value="Rural">Rural
					</td>
					<td><input type="text" name="Telb1"></td>
					<td><input type="text" name="Ciudadb1"></td>
					<td><input type="text" name="Deptob1"></td>
					<td><input type="text" name="NomIpsb1"></td>
					<td><input type="text" name="CodIpsb1"></td>
					
				</tr>
				<tr>
					<td>Beneficiario No 2</td>
					<td><input type="text" name="Barriob2"></td>
					<td>
						<input type="radio" name="Zonab2" value="Urbana">Urbana
						<input type="radio" name="Zonab2" value="Rural">Rural
					</td>
					<td><input type="text" name="Telb2"></td>
					<td><input type="text" name="Ciudadb2"></td>
					<td><input type="text" name="Deptob2"></td>
					<td><input type="text" name="NomIpsb2"></td>
					<td><input type="text" name="CodIpsb2"></td>
				</tr>
				<tr>
					<th ROWSPAN=2>Beneficiario</th>
					<th COLSPAN=7> 44.Clase de Afiliciacion Beneficiarios</th>
     			</tr>
				<tr>
					<th>Nuevo</th>
					<th COLSPAN=2>Reingreso</th>
					<th COLSPAN=2>Reintrego</th>
					<th COLSPAN=2>Traslado</th>
				</tr>
				<tr>		
     				<td>Beneficiario No 1</td>
					<td><center><input type="radio" name="TipAfiliacionb1" value="Nuevo"></center></td>
					<td COLSPAN=2><center><input type="radio" name="TipAfiliacionb1" value="Reintegro"></center></td>
					<td COLSPAN=2><center><input type="radio" name="TipAfiliacionb1" value="Reingreso"></center></td>
					<td><center><input type="radio" name="TipAfiliacionb1" value="Traslado"></center></td>
				</tr>
				<tr>
					<td>Beneficiario No 2</td>
				    <td><center><input type="radio" name="TipAfiliacionb2" value="Nuevo"></center></td>
					<td COLSPAN=2><center><input type="radio" name="TipAfiliacionb2" value="Reintegro"></center></td>
					<td COLSPAN=2><center><input type="radio" name="TipAfiliacionb2" value="Reingreso"></center></td>
					<td><center><input type="radio" name="TipAfiliacionb2" value="Traslado"></center></td>
				</tr>
				<tr>
					<td COLSPAN=9 BGCOLOR="GRAY"><center><h1> Informacion Exclusiva Trabajador Independiente<h1></center></td>
				</tr>
				<tr>
					<td COLSPAN=2>63.Vivienda<br>
						<input type="radio" name="Vivienda" value="Propia">Propia
						<input type="radio" name="Vivienda" value="Arrendada">Arrendada
					    <input type="radio" name="Vivienda" value="Otra">Otra
						<br>
					</td>
					<center><td COLSPAN=3>64. Nivel Educativo<br></center>
						
						SN:<input type="checkbox" name="NEINDEPa" value="SN">
						PR:<input type="checkbox" name="NEINDEPb" value="PR">
						SE:<input type="checkbox" name="NEINDEPc" value="SE">
						TYT:<input type="checkbox" name="NEINDEPd" value="TYT">
						SU:<input type="checkbox" name="NEINDEPe" value="SU">
						TYT:<input type="checkbox" name="NEINDEPf" value="TYT">
						ESP:<input type="checkbox" name="NEINDEPg" value="ESP">
						<br>
					</td>
					
					<td>65.Pos Ocupacional<br>
					<input type="radio" name="PosOcup" value="Patron">Patron
					<input type="radio" name="PosOcup" value="Cuenta Propia">Cuenta Propia
					</td>
					<td>66. Productor Agropecuario<br>
						<input type="radio" name="ProdAgro" value="Si">Si
						<input type="radio" name="ProdAgro" value="No">No
					</td>	
					<td>67. Actividad Economica<br>	<input type="text" name="ActEcon"></td>
					<td>68. A.F.P<br><input type="text" name="AFP"></td>

				<tr>
					<td>69. A.R.P<br><input type="text" name="ARP1"></td>
					<td>70. I. Base Cotizacion<br><input type="text" name="IBCOT"></td>
					<td>71. Cotizacion<br><input type="text" name="Cot"></td>
					<td>72. Info Contratista<br><input type="text" name="InfoCont"></td>
					<td>73. F. Inicio de Contrato<br><input type="text" name="FInicio"></td>
	
	   				<td BGCOLOR="RED" COLSPAN=4><center>.<input type="submit" value="Registrar">.</center></td>

				
				</form>
					
				


			<table>

		
	</body>
</html>
