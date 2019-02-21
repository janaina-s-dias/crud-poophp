<?php
namespace Models; // agrupamento de classes (caminho)

// Classe (ou Tipo) de Objeto
// obs.: Pessoa implementa a interface Idados, significando que implementa todos os métodos definidos pela interface.
class Pessoa implements Idados{
	// Propriedades
	protected $id;
	protected $nome;
	protected $telefone;
	// obs.: propriedades protected são acessíveis por subclasses (extend)

	// Método construtor.
	public function __construct($id,$nome,$telefone){
		$this->id=$id;
		$this->nome=$nome;
		$this->telefone=$telefone;
	}

	// Método obrigatório pois é definido na interface
	public function toString(){
		return $this->id.' '.$this->nome.' '.$this->telefone;
	}

	// Método obrigatório pois é definido na interface
	public function toJson() {
		return json_encode(['id'=>$this->id,'nome'=>$this->nome,'telefone'=>$this->telefone]);
	}

	// Inclui o conteúdo do Trait
	use trait__get;

	// create table Pessoa(id int not null primary key, nome varchar(100) not null, telefone varchar(20) not null)
}