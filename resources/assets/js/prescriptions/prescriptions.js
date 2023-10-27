listenClick('.delete-prescription-btn', function (event) {
    let prescriptionId = $(event.currentTarget).attr('data-id');
    deleteItem(route("prescriptions.destroy",prescriptionId) ,
    Lang.get('messages.prescription.prescription'));
});

listenChange('.prescriptionStatus', function (event) {
    let prescriptionId = $(event.currentTarget).attr('data-id');
    prescriptionUpdateStatus(prescriptionId);
});

function prescriptionUpdateStatus(id) {
    $.ajax({
        url: route(prescriptionStatusRoute, id),
        method: 'post',
        cache: false,
        success: function (result) {
            if (result.success) {
                displaySuccessMessage(result.message);
                hideDropdownManually($('#prescriptionFilterBtn'), $('#prescriptionFilter'));
            }
        },
    });
}

listenClick('#prescriptionResetFilter', function () {
    $('#prescriptionHead').val('2').trigger('change');
    hideDropdownManually($('#prescriptionFilterBtn'), $('.dropdown-menu'));
});


listenChange('#prescriptionHead', function () {
    window.livewire.emit('changeFilter', 'statusFilter', $(this).val())
});
listenChange('#prescriptionHead', function () {
    window.livewire.emit('changeFilter', 'statusFilter', $(this).val())
});
