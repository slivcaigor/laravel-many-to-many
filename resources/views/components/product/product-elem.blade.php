<li>
  [{{ $product -> code }}] {{ $product -> name }}
  - {{ $product -> typology -> name }}
  - DIGITAL: 
  {{ $product -> typology -> digital ? "YES" : "NO" }}
  <br>
  <a href="{{ route('product.edit', $product) }}">EDIT</a>
  -
  <a href="{{ route('product.delete', $product) }}">DELETE</a>
</li>