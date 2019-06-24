<div class="row row-cards">
    <div class="col-12">
        <div class="card">
            <div class="card-body row p-2">
                <div class="col-md-3">
                    <h1 class="page-title text-dark">@yield('title')</h1>
                </div>
                <div class="col-md-9">
                    @include('varbox::layouts.admin.partials._breadcrumbs')
                </div>
            </div>
        </div>
    </div>
</div>

@include('varbox::layouts.admin.partials._flash')