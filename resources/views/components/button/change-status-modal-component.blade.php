 <div class="modal fade" id="changeStatusModal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-sm modal-dialog modal-dialog-centered max-w-340-px">
         <div class="modal-content radius-16 bg-base">
             <div class="modal-body pt-32 px-36 pb-24 text-center">
                 <span class="mb-16 fs-1 line-height-1 text-danger">
                     <iconify-icon icon="fluent:delete-24-regular" class="menu-icon"></iconify-icon>
                 </span>
                 <h6 class="text-lg fw-semibold text-primary-light mb-0 message">Are your sure you want to change status
                 </h6>
                 <div class="d-flex align-items-center justify-content-center gap-3 mt-24">
                     <button type="reset"
                         class="flex-grow-1 border border-danger-600 bg-hover-danger-200 text-danger-600 text-md px-24 py-11 radius-8"
                         data-bs-dismiss="modal">
                         Cancel
                     </button>
                     <form id="changeStatusForm" method="POST">
                         @csrf
                         <input type="hidden" name="bannerId" id="bannerId">
                         <button type="submit"
                             class="flex-grow-1 btn btn-primary-600 border border-primary-600 text-md px-16 py-12 radius-8">
                             Yes, Change
                         </button>
                     </form>

                 </div>


             </div>
         </div>
     </div>
 </div>
 <script>
     document.addEventListener('DOMContentLoaded', function() {
         const statusModal = document.getElementById('changeStatusModal');
         const changeStatusForm = document.getElementById('changeStatusForm');
         const bannerId = document.getElementById('bannerId');
         changeStatusModal.addEventListener('show.bs.modal', function(event) {
             const button = event.relatedTarget;
             const actionUrl = button.getAttribute('data-url');
             const id = button.getAttribute('data-id');
             changeStatusForm.action = actionUrl;
             changeStatusForm.bannerId.value = id;

         });



     });
 </script>
 {{-- <script>
    document.addEventListener('DOMContentLoaded', function() {

         const statusModal = document.getElementById('changeStatusModal');
         const changeStatusForm = document.getElementById('changeStatusForm');
         const bannerId = document.getElementById('bannerId');

         let actionUrl = '';

         statusModal.addEventListener('show.bs.modal', function(event) {

             const button = event.relatedTarget;

             actionUrl = button.getAttribute('data-url');
             const id = button.getAttribute('data-id');

             bannerId.value = id;

         });

         changeStatusForm.addEventListener('submit', function(e) {
            e.preventDefault();
            fetch(actionUrl, {
                     method: 'POST',
                     headers: {
                         'Content-Type': 'application/json',
                         'Accept': 'application/json',
                         'X-CSRF-TOKEN': document
                             .querySelector('meta[name="csrf-token"]')
                             .getAttribute('content')
                     },
                     body: JSON.stringify({
                         bannerId: bannerId.value
                     })
                 })
                 .then(response => response.json())
                 .then(data => {
                     console.log(data);
                     location.reload();
                 })
                 .catch(error => console.error(error));

         });

     });
 </script> --}}
