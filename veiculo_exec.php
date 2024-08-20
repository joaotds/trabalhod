<?php

class Veiculo {

    private $modelo;
    private $marca;
    private $combustivel;


    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of combustivel
     */
    public function getCombustivel()
    {
        return $this->combustivel;
    }

    /**
     * Set the value of combustivel
     */
    public function setCombustivel($combustivel): self
    {
        $this->combustivel = $combustivel;

        return $this;   
    }

    public function getDescricaoCombustivel(){

        if($this->combustivel == 'A'){
            return "Alcool";
        }else if($this->combustivel == 'G'){
            return "Gasolina";
        }else if($this->combustivel == 'F'){
            return "Flex";
        }
    }
}

    $modelo = $_POST["modelo"];
    $marca = $_POST["marca"];
    $combustivel = $_POST["combustivel"];

    $veiculo = new Veiculo();
    $veiculo->setModelo($modelo); 
    $veiculo->setMarca($marca); 
    $veiculo->setCombustivel($combustivel); 

    echo "<h1>Dados informados para o veículo</h1>";

    echo "Modelo: " . $veiculo->getModelo() . "<br>";
    echo "Marca: " . $veiculo->getMarca() . "<br>";
    echo "Combustível: " . $veiculo->getDescricaoCombustivel() . "<br>";

    echo "<br><br>";
    echo "<a href='veiculo_form.php'>Cadastrar outro veículo</a>";
