<div class="modal fade" id="hire-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 350px;">
        <div class="modal-content rounded-md">
            <div class="modal-body text-center" id="modal-body">
                <div class="py-5">
                    <img src="{{ asset('img/loader/Preloader-3/32x32.gif') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function($) {
        $('#hire-modal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);

            modal.find('#modal-body').load(button.data("url"));
        });
    });
</script>