<?php namespace App\Core;
	
	use App\Config\VariablesGlobales;
    use App\Helpers\FormatDate;

    class HelpersView extends FormatDate
    {
        
        /*		BRINDA EL URL PARA LAS VISTAS 		*/
        
        public function url($controlador = "", $accion = "", $param = "")
        {
            $controlador = $controlador == "" ? VariablesGlobales::$controlador_defecto : $controlador;
            $accion      = $accion == "" ?VariablesGlobales::$accion_defecto : $accion;
            
            $urlString   = VariablesGlobales::$base_url . "/" . $controlador . "/" . $accion . "/" . $param;
            return $urlString;
        }
        
        public function base_url() 
        {
            return VariablesGlobales::$base_url;
        }

        /*	**	*/

        /*        BJ FAVICON         */
        
        public function favicon()
        {
            $protocol      = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
            $domainName    = $_SERVER['HTTP_HOST'].'/';
            $host_protocol = $protocol.$domainName;

            return '<link rel="shortcut icon" href="' . $host_protocol . 'favicon.ico" />
            <link rel="icon" type="image/png" href="' . $host_protocol . 'img/logo.png" />
            <link rel="shortcut icon" href="' . VariablesGlobales::$base_url . 'favicon.ico" />
            <link rel="icon" type="image/png" href="' . VariablesGlobales::$base_url . 'img/logo.png" />';
        }
        
        /*    **    */
        

        /*        LINKER CSS         */
        
        public function css($css_name)
        {
            return "<link rel='stylesheet' href='" . VariablesGlobales::$base_url . "/css/$css_name.css'>";
        }
        
        /*    **    */
        /*        LINKER JS         */
        
        public function js($js_name)
        {
            return "<script src='" . VariablesGlobales::$base_url . "/js/$js_name.js'></script>";
        }
        
        /*    **    */



        //Helpers para las vistas
    }

/*		FIN CLASS HELPERS PARA LA VISTA		*/
