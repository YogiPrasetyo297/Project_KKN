namespace App\Exports;

use App\Models\UMKM;
use Maatwebsite\Excel\Concerns\FromCollection;

class UMKMExport implements FromCollection
{
    public function collection()
    {
        return UMKM::all();
    }
}
