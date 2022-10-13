<?php
    //Escreva uma classe Contador, que encapsule um valor usado para contagem de itens ou eventos. A classe deve oferecer métodos que devem: * Zerar; * Incrementar; * Retornar o valor do contador. 
    // Exercicio 3 Pedro Silva
    public class Contador{

      
       // atributos
        private int valor;
    
        // construtores
        public Contador()
      {
        valor = 0;
      }
    
      // métodos
      public void Zerar()
      {
        valor = 0;
      }
    
      public void Incrementar()
      {
        valor++; // valor = valor + 1;
      }
    
      public int ObterValor()
      {
        return valor;
      }
    

    }

















    ?>