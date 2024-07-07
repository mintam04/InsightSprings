{{-- <div class="dropdown">
    <button class="btn btn-outline-secondary rounded-0 text-start d-flex align-items-center"
        type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"
        style="width: 100%;">
        {{ $buttonLabel }}
        <i class="fa-solid fa-caret-down ms-auto"></i>
    </button>
    <ul class="dropdown-menu rounded-0" aria-labelledby="dropdownMenuButton" style="width: 100%;">
        @foreach($items as $item)
        <li>
            <div class="form-check">
                <input class="form-check-input ms-2" type="checkbox" value="">
                <label class="form-check-label ms-2">
                    {{ $item }}
                </label>
            </div>
        </li>
        @endforeach
    </ul>
</div> --}}
<div class="dropdown">
    <button class="btn btn-outline-secondary rounded-0 text-start d-flex align-items-center"
        type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"
        style="width: 100%;">
        {{ $buttonLabel }}
        <i class="fa-solid fa-caret-down ms-auto"></i>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach($items as $item)
        <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('{{ $name }}').value = '{{ $item }}';">{{ $item }}</a></li>
        @endforeach
    </ul>
    <input type="hidden" id="{{ $name }}" name="{{ $name }}" value="">
</div>
