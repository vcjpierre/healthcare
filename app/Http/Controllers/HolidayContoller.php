<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHolidayRequest;
use App\Models\Doctor;
use App\Models\DoctorHoliday;
use App\Models\User;
use App\Repositories\HolidayRepository;
use Flash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HolidayContoller extends AppBaseController
{
    /** @var HolidayRepository */
    private $holidayRepository;

    public function __construct(HolidayRepository $holidayRepo)
    {
        $this->holidayRepository = $holidayRepo;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('doctor_holiday.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $doctor = Doctor::with('user')->get()->where('user.status', User::ACTIVE)->pluck('user.full_name',
            'id');

        return view('doctor_holiday.create', compact('doctor'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector.
     */
    public function store(CreateHolidayRequest $request): RedirectResponse
    {
        $input = $request->all();
        $holiday = $this->holidayRepository->store($input);

        if ($holiday) {
            Flash::success(__('messages.flash.doctor_holiday'));

            return redirect(route('holidays.index'));
        } else {
            Flash::error(__('messages.flash.holiday_already_is_exist'));

            return redirect(route('holidays.create'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $checkRecord = DoctorHoliday::destroy($id);

        return $this->sendSuccess(__('messages.flash.city_delete'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function holiday(): View
    {
        return view('holiday.index');
    }

    public function doctorCreate(): View
    {
        $doctor = Doctor::whereUserId(getLogInUserId())->first('id');
        $doctorId = $doctor['id'];

        return view('holiday.create', compact('doctorId'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector.
     */
    public function doctorStore(CreateHolidayRequest $request): RedirectResponse
    {
        $input = $request->all();
        $holiday = $this->holidayRepository->store($input);

        if ($holiday) {
            Flash::success(__('messages.flash.doctor_holiday'));

            return redirect(route('doctors.holiday'));
        } else {
            Flash::error(__('messages.flash.holiday_already_is_exist'));

            return redirect(route('doctors.holiday-create'));
        }
    }

    public function doctorDestroy($id): mixed
    {
        $doctorHoliday = DoctorHoliday::whereId($id)->firstOrFail();
        if ($doctorHoliday->doctor_id !== getLogInUser()->doctor->id) {
            return $this->sendError('Seems, you are not allowed to access this record.');
        }
        $doctorHoliday->destroy($id);

        return $this->sendSuccess(__('messages.flash.city_delete'));
    }
}
