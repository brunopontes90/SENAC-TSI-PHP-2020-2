<?php

ini_set('display_errors', 1); //mostra os erros, em produção coloque 0
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


Class Produto extends PDO{

    // ATRIBUTOS OU PROPRIEDADES
    protected $nome;
	protected $descricao;
	protected $preco;

    // METODO
    public function __construct( string $nome, string $descricao, float $preco ) {

        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;

        // EXECUTA O PAI DA PDO
        parent::__construct('sqlsrv:Server=localhost\\SQLEXPRESS;Database=MEU-BANCO-NO-PHP', 
                            'sa',
                            '9012@TIBruno');
    }

    public function setNome(string $nome): bool{

		return $this->nome = $nome;
	}

	public function setDescricao(string $descricao): bool{

		return $this->descricao = $descricao;
	}	

	public function setPreco(float $preco): bool{

		return $this->preco = $preco;
	}

    public function gravar(): bool{

        $stmt = $this->prepare('    INSERT INTO produto 
                                        (nome, descricao, preco)
                                    VALUES
                                        (:nome, :descricao, :preco)');
        $stmt->bindParam( ':nome', $this->nome );
		$stmt->bindParam( ':descricao', $this->descricao );
		$stmt->bindParam( ':preco', $this->preco );

        return $stmt->execute(); // RETORNA BOOLEAN
    }

}