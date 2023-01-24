@extends('layouts.app')
@section('title', __('Gestion De Devoluciones'))




    @include('partials.sidebar')

    

    <section class="home-section  h-100" >
        @include('partials.nav')

        

       
           
                
                    

                        
        @livewire('devoluciones')
                       
                       
                
                
           
         

           


   
    

                     

    </section>
   











