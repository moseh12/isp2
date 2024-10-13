namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan',
        'service_type',
        'amount',
        'queue',
        'session_time',
        'bytes_quota',
        'status',
    ];
}
