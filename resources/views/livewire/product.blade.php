<div>
    {{-- The Master doesn't talk, he acts. --}}
    @foreach ($products as $product)
        <li>{{$product->product_name}}</li>
    @endforeach
</div>
