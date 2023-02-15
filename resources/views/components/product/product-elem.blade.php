<li>
  [{{ $product -> code }}] {{ $product -> name }}
  - {{ $product -> typology -> name }}
  - DIGITAL: 
  {{ $product -> typology -> digital ? "YES" : "NO" }}
  <br>
  <a href="{{ route('product.edit', $product) }}">EDIT</a>
</li>