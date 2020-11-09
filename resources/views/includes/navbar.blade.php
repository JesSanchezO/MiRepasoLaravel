<nav>
 @section('navbar')
 <h2>Menú de navegación</h2> <br>


 <a href="{{action('PruebaController@frida')}}">Frida Kahlo</a><br>
 <a href="{{action('PruebaController@gustav')}}">Gustav Klimt</a><br>
 <a href="{{action('PruebaController@salvador')}}">Salvador Dalí</a><br>
 <a href="{{action('PruebaController@vicent')}}">Vicent van Gogh</a><br>


 @show
   </nav>
   