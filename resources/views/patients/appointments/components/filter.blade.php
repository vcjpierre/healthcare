{{-- <div class="row ms-auto mt-3">
    <div class="col-md-12">
        <div class="d-flex justify-content-end">
            <div class="d-flex align-items-center">
                <span class="badge bg-primary badge-circle me-1 slot-color-dot"></span>
                <span class="me-4">{{__('messages.common.'.strtolower(\App\Models\Appointment::STATUS[1]))}}</span>
                <span class="badge bg-success badge-circle me-1 slot-color-dot"></span>
                <span class="me-4">{{__('messages.common.'.strtolower(\App\Models\Appointment::STATUS[2]))}}</span>
                <span class="badge bg-warning badge-circle me-1 slot-color-dot"></span>
                <span class="me-4">{{__('messages.common.'.strtolower(\App\Models\Appointment::STATUS[3]))}}</span>
                <span class="badge bg-danger badge-circle me-1 slot-color-dot"></span>
                <span class="me-4">{{__('messages.common.'.strtolower(\App\Models\Appointment::STATUS[4]))}}</span>
            </div>
        </div>
    </div>
</div> --}}
<div class="d-flex flex-xxl-row flex-column  mt-md-0 mt-sm-3">
    <div class="d-flex flex-wrap align-items-center justify-content-end mt-3">
        <div class="d-flex align-items-center mb-xxl-0 mb-3 ms-3">
            <span class="badge bg-primary badge-circle me-1 slot-color-dot"></span>
            <span class="">{{ __('messages.common.' . strtolower(\App\Models\Appointment::STATUS[1])) }}</span>
        </div>
        <div class="d-flex align-items-center mb-xxl-0 mb-3 ms-3">
            <span class="badge bg-success badge-circle me-1 slot-color-dot"></span>
            <span class="">{{ __('messages.common.' . strtolower(\App\Models\Appointment::STATUS[2])) }}</span>
        </div>
        <div class="d-flex align-items-center mb-xxl-0 mb-3 ms-3">
            <span class="badge bg-warning badge-circle me-1 slot-color-dot"></span>
            <span class="">{{ __('messages.common.' . strtolower(\App\Models\Appointment::STATUS[3])) }}</span>
        </div>
        <div class="d-flex align-items-center mb-xxl-0 mb-3 ms-3">
            <span class="badge bg-danger badge-circle me-1 slot-color-dot"></span>
            <span class="">{{ __('messages.common.' . strtolower(\App\Models\Appointment::STATUS[4])) }}</span>
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <div class="d-flex flex-wrap justify-content-end">
         <div class="d-flex justify-content-end align-items-end">
            <a href="{{ route('patients.appointments.calendar') }}" class="btn btn-icon btn-primary me-2 ms-xl-3">
                <i class="fas fa-calendar-alt fs-2"></i>
            </a>
            <div class="dropdown d-flex align-items-center" wire:ignore>
                <button class="btn btn btn-icon btn-primary text-white dropdown-toggle hide-arrow ps-2 pe-0"
                    type="button" id="patientPanelApptFilterBtn" data-bs-toggle="dropdown" aria-expanded="false"
                    data-bs-auto-close="outside">
                    <p class="text-center">
                        <i class='fas fa-filter'></i>
                    </p>
                </button>
                <div class="dropdown-menu py-0" aria-labelledby="patientPanelApptFilterBtn">
                    <div class="text-start border-bottom py-4 px-7">
                        <h3 class="text-gray-900 mb-0">{{ __('messages.common.filter_option') }}</h3>
                    </div>
                    <div class="p-5">
                        <div class="mb-5">
                            <label for="filterBtn" class="form-label">{{ __('messages.appointment.payment') }}:</label>
                            {{ Form::select('payment_type', collect($filterHeads[0])->toArray(), \App\Models\Appointment::ALL_PAYMENT, ['class' => 'form-control form-control-solid form-select', 'data-control' => 'select2', 'id' => 'patientPaymentStatus']) }}
                        </div>
                        <div class="mb-5">
                            <label for="filterBtn" class="form-label">{{ __('messages.doctor.status') }}:</label>
                            {{ Form::select('status', collect($filterHeads[1])->toArray(), \App\Models\Appointment::BOOKED, ['class' => 'form-control form-control-solid form-select', 'data-control' => 'select2', 'id' => 'patientAppointmentStatus']) }}
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-secondary"
                                id="patientPanelApptmentResetFilter">{{ __('messages.common.reset') }}</button>
                        </div>
                    </div>
                </div>
            </div>
         </div>
            <div class="d-flex justify-content-end flex-wrap">
                <div class="ms-3 mt-3">
                    <input class="form-control form-control-solid px-3 custom-width" placeholder="Pick date range"
                        id="patientAppointmentDate" />
                </div>
                <a type="button" class="ms-3 mt-3 btn btn-primary" href="{{ route('patients.appointments.create') }}"
                    data-turbo="false">
                    {{ __('messages.appointment.add_new_appointment') }}
                </a>
            </div>

        </div>
    </div>
</div>
