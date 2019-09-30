<div class="menu-gallery">
    @forelse ($disabledDishes as $dish)
        <figure class="dish">
            <img src="{{ asset('images/bigmac.png') }}" alt="{{ $dish->name }}" width="150" height="150">
            <figcaption>
                <p>{{ $dish->name }}</p>
                <p>${{ $dish->price }}</p>
                <a href='{{ url("dish/$dish->id/edit") }}'>Edit</a>
            </figcaption>
        </figure>
    @empty
        <p>There are no disabled dishes.</p>
    @endforelse
</div>
<div class="menu-pagination">
    {{ $disabledDishes->links() }}
</div>