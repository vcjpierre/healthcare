<div class="d-flex align-items-center">
    <span class="slot-color-dot badge bg-{{getBadgeStatusColor($row->status)}} badge-circle me-2"></span>
    <select class="io-select2 form-select doctor-appointment-status-change appointment-status" style="min-width: 150px; max-width:150px;"
            data-id="{{$row->id}}">
        <option class="booked" disabled value="{{ $book}}" {{$row->status ==
                    $book ? 'selected' : ''}}>Reservado
        </option>
        <option value="{{ $checkIn}}" {{$row->status ==
                    $checkIn ? 'selected' : ''}} {{$row->status == $checkIn
            ? 'selected'
            : ''}} {{( $row->status == $cancel || $row->status == $checkOut)
            ? 'disabled'
            : ''}}>Check in
        </option>
        <option value="{{ $checkOut}}" {{$row->status ==
                    $checkOut ? 'selected' : ''}} {{($row->status == $cancel ||
            $row->status == $book) ? 'disabled' : ''}}>Check out
        </option>
        <option value="{{$cancel}}" {{$row->status ==
                    $cancel ? 'selected' : ''}} {{$row->status == $checkIn
            ? 'disabled'
            : ''}} {{$row->status == $checkOut ? 'disabled' : ''}}>Cancelado
        </option>
    </select>
</div>
