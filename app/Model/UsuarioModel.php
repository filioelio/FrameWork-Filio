<?php namespace App\Model;

	use App\Model\Clase\Usuario as CUsuario;
	use App\Model\Action\Usuario as AUsuario;

	class UsuarioModel
	{

		const USUARIO_NAMESPACE = 'App\Model\Clase\Usuario';

		public function __construct()
		{}

		public function contar()
		{
			$a_user = new AUsuario();
			$contar = $a_user->Contar();

			if(isset($contar) && (is_array($contar) || is_object($contar)))
			{
				if(is_object($contar))
				{
					$contar = array($contar);
				}
				$contar = $contar;
			}
			return $contar;
		}

		public function all()
		{
			$a_user = new AUsuario();
			$usuarios = $a_user->getAll(self::USUARIO_NAMESPACE);
			if (! isset($usuarios)) return null;
			return $usuarios;

		}
	}
