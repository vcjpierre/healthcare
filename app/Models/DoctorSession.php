<?php

namespace App\Models;

use Database\Factories\DoctorSessionFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\DoctorSession
 *
 * @property int $id
 * @property int $doctor_id
 * @property string $session_meeting_time
 * @property string $session_gap
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Doctor $doctor
 * @property-read Collection|WeekDay[] $sessionWeekDays
 * @property-read int|null $session_week_days_count
 *
 * @method static DoctorSessionFactory factory(...$parameters)
 * @method static Builder|DoctorSession newModelQuery()
 * @method static Builder|DoctorSession newQuery()
 * @method static Builder|DoctorSession query()
 * @method static Builder|DoctorSession whereCreatedAt($value)
 * @method static Builder|DoctorSession whereDoctorId($value)
 * @method static Builder|DoctorSession whereId($value)
 * @method static Builder|DoctorSession whereSessionGap($value)
 * @method static Builder|DoctorSession whereSessionMeetingTime($value)
 * @method static Builder|DoctorSession whereUpdatedAt($value)
 */
class DoctorSession extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'doctor_sessions';

    /**
     * @var string[]
     */
    protected $fillable = [
        'doctor_id',
        'session_meeting_time',
        'session_gap',
    ];

    protected $casts = [
        'doctor_id' => 'integer',
        'session_meeting_time' => 'integer',
        'session_gap' => 'string',
    ];

    const MALE = 1;

    const FEMALE = 2;

    const GENDER = [
        self::MALE => 'Hombre',
        self::FEMALE => 'Mujer',
    ];

    const GAPS = [
        '5' => '5 minutos',
        '10' => '10 minutos',
        '15' => '15 minutos',
        '20' => '20 minutos',
        '25' => '25 minutos',
        '30' => '30 minutos',
        '45' => '45 minutos',
        '60' => '1 hora',
    ];

    const SESSION_MEETING_TIME = [
        '5' => '5 minutos',
        '10' => '10 minutos',
        '15' => '15 minutos',
        '30' => '30 minutos',
        '45' => '45 minutos',
        '60' => '1 hora',
        '90' => '1.5 hora',
        '120' => '2 horas',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'doctor_id' => 'required',
        'session_meeting_time' => 'required',
        'session_gap' => 'required',
    ];

    public function sessionWeekDays(): HasMany
    {
        return $this->hasMany(WeekDay::class);
    }

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }
}
