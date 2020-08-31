@if ($pages->hasPages())

    <div class="container px-0">
        <div class="pagination-list">
            <ul class="pagination d-flex justify-content-center my-5" role="navigation">





                {{ $pages->links() }}



            </ul>
        </div>
    </div>
@endif