<footer class="bg-white py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto">
                <div class="small m-0">Copyright &copy; Your Website 2023</div>
            </div>
            <div class="col-auto">
                @foreach ($footers as $footer)
                    <a href="{{ $footer->url }}" class="small" target="_blank">{{ $footer->title }}</a>
                    @if (!$loop->last)
                        <span class="mx-1">&middot;</span>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</footer>
