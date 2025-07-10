<!-- resources/views/components/page-header.blade.php -->

<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">{{ $title }}</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        @if ($withPages)
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
        @endif
        <li class="breadcrumb-item active text-white">{{ $title }}</li>
    </ol>
</div>
