
   <main>
@section('navbar')

<table>
        <tr>
               
        <td> <div id="heade">
              <ul class="prac">
               <li><a href="">Secuenciales</a>
                   <ul>
                         <li><a href = "{{route('Prob01')}}">Secuencial-01</a></li>
                         <li><a href = "{{route('Prob02')}}">Secuencial-02</a></li>
                         <li><a href = "{{route('Prob03')}}">Secuencial-03</a></li>
                         <li><a href = "{{route('Prob04')}}">Secuencial-04</a></li>
                         <li><a href = "{{route('Prob05')}}">Secuencial-05</a></li>
                              </ul>
                                    </li>
                                    </ul>
                                    </div>
        </td>
        
        <td> <div id="heade">
              <ul class="prac">
               <li><a href="">Decisiones</a>
                   <ul>
                   <li><a href = "{{action('Cont@votar')}}">Decision-1</a></li>
                         <li><a href = "{{action('Cont@sueldo')}}">Decision-2</a></li>
                         <li><a href = "{{action('Cont@reg')}}">Decision-3</a></li>
                         <li><a href = "{{action('Cont@est')}}">Decision-4</a></li>
                         <li><a href = "{{action('Cont@calif')}}">Decision-5</a></li>
                              </ul>
                                    </li>
                                    </ul>
                                    </div>
         </td>
        
        <td> <div id="heade">
              <ul class="prac">
               <li><a href="">Ciclos</a>
                   <ul>
                         <li><a href = "{{action('Cont@salario')}}">Ciclo-1</a></li>
                         <li><a href = "{{action('Cont@cant')}}">Ciclo-2</a></li>
                         <li><a href = "{{action('Cont@caja')}}">Ciclo-3</a></li>
                         <li><a href = "{{action('Cont@alum')}}">Ciclo-4</a></li>
                         <li><a href = "{{action('Cont@tabla')}}">Ciclo-5</a></li>
                              </ul>
                                    </li>
                                    </ul>
                                    </div>
        </td>
   
        </tr>
</table>

@show
</main>
           
        
