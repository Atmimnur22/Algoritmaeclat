namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'datamahasiswa'; // Nama tabel

    protected $fillable = [
        'id', 'name', 'prodi', 'jenis_kelamin', 'tajwid', 'fashohah', 'adab', 'total'
    ];

    public $timestamps = false;
    // Jika tabel tidak memiliki kolom created_at dan updated_at
}
