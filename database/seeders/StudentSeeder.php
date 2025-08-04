use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run()
    {
        Student::insert([
            ['nis' => '101', 'name' => 'Selina', 'class' => '10A'],
            ['nis' => '102', 'name' => 'Ika', 'class' => '10B'],
            ['nis' => '103', 'name' => 'Marcel', 'class' => '11A'],
        ]);
    }
}

