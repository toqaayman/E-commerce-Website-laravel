<!-- Displaying the current category -->
<li value="{{ $cat->id }}">{{ $cat->name}}

<!-- If category has children -->
@if (count($cat->children) > 0)

    <!-- Create a nested unordered list -->
        <ul>

            <!-- Loop through this category's children -->
        @foreach ($cat->children as $sub)

            <!-- Call this blade file again (recursive) and pass the current subcategory to it -->
                @include(' common.subcategory', ['category' => $sub])

            @endforeach
        </ul>
    @endif
</li>
