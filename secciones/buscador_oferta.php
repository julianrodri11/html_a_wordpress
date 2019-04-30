<div class="container-fluid mb-5">
      <div class="row fondo-mundo">
        <div class="row col-12">
          <div class="row col-12 col-lg-6 col-xl-7 p-2  d-flex align-content-center justify-content-center izquierda_derecha">
            <div class="col-11 col-lg-10 fondo-amarillo mt-2 hvr-wobble-horizontal">
              <h1 class="f-negrita fuente-institucional text-center">¿Donde quieres estudiar?</h1>
            </div>
            <div class="col-12 col-lg-10 text-center text-light fuente-institucional p-3">
              <!-- <strong>AUNAR</strong> te permite elegir tu programa de interés para que estudies en cualquier sede del país -->
              Busca el programa de tu interés en las extensiones AUNAR del país.  
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-5 p-2 izquierda_derecha">
            <div class="row  d-flex justify-content-end mr-lg-2">
              <div class="row col-12 col-lg-8 p-2 m-1">                
                <form class="col-12" name="formulario1" action="#">                  
                  <!-- SELECT DE SEDES -->
                  <div class="form-group pt-sans">                  
                    <select name="sede" class="form-control" onchange="cambia()">
                    <option value="0">Seleccione Extensión				</option>
                    <option value="1">PASTO				            </option>
                    <option value="2">CALI				            </option>
                    <option value="3">CARTAGENA				        </option>
                    <option value="4">IPIALES				        </option>
                    <option value="5">PUTUMAYO				        </option>
                    <option value="6">VILLAVICENCIO				    </option>
                    </select>
                  </div>
                  <!-- SELECT DE MODALIDAD -->
                  <div class="form-group pt-sans">
                    <select class="form-control" name="mod" onchange="cambiaModalidades()">
                    <option value="-">Seleccione Modalidad</option>			
                    <option value="1">DISTANCIA           </option>
                    <option value="2">PRESENCIAL          </option>
                    <option value="3">VIRTUAL             </option>
                    </select>
                  </div>
                  <!-- SELECT DE RESULTADOS DE BUSQUEDA -->
                  <div class="form-group pt-sans">                
                    <select class="form-control" name="opt" onchange="window.open(this.value, '_blank')" >                        
                        <option value="-">Seleccione oferta</option>                        
                    </select>                    
                  </div>                  
                  <!-- <button type="button" class="btn btn-primary fondo-amarillo float-right f-negrita pt-sans hvr-forward">Buscar</button> -->
                </form>
              </div>              
            </div>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
            //1) se definen los array para las diferentes carrerras por modalidad y ciudades
            // 1-1 pasto distancia
			// 1-2 pasto presencial
			// 1-3 pasto virtual
      var sed_1_mod_1 = new Array("PASTO - Distancia", "Ingeniería Informática /// http://<?php echo $_SERVER['SERVER_NAME'];?>/ingenieria-informatica", "Administración de empresas /// http://<?php echo $_SERVER['SERVER_NAME'];?>/administracion-empresas-a-distancia","Contaduría Pública /// http://<?php echo $_SERVER['SERVER_NAME'];?>/contaduria-publica-a-distancia");
			var sed_1_mod_2 = new Array("PASTO - Presencial", "Ingeniería Electrónica /// http://<?php echo $_SERVER['SERVER_NAME'];?>/ingenieria-electronica", "Ingeniería Mecánica /// http://<?php echo $_SERVER['SERVER_NAME'];?>/ingenieria-mecanica","Administración de Empresas /// http://<?php echo $_SERVER['SERVER_NAME'];?>/administracion-empresas","Contaduría Publica /// http://<?php echo $_SERVER['SERVER_NAME'];?>/contaduria-publica","Técnico Laboral por Competencias en Diseño y Confección de Modas /// http://<?php echo $_SERVER['SERVER_NAME'];?>/diseno-de-modas");
			var sed_1_mod_3 = new Array("PASTO - Virtual", "Tecnología en Mercadeo Agropecuario /// http://<?php echo $_SERVER['SERVER_NAME'];?>/mercadeo-agropecuario","Tecnología en Transformación de Plantas Aromáticas /// http://<?php echo $_SERVER['SERVER_NAME'];?>/plantas-aromaticas");

			var sed_2_mod_1 = new Array("CALI - Distancia", "No se encontraron programas ofertados /// #");
			var sed_2_mod_2 = new Array("CALI - Presencial", "Administración de Empresas /// http://aunarcali.edu.co/ext/programa/Administraci_n_de_Empresas", "Contaduría Pública /// http://aunarcali.edu.co/ext/programa/Contadur_a_P_blica", "Ingeniería Informática /// http://aunarcali.edu.co/ext/programa/Ingenier_a_Inform_tica", "Tecnología en Control de Procesos Electrónicos /// http://aunarcali.edu.co/ext/programa/Tecnolog_a_en_Control_de_Procesos_Electr_nicos", "Tecnología en Gestión Empresarial /// http://aunarcali.edu.co/ext/programa/Tecnolog_a_en_Gesti_n_Empresarial","Tecnología en Producción Gráfica /// http://aunarcali.edu.co/ext/programa/Tecnolog_a_en_Producci_n_Gr_fica","Técnico Profesional en procesos Administrativos /// http://aunarcali.edu.co/ext/programa/T_cnico_profesional_en_Procesos_Administrativos", "Técnico Laboral Asistente en Comercio Exterior /// http://aunarcali.edu.co/ext/programa/Asistente_en_Comercio_Exterior_", "Técnico Laboral Auxiliar Contable y Financiero /// http://aunarcali.edu.co/ext/programa/Auxiliar_Contable_y_Financiero", "Técnico Laboral Auxiliar en Diseño Gráfico /// http://aunarcali.edu.co/ext/programa/Auxiliar_en_Dise_o_Gr_fico", "Técnico Laboral Auxiliar en Sistemas Informáticos /// http://aunarcali.edu.co/ext/programa/Auxiliar_en_Sistemas_Inform_ticos");
			var sed_2_mod_3 = new Array("CALI - Virtual", "No se encontraron programas ofertados /// #");

			var sed_3_mod_1 = new Array("CARTAGENA - Distancia", "Contaduría Pública /// https://aunarcartagena.edu.co/contaduria-publica/", "Ingeniería Informática /// https://aunarcartagena.edu.co/ingenieria-informatica/");
			var sed_3_mod_2 = new Array("CARTAGENA - Presencial", "Técnico Laboral en Cocina /// https://aunarcartagena.edu.co/cocina-nacional-e-internacional/", "Decoración de Interiores  /// https://aunarcartagena.edu.co/decoracion-de-interiores/");
			var sed_3_mod_3 = new Array("CARTAGENA - Virtual", "No se encontraron programas ofertados /// #");

			var sed_4_mod_1 = new Array("IPIALES - Distancia", "No se encontraron programas ofertados /// #");
			var sed_4_mod_2 = new Array("IPIALES - Presencial", "No se encontraron programas ofertados /// #");
			var sed_4_mod_3 = new Array("IPIALES - Virtual", "No se encontraron programas ofertados /// #");

			var sed_5_mod_1 = new Array("PUTUMAYO - Distancia", "No se encontraron programas ofertados /// #");
			var sed_5_mod_2 = new Array("PUTUMAYO - Presencial", "No se encontraron programas ofertados /// #");
			var sed_5_mod_3 = new Array("PUTUMAYO - Virtual", "No se encontraron programas ofertados /// #");

			var sed_6_mod_1 = new Array("VILLAVICENCIO - Distancia", "Administración de Empresas /// http://www.aunarvillavicencio.edu.co/index.php?option=com_content&view=article&id=121&Itemid=652","Contaduría Publica /// http://www.aunarvillavicencio.edu.co/index.php?option=com_content&view=article&id=93&Itemid=653", "Ingeniería Informática /// http://www.aunarvillavicencio.edu.co/ingenieria-informatica/");
			var sed_6_mod_2 = new Array("VILLAVICENCIO - Presencial", "Seguridad y Salud en el Trabajo /// http://www.aunarvillavicencio.edu.co/index.php?option=com_content&view=article&id=424&Itemid=733","Tecnología en Gestión en Salud Ocupacional /// http://www.aunarvillavicencio.edu.co/gestion-en-salud-ocupacional/","Tecnología en Mecánica Dental /// http://www.aunarvillavicencio.edu.co/mecanica-dental/");
			var sed_6_mod_3 = new Array("VILLAVICENCIO - Virtual", "No se encontraron programas ofertados /// #");

			
			
			// 2) crear una funcion que permita ejecutar el cambio dinamico			
			function cambiaModalidades()
			{
				var mod;				
				var sede;
				//Se toma el vamor de la "mod seleccionada"
				mod 	  = document.formulario1.mod[document.formulario1.mod.selectedIndex].value;				
				sede 	  = document.formulario1.sede[document.formulario1.sede.selectedIndex].value;

				//se chequea si la "mod" esta definida
				if(mod!=0 && sede!=0){
					//selecionamos las mods Correctas
					mis_opts=eval("sed_"+sede+"_mod_" + mod);
					//se calcula el numero de mods
					num_opts=mis_opts.length;
					//marco el numero de opt en el select
					document.formulario1.opt.length = num_opts;
					//para cada opt del array, la pongo en el select
					for(i=0; i<num_opts; i++){

                        str=mis_opts[i];
                      //  parto los elementos del array que tengan /// el link lo agrego al vale y el nombre del programa lo muestro en el text
						res=str.split("///");
						// document.formulario1.opt.options[i].value=mis_opts[i];
						document.formulario1.opt.options[i].value=res[1];
						document.formulario1.opt.options[i].text=res[0];						
						
					}
					}else{
						//si no habia ninguna opt seleccionada, elimino las mods del select
						document.formulario1.opt.length = 1;
						//ponemos un guion en la unica opt que he dejado
						document.formulario1.opt.options[0].value="-";
						document.formulario1.opt.options[0].text="-";
					}
					//hacer un reset de las opts
					document.formulario1.opt.options[0].selected = true;		
			}			
		</script>