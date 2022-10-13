<?php


public class Data{

    private $dia, $mes, $ano;

   

    public Data($dia,$mes,$ano){

        this->$dia=dia;
        this->$mes=mes;
        this->$ano=ano;
    }
   
    public  setDia(int dia){
        this->$dia=dia;
    }
    public  setMes(int mes){
        this->$mes=mes;
    }
    public void setAno(int ano){
        this->$ano=ano;
    }
   
    public int getDia(){
        return dia;
    }
    public int getMes(){
        return mes;
    }
    public int getAno(){
        return ano;
    }
   
    public String toString(){
        return getDia() + "/" + getMes() + "/" + getAno();
    }
   
    public  avancarDia(){
        dia++;
        if(dia == 31){dia = 1; mes++;}
        if(mes == 13){mes = 1; ano++;}
    }
}


?>