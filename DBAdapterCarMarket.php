<?php


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBAdapterCarMarket
 *
 * @author erkan.degirmenci
 */
class DBAdapterCarMarket {
    
    private $connector=null;
    private $dbName = "carmarket";
    /* @var $pc PC */
    
    
    public function __construct() {
        $this->connector = DBConnector::getConnector();
        $this->connector->select_db($this->dbName);
    }
    
    /**
     * Gibt die Anzahl der vorhandenen Autos zurück.
     * @return integer
     */
    public function getAnzahlCars() {
        /* @var $result mysqli_result */
        $anzahl=0;
        $sql="select count(id) as anzahl from tblCars;";
        $result=  $this->connector->query($sql);
        if($result!= NULL && $result->num_rows==1){
            $row = mysqli_fetch_array($result);
            $anzahl=$row["anzahl"];
        }
        mysqli_free_result($result);
        return $anzahl;
    }
    
    public function getMarkeFromCars()
    {
        /* @var $result mysqli_result */
        $sql= "select id, marke from tblcars;";
        $result = $this->connector->query($sql);
        $html="";
        if ($result != NULL && $result->field_count > 0) {
            $row=$result->fetch_assoc();
            while ($row){            
                $html.= "<option name='marke' value='".$row['id']."'>".$row['marke']."</option>";
                $row=$result->fetch_assoc();
            }
        }
        
        return $html;
    }
    
    
        public function getPreisFromCars()
    {
        /* @var $result mysqli_result */
        $sql= "select id, preis from tblcars;";
        $result = $this->connector->query($sql);
        $html="";
        if ($result != NULL && $result->field_count > 0) {
            $row=$result->fetch_assoc();
            while ($row){            
                $html.= "<option name='preis' value='".$row['id']."'>".$row['preis']."</option>";
                $row=$result->fetch_assoc();
            }
        }
        
        return $html;
    }

    public function getZulassungFromCars()
    {
        /* @var $result mysqli_result */
        $sql= "select id, erstzulassung from tblcars;";
        $result = $this->connector->query($sql);
        $html="";
        if ($result != NULL && $result->field_count > 0) {
            $row=$result->fetch_assoc();
            while ($row){            
                $html.= "<option name='erstzulassung' value='".$row['id']."'>".$row['erstzulassung']."</option>";
                $row=$result->fetch_assoc();
            }
        }
        return $html;
    }
    
    public function getPsFromCars()
    {
        /* @var $result mysqli_result */
        $sql= "select id, ps from tblcars;";
        $result = $this->connector->query($sql);
        $html="";
        if ($result != NULL && $result->field_count > 0) {
            $row=$result->fetch_assoc();
            while ($row){            
                $html.= "<option name='ps' value='".$row['id']."'>".$row['ps']."</option>";
                $row=$result->fetch_assoc();
            }
        }
        return $html;
    }
}
