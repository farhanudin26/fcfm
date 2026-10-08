<!-- Modal Get A Quote Form -->
<div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content text-start">
            <div class="modal-header bg-warning text-dark">
                <h5 class="modal-title fw-bold" id="quoteModalLabel">Get A Quote</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">

                <div id="quoteAlert" class="alert d-none" role="alert"></div>

                <form action="{{ route('quote.store') }}" method="POST" id="quoteForm" novalidate>
                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="company_name" class="form-label font-weight-bold">Name of Company *</label>
                            <input type="text" class="form-control" id="company_name" name="company_name" required
                                placeholder="e.g. Acme Corp">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="facility_type" class="form-label font-weight-bold">Type of Facility *</label>
                            <select class="form-select form-control" id="facility_type" name="facility_type" required>
                                <option value="" selected disabled>Select Facility Type</option>
                                <option value="Office">Office</option>
                                <option value="Warehouse / Industrial">Warehouse / Industrial</option>
                                <option value="School / Institution / Childcare">School / Institution / Childcare</option>
                                <option value="Church">Church</option>
                                <option value="Hospital / Clinic / Dental / Nursing Home / Care Facility">Hospital / Clinic / Dental / Nursing Home / Care Facility</option>
                                <option value="F&B">F&B</option>
                                <option value="Studio / Gym">Studio / Gym</option>
                                <option value="Condominium / Apartment Complex">Condominium / Apartment Complex</option>
                                <option value="Retail">Retail</option>
                                <option value="Shopping Mall">Shopping Mall</option>
                                <option value="Hotel">Hotel</option>
                                <option value="Others">Others</option>
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="company_address" class="form-label font-weight-bold">Address of Company *</label>
                        <textarea class="form-control" id="company_address" name="company_address" rows="2" required
                            placeholder="Full company address"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>

                    <hr class="my-4">

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="representative_name" class="form-label font-weight-bold">Name of Representative *</label>
                            <input type="text" class="form-control" id="representative_name" name="representative_name"
                                required placeholder="John Doe">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="contact_number" class="form-label font-weight-bold">Contact Number *</label>
                            <input type="tel" class="form-control" id="contact_number" name="contact_number" required
                                placeholder="+65 xxxx xxxx">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="email_address" class="form-label font-weight-bold">E-mail Address *</label>
                            <input type="email" class="form-control" id="email_address" name="email_address" required
                                placeholder="name@company.com">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="start_date" class="form-label font-weight-bold">Estimated Start Date *</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" required
                                min="{{ now()->toDateString() }}">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="estimated_budget" class="form-label font-weight-bold">Estimated Budget per month</label>
                            <input type="text" class="form-control" id="estimated_budget" name="estimated_budget"
                                placeholder="e.g. $1,500">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cleaning_days_per_week" class="form-label font-weight-bold">No. of cleaning days required per week *</label>
                            <input type="number" class="form-control" id="cleaning_days_per_week"
                                name="cleaning_days_per_week" min="1" max="7" required placeholder="e.g. 5">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="hours_per_session" class="form-label font-weight-bold">No. of hours per cleaning session *</label>
                            <input type="number" step="0.5" class="form-control" id="hours_per_session"
                                name="hours_per_session" min="0.5" required placeholder="e.g. 3">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cleaners_required" class="form-label font-weight-bold">No. of cleaners required (if known)</label>
                            <input type="number" class="form-control" id="cleaners_required" name="cleaners_required"
                                min="1" placeholder="e.g. 2">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="preferred_cleaning_hours" class="form-label font-weight-bold">Preferred cleaning hours *</label>
                            <input type="text" class="form-control" id="preferred_cleaning_hours"
                                name="preferred_cleaning_hours" required
                                placeholder="e.g. 8am - 5pm, after office hours">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="special_requirements" class="form-label font-weight-bold">Any other special requirements</label>
                        <textarea class="form-control" id="special_requirements" name="special_requirements" rows="3"
                            placeholder="Tell us if you need specific equipment, eco-friendly products, etc."></textarea>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="text-end mt-4">
                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning font-weight-bold px-4" id="quoteSubmitBtn">Submit Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form    = document.getElementById('quoteForm');
    const alertB  = document.getElementById('quoteAlert');
    const btn     = document.getElementById('quoteSubmitBtn');
    const modalEl = document.getElementById('quoteModal');

    function showAlert(type, message) {
        alertB.className = 'alert alert-' + type;
        alertB.textContent = message;
        alertB.classList.remove('d-none');
    }

    function clearErrors() {
        alertB.classList.add('d-none');
        form.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
        form.querySelectorAll('.invalid-feedback').forEach(el => el.textContent = '');
    }

    form.addEventListener('submit', async function (e) {
        e.preventDefault();
        clearErrors();

        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        const originalText = btn.textContent;
        btn.disabled = true;
        btn.textContent = 'Submitting...';

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                },
                body: new FormData(form),
            });

            const data = await response.json().catch(() => ({}));

            if (response.ok) {
                showAlert('success', data.message || 'Request submitted successfully.');
                form.reset();
                setTimeout(() => {
                    const instance = bootstrap.Modal.getInstance(modalEl);
                    if (instance) instance.hide();
                    alertB.classList.add('d-none');
                }, 3000);
            } else if (response.status === 422 && data.errors) {
                Object.entries(data.errors).forEach(([field, messages]) => {
                    const input = form.querySelector('[name="' + field + '"]');
                    if (input) {
                        input.classList.add('is-invalid');
                        const fb = input.parentElement.querySelector('.invalid-feedback');
                        if (fb) fb.textContent = messages[0];
                    }
                });
                showAlert('danger', 'Please correct the highlighted fields.');
            } else if (response.status === 429) {
                showAlert('warning', 'Too many attempts. Please wait a minute and try again.');
            } else {
                showAlert('danger', data.message || 'Something went wrong. Please try again.');
            }
        } catch (err) {
            showAlert('danger', 'Network error. Please check your connection and try again.');
        } finally {
            btn.disabled = false;
            btn.textContent = originalText;
        }
    });
});
</script>
