<?php namespace App\Controller;

	use App\Model\UsuarioModel as MUsuario;
	use App\Helpers\FormatDate as HFD;
	use App\Core\ControladorBase;
	
	class IndexController extends ControladorBase
	{	

		/*		INDEX 		*/
		
		public function index()
		{
			$resul = MUsuario::all();
			foreach ($resul as $key => $item) 
			{
				echo $item->getFoto(1)."<br>" ;	
			}
			$data = array('fecha' => HFD::DateTime() );
			
			$this->view('Index', $data);
		}
		
		/*	**	*/

		/*		INDEX 		*/
		
		public function registro()
		{
			echo HFD::FDTToday();
		}
		
		/*	**	*/
	}