<?php
namespace App\Http\Livewire;
use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Livewire\Component;
class Dropdowns extends Component
{
    public $district;
    public $province;
    public $regency;
    public $village;



    public function render()
    {
        if(!empty($this->prvince)) {
            $this->regency = Regency::where('country_id', $this->province)->get();
        }
        return view('livewire.dropdowns')
            ->withCountries(Province::orderBy('name')->get());
    }
}
