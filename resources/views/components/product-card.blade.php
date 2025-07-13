<div class="col-md-6 col-lg-4 col-xl-3 d-flex">
    <div class="rounded position-relative fruite-item d-flex flex-column w-100">
        <div class="fruite-img">
            <img src="{{ asset('assets/img/' . $product->image) }}" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="p-4 border border-secondary border-top-0 rounded-bottom d-flex flex-column flex-grow-1">
            <h4>{{ $product->name }}</h4>
            <p class="text-muted flex-grow-1 overflow-hidden text-truncate"
                style="max-height: 3.6em; line-height: 1.2em;">
                {{ $product->description }}
            </p>
            <div class="d-flex justify-content-between flex-lg-wrap align-items-end pt-2">
                <p class="text-dark fs-5 fw-bold mb-0 text-sm">{{ $product->price }} FCFA</p>
                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
                    <i class="fa fa-shopping-bag me-2 text-primary"></i> panier
                </a>
            </div>
        </div>
    </div>
</div>
