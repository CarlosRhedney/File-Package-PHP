<?php
$hierarquia = array(
	array(
		"nomeCargo"=>"CEO",
		"subordinados"=>array(
			array(
				"nomeCargo"=>"Diretor de Contas",
				"subordinados"=>array(
					array(
						"nomeCargo"=>"Gerente de Contas",
						"subordinados"=>array(
							array(
								"nomeCargo"=>"Supervisor de Contas",
								"subordinados"=>array(
									array(
										"nomeCargo"=>"Contador"
									)
								)
							)
						)
					)
				)
			),
			array(
				"nomeCargo"=>"Diretor de Vendas",
				"subordinados"=>array(
					array(
						"nomeCargo"=>"Gerente de Vendas",
						"subordinados"=>array(
							array(
								"nomeCargo"=>"Supervisor de Vendas",
								"subordinados"=>array(
									array(
										"nomeCargo"=>"Vendedores"
									)
								)
							)
						)
					)
				)
			),
			array(
				"nomeCargo"=>"Diretor de Marketing",
				"subordinados"=>array(
					array(
						"nomeCargo"=>"Gerente de Marketing",
						"subordinados"=>array(
							array(
								"nomeCargo"=>"Supervisor de Marketing",
								"subordinados"=>array(
									array(
										"nomeCargo"=>"Telemarketing"
									)
								)
							)
						)
					)
				)
			)
		)
	)
);
function exibir($cargos){
	$html = "<ul>";
	foreach($cargos as $cargo){
		$html .= "<li>";
		$html .= $cargo["nomeCargo"];
		if(isset($cargo["subordinados"]) && count($cargo["subordinados"]) > 0){
			$html .= exibir($cargo["subordinados"]);
		}
		$html .= "</li>";
	}
	$html .= "</ul>";
	return $html;
}
echo exibir($hierarquia);
?>