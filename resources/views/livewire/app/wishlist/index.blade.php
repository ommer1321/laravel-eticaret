<div>
    <tbody>
                           
        @foreach ($wishlist as $key => $wishitem )
            
        <tr >
          
            <td>
         
         
        @if ($wishitem->getImage->image)
        <a href="{{route('detail.product.app',[$wishitem->ProductDetail->category->slug,$wishitem->ProductDetail->slug])}}">
              <img width="150px" src="{{asset($wishitem->getImage->image)}}" alt=""> 
        </a>

        @endif                
                  
        </td>
             <td>
                {{$wishitem->productDetail->name}}
             </td>
             
             {{-- <td>
                burası Kalkcak 
                 <livewire:app.wishlist.quantity-button  :wishproduct="$wishitem" />              
             </td> --}}
                     
             <td>   
                 <livewire:app.wishlist.remove-button  :wishproduct="$wishitem" /> 
            </td>
                 </tr>
                 
                 @endforeach
         </tbody>
</div>
