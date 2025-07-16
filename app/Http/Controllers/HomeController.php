namespace App\Http\Controllers;

use App\Models\UMKM;
use App\Models\Produk;

class HomeController extends Controller
{
    public function index()
    {
        $umkm = UMKM::latest()->get();
        $produk = Produk::latest()->get();

        return view('home', compact('umkm', 'produk'));
    }
}
